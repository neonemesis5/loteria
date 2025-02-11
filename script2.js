// script.js
document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('.section');
    const navLinks = document.querySelectorAll('nav ul li a');
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('nav ul');

    // Alternar menú en dispositivos móviles
    menuToggle.addEventListener('click', () => {
        navMenu.classList.toggle('show');
    });

    // Manejar clic en los enlaces de navegación
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const sectionId = link.getAttribute('data-section');

            sections.forEach(section => {
                if (section.id === sectionId) {
                    section.classList.remove('hide');
                } else {
                    section.classList.add('hide');
                }
            });

            // Cerrar el menú en dispositivos móviles
            if (window.innerWidth <= 768) {
                navMenu.classList.remove('show');
            }
        });
    });
});
