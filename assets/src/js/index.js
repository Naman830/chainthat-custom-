// Import the Tailwind entry (this will be handled by postcss-loader in webpack)
import '../styles/tailwind.css';

// Your theme JS starts here
console.log('Plug theme JS loaded');

// Example: simple DOM ready
document.addEventListener('DOMContentLoaded', () => {
  // Example: toggle a class for testing
  const el = document.querySelector('body');
  if (el) el.classList.add('tailwind-ready');
});
