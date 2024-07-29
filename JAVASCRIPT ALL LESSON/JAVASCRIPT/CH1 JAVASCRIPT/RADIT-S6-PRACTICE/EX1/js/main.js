// let text = "hello world [JavaScript] we [are] strong!";
// text = text.replace(/\[.*?\]/g, '');
// console.log(text);

// output: hello world we strong!


//=================My correction===============
// let text = "hello[pnc]hi";
// let open = -1;
// let close = -1;
// for (i = 0 ; i< text.length; i++){
//     if (text[i] === "[");{
//         open = i;
//     }
//     else if (text[i] ==="]") {
//         close = i;
//     }
// }
// console.log()


//================Correction Teacher==============

let text = "hello[PNC]test";
let openBreaketIndex = -1;
let closeBreaketIndex = -1;
for (let i = 0; i < text.length; i++){
  if (text[i] === "["){
    openBreaketIndex = i;
  }else if(text[i] === "]"){
    closeBreaketIndex = i;
  }  
}

console.log(text.slice(0, openBreaketIndex) + text.slice(closeBreaketIndex + 1, text.length));
