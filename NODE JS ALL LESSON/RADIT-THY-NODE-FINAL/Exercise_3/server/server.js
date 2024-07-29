const express = require('express');
const app = express();
// TODO: How to use cors modules here?
const cors = require('cors');
app.use(cors({
    origin: 'https://www.section.io'
}));
app.listen(process.env.PORT || 3000);
app.get('/', function(req, res) {
    res.json({
        status: 200,
        message: 'Welcome to the API',
        endpoint: '/api/v1/todos'
    })
});

const todoRoute = require('./routes/todoRoute');
app.use('/api/v1/todos', todoRoute);