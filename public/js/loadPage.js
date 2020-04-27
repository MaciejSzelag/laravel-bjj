const all_lines = document.querySelectorAll(".line");
const loadPage = document.querySelector(".loadPage_main");
const btn_send = document.getElementById('sendMessage');
let positionLeft = 0;
const loading = () => {
    loadPage.classList.add("loadPage-show")
    for (let i = 0; i < all_lines.length; i++) {
        setTimeout(() => {
            all_lines[i].style.setProperty("left", `${positionLeft}%`);
            positionLeft += 10;
            setTimeout(() => {
                all_lines[i].classList.add("addAnime");
            }, i * 100)
        }, 200)
    }
}
btn_send.addEventListener('click', loading);
