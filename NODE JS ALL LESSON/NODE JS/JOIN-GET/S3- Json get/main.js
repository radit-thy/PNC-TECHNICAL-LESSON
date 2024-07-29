const express = require("express");
const app = express();
const port = 3000;


const books = [
    { id: 1, name: "Rady dreams in 2019" },
    { id: 2, name: "how to dream in 2019" },
    { id: 3, name: "how to kill covid" },
];

app.listen(port, () => {
    console.log("http://localhost:" +port);
});

app.use(express.static("public"));

app.get("/", (req, res)=>{
    res.send("hello");
})

app.get("/book", (req, res) => {
    let id = req.query.id;
    if(id<books.length){
        let book = books[id];
        res.send("BOOK NAME: " + book.name);
    }else{
        res.send("Book not found");
    }
});
