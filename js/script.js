/* Responsive Menu */ 
const toggleMenu = document.querySelector('.toggle__menu');
const nav = document.querySelector('nav');

if(toggleMenu) {
    toggleMenu.addEventListener('click', () => {
        nav.classList.toggle('show');
    })
}