const dropdownBtns = document.querySelectorAll('.card-post-menu');
const dropdownContent = document.querySelector('.dropdown-content')

dropdownBtns.forEach((dropdownBtn) => {
    dropdownBtn.addEventListener('click', () => {
        dropdownContent.classList.toggle('dropdown-content-show');
        console.log('clicked')
    })
})
