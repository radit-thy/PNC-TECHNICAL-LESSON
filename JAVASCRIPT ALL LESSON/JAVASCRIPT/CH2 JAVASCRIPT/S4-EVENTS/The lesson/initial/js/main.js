const hex = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "A", "B", "C", "D", "E", "F"];
const btn = document.querySelector('button');// TODO  your code here
// TODO  your code here

// return the color string code like example: #f00233
// function colorCode() {
//    // TODO your code here
//    let color = "#"
//    for (let i = 0; i < 6; i++){
//       let randomColor = Math.floor(Math.random()*hex.length);
//       color += hex[randomColor]; 
//    }
//    return color
// }

// // return the number by random number between 0 and 16 (length of hex)
// function getRandomColor() {
//     //  TODO your code here
//    document.body.style.background=colorCode()
//    let colCode = document.getElementById('result-color');
//    colCode.textContent = colorCode()
// }





// function colorCode() {
//    // TODO your code here
//    let color = '#';
//    for (let i = 0; i < 4; i++){
//       let colRandom = Math.floor(Math.random()*hex.length);
//       color += hex[colRandom];
//    }
//    return color
// }

// // return the number by random number between 0 and 16 (length of hex)
// function getRandomColor() {
//     //  TODO your code here
//    document.body.style.background = colorCode();
//    let resultColor = document.getElementById('result-color');
//    resultColor.textContent = colorCode();
// }









btn.addEventListener('click', function() {
getRandomColor();// TODO  your code here
});

// const randomColor = Math.floor(Math.random()*hex).toString(16);
// console.log(randomColor);
