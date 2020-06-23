const dropdownBtns = document.querySelectorAll('.card-post-menu');

dropdownBtns.forEach((dropdownBtn) => {
    dropdownBtn.addEventListener('click', function () {
        console.log(this.lastElementChild)
        this.lastElementChild.classList.toggle('dropdown-content-show')
    })
})
