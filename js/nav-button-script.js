// Existing navigation code
const homeBtn = document.getElementById("homeBtn")
const lineupBtn = document.getElementById("lineupBtn");
const aboutBtn = document.getElementById("aboutBtn");
const musicBtn = document.getElementById("musicBtn");
const eventsBtn = document.getElementById("eventsBtn");
const contactBtn = document.getElementById("contactBtn");
const resourcesBtn = document.getElementById("resourcesBtn");
const logoBtn = document.getElementById("logoBtn");

// New mobile navigation elements
const hamburgerMenu = document.querySelector('.hamburger-menu');
const mobileNav = document.querySelector('.mobile-nav');
const body = document.body;

// Mobile navigation buttons
const homeBtnMobile = document.getElementById("homeBtnMobile")
const lineupBtnMobile = document.getElementById("lineupBtnMobile");
const aboutBtnMobile = document.getElementById("aboutBtnMobile");
const musicBtnMobile = document.getElementById("musicBtnMobile");
const eventsBtnMobile = document.getElementById("eventsBtnMobile");
const contactBtnMobile = document.getElementById("contactBtnMobile");
const resourcesBtnMobile = document.getElementById("resourcesBtnMobile");

function addNavBtn(button, file) {
    button.addEventListener("click", function(e) {
        location.href = file;
    });
}

// Toggle mobile menu
hamburgerMenu.addEventListener('click', () => {
    hamburgerMenu.classList.toggle('active');
    mobileNav.classList.toggle('active');
    body.style.overflow = mobileNav.classList.contains('active') ? 'hidden' : 'auto';
});

// Close mobile menu when clicking outside
mobileNav.addEventListener('click', (e) => {
    if (e.target === mobileNav) {
        hamburgerMenu.classList.remove('active');
        mobileNav.classList.remove('active');
        body.style.overflow = 'auto';
    }
});

// Add navigation for desktop buttons
addNavBtn(homeBtn, "index.html");
addNavBtn(lineupBtn, "lineup.html");
addNavBtn(aboutBtn, "about.html");
addNavBtn(logoBtn, "index.html");
addNavBtn(musicBtn, "music.html");
addNavBtn(eventsBtn, "events.html");
addNavBtn(contactBtn, "contact.html");
addNavBtn(resourcesBtn, "resources.html");

// Add navigation for mobile buttons
addNavBtn(homeBtnMobile, "index.html");
addNavBtn(lineupBtnMobile, "lineup.html");
addNavBtn(aboutBtnMobile, "about.html");
addNavBtn(musicBtnMobile, "music.html");
addNavBtn(eventsBtnMobile, "events.html");
addNavBtn(contactBtnMobile, "contact.html");
addNavBtn(resourcesBtnMobile, "resources.html");