function Compare(array){
    let isEqual = true;
    let i = 0;
    for (let i = 0; i < array.length; i++){
        if (array[0] === array[i]){
            isEqual = true;
        }
        else{
            return false
        }
    }
    return isEqual;
}
let array = [4,4,4,4];
console.log(Compare(array));


//================== way 2====================
// function Compare(array){
//     let isEqual = true;
//     for (let i = 0; i < array.length; i++){
//         if (array[0] === array[i]){
//             isEqual = true;
//         }
//         else{
//             return false
//         }
//     }
//     return isEqual;
// }
// let array = [4,4,4,4];
// console.log(Compare(array));