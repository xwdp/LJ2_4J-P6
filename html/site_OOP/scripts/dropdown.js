//brian
document.addEventListener('DOMContentLoaded', function() {
    const dropdown = document.querySelector('.dropdown');
    const dropdownContent = document.querySelector('.dropdown-content');

    if (dropdown && dropdownContent) {
        dropdown.addEventListener('click', function() {
            dropdownContent.classList.toggle('show');
        });
    }

    if (dropdownContent && dropdownContent.classList.contains('show')) {
        dropdownContent.classList.remove('show');
    }
    if (dropdownContent) {
        dropdownContent.classList.remove('show');
    }
});

//brian