require('./bootstrap');
import 'bootstrap';

// Script to change the logo color on click
const logo = document.querySelector('.logo');

logo.addEventListener('click', () => {
    if (logo.style.backgroundColor === 'rgb(255, 45, 32)') {
        logo.style.backgroundColor = '#333';
        document.querySelector('.letter').style.color = '#ff2d20';
    } else {
        logo.style.backgroundColor = '#ff2d20';
        document.querySelector('.letter').style.color = '#fff';
    }
});
