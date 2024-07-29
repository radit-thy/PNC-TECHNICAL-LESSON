// DOMS ELEMENTS  ---------------------------------------------------------
const dom_start = document.querySelector("#start");
const dom_quiz = document.querySelector("#quiz");
const dom_score = document.querySelector("#scoreContainer");

// FUNCTIONS ---------------------------------------------------------

// Hide the given element
function hide(element) {
  element.style.display = 'none';
  

  // TODO
}

// SHow the given element
function show(element) {
  // TODO
  element.style.display = 'block'
}

// FUNCTIONS ---------------------------------------------------------
// show(dom_start);
// hide(dom_quiz);
// hide(dom_score);

dom_start.addEventListener('click', ()=>{
  hide(start);
  show(dom_quiz);

})
