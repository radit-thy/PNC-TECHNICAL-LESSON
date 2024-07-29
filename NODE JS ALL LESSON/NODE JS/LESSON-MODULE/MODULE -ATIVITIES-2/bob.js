let fs = require("fs");
let content = 
fs.readFileSync("bob.txt").toString();

console.log(content);