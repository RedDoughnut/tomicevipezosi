let deck = [];
        let playerHand = [];
        let dealerHand = [];
        let currentBet = 0;
        let playerBalance = 1000;

        const suits = ['♠', '♣', '♥', '♦'];
        const values = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];

        function createDeck() {
            deck = [];
            for (let suit of suits) {
                for (let value of values) {
                    deck.push({ suit, value });
                }
            }
            // Shuffle deck
            for (let i = deck.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [deck[i], deck[j]] = [deck[j], deck[i]];
            }
        }

        function getCardValue(card) {
            if (['J', 'Q', 'K'].includes(card.value)) return 10;
            if (card.value === 'A') return 11;
            return parseInt(card.value);
        }

        function calculateHandValue(hand) {
            let value = 0;
            let aces = 0;

            for (let card of hand) {
                if (card.value === 'A') {
                    aces++;
                    value += 11;
                } else {
                    value += getCardValue(card);
                }
            }

            while (value > 21 && aces > 0) {
                value -= 10;
                aces--;
            }

            return value;
        }

        function displayCard(card) {
            return `<div class="card">${card.value}${card.suit}</div>`;
        }

        function updateDisplay() {
            document.getElementById('dealer-cards').innerHTML = dealerHand.map(displayCard).join('');
            document.getElementById('player-cards').innerHTML = playerHand.map(displayCard).join('');
            document.getElementById('dealer-score').textContent = calculateHandValue(dealerHand);
            document.getElementById('player-score').textContent = calculateHandValue(playerHand);
        }

        function startGame() {
            const betAmount = parseInt(document.getElementById('bet-amount').value);
            if (betAmount <= 0 || betAmount > playerBalance) {
                alert('Invalid bet amount!');
                return;
            }

            currentBet = betAmount;
            playerBalance -= betAmount;
            document.getElementById('balance').textContent = playerBalance;

            // Show game section
            document.getElementById('game-section').classList.remove('hidden');
            document.getElementById('game-buttons').classList.remove('hidden');
            document.getElementById('bet-section').classList.add('hidden');

            // Start new game
            createDeck();
            playerHand = [deck.pop(), deck.pop()];
            dealerHand = [deck.pop(), deck.pop()];
            updateDisplay();

            if (calculateHandValue(playerHand) === 21) {
                endGame('blackjack');
            }
        }

        function hit() {
            playerHand.push(deck.pop());
            updateDisplay();

            if (calculateHandValue(playerHand) > 21) {
                endGame('bust');
            }
        }

        function stand() {
            while (calculateHandValue(dealerHand) < 17) {
                dealerHand.push(deck.pop());
            }
            updateDisplay();
            
            const playerValue = calculateHandValue(playerHand);
            const dealerValue = calculateHandValue(dealerHand);

            if (dealerValue > 21) {
                endGame('dealer-bust');
            } else if (playerValue > dealerValue) {
                endGame('win');
            } else if (dealerValue > playerValue) {
                endGame('lose');
            } else {
                endGame('push');
            }
        }

        function endGame(result) {
            document.getElementById('game-buttons').classList.add('hidden');
            let message = '';
            let winnings = 0;

            switch(result) {
                case 'blackjack':
                    message = 'Blackjack! You win 1.5x your bet!';
                    winnings = currentBet * 2.5;
                    break;
                case 'win':
                    message = 'You win!';
                    winnings = currentBet * 2;
                    break;
                case 'dealer-bust':
                    message = 'Dealer busts! You win!';
                    winnings = currentBet * 2;
                    break;
                case 'lose':
                    message = 'Dealer wins!';
                    break;
                case 'bust':
                    message = 'Bust! You lose!';
                    break;
                case 'push':
                    message = 'Push! Bet returned.';
                    winnings = currentBet;
                    break;
            }

            playerBalance += winnings;
            document.getElementById('balance').textContent = playerBalance;
            document.getElementById('game-message').textContent = message;

            // Send result to PHP
            fetch('update_balance.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    balance: playerBalance,
                    result: result,
                    bet: currentBet,
                    winnings: winnings
                })
            });

            // Show bet section again after short delay
            setTimeout(() => {
                document.getElementById('game-section').classList.add('hidden');
                document.getElementById('bet-section').classList.remove('hidden');
                document.getElementById('game-message').textContent = '';
            }, 3000);
        }