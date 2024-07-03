class slider {
    constructor(element) {
        this.sliderElement = element;
        this.currentSlide = 1;
        this.allSlides = element.querySelectorAll('.imageSlides picture');
        this.pagination = element.querySelector('.sliderPagination');
    }

    pauseSlide() {
        this.sliderElement.classList.toggle('pauseingImageSlider');
    }
    prevSlide() {

        if (this.currentSlide === 1 || this.currentSlide === 0) {
            this.allSlides.forEach(element => element.classList.remove('active'));
            this.currentSlide = this.allSlides.length;
            this.allSlides[this.currentSlide - 1].classList.add('active');
        } else{
            this.currentSlide--
            this.allSlides.forEach(element => element.classList.remove('active'));
            this.allSlides[this.currentSlide - 1].classList.add('active');
        }
        this.updatePagination();
    }
    nextSlide() {
        if (this.currentSlide === 1) {
            this.allSlides.forEach(element => element.classList.remove('active'));
            this.currentSlide++
            this.allSlides[this.currentSlide - 1].classList.add('active');
        } else{
            this.currentSlide++
            this.sliderElement.querySelector('picture.active').classList.remove('active');
            if (this.currentSlide === 5) {
                this.currentSlide = 1;
            }
            this.allSlides[this.currentSlide - 1].classList.add('active');
            
        }

        this.updatePagination();

    }
    updatePagination() {
        this.pagination.querySelectorAll('span').forEach(element => {
            element.classList.remove('active');
        })
        this.pagination.querySelectorAll('span')[this.currentSlide - 1].classList.add('active');
    }
}

document.querySelectorAll('.imageSlider').forEach(element => {
    let imageSlider = new slider(element);

    function autoSlide(){
        if(!element.classList.contains('pauseingImageSlider')) {
            imageSlider.nextSlide();
        }
    }

    element.querySelectorAll('.imageSlides picture').forEach(slide => {
        let span = document.createElement('span')
        element.querySelector('.sliderPagination').appendChild(span);
        imageSlider.updatePagination();
    })
    

    let autoSlider = setInterval(autoSlide, 3000)

    element.querySelector('.pauseSlide').addEventListener('click', () => {
        imageSlider.pauseSlide();
        clearInterval(autoSlider);
        autoSlider = setInterval(autoSlide, 3000)
    })
    
    element.querySelector('.nextSlide').addEventListener('click', () => {
        imageSlider.nextSlide();
        clearInterval(autoSlider);
        autoSlider = setInterval(autoSlide, 3000)
    })

    element.querySelector('.prevSlide').addEventListener('click', () => {
        imageSlider.prevSlide();
        clearInterval(autoSlider);
        autoSlider = setInterval(autoSlide, 3000)
    })
})