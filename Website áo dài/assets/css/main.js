// slider
// const productItem = document.querySelectorAll('.product')
// const prevBtn = document.querySelector('.prev-btn')
// const nextBtn = document.querySelector('.next-btn')

// productItem.forEach((item, i) => {
//     let productner = item.getBoundingClientRect();
//     let productWidth = productner.width;

// });
// nextBtn[i].addEvenListenner('click', () => {
//     item.scrollLeft += productWidth;
// })

// prevBtn[i].addEvenListenner('click', function(){
//     item.scrollLeft -= productWidth;
// });


// modal__logon
const btnOpen = document.querySelector('.header__navbar-login')
const modal = document.querySelector('.modal__login')
const btnclose = document.querySelector('.modal__icon-close')

function toggleModal(){
    modal.classList.toggle('hide')
}

btnOpen.addEventListener('click', function(){
    modal.classList.remove('hide')
})
btnclose.addEventListener('click', toggleModal)
modal.addEventListener('click', function(e){
    if(e.target == e.currentTarget){
        toggleModal()
    }
})
// modal__sign
const btnsign = document.querySelector('.header__navbar-sign')
const btnCancel = document.querySelector('.modal__sign-footer a')
const modalSign = document.querySelector('.modal__sign')

function toggleSign(){
    modalSign.classList.toggle('hide')
}

btnsign.addEventListener('click', function(){
    modalSign.classList.remove('hide')
})
btnCancel.addEventListener('click', toggleSign)
modalSign.addEventListener('click', function(e){
    if(e.target == e.currentTarget){
        toggleSign()
    }
})
