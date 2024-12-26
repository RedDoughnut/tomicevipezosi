function scroll(index, target) {
  const column = document.querySelectorAll(".column")[index];
  const digitHeight = 50; // Changed to 50px
  let leftover = target % 8; // Calculate leftover based on target position

  function spinOnce() {
    return new Promise(resolve => {
      requestAnimationFrame(() => {
        // Reset to bottom instantly
        column.style.transition = "none";
        column.style.transform = `translateY(${digitHeight * 8}px)`;

        // Force browser reflow
        column.offsetHeight;

        requestAnimationFrame(() => {
          // Spin to top with animation
          const stepsToMove = Math.min(leftover, 8);
          column.style.transition = "transform 0.5s ease-in-out";
          column.style.transform = `translateY(-${stepsToMove * digitHeight}px)`;

          leftover -= stepsToMove;
          setTimeout(resolve, 500);
        });
      });
    });
  }

  function spinFinal(steps) {
    return new Promise(resolve => {
      requestAnimationFrame(() => {
        column.style.transition = "transform 0.5s ease-in-out";
        column.style.transform = `translateY(-${steps * digitHeight}px)`;
        setTimeout(resolve, 500);
      });
    });
  }

  async function startSpinning() {
    // First ensure we're at starting position
    column.style.transition = "none";
    column.style.transform = `translateY(0px)`;
    column.offsetHeight;

    // Spin until target position is reached
    while (leftover > 0) {
      await spinOnce();
    }
  }

  startSpinning();
}