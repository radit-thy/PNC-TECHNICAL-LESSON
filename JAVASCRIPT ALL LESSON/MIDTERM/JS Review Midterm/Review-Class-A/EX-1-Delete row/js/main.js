
let btn = document.querySelectorAll('button');

function removeTable(event){

    console.log(event.target.closest('tr').remove());
}
for (const button of btn){
    button.addEventListener('click',removeTable)
}




















 

