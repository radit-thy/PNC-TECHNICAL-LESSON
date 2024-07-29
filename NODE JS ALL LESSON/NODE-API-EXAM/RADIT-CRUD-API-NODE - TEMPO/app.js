const express = require("express");
const app = express();

app.use(express.json())
app.use(express.urlencoded({extended: false}))

const PORT = 3000;
app.listen(PORT,(e)=>{
    console.log("Server is runing:"+ PORT);
});

const mainModles = require("./models/mainModels")


//get all data
app.get("/task", function(req,res){
    const tasks = mainModles.getData();
    res.json({message:true, data:tasks});


});

//show data
app.get("/task/:id", function(req,res){
    const tasks = mainModles.showData(req.params.id);
    if(!tasks){
        res.status(404).json({status:false,message:`Not successful for find with ID: ${req.params.id}`})
    }
    res.json({message:true, data:tasks});

});

//delete data
app.delete("/task/:id", function(req,res){
    const tasks = mainModles.deleteData(parseInt(req.params.id));
    if(!tasks){
        res.status(404).json({status:false,message:`Delete Not successful: ${req.params.id}`})
    }
    res.json({status:true,message:"delete successful"});

});

//create data
app.post("/task", function(req,res){

    const tasks = mainModles.createData(req.body);
    // if(!tasks){
    //     res.status(404).json({status:false,message:`Create Not successful: ${req.params.id}`})
    // }
    res.json({status:true,message:"create successful",data:tasks});
    
   

});






