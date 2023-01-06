const lineupBtn = document.getElementById("lineupBtn");
const aboutBtn = document.getElementById("aboutBtn");
const musicBtn = document.getElementById("musicBtn");
const eventsBtn = document.getElementById("eventsBtn");
const contactBtn = document.getElementById("contactBtn");
const resourcesBtn = document.getElementById("resourcesBtn");
const logoBtn = document.getElementById("logoBtn");

//debug this below... cant find out why it doesnt work
function addNavBtn(button, file) {
  button.addEventListener("click", function (e) {
    location.href = file;
  })
}

addNavBtn(lineupBtn, "lineup.html");
addNavBtn(aboutBtn, "about.html");
addNavBtn(logoBtn, "index.html");
addNavBtn(musicBtn, "music.html");
addNavBtn(eventsBtn, "events.html");
addNavBtn(contactBtn, "contact.html");
addNavBtn(resourcesBtn, "resources.html");
