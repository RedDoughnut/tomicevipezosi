function spin(index, targetNumber) {
  const columns = document.querySelectorAll('.column');
  const column = columns[index]; 
  const digits = column.querySelectorAll('.digit');
  const digitHeight = 6; // Height of one digit in pixels

  // Calculate the scroll distance to reach the target number
  let targetIndex = targetNumber - 1; 

  // Handle cases where the target number is smaller than the current number
  if (targetIndex < 0) {
    // Calculate the distance to scroll to the bottom of the column
    const bottomIndex = digits.length - 1; 
    const bottomDistance = bottomIndex * digitHeight;

    // Scroll to the bottom
    column.style.transform = `translateY(-${bottomDistance}rem)`;

    // Instantly jump to the top
    setTimeout(() => {
      column.style.transform = 'translateY(0rem)'; 
    }, 10); 

    // Calculate the new target index after the wrap-around
    targetIndex = targetNumber + (digits.length - 1); 
  }

  // Calculate and apply the final scroll distance
  const scrollDistance = targetIndex * digitHeight; 
  column.style.transform = `translateY(-${scrollDistance}rem)`;
}