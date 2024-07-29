const randomAuthor = () => {
   // TODO: random author name
   let authors = []
   for (tr of trs){
    authors.push(tr.children[1].textContent);
   }
   function getRandomInt() {
    return Math.floor(Math.random() * authors.length);
  }
  showTitle.textContent = authors[getRandomInt()];
}

// search movie title
const searchMovieTitle = () => {
    // TODO: search movie by title
    let keyword = searchText.value;
    for (tr of trs){
        console.log(tr.children[0]);
        if (tr.children[0].textContent.includes(keyword)){
            tr.style.display = "table-row"
        }else{
            tr.style.display = "none"
        }
    }
}


// Main
const trs = document.querySelectorAll('tbody tr');
const searchText = document.querySelector('#search');
const showTitle = document.querySelector('h1');

// TODO: Add event listeners on input search
searchText.addEventListener("keyup", searchMovieTitle);


// TODO: call randomAuthor function every 1000 milliseconds
setInterval(randomAuthor, 1000)