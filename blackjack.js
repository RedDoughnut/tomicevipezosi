document.addEventListener("DOMContentLoaded", function () {
    var suits = ['♠', '♥', '♦', '♣'];
    var values = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];

    let deck = [];
    let playerHand = [];
    let dealerHand = [];

    function createDeck(num) {
        deck = [];
        for (var i = 0; i < num; i++){
            for (let suit of suits) {
                for (let value of values) {
                    deck.push({ suit, value });
                }
            }
        }
    }

    function shuffleDeck() {
        for (let i = deck.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [deck[i], deck[j]] = [deck[j], deck[i]];
        }
    }

    function dealCard() {
        return deck.pop();
    }

    function calculateHandValue(hand) {
        let value = 0;
        let hasAce = false;

        for (let card of hand) {
            if (card.value === 'A') {
                hasAce = true;
            }
            value += getCardValue(card);
        }

        if (hasAce && value + 10 <= 21) {
            value += 10;
        }
        console.log(value);
        return value;
    }

    function getCardValue(card) {
        if (['J', 'Q', 'K'].includes(card.value)) {
            return 10;
        } else if (card.value === 'A') {
            return 1;
        } else {
            return parseInt(card.value);
        }
    }

    function updateUI() {
        console.log('Dealer hand:', dealerHand);
        console.log('Player hand:', playerHand);
        document.getElementById('dealer-cards').innerHTML = dealerHand.map(card => `<div class="card">${card.value}${card.suit}</div>`).join('');
        document.getElementById('player-cards').innerHTML = playerHand.map(card => `<div class="card">${card.value}${card.suit}</div>`).join('');
    
        document.getElementById('dealer-score').textContent = calculateHandValue(dealerHand);
        document.getElementById('player-score').textContent = calculateHandValue(playerHand);
    }

    function startNewGame() {
        createDeck(6);
        shuffleDeck();
        playerHand = [dealCard(), dealCard()];
        dealerHand = [dealCard(), dealCard()];
        updateUI();
        document.getElementById('message').textContent = '';
        document.getElementById('hit-button').disabled = false;
        document.getElementById('stand-button').disabled = false;
        if (calculateHandValue(playerHand) == 21)
            endGame("You've won!");
    }

    function playerHit() {
        playerHand.push(dealCard());
        updateUI();
        var val = calculateHandValue(playerHand);
        if (val>21) {
            endGame('You busted! Dealer wins. Hand value ' + calculateHandValue(playerHand));
        }
    }

    function playerStand() {
        while (calculateHandValue(dealerHand) < 17) {
            dealerHand.push(dealCard());
        }
        updateUI();
    
        const playerValue = calculateHandValue(playerHand);
        const dealerValue = calculateHandValue(dealerHand);
    
        if (dealerValue > 21) {
            endGame('Dealer busted! You win!');
        } else if (playerValue > dealerValue) {
            endGame('You win!');
        } else if (playerValue < dealerValue) {
            endGame('Dealer wins.');
        } else {
            endGame('It\'s a tie!');
        }
    }

    function endGame(message, code) {
        const data = new URLSearchParams();
        document.getElementById('message').textContent = message;
        document.getElementById('hit-button').disabled = true;
        document.getElementById('stand-button').disabled = true;
        data.append("code", code);
        fetch("blackjack.php", {
            method: "post",
            body: data
        })
    }

    document.getElementById('new-game-button').addEventListener('click', startNewGame);
    document.getElementById('hit-button').addEventListener('click', playerHit);
    document.getElementById('stand-button').addEventListener('click', playerStand);
});