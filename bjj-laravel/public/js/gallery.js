const slideImg = document.querySelector(".slide-img");
const slideImgTitle_wrap_p = document.querySelector(".slide-img-title  .wrap-p");
const slideImgTitle_p = document.querySelector(".wrap-p p");
let imgNo = 0;
const sliderTxt = ["Big Family!", "Great Warriors!!", "Awsome people!!!"];
slideImgTitle_p.textContent = 'Meet BJJ Plymouth';

function slider() {
    slideImgTitle_p.textContent = 'Meet the BJJ Plymouth...';
    setInterval(() => {
        slideImg.style.setProperty("background-image", `url("/images/img_slider/img-s-${imgNo}.jpg")`);
        slideImgTitle_p.textContent = sliderTxt[imgNo];
        imgNo++;
        if (imgNo > 2) {
            imgNo = 0;
        }
        slideImgTitle_wrap_p.classList.add("showTxt")
        setTimeout(() => {
            slideImgTitle_wrap_p.classList.remove("showTxt")
        }, 3000)
    }, 4000)
}
slider();
