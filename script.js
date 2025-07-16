<<<<<<< HEAD
// LOG IN
let login = document.querySelector('.login');
let loginBtn = login.querySelector('.login-btn'); 
let adminBtn = login.querySelector('.login-client'); 
let inputs = login.querySelectorAll('.login-form input');

loginBtn.addEventListener('click', (e) => {
    let allFilled = Array.from(inputs).every(input => input.value.trim() !== '');

    if (!allFilled) {
        e.preventDefault(); 
        alert('Please fill in all the fields.');
    }
});

adminBtn.addEventListener('click', () => {
    login.style.display = 'none'; 
});


// ABOUT
let featuresDevlop = document.querySelector('.feature-devlop');
let featureCard = featuresDevlop.querySelectorAll('.cardcontinerdevlop');

document.querySelectorAll('.features .cardcontiner').forEach(cardcontiner => {
    cardcontiner.addEventListener('click', () => {
        featuresDevlop.style.display = 'flex';
        let name = cardcontiner.getAttribute('data-name');
        featureCard.forEach(cardcontinerdevlop => {
            let target = cardcontinerdevlop.getAttribute('data-target');
            if (name === target) {
                cardcontinerdevlop.classList.add('active'); 
            }
        });
    });
});

featureCard.forEach(close => {
    let closeButton = close.querySelector('.fa-times');
    if (closeButton) {
        closeButton.addEventListener('click', () => {
            close.classList.remove('active');
            featuresDevlop.style.display = 'none';
        });
    }
});

//OFFERS

let offersDevlop = document.querySelector('.offersDevlop'); 
let offersSelect = offersDevlop.querySelectorAll('.devlop');
let offersDetails = document.querySelector('.offersDetails'); 
let closeButton = document.querySelector('.fa-solid.fa-arrow-left');
document.querySelectorAll('.offersDetails .detail').forEach(detail => { 
    detail.onclick = () => {
        offersDevlop.style.display = 'flex'; 
        offersDetails.style.display = 'none'; 
        let nom = detail.getAttribute('data-nom'); 
        offersSelect.forEach(devlop => {
            let targit = devlop.getAttribute('data-targit'); 
            if (nom === targit) {
                devlop.classList.add('open'); 
                closeButton.style.display = 'flex';
            } else {
                devlop.classList.remove('open');
            }
        });
    };
});
if (closeButton) {
    closeButton.onclick = () => {
        offersDevlop.style.display = 'none';
        offersDetails.style.display = 'flex';
        offersSelect.forEach(devlop => {
            devlop.classList.remove('open');
        });
    };
}

//REVIEWS//
const reviewsBox = document.querySelector('.reviews-box');
const reviews = [...reviewsBox.querySelectorAll('.box')];
const nxtBtn = document.querySelector('.nxt-btn');
const preBtn = document.querySelector('.pre-btn');

const reviewsPerPage = 3;
let currentIndex = 0;

function updateReviews() {
    reviews.forEach((review, index) => {
        if (index >= currentIndex && index < currentIndex + reviewsPerPage) {
            review.style.display = 'block';
        } else {
            review.style.display = 'none';
        }
    });
    preBtn.style.display = currentIndex === 0 ? 'none' : 'block';
    nxtBtn.style.display = currentIndex + reviewsPerPage >= reviews.length ? 'none' : 'block';
}

nxtBtn.addEventListener('click', () => {
    if (currentIndex + reviewsPerPage < reviews.length) {
        currentIndex += reviewsPerPage;
        updateReviews();
    }
});

preBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex -= reviewsPerPage;
        updateReviews();
    }
});

updateReviews();




document.querySelectorAll('.features .cardcontiner').forEach(cardcontiner => {
    cardcontiner.addEventListener('click', () => {
        console.log("Card Clicked:", cardcontiner.getAttribute('data-name'));
    });
});

=======
// LOG IN
let login = document.querySelector('.login');
let loginBtn = login.querySelector('.login-btn'); 
let adminBtn = login.querySelector('.login-client'); 
let inputs = login.querySelectorAll('.login-form input');

loginBtn.addEventListener('click', (e) => {
    let allFilled = Array.from(inputs).every(input => input.value.trim() !== '');

    if (!allFilled) {
        e.preventDefault(); 
        alert('Please fill in all the fields.');
    }
});

adminBtn.addEventListener('click', () => {
    login.style.display = 'none'; 
});


// ABOUT
let featuresDevlop = document.querySelector('.feature-devlop');
let featureCard = featuresDevlop.querySelectorAll('.cardcontinerdevlop');

document.querySelectorAll('.features .cardcontiner').forEach(cardcontiner => {
    cardcontiner.addEventListener('click', () => {
        featuresDevlop.style.display = 'flex';
        let name = cardcontiner.getAttribute('data-name');
        featureCard.forEach(cardcontinerdevlop => {
            let target = cardcontinerdevlop.getAttribute('data-target');
            if (name === target) {
                cardcontinerdevlop.classList.add('active'); 
            }
        });
    });
});

featureCard.forEach(close => {
    let closeButton = close.querySelector('.fa-times');
    if (closeButton) {
        closeButton.addEventListener('click', () => {
            close.classList.remove('active');
            featuresDevlop.style.display = 'none';
        });
    }
});

//OFFERS

let offersDevlop = document.querySelector('.offersDevlop'); 
let offersSelect = offersDevlop.querySelectorAll('.devlop');
let offersDetails = document.querySelector('.offersDetails'); 
let closeButton = document.querySelector('.fa-solid.fa-arrow-left');
document.querySelectorAll('.offersDetails .detail').forEach(detail => { 
    detail.onclick = () => {
        offersDevlop.style.display = 'flex'; 
        offersDetails.style.display = 'none'; 
        let nom = detail.getAttribute('data-nom'); 
        offersSelect.forEach(devlop => {
            let targit = devlop.getAttribute('data-targit'); 
            if (nom === targit) {
                devlop.classList.add('open'); 
                closeButton.style.display = 'flex';
            } else {
                devlop.classList.remove('open');
            }
        });
    };
});
if (closeButton) {
    closeButton.onclick = () => {
        offersDevlop.style.display = 'none';
        offersDetails.style.display = 'flex';
        offersSelect.forEach(devlop => {
            devlop.classList.remove('open');
        });
    };
}

//REVIEWS//
const reviewsBox = document.querySelector('.reviews-box');
const reviews = [...reviewsBox.querySelectorAll('.box')];
const nxtBtn = document.querySelector('.nxt-btn');
const preBtn = document.querySelector('.pre-btn');

const reviewsPerPage = 3;
let currentIndex = 0;

function updateReviews() {
    reviews.forEach((review, index) => {
        if (index >= currentIndex && index < currentIndex + reviewsPerPage) {
            review.style.display = 'block';
        } else {
            review.style.display = 'none';
        }
    });
    preBtn.style.display = currentIndex === 0 ? 'none' : 'block';
    nxtBtn.style.display = currentIndex + reviewsPerPage >= reviews.length ? 'none' : 'block';
}

nxtBtn.addEventListener('click', () => {
    if (currentIndex + reviewsPerPage < reviews.length) {
        currentIndex += reviewsPerPage;
        updateReviews();
    }
});

preBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex -= reviewsPerPage;
        updateReviews();
    }
});

updateReviews();




document.querySelectorAll('.features .cardcontiner').forEach(cardcontiner => {
    cardcontiner.addEventListener('click', () => {
        console.log("Card Clicked:", cardcontiner.getAttribute('data-name'));
    });
});

>>>>>>> a4717c3d139e6410765664512b6fa36a4822a743
