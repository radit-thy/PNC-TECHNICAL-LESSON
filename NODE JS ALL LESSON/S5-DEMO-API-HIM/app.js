const express = require ("express");
const app = express();
const fs = require("fs");
const cors = require("cors");
const PORT = 3000;


app.use(express.static("public"));
app.use(cors({origin:"*"}));

app.use(express.urlencoded());
app.use(express.json());

let data = JSON.parse(fs.readFileSync("database.json"));

//function save data//
function save(){
    fs.writeFileSync("database.json",JSON.stringify(data));
}

app.listen(PORT, (e)=>{
    console.log("Server is running");
})

app.get('/students',(req,res)=>{ 
    res.json({status: 200, message:"Request Successfully",data: data});
});



//CREATE DATA
app.post("/student/create", (req, res) =>{
    // res.send(req.body);

    let student = req.body;
    data.push(student);
    save();
    res.json({status:200, message:"Student created",student:student});
});

//DELETE THE DATA (from json)//
app.delete("/student/delete/:id", (req,res) =>{
    let id = req.params.id;
    if(data.length > id){
        data.splice(id,1);
        save();
        res.json({status:200, message: "Student delete successfull"})
    }else{
        res.json({status:200, message: "Student not found "})
    }


});

//EDIT THE DATA (from json)//
app.put("/student/edit/:id", (req,res) =>{
    let id = req.params.id;
    if(id >=0 && id < data.length){
        data[id] = req.body;
        save();
        res.json({status:200, message: "Student edit successfull"})
    }else{
        res.json({status:200, message: "Student edit not successfull "})
    }


});

