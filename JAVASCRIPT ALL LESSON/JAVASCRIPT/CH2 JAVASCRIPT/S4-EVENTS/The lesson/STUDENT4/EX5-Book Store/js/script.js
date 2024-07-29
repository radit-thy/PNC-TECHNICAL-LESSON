//  FUNCTIONS -------------------------------------------------------------
function deleteBook(event) {
	
  // 1- Check the event if raised on the button delete 
  let spanDelete = document.getElementsByTagName("li")
  for (let i = 0 ; i<spanDelete.length;i++){
    if (event.target == spanDelete[i].lastElementChild){
      spanDelete[i].lastElementChild.parentElement.style.display= 'none'
    }
  }
 //  2  if yes, get the parent and remove it from the  bookList
}

function addBook(event) {
  event.preventDefault();

  // 1- Get the book name from the input field
  let addNew_Book = document.getElementById('add-book-textfield');
 
  // 2- Create a new spam bookName for the book name, class name = name
  const name = document.createElement('span');
  name.classList.add('name');
  name.textContent=addNew_Book;

  // 3- Create a new spam deleteBtn for the button delete, class name = delete
  const deleteBtn = document.createElement('span');
  deleteBtn.classList.add('delete');
  deleteBtn.textContent('delete');

  // 4- Create a new li
  const item = document.createElement('li');
  item.appendChild(name);
  item.appendChild(deleteBtn);

  // 5- Add bookName and deleteBtn to li and li to the  bookList UL
  bookList.appendChild(item);
}

function searchBook(event) {
  // 1- Get the search text

  // 2- Loop on all LI
 
    // Update the style of the LI (visible or hidden)
   
  }




//  MAIN -------------------------------------------------------------
let bookList = document.querySelector("#book-list ul");
bookList.addEventListener("click", deleteBook);

let addForm = document.getElementById("add-book");
addForm.addEventListener("submit", addBook);

let searchBookInput = document
  .getElementById("search-books")
  .querySelector("input");
searchBookInput.addEventListener("keyup", searchBook);
