
// Add focus/blur events for animation
const inputs = document.querySelectorAll('input');
inputs.forEach(input => {
  input.addEventListener('focus', () => {
    input.parentElement.parentElement.classList.add('focus');
  });
  input.addEventListener('blur', () => {
    input.parentElement.parentElement.classList.remove('focus');
  });
});

