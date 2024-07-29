
// let heading1 = document.querySelector ('h1');
// console.log(heading1)

// console.log(heading1.textContent)
// heading1.textContent = "Hello Radit";


// =======================================
// let heading1 = document.createElement('h1');
// console.log(heading1);
// heading1.textContent = "Try again";
// document.body.appendChild(heading1);



// ========================================
//              create 100 time
// ========================================

// for (let i = 0; i <= 100; i++) {
//     let heading1 = document.createElement('h1');
//     heading1.textContent = "Try again" + 1;
//     document.body.appendChild(heading1);
// }



// ========================================
//         click screen change color
// ========================================

// function changeColor() {
//     document.body.style.background = "red";
// }
// window.addEventListener('click', changeColor)



// ========================================
//        click button change colors
// ========================================

// function changeColor() {
//     document.body.style.background = "red";
// }
// const btn = document.querySelector('button')
// btn.addEventListener('click', changeColor)



// ========================================
//          click btn change text
// ========================================

// function changeHeader() {
//     h1.textContent = "Do it your best";
// }
// const btn = document.querySelector('button')
// const h1 = document.querySelector('h1')
// btn.addEventListener('click', changeHeader)



// ========================================
//               random number
// ========================================

// let n = Math.floor(Math.random() *10);
// console.log(n);



// ========================================
//               random colors
// ========================================

// let colors = ['0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f']
// let index = Math.floor(Math.random() *15);
// console.log(colors[index]);



// ===========================================
//       random colors when we refresh it 
// ===========================================

// let colors = ['0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f']

// let result = '#'
// for (let i = 0 ; i < 6; i++){
//     let index = Math.floor(Math.random() *15);
//     result += colors[index]

// }

// console.log(result);
// document.body.style.background = result;



// ========================================================
//        random colors colors outo number of colors
// ========================================================

// function changeColor() {
//     let colors = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'd', 'e', 'f'];
//     let result = '#'
//     for (let i = 0; i < 6; i++) {
//         let index = Math.floor(Math.random() * 15);
//         result += colors[index]
//     }
//     console.log(result);
//     document.body.style.backgroundColor = result;
// }
// changeColor()
// setInterval(changeColor, 1000)



// ========================================================
//       random colors colors outo and type of colors
// ========================================================

function changeColor() {
    let colors = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'd', 'e', 'f'];
    let result = '#'
    for (let i = 0; i < 6; i++) {
        let index = Math.floor(Math.random() * 15);
        result += colors[index]
    }
    document.querySelector('h1').textContent = result;
    document.body.style.backgroundColor = result;

}
changeColor()
setInterval(changeColor,1000)


