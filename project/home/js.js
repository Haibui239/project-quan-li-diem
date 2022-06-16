const button = document.getElementById("btn");
const list = document.getElementById("list");

list.style.display = "none";

button.addEventListener("click", (even) => {
    if(list.style.display == "block") {
        list.style.display = "none";
    } else {
        list.style.display = "block";
    }
})

// responsive menu
const extended_menu = document.getElementsByClassName("menu-top-res-icon")[0]

extended_menu.addEventListener("click", (e) => {
    document.getElementsByClassName("menu-left")[0].classList.toggle("d-block")
})

// active click

const currentLocation = location.href;
const menuItem = document.querySelectorAll('a');
const menuLength = menuItem.length
for (let i = 0; i<menuLength; i++){
{
if (menuItem [i].href === currentLocation)
menuItem [i].className = "active"
}
}

// loading

$(window).on('load', function(event) {
  $('body').removeClass('preloading');
  $('.loading').delay(2000).fadeOut('fast');
});

