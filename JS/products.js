export const category = [{
    id: 1,
    image: './images/hero1.jpeg',
    name: 'Compresor'
},
{
    id: 2,
    image: './images/hero1.jpeg',
    name: 'Condenser'
},
{
    id: 3,
    image: './images/hero1.jpeg',
    name: 'Evaporator'
},
{
    id: 4,
    image: './images/hero1.jpeg',
    name: 'Heaters'
},
{
    id: 5,
    image: './images/hero1.jpeg',
    name: 'Axial Fans'
},
{
    id:6,
    image: './images/hero1.jpeg',
    name: 'Cold Room'
},
{
    id:7,
    image: './images/hero1.jpeg',
    name: 'Refigirant'
},
{
    id:8,
    image: './images/hero1.jpeg',
    name: 'Others'
}]

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