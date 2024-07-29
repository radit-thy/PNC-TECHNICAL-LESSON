let temperature = prompt("What is the Temperature ?");
let img = document.getElementById('fan')// TODO: Get image element with id "fan"
if (temperature <= 0) {
    // TODO: Change image to cold.png when condition is true
    img.src = "cold.png"
    
} else if (temperature < 40) {
    // TODO: Change image to nice.png when condition is true
    img.src = "nice.png"

} else {
    // TODO: Change image to sunny.png when condition is true
    img.src = "sunny.png"

}