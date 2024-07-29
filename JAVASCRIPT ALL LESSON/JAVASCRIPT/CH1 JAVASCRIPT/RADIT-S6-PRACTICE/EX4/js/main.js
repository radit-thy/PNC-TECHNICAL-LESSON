
// let arr = [1, 3, 6, 7, 9];
// let MaxNumber = arr[0];
// for ( let i =0 ; i< arr.length; i++){
//     if( arr[i]>MaxNumber){
//         MaxNumber = arr[i];
//     }
// }
// for (let i = 0; i< arr.length; i++){
//     if (arr[i]<5){
//         arr[i]= MaxNumber
//     }
// }
// console.log(arr)
// output: [9, 9, 6, 7, 9]


//===================CORRECTION CODE FROM TEACHER===================

let newArr = [];
let arr1 = [2, 5, 6]; 
let arr2 = [3, 1, 4]; 
for (let i = 0; i < arr1.length; i++){ 
  if (arr1[i] > arr2[i]){
    if (arr1[i] < 5){
      newArr.push(8)
    }else{
      newArr.push(arr1[i])
    }
  }else{
    if (arr2[i] < 5){
      newArr.push(8)
    }else{
      newArr.push(arr2[i])
    }
  }
}; 
console.log(newArr);



