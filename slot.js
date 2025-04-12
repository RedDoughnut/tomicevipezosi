function resetPosition() {
  document.querySelectorAll('.column').forEach((column, index) => {
    column.style.transform = `translateY(-${index * 6}rem)`;
  })
}
function spin(index, targetNumber) {
  const columns = document.querySelectorAll('.column');
  const column = columns[index];
  const digitHeight = 6; // Height of one digit in pixels

  // Calculate and apply the final scroll distance
  const scrollDistance = (targetNumber - 1) * digitHeight; 
  column.style.transform = `translateY(-${scrollDistance}rem)`;
}
