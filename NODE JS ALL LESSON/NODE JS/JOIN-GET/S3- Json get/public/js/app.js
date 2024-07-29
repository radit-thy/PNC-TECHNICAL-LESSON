const URL = "http://localhost:3000/books";

axios.get(URL).then((res)=>{
    let ul = document.querySelector("#result");
    res.data.forEach(book => {
        let li = document.createElement("li");
        li.textContent = book.name;
        ul.appendChild(li);
    });
});