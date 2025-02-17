function spin(index, targetNumber) {
  const columns = document.querySelectorAll('.column');
  const column = columns[index];
  const digitHeight = 6; // Height of one digit in pixels

  // Calculate and apply the final scroll distance
  const scrollDistance = (targetNumber - 1) * digitHeight; 
  column.style.transform = `translateY(-${scrollDistance}rem)`;
}