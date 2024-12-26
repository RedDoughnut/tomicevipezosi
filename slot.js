function scroll(index, target) {
  const column = document.querySelectorAll(".column")[index];
  const digitHeight = 50;
  let leftover = target;
  const duration = 0.5;
  
  // Function to perform one full rotation
  function spinOnce() {
    return new Promise(resolve => {
      // Start at bottom
      column.style.transition = "none";
      column.style.transform = `translateY(${8 * digitHeight}px)`;
      
      // Force reflow
      column.offsetHeight;
      
      // Animate to top
      column.style.transition = `transform 1s ease-in-out`;
      column.style.transform = `translateY(-${8 * digitHeight}px)`;
      
      // After animation completes
      setTimeout(() => {
        resolve();
      }, 1000); // 1s matches the transition duration
    });
  }
  
  // Function to perform final partial rotation
  function spinFinal(steps) {
    return new Promise(resolve => {
      column.style.transition = `transform ${duration}s ease-in-out`;
      column.style.transform = `translateY(-${steps * digitHeight}px)`;
      setTimeout(resolve, duration * 1000);
    });
  }
  
  // Main spinning logic
  async function startSpinning() {
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