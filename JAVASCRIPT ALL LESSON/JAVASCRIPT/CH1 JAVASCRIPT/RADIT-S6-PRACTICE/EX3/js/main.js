// let arrOne = [1, 3, 6, 7, 9];
// let arrTwo = [4, 3, 5, 9, 1];
// sum = 0;
// for ( i = 0 ; i < arrTwo.length; i++){
//     if( arrTwo[i] < arrOne[i]){
//         arrTwo[i] = arrOne[i];
//     }
// }

// console.log(arrTwo);



//===============correction teacher===========

let newArr = [];
let arr1 = [2, 5, 6]; 
let arr2 = [3, 1, 4]; 
for (let i = 0; i < arr1.length; i++){ 
  if (arr1[i] > arr2[i]){
    newArr.push(arr1[i])
  }else{
    newArr.push(arr2[i])
  }
}; 
console.log(newArr);