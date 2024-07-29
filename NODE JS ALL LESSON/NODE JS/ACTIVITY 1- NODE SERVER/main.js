const express = require("express");
const app = express();

app.listen(4000,() => {
    console.log("listen port 4000");
})

app.get("/radit", (req,res) =>{
    res.send("Hello Radit");
})


const teacherScore = {
    ronan: 45,
    rady: 99,
    him: 50,
    radit: 100,
};

app.get("/results", (req, res) =>{
    let name = req.query.name;
    let score = teacherScore[name];

    res.send("Score for teacher " + " is " + score);
});