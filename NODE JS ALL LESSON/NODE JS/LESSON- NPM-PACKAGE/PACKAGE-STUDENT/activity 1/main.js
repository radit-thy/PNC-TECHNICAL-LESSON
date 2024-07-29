// 1- Run this main.js :
// ==> why we have the error : Error: Cannot find module 'axios'
// => it can not fnd mudule 'axios' 
// 2- Check the package.json :   how many dependancies do you see ?
// => in dependencies there are one is "axios": "^0.21.1"
// 3- Run  : npm install		to install all dependancies
// => npm install
// 4 - Check now the node_modules contains the axios dependancy

// 5 - Run the program again :
// ==> check it work

const axios = require("axios");

let url = "http://www.omdbapi.com/?apikey=fab8d88e&s=jedi";

axios.get(url).then((response) => {
  console.log(response.data);
});
