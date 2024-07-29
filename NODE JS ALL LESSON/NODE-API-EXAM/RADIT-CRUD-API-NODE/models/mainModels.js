
const fs = require("fs");
function load(){
    return JSON.parse(fs.readFileSync("./database/databases.json"));
}

//save data
function saveData(data){
    fs.writeFileSync("./database/databases.json", JSON.stringify(data));
}


//get all data
function getData(){
    const items = load();
    return items;
}

//show data
function showData(id){
    const items = load();
    const item = items.find(item => item.id === id);
    return item;
}

//delete data
function deleteData(id){
    const items = load();
    const index = items.findIndex(item => item.id === id);
    if(index !== -1){
        items.splice(index, 1);
        saveData(items);
    return true;
    }

}

//create data
function createData(data){
    const items = load();
    const newItems = {

        "id":items[items.length-1].id+1, 
        "name":data.name, 
        "age": data.age,
    }
    items.push(newItems);
    saveData(items);
    return newItems;
}

//update data
function updateData(id,data){
    const items = load();
    const index = items.findIndex(task => task.id === id);
    if(index !== -1){
        console.log(items[index]);
    }



    // console.log(id);
    // console.log(data);
}

module.exports.getData = getData;
module.exports.showData = showData;
module.exports.deleteData = deleteData;
module.exports.createData = createData;
module.exports.updateData = updateData;

