//-----------------Boolean---------------
//================================
//    IS EQUAL, IS GREATER
//================================

// let x, y;
// x = 5;
// y = 5;
// console.log(x === y);


//================================
//         AND / OR / NOT
//================================

// let x, y;
// x = 5;
// y = 5;
// console.log(!(x === y && (x > 5 || y < 10)));


//-----------------Types---------------
//================================
// TYPE CONVERT A STRING TO INTEGER
//================================

// let n;
// n = "5";
// console.log(Number.parseInt(n) + Number.parseInt(n));


//================================
//   ONVERT A INTEGER TO STRING
//================================

// let n;
// n = 5;
// console.log(n.toString() + n.toString());



//-----------------Function---------------

//================================
//     DEFINE A FUNCTION
//================================

// function sum(n1,n2){
//     let total;
//     total = n1 + n2;
//     return total;
// }
// console.log(sum(100,200));


//-----------------Data structures---------------
//array

//================================
//     Create empty array
//================================

// let array, fruits;
// array=[];
// fruits = ["apple","banana"];


//================================
//   Create array with values
//================================

// let array;
// array = [12,13,14,16];


//================================
//      Access using index 
//================================

// let value;
// value = array[2];


//================================
//     Insert value at index 
//================================

// let array = [];
// array.splice(1,20);
// console.log(array)


//================================
//   Insert value  at the end
//================================
// let array = [10,30];
// array.push(20);
// console.log(array)


//================================
//       Remove using index
//================================
// let array = [10, 20 ,30];
// array.pop(2);
// console.log(array)


//================================
//       Get a sub array
//================================
// let array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25];
// let subarray = array.slice(2, 25);

// console.log(subarray);


//array2D
//================================
//   Create array2D with values
//================================
// let array2D = [[12, 13, 15, 16], [4, 5, 6, 7]];
// console.log(array2D);


//================================
//      Access using index
//================================
// let array2D = [
//     [12, 13, 15, 16],
//     [4, 5, 6, 7]
//   ];
  
//   let value = array2D[1][0];
//   console.log(value);


//DICTIONARY
//================================
//    Create empty dictionary
//================================
// let dic = {};


//================================
//   Create array with values
//================================
// let dic = { key1:"value1", key2:"value2" };
// console.log(dic)
 

//================================
//    Access using keyvalue 
//================================
// let dic = { 
//     key1:"value1",
//     key2:"value2" 
// };
// let value = dic["key1"];
// console.log(value); 


//================================
//   Add value for a new key 
//================================
// let dic = { 
//     key1: "value1",
//     key2: "value2" 
// };
// let value = dic["key1"];
// console.log(value);
// // Add value for a new key
// dic["key3"] = "value3";
// console.log(dic);


//================================
// Update  value from existing key 
//================================
// let dic = { 
//     key1: "value1",
//     key2: "value2" 
// };
// let value2New = "new value";
// // Update the value of key2
// dic["key2"] = value2New;
// console.log(dic);


//================================
//      Remove using key 
//================================
let dic = { 
    key1: "value1",
    key2: "value2",
    key3: "value3"
};

// Remove key2 from the object
delete dic["key2"];

console.log(dic);
 


