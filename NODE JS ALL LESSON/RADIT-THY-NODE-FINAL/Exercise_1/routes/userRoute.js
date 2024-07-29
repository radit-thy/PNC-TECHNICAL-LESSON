const express = require('express');
const router = express.Router();
const {getData} = require('../utils/functions');

let users = getData('./database/users.json');

router.get('/', (req, res) => {
    res.json({
        isSuccess: true,
        message: 'User data fetched successfully',
        data: users
    });
 });

 module.exports = router;