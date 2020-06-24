const dropdownBtns = document.querySelectorAll('.card-post-menu');

dropdownBtns.forEach((dropdownBtn) => {
    dropdownBtn.addEventListener('click', function () {
        // console.log(this.lastElementChild)
        this.lastElementChild.classList.toggle('dropdown-content-show');
    })
})

const hidePosts = document.querySelectorAll('.hidePost');
const cardBodyPosts = document.querySelectorAll('.card-body');

hidePosts.forEach((hidePost) => {
    hidePost.addEventListener('click', function () {

        // console.log(this.parentElement.parentElement.parentElement)
        this.parentElement.parentElement.parentElement.style.setProperty('display', 'none')
    })
})
