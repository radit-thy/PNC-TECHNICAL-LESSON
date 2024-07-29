const {readFileSync} = require('fs');

function getData(filename)
{
    return JSON.parse(readFileSync(filename)) || [];
}


module.exports = {getData}