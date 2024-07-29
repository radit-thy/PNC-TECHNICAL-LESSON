const express = require("express");
const app = express();
const PORT = 3000;

app.use(express.json())
app.use(express.urlencoded({extended: false}))

app.listen(PORT,(e)=>{
    console.log("Server is runing:"+ PORT);
});

const mainModels = require("./models/mainModels");

//get all data
app.get("/student", function(req,res){
    const students = mainModels.getData();
    res.json({status:200,message:true, data:students})

});
//show data
app.get("/student/:id", function(req,res){
    const students = mainModels.showData(parseInt(req.params.id));
    res.json({status:200,message:true, data:students})

});

//delete data
app.delete("/student/:id", function(req,res){
    const items = mainModels.deleteData(parseInt(req.params.id));
    if(!items){
        res.json({status:false,message:"Not delete successful"});
    }
    res.json({status:true,message:"delete successful"});

});

// create data
app.post("/student/create", function(req,res){
    const items = mainModels.createData(req.body);
    if(!items){
        res.json({status:false,message:"create not successful"});
    }
    res.json({status:true,message:"craeate successful"});
});

//update data
app.put("/student/:id", function(req,res){
    const items = mainModels.updateData(parseInt(req.params.id),req.body);
    res.json({status:true,message:"update successful"});
    

});





