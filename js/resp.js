burger = document.querySelector('.burger')
navbar = document.querySelector('.navbar')
leftnav = document.querySelector('.navbar')


burger.addEventListener('click', ()=>{
    navbar.classList.toggle('h-nav');
    leftnav.classList.toggle('v-class');
})