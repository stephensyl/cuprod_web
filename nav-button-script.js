const lineupBtn = document.getElementById("lineupBtn");
//const aboutBtn = document.getElementById("aboutBtn");
const musicBtn = document.getElementById("musicBtn");
const eventsBtn = document.getElementById("eventsBtn");
//const contactBtn = document.getElementById("contactBtn");
//const resourcesBtn = document.getElementById("resourcesBtn");
const logoBtn = document.getElementById("logoBtn");

//debug this below... cant find out why it doesnt work
function addNavBtn(button, file) {
  button.addEventListener("click", function (e) {
    location.href = file;
    console.log("works");
  })
}

addNavBtn(lineupBtn, "lineup_cmp.html");
//addNavBtn(aboutBtn, "about_cmp.html");
addNavBtn(logoBtn, "index_cmp.html");
addNavBtn(musicBtn, "music_cmp.html");
addNavBtn(eventsBtn, "events_cmp.html");
//addNavBtn(contactBtn, "contact_cmp.html");
//addNavBtn(resourcesBtn, "resources_cmp.html");
