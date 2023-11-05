document.addEventListener("DOMContentLoaded", function () {

const toggleButtonShow = document.querySelector(".toggle-button");
const toggleButtonCross = document.querySelector(".toggle-close");

const documentationBox = document.querySelector(".navigation");

toggleButtonShow.addEventListener("click", function () {
    documentationBox.classList.toggle("hidden");
});
toggleButtonCross.addEventListener("click", function() {
    documentationBox.classList.toggle("hidden");
});

toggleButtonShow.setAttribute("title", "Show documentation");
toggleButtonCross.setAttribute("title", "Close documentation");

});