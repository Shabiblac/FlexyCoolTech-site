const body = document.querySelector('body');
const menuIcon = document.querySelector('.menu-icon');
const mobileNav = document.querySelector('.moblie-navbar');
const closeIcon = document.querySelector('.close-icon');
const menuLinks = document.querySelectorAll('.menu-link');

const toggleMenu = ()=> {
    menuIcon.classList.toggle('hide');
    mobileNav.classList.toggle('hide');
    body.classList.add('no-scroll');
}

menuIcon.addEventListener('click',toggleMenu);

const closemenu = ()=> {
    menuIcon.classList.toggle('hide');
    mobileNav.classList.toggle('hide')
    body.classList.remove('no-scroll');
}
closeIcon.addEventListener('click', closemenu);

menuLinks.forEach((link) => {
    link.addEventListener('click', ()=>{
        menuIcon.classList.toggle('hide');
        body.classList.remove('no-scroll');
        mobileNav.classList.toggle('hide')
    })
});
//  Hero section slider //
const swiper = new Swiper('.swiper', {
    autoplay: {
        delay: 5000,
        disableOnInteractio:false
    },
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
 });
  