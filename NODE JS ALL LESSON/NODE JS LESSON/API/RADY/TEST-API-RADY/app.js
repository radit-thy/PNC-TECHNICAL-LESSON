const express = require("express");
const {getData, save} = require("./utils/function");
const { v4: uuidv4 } = require('uuid');
const app = express();
const PORT = 3000;

app.listen(PORT, () =>{
    console.log(`Server run port:${PORT}`);
});
app.use(express.json());
app.use(express.static("public"));


let items = getData("./database/items.json");

//get all items
app.get("/api/v1/items", (req,res) =>{
    res.json({message:"Get all items..", items:items});
})


//create items
app.post("/api/v1/items", (req,res) =>{
    //distructuring
    const {name,price} = req.body;

    //create new items
    let newItem ={
        id:uuidv4(),
        name:name,
        price:price
    };
    //add new item to the item arry
    items.push(newItem);
    
    //save item to file
    save("./database/items.json",items);

    //respon
    res.json({message:"create is successful", items: newItem});

})

//get or show one item
app.get("/api/v1/items/:id", (req,res) =>{
    let id = req.params.id;
    let item = items.find(item => item.id === id);
    if(item !=undefined){
        res.json({message:"item one found", item:item});
    }else{
        res.status(400).send({message:"item not found"});
    }
});

//delete item
app.delete("/api/v1/items/:id", (req,res) =>{
    let id = req.params.id;
    let index = items.findIndex(item => item.id === id);
    if(index != -1){
        items.splice(index, 1);
        save("./database/items.json",items);
        res.json({message:"Item deleted successful"})
    }else{
        res.status(400).send({message:"Item deleted not found",item:index})
    }


});


//update item
app.put("/api/v1/items/:id", (req,res) =>{
    let id = req.params.id;
    let index = items.findIndex(item => item.id === id);
    if(index != -1){
        let item = items[index];
        item.name = req.body.name;
        item.price = req.body.price;
        save("./database/items.json",items);
        res.json({message:"Item update successful",items})
    }else{
        res.status(400).send({message:"Item update not found",item:index})
    }


});