const blocks = document.querySelectorAll(".block")
for (let i = 0; i < blocks.length; i++) {

    blocks[i].addEventListener("click", function () {
        for (let j = 0; j < blocks.length; j++) {
            blocks[j].classList.remove("active")
        }
        if (!blocks[i].classList.contains("active")) {
            blocks[i].classList.add("active")
        }
    })
}
