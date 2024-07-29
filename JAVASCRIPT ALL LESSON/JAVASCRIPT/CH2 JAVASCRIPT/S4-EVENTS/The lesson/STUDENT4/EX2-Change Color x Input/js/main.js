


function changeColor() {
    // TODO
    // change body color to color that get from input type color 
    
    document.body.style.background = inputColor.value
}

// Main
const inputColor = document.querySelector('#color')

// click on browser window to change color
document.addEventListener('change', changeColor)