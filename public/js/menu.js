const hamburgerBtn = document.querySelector('.hamburger-btn');
const sidebar = document.querySelector('.sidebar');

// Agrega un evento clic al botón de hamburguesa para alternar la clase 'active'
hamburgerBtn.addEventListener('click', () => {
    sidebar.classList.toggle('active');
});