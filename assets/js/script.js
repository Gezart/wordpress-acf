document.addEventListener('DOMContentLoaded', function() {
    var openMenuButton = document.querySelector('.open-menu');
    var closeMenuButton = document.querySelector('.close-menu');
	var menuItem = document.querySelector('.close-menu');
    var menuWrapper = document.querySelector('.mobile-menu-wrapper');

    if (openMenuButton && menuWrapper) {
        openMenuButton.addEventListener('click', function() {
            menuWrapper.style.left = '0'; // Open the menu
        });
    }

    if (closeMenuButton && menuWrapper) {
        closeMenuButton.addEventListener('click', function() {
            menuWrapper.style.left = '-100%'; // Close the menu
        });
    }
});
