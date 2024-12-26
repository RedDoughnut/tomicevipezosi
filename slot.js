function scrollToValue(columnIndex, targetValue) {
  const columns = document.querySelectorAll(".column");
  const column = columns[columnIndex];
  const digits = Array.from(column.children);
  const digitHeight = 50; // Height of each digit in pixels

  // Clone the first digit for smooth looping
  const firstDigitClone = digits[0].cloneNode(true);
  column.appendChild(firstDigitClone);

  // Calculate the number of steps needed to reach the target value
  const totalDigits = digits.length;
  let steps = targetValue - currentIndex; 

  // Handle cases where targetValue is less than currentIndex (backward scrolling)
  if (steps < 0) {
    steps = totalDigits + steps; 
  }

  // Calculate the total animation time
  const duration = 0.5; // Total time in seconds
  const stepDuration = duration / steps;

  // Animate the column
  column.style.transition = `transform ${duration}s ease-in-out`;
  column.style.transform = `translateY(-${steps * digitHeight}px)`;

  // Reset to avoid seeing the clone after animation
  setTimeout(() => {
    if (steps > totalDigits) {
      column.style.transition = "none"; 
      column.style.transform = `translateY(-${targetValue * digitHeight}px)`; 
    }
  }, duration * 1000);

  // Call the startSpinning function (if available) to initiate the animation
  // startSpinning(); 
}
function spinAllColumns(columns, cycles) {
  const totalDigits = columns[0].children.length - 1; // Exclude the cloned digit
  const digitHeight = 50; // Height of each digit in `rem`
  const durationPerCycle = 0.5; // Duration of one full rotation in seconds
  const totalDuration = cycles * durationPerCycle; // Total duration for all cycles

  columns.forEach((column, index) => {
    column.style.transition = `transform ${totalDuration}s ease-in-out`;
    column.style.transform = `translateY(-${cycles * totalDigits * digitHeight}px)`;

    // Reset after spinning
    setTimeout(() => {
      column.style.transition = "none";
      column.style.transform = "translateY(0)";
    }, totalDuration * 1000);
  });
}
