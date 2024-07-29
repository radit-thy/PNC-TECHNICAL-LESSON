// const colorCode = ['0', '1', '2', '3', '4', '5', '6', '7', '8','9', 'a', 'b', 'c', 'd', 'e', 'f']
// let color = "#"

// Loop 6 times to get the color code by random from items in array
// https://www.w3schools.com/js/js_random.asp


// set background color to body =  color code


// add text content to h1 = color code

function RandomColors(){
    const colorCode = ['0', '1', '2', '3', '4', '5', '6', '7', '8','9', 'a', 'b', 'c', 'd', 'e', 'f']
    let color = "#"
    for( let i = 0 ; i < 6 ; i ++){
        let index = Math.floor(Math.random() *15)
        color += colorCode[index]
    }
    document.querySelector('h1').textContent = color;
    document.body.style.backgroundColor = color;

}
RandomColors();
setInterval(RandomColors,1000)