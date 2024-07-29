const express = require("express");
const {readFileSync, writeFileSync} = require("fs");
const {v4: uuidv4 } = require('uuid');
const app = express();
const PORT = 3000;
app.use(express.json());
app.listen(process.env.PORT || 3000, () =>{
    console.log("http://localhost:3000");

})

let items = JSON.parse(readFileSync("./database/items.json"));

//connect to frontend
app.use(express.static("public"));


//get all
app.get("/api", function(req, res){
    res.json({status:200,massage:"Hello Radit",items:items});
});


//create
app.post("/api/items", function(req, res){
    let newItem = {
        item: uuidv4(),
        title: req.body.title,
        price: req.body.price
    };
    items.push(newItem);
    writeFileSync("./database/items.json", JSON.stringify(items));
    res.json({success: true, message: "Item created successfully"});
});



