//html elements
let menu = document.querySelector('.menu-controller');
let nav = document.querySelector('.nav');
let link = document.querySelectorAll('.nav-ul-li');
let aboutImgScale = document.querySelectorAll('.container-content-about-photo-img');
let bgAboutImgScale = document.querySelector('.container-content-about-photo');

// ------------------- \\

/* addEvent html */
menu.addEventListener('click', ()=>{
    toggles(nav, 'no-nav');
    toggles(nav,'active');
    link.forEach(e=>{
        toggles(e,'active');
        toggles(e,'no-nav');
    });
});

aboutImgScale.forEach(e => {
    e.addEventListener('click', (e)=>{
        e.target.classList.toggle('active');
    })
});

/* ----------------------- */

//function click toggle class
function toggles(e,classes){
    e.classList.toggle(classes)
}

