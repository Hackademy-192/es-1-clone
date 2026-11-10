const navbar = document.querySelector('#navbar');

window.addEventListener('scroll', ()=>{
    if(window.scrollY > 0){
        navbar.classList.remove('bg-transparent');
        navbar.classList.add('bg-dark');
    } else {
        navbar.classList.add('bg-transparent');
        navbar.classList.remove('bg-dark');
    }
});