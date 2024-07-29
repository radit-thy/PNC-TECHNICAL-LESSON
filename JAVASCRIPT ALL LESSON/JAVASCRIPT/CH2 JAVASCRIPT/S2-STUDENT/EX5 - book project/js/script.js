// TODO 
//=====================Count book number and book names======================
// let bookLists = document.querySelectorAll('li .book-name');
// for (let text of bookLists){
//     console.log(text.textContent)
// }




//====================Delete list===================
let deleteList = document.querySelectorAll('.delete');
for (let btn of deleteList) {
    btn.addEventListener('click', (event) => {
        event.target.closest('li').remove()
    });
}