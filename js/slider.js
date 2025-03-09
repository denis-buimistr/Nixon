//элементы на странице

const slider = document.querySelector('#slider');
const sliderItems = Array.from(slider.children);
const btnNext = document.querySelector('#btnNext');
const btnPrev = document.querySelector('#btnPrev');

sliderItems.forEach(function(slide, index) {
    console.log(slide);

    //Скрываю все слайды , кроме первого
    if (index !== 0 ) {
        slide.classList.add('hidden');
    }

    //добавляю индесы
    slide.dataset.index = index;


    //Добавляем data атрибут active для первого / активного слайда
    sliderItems[0].setAttribute('data-active', ''); 



    //клик по слайдам
    slide.addEventListener('click', function () {
       
        //скрываю текущий слайд
        slide.classList.add('hidden');
        slide.removeAttribute('data-active');
        
        //расчитываю индекс след слайда
        const nextSlideIndex = index + 1 === sliderItems.length ? 0 : index + 1;

        // let nextSlideIndex;
        // if(index + 1 === sliderItems.length) {
        //     nextSlideIndex = 0;
        // } else {
        //     nextSlideIndex = index + 1;
        // }

        //Находим след слайд
        const nextSlide = slider.querySelector(`[data-index="${nextSlideIndex}"]`);

        //Отображаем след слайд
        nextSlide.classList.remove('hidden');
        nextSlide.setAttribute('data-active', '');
    })
});


btnNext.onclick = function () {

    //Скрываем текущий слайд
    const currentSlide = slider.querySelector('[data-active]');
    const currentSlideIndex = +currentSlide.dataset.index;

    currentSlide.classList.add('hidden');
    currentSlide.removeAttribute('data-active');

    //показываем след слайд
    const nextSlideIndex = currentSlideIndex + 1 === sliderItems.length ? 0 : currentSlideIndex + 1;
    const nextSlide = slider.querySelector(`[data-index = "${nextSlideIndex}"]`);
    nextSlide.classList.remove('hidden');
    nextSlide.setAttribute('data-active', '');

}   


btnPrev.onclick = function () {
    console.log('prev slide');

    //Скрываем текущий слайд
    const currentSlide = slider.querySelector('[data-active]');
    const currentSlideIndex = +currentSlide.dataset.index;

    currentSlide.classList.add('hidden');
    currentSlide.removeAttribute('data-active');

    //показываем след слайд
    const nextSlideIndex = currentSlideIndex  === 0 ? sliderItems.length - 1 : currentSlideIndex - 1;
    

    const nextSlide = slider.querySelector(`[data-index = "${nextSlideIndex}"]`);
    nextSlide.classList.remove('hidden');
    nextSlide.setAttribute('data-active', '');

}