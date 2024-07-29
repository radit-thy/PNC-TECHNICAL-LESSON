const express = require('express');
const taskModel = require('./models/task_model');
const app = express();

app.use(express.json())
app.use(express.urlencoded({ extended: false }))

//1.get all task
app.get('/task', function (req, res) {
    //===========//
    const tasks = taskModel.getAllTasks();
    res.send(tasks);
    
});

//2.get or show specific task
app.get('/task/:id', (req, res) => {
    //===========//
    const task = taskModel.show(parseInt(req.params.id));
    if (!task) {
        res.status(404).json({success:false,message:`Can not find any task with ID:${req.params.id}`})
    }
    res.send(task);

});

//3.create task
app.post('/task', (req, res) => {
    //=============//
    const task = taskModel.store(req.body);
    res.status(200).json({success:true,data:task});
})

//4.delete task
app.delete('/task/:id', (req, res) => {

})

//5.update task
app.put('/task/:id', (req, res) => {

})

app.put('/updateStatus/:id',(req,res)=>{
    const task = taskModel.updateStatus(parseInt(req.params.id),req.body);
    if (!task) {
        res.status(404).json({ success: false, message: `can't find any task with ID ${req.params.id}` })
    }
    res.status(200).json({ success: true, data: task });
})

app.put('/task/isComplete/:id',(req,res)=>{
    const task = taskModel.isCompleted(parseInt(req.params.id));
    if (!task) {
        res.status(404).json({ success: false, message: `can't find any task with ID ${req.params.id}` })
    }
    res.status(200).json({ success: true, data: task });
})

app.put('/task/isNotComplete/:id',(req,res)=>{
    const task = taskModel.isNotComplete(parseInt(req.params.id));
    if (!task) {
        res.status(404).json({ success: false, message: `can't find any task with ID ${req.params.id}` })
    }
    res.status(200).json({ success: true, data: task });
})

const port = 3000;
app.listen(port, () => {
    console.log('Server run port:' + port);
});
