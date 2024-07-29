// TODO 
//===================My code======================
// function changeColor() {
//     if ('button'){
//         document.body.style.background = "red";
//     }
//     if ('p'){
//         document.body.style.background = "oragne";
//     }
//     if ('div'){
//         document.body.style.background = "teal";
//     }
    
// }
// const btn = document.querySelector('button');

// const paragraph = document.querySelector('p');

// const div = document.querySelector('div');

// btn.addEventListener('click', changeColor);
// paragraph.addEventListener('click', changeColor);
// div.addEventListener('click', changeColor);



//=================teacher code======================
const btn = document.querySelector('button');
const paragraph = document.querySelector('p');
const div = document.querySelector('div');

btn.addEventListener('click', function() {
    document.body.style.background = "red";
});
paragraph.addEventListener('click', () =>{
    document.body.style.background = "orange";

});
div.addEventListener('click', function () {
    document.body.style.background = "teal";
});



