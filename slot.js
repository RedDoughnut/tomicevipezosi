function scroll(index, target) {

  const column = document.querySelectorAll(".column")[index];

  const digitHeight = 50; // Changed to 50px

  let leftover = target;



  // Function to perform one full rotation

  function spinOnce() {

    return new Promise(resolve => {

      requestAnimationFrame(() => {

        // Reset to bottom instantly

        column.style.transition = "none";

        column.style.transform = `translateY(${8 * digitHeight}px)`; // Changed to px

       

        // Force browser reflow

        column.offsetHeight;

       

        requestAnimationFrame(() => {

          // Spin to top with animation

          column.style.transition = "transform 0.5s ease-in-out";

          column.style.transform = `translateY(-${0 * digitHeight}px)`; // Spin to 0

         

          setTimeout(resolve, 500); // Match the transition time

        });

      });

    });

  }

 

  // Function to perform final partial rotation

  function spinFinal(steps) {

    return new Promise(resolve => {

      requestAnimationFrame(() => {

        column.style.transition = "transform 0.5s ease-in-out";

        column.style.transform = `translateY(-${steps * digitHeight}px)`;

        setTimeout(resolve, 500);

      });

    });

  }

 

  // Main spinning logic

  async function startSpinning() {

    // First ensure we're at starting position

    column.style.transition = "none";

    column.style.transform = `translateY(0px)`;

    column.offsetHeight;

   

    // Full rotations

    while(leftover > 8) {

      await spinOnce();

      leftover -= 8;

    }

   

    // Final partial rotation

    if(leftover > 0) {

      await spinFinal(leftover);

    }

  }

 

  startSpinning();

}