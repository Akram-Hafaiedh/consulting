import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


document.addEventListener('DOMContentLoaded', () => {
    const userMenuButton = document.getElementById('user-menu-button');
    const userMenuDropdown = userMenuButton.nextElementSibling;
    const successMessage = document.getElementById('success-message');


    userMenuButton.addEventListener('click', () => {
        const isHidden = userMenuDropdown.hasAttribute('hidden');
        if (isHidden) {
            userMenuDropdown.removeAttribute('hidden');
        } else {
            userMenuDropdown.setAttribute('hidden', '');
        }
    });

    // Hide dropdown when clicking outside
    document.addEventListener('click', (event) => {
        if (!userMenuButton.contains(event.target)) {
            userMenuDropdown.setAttribute('hidden', '');
        }
    });
    if (successMessage) {
        // Set a timeout to fade out the success message after 5 seconds
        setTimeout(function () {
            successMessage.classList.add('opacity-0');
        }, 5000);
    }
});
