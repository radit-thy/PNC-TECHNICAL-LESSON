
let buttons = document.querySelectorAll('button');

// let input = document.querySelector('#display')
// console.log(input)



for (let btn of buttons){
    btn.addEventListener('click',buttons );

}


num1= "";
function addValue(value){
    num1 += value;
    document.querySelector('#display').value = num1;
    console.log(num1)
}

function clear (cleardata){
    document.querySelector('#display').cleardata.deplay = '';
}


