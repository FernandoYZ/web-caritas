import 'alpinejs';

function changeIcon(link) {
    const icon = link.querySelector('i');
    icon.classList.toggle('fas');
    icon.classList.toggle('far');
}