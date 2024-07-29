const express = require("express");
const app = express();
const PORT = 3000;
app.listen(PORT,(e)=>{
    console.log("Server is runing:"+ PORT);
});

const mainModle = require("./models/mainModel")


//get all items
app.get("/task", function(req,res){
    const tasks = mainModle.list();
    res.json({message:true,data:tasks});

});

//show items
app.get("/task/:id", function(req,res){
    const task = mainModle.show(req.params.id);
    res.json({message:true,data:task});

});


//create item
// app.post("/api/items", function(req,res){
//     req.json({message:"Hello Radit"}, items: items);
// });