const avatarBtn = document.getElementById('avatar-btn');
const dropdownMenu = document.getElementById('dropdown-menu');
const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');

if (avatarBtn && dropdownMenu) {
  document.addEventListener('click', function (e) {
    if (avatarBtn.contains(e.target)) {
      dropdownMenu.classList.toggle('hidden');
    } else if (!dropdownMenu.contains(e.target)) {
      dropdownMenu.classList.add('hidden');
    }
  });
}

if (menuToggle && mobileMenu) {
  menuToggle.addEventListener('click', function () {
    mobileMenu.classList.toggle('hidden');
  });
}

