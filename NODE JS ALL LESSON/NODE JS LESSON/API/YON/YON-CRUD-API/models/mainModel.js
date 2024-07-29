

const fs = require("fs");
function load (){
    return JSON.parse(fs.readFileSync("./database/database.json"));
}

//get data
function list(){
    const tasks = load();
    return tasks;
}

//show data
function show(id){
    const tasks = load();
    const task = tasks.find(task => task.id === id);
    return task;

}


module.exports.list = list;
module.exports.show = show;