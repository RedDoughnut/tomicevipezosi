function scroll(index, target) {
      const column = document.querySelectorAll(".column")[index];
      const digitHeight = 50;
      let leftover = target % 8; 

      function spinOnce() {
  return new Promise(resolve => {
    requestAnimationFrame(() => {
      column.style.transition = "none";
      column.style.transform = `translateY(${digitHeight * 8}px)`; 
      column.offsetHeight; 

      requestAnimationFrame(() => {
        // Calculate stepsToMove correctly
        const fullRotations = Math.floor(leftover / 8); 
        stepsToMove = leftover - (fullRotations * 8); 

        column.style.transition = "transform 0.5s ease-in-out";
        column.style.transform = `translateY(-${stepsToMove * digitHeight}px)`; 
        leftover -= stepsToMove;
        setTimeout(resolve, 500); 
      });
    });
  });
}

      async function startSpinning() {
        column.style.transition = "none";
        column.style.transform = `translateY(0px)`;
        column.offsetHeight; 

        while (leftover > 0) {
          await spinOnce();
        }
      }

      startSpinning(); 
    }

// $(document).keypress(function(e){
//     if (e.which == 32){
//         $("#spin").click();
//     }
// });