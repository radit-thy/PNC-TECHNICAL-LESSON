let findAverage = (number) =>{
    let x = 0;
    let k = number.length;
    let j = 0;
    for (let i = 0 ; i < k ; i +=1){
        x += Number(number[i]);
    }
    j = x / k;
    return j
}
let sting = '123456789';
console.log(findAverage(sting));



