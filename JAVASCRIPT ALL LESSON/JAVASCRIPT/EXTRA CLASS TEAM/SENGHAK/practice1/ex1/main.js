
let input = prompt('inter')
let array = input.split(";")

if (array.length>1){
    for (let i = 0; i < array.length; i++){
        if (array[i] > 9 && array[i] < 100 && ! Result){
            console.log('Valid array')
        }
        else{
            Result= true;
            console.log("Invalid array")
        }
    }if (! Result){
        console.log("okay")
    }
}else{
    console.log("This is array in empty")
}



