
const {readFileSync, writeFileSync} = require('fs');

function getData(filename) {
    return JSON.parse(readFileSync(filename)) || [];
}

function saveData(filename, data) {
    writeFileSync(filename, JSON.stringify(data));
}

module.exports = {getData, saveData};