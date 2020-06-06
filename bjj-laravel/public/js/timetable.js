console.log("ok");
const dayCrad = document.querySelectorAll(".day-card");

for (let i = 0; i < dayCrad.length; i++) {
    setTimeout(() => {
        dayCrad[i].classList.add("day-card-anim-enter");
    }, i * 250);
}
