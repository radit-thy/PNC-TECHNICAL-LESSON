// TODO
// GET URL https://reqres.in/api/unknown/23

function afterRespone(response){
    console.log(response);
    
};

function afterError(error){
    console.log(error);
    let p = document.querySelector('#theText');
    p.textContent = "SORRY WE ARE SLEEPY!";
    document.querySelector('#theText').style.color='red';

};
let btn = document.querySelector('button');
btn.addEventListener('click',function(){
    let request = ": https://reqres.in/api/unknown/23";
    axios.get(request).then(afterRespone).catch(afterError);
});
