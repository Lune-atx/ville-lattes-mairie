let lattesSlider = {
    slideArea : document.getElementById("lattesSlideArea"),
    slides : document.getElementsByClassName("lattesSlideArea_slide"),
    currentSlide : 0,
    timming : 10,
    init : () => {
        // Récupération du timming
        lattesSlider.timming = lattesSlider.slideArea.dataset.lattesslideduration;
        // Initialisation du slider
        lattesSlider.slideArea.style.backgroundImage = `url(${lattesSlider.slides[0].innerText})`;
        // Si y'a plusieurs slide, on lance le diapo
        if(lattesSlider.slides.length > 1){
            lattesSlider.sliderInit();
        }
    },
    sliderInit : () => {
        setInterval(()=>{
            // transition
            lattesSlider.slideArea.classList.toggle("lattesSlideArea--switch");
            // changement d'image + boucle
            setTimeout(() => {
                lattesSlider.currentSlide = (lattesSlider.currentSlide<(lattesSlider.slides.length-1)) ?  lattesSlider.currentSlide + 1 : 0;
                lattesSlider.slideArea.style.backgroundImage = `url(${lattesSlider.slides[lattesSlider.currentSlide].innerText})`;
                lattesSlider.slideArea.classList.toggle("lattesSlideArea--switch");   
            },700)
        },lattesSlider.timming*1000);
    }
}
document.addEventListener('DOMContentLoaded', lattesSlider.init);