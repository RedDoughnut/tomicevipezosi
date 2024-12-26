function scroll(index, target) {
  const column = document.querySelectorAll(".column")[index];
  const digitHeight = 50;
  let leftover = target;
  const duration = 0.5;

  function spinOnce() {
    return new Promise(resolve => {
      column.style.transition = "none";
      column.style.transform = `translateY(${8 * digitHeight}px)`;
      
      column.offsetHeight;
      
      column.style.transition = `transform 1s ease-in-out`;
      column.style.transform = `translateY(-${8 * digitHeight}px)`;
      
      setTimeout(() => {
        resolve();
      }, 1000); 
    });
  }

  function spinFinal(steps) {
    return new Promise(resolve => {
      column.style.transition = `transform ${duration}s ease-in-out`;
      column.style.transform = `translateY(-${steps * digitHeight}px)`;
      setTimeout(resolve, duration * 1000);
    });
  }
  
  async function startSpinning() {
    while(leftover > 8) {
      await spinOnce();
      leftover -= 8;
    }
    
    if(leftover > 0) {
      await spinFinal(leftover);
    }
  }
  
  startSpinning();
}
