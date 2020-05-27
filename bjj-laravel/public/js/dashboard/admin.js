const adminPanels = document.querySelectorAll(".adminPanel");
const blocks = document.querySelectorAll(".block");
const d_home = document.querySelector(".admin-content .home");
const d_price = document.querySelector(".admin-content .price");
const d_timetable = document.querySelector(".admin-content .timetable");
const d_seminar = document.querySelector(".admin-content .seminar");
const d_blog = document.querySelector(".admin-content .blog");
const d_news = document.querySelector(".admin-content .news");
const d_about = document.querySelector(".admin-content .about");
activeBlock(blocks, "active");
for (let i = 0; i < blocks.length; i++) {
    blocks[i].addEventListener("click", function () {
        for (let j = 0; j < adminPanels.length; j++) {
            adminPanels[j].classList.remove("boardActive")
            if (blocks[i].classList.contains("Home")) {
                d_home.classList.add("boardActive")
            } else if (blocks[i].classList.contains("Prices")) {
                d_price.classList.add("boardActive")
                // d_home.classList.remove("boardActive")
            } else if (blocks[i].classList.contains("Timetable")) {
                d_timetable.classList.add("boardActive")
            } else if (blocks[i].classList.contains("Seminar")) {
                d_seminar.classList.add("boardActive")
            } else if (blocks[i].classList.contains("Blog")) {
                d_blog.classList.add("boardActive")
            } else if (blocks[i].classList.contains("News")) {
                d_news.classList.add("boardActive")
            } else if (blocks[i].classList.contains("About")) {
                d_about.classList.add("boardActive")
            }
        }
    })
}

const closeAlert = document.getElementById("closeAlert");
const alertMember = document.getElementById("alertMember");

closeAlert.addEventListener('click', () => {
    alertMember.style.setProperty('opacity', 0);
    
    setTimeout(() => {

        alertMember.classList.add("alertMember")

    }, 700)


})
const trLength = document.querySelectorAll('.tr-length');
const teamMemberCounter = document.querySelectorAll(".teamMemberCounter");
for (let i = 0; i < teamMemberCounter.length; i++) {
    teamMemberCounter[i].textContent = trLength.length;
}


// teamMemberCounter.textContent = trLength.length;
