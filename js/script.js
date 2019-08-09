let currentMenuState = 0
const toggleNav = function(position){
    const menuElement = document.getElementById("menu-" + position)
    if (currentMenuState == 0) {
        menuElement.classList.remove("d-none")
        menuElement.classList.add("d-flex")
        console.log("Menu opened")
        currentMenuState = 1
    } else {
        menuElement.classList.remove("d-flex")
        menuElement.classList.add("d-none")
        console.log("Menu closed")
        currentMenuState = 0
    }
}