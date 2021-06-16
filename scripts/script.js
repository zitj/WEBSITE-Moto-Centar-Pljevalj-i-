const navButtons = document.querySelectorAll('a');
const galleryButton = document.getElementById('galleryButton');
const partOne = document.querySelector('.part1');
const partTwo = document.querySelector('.part2');
const partThree = document.querySelector('.part3');
const partFour = document.querySelector('.part4');
const gallery = document.querySelector('.gallery');
const closeButton = document.querySelector('.close-button');
const callButton = document.querySelector('.call-button');
const parts = [partOne, partTwo, partThree, partFour];
const rotatedContainers = document.querySelectorAll('.rotatedContainer');
const headings = document.querySelectorAll('.headings');
const logoHeadings = document.querySelectorAll('.logoHeading');
const text = document.querySelectorAll('.text');

console.log(logoHeadings);

const classRemoval = () => {
    gallery.classList.remove('active');
    partOne.classList.remove('active');
    partTwo.classList.remove('active');
    partThree.classList.remove('active');
    partFour.classList.remove('active');
};
const classAdder = () => {
    gallery.classList.add('active');
    partOne.classList.add('active');
    partTwo.classList.add('active');
    partThree.classList.add('active');
    partFour.classList.add('active');
};
for (let i = 0; i < navButtons.length; i++) {
    navButtons[i].addEventListener('click', classAdder);
}
galleryButton.addEventListener('click', classRemoval);
closeButton.addEventListener('click', classAdder);

const animateOnScroll = (items, animateIn, animateOut) => {
    let observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.intersectionRatio > 0) {
                entry.target.style = animateIn;
            } else {
                entry.target.style = animateOut;
            }
        });
    });

    items.forEach((element) => {
        observer.observe(element);
    });
};

document.addEventListener('scroll', () => {
    animateOnScroll(
        rotatedContainers,
        'animation: animateIn .6s ease-in-out',

        'transform: scale(0) rotate(0deg); opacity: 0;'
    );
    animateOnScroll(text, 'opacity:1', 'opacity: 0;');
    animateOnScroll(
        headings,
        'animation: fadeIn .6s ease-in-out;',
        'opacity:0;'
    );
    animateOnScroll(
        logoHeadings,
        'opacity:1; transform: translateX(0px)',
        'opacity:0; transform: translateX(-100px)'
    );
});
