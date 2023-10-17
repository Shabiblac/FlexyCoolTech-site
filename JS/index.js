import {category} from './products.js'

const body = document.querySelector('body');
const menuIcon = document.querySelector('.menu-icon');
const mobileNav = document.querySelector('.moblie-navbar');
const closeIcon = document.querySelector('.close-icon');
const menuLinks = document.querySelectorAll('.menu-link');
// Mobile menu //
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
  
    // pagination //
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
 });

 let categoryHtml = '';

 category.forEach((product) =>{
     categoryHtml += `
     <div class="product-container">
         <div class="category-img-container">
             <img src="${product.image}" alt="image1">
         </div>
         <div class="category-name">${product.name}</div>
     </div>`
 })
 console.log(categoryHtml);
 document.querySelector('.category-grid').innerHTML = categoryHtml;
  