 const {saveData, getData} = require('../utils/functions');
const {v4: uuidv4} = require('uuid');
 let items = getData('database/items.json');

 function getItems() {
        return items;
 }

 function getItem(id) {
   let item = items.find(item => item.id === id);
   if (item !== undefined) {
      return item;
   } else {
        return {messge: "No such item exists"};
   }
 }

 function createItem(title, description, price) {
    let item = {
        id: uuidv4(),
        title: title,
        description: description,
        price: price,
     }
    items.push(item);
    saveData('database/items.json', items);
 }

 function updateItem(id, item) {
      let index = items.findIndex(item => item.id === id);
     if (index !== -1) {
        items[index] = item;
        item.id = id;
        saveData('database/items.json', items);
        return {message: "updated successfully"};
     } else {
         return {message: "No such item exists"};
     }
 }

 function deleteItem(id) {
   let index = items.findIndex(item => item.id === id);
     if (index !== -1) {
        items.splice(index, 1);
        saveData('database/items.json', items);
        return {message: "deleted successfully"};
     } else {
         return {message: "No such item exists"};
     }
 }

 module.exports = {
    getItems,
     getItem,
     createItem,
     updateItem,
     deleteItem
 }