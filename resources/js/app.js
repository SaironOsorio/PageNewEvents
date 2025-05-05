import 'flowbite';
import Alpine from 'alpinejs'
/* Encodes current year in the footer */
document.getElementById("year").textContent = new Date().getFullYear();

window.Alpine = Alpine
Alpine.start()