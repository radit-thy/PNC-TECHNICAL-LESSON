function ConditionTrue (array) {
    let isEqual = true;
    let i = 0;
    while ( isEqual &&  i< array.length){
        if (array[0] === array[i]){
            isEqual = true;
        }else{
            isEqual = false;
        }
        i++ ;
    }
    return isEqual;
}
let array = [4,4,4,4];
console.log(ConditionTrue(array));