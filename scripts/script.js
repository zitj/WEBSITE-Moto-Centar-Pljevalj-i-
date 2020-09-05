const navButtons = document.querySelectorAll('a');
const galleryButton = navButtons[4];
const partOne = document.querySelector('.part1');
const partTwo = document.querySelector('.part2');
const partThree = document.querySelector('.part3');
const partFour = document.querySelector('.part4');
const gallery = document.querySelector('.gallery');
const closeButton = document.querySelector('.close-button');
const callButton = document.querySelector('.call-button');

const classRemoval = () =>{
    gallery.classList.remove('active');
    partOne.classList.remove('active');
    partTwo.classList.remove('active');
    partThree.classList.remove('active');
    partFour.classList.remove('active');
}
const classAdder = () =>{
    gallery.classList.add('active');
    partOne.classList.add('active');
    partTwo.classList.add('active');
    partThree.classList.add('active');
    partFour.classList.add('active');
}
for(let i=0; i < 4; i++){
    navButtons[i].addEventListener('click', classAdder);
}
galleryButton.addEventListener('click', classRemoval);
closeButton.addEventListener('click', classAdder);

const buttonAppearance = ()=>{
    if(window.scrollY > 300){
        callButton.classList.add('active');
    }
    else{
        callButton.classList.remove('active');
    }
};
window.onscroll = ()=> {buttonAppearance()};