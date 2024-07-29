

const showWord = () => {
   let index = Math.floor(Math.random() * words.length);
   result.textContent = words[index];
}

setInterval(showWord, 1000);

// Main
const textElement = document.querySelector('.text');
const result = document.querySelector('#output');
const text = textElement.textContent;
let words = text.split(' ');