import './bootstrap';

// Get the offset position of the navbar
var sticky = document.getElementById("myHeader").offsetTop;

// When the user scrolls the page, execute myFunction
window.onscroll = function () {
    myFunction();
};

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset > sticky) {
        document.getElementById("myHeader").classList.add("sticky");
    } else {
        document.getElementById("myHeader").classList.remove("sticky");
    }
}