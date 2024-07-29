const {getData} = require('../utils/functions');
let todos = getData('./database/todos.json');

function getTodo() {
    return {
        isSuccess: true,
        message: 'User data fetched successfully',
        data: todos
    }
}

module.exports = {getTodo};