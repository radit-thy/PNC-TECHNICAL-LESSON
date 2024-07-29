let fruits = document.querySelectorAll('li');
let input = document.querySelector('input');

function search() {
    console.log("input:", input.value.toLocaleLowerCase());
    for (const fruit of fruits) {
        console.log(fruit.textContent.toLocaleLowerCase());
        if (fruit.textContent.toLocaleLowerCase().includes(input.value.toLocaleLowerCase())) {
            fruit.style.display = 'block';
        } else {
            fruit.style.display = 'none';
        }
    }
}

input.addEventListener('keyup', search)
