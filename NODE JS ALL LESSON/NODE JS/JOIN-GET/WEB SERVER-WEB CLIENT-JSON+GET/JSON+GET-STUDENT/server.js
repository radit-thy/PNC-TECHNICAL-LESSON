const express = require("express");
const app = express();
const PORT = 3000;
//Start server
app.listen(PORT, () =>{
    console.log("http://localhost:" + PORT);
});

//+++++++++++++++TODO+++++++++++++++++++++++

const books = [
    { id: 1, name: "Rady dreams in 2019" },
    { id: 2, name: "how to dream in 2019" },
    { id: 3, name: "how to kill covid" },
];

// Example of REQUEST using QUERRY PARAMETERS
// localhost:3000/book?id=100
app.get("/book", (req, res) => {
    res.send(req.query.id);

});

// Example of REQUEST using ROUTE PARAMETERS
// localhost:3000/book/200
app.get("/book_id/:id", (req, res) => {
    res.send(req.params.id);
    if(id<books.length){
        let book = books[id];
        res.send("BOOK NAME: " + book.name);
    }else{
        res.send("Book not found");
    }
});
