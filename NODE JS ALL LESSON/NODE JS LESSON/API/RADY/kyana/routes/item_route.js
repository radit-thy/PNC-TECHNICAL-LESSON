const express = require('express');
const router = express.Router();
const {
    getItems,
    getItem,
    createItem,
    updateItem,
    deleteItem
} = require('../models/item_model');

// Get All
router.get('/', (req, res) => { 
    res.json(getItems())
});

// get one
router.get('/:id', (req, res) => {
    let id = req.params.id;
    res.json(getItem(id));
    
})

// Create
router.post('/', (req, res) => {
    //destructuring
    const {title, description, price} = req.body;
    // let title = req.body.title;
    // let description = req.body.description;
    // let price = req.body.price;
    createItem(title, description, price);
    res.json({
        message: "Item created successfully"
    })
})

// update
router.put('/:id', (req, res) => {
    let id = req.params.id
    let item = req.body;
    res.json(updateItem(id, item));
})

// delete 
router.delete('/:id', (req, res) => {
    let id = req.params.id;
    res.json(deleteItem(id));
})
module.exports = router;