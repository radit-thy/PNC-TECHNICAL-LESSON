const express = require('express');
const router = express.Router();
const {getTodo} = require('../models/todoModel');
router.get('/', (req, res) => {
    res.json(getTodo());
 });

 module.exports = router;