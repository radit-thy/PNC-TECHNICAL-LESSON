// DOMS ELEMENTS  ---------------------------------------------------------
const dom_start = document.querySelector("#start");
const dom_quiz = document.querySelector("#quiz");
const dom_question = document.querySelector("#question");
const dom_choiceA = document.querySelector("#A");
const dom_choiceB = document.querySelector("#B");
const dom_choiceC = document.querySelector("#C");
const dom_choiceD = document.querySelector("#D");

const dom_score = document.querySelector("#score");

// DATA  ---------------------------------------------------------
let questions = [
  {
    title: "What does HTML stand for1?",
    choiceA: "Hi Thierry More Laught",
    choiceB: "How To move Left",
    choiceC: "Ho Theary Missed the Laundry !",
    choiceD: "Hypertext Markup Language",
    correct: "D",
  },
  {
    title: "What does CSS stand for2?",
    choiceA: "Cisco and Super Start",
    choiceB: "Ci So Sa",
    choiceC: "Cascading Style Sheets ",
    choiceD: "I don't know !",
    correct: "C",
  },
  {
    title: "What does JS stand for3?",
    choiceA: "Junior stars",
    choiceB: "Justing Star",
    choiceC: "Javascript",
    choiceD: "RonanScript",
    correct: "C",
  },
];

let runningQuestionIndex = 0;
let score = 0;

// FUNCTIONS ---------------------------------------------------------

// Hide a given element
function hide(element) {
  element.style.display = "none";
}

// Show a given element
function show(element) {
  element.style.display = "block";
}

// Render a question
function renderQuestion() {
  // TODO  1 - Get the question at the current index
  let question = questions [runningQuestionIndex]
  // TODO  2 - Update the DOM to display the question title and 4 choices
    dom_question.textContent = question.title;
    dom_choiceA.textContent = question.choiceA;
    dom_choiceB.textContent = question.choiceB;
    dom_choiceC.textContent = question.choiceC;
    dom_choiceD.textContent = question.choiceD;
  
  console.log(question)

  
}

// Start quiz
dom_start.addEventListener("click", (e) => {
  // Update the question view
  renderQuestion();

  // Display the question view, and hide the start
  hide(start);
  show(dom_quiz);
});

// checkAnwer
function checkAnswer(answer) {
  if (answer == questions[runningQuestionIndex].correct) {
    score++; // Increase the score
  }

  if (runningQuestionIndex < questions.length - 1) {
    runningQuestionIndex++;
    renderQuestion(); // Show the next question
  } else {
    renderSCore(); // end the quiz and show the score
  }
}

// score render
function renderSCore() {
  hide(dom_quiz);
  show(dom_score);

  // TODO calculate the amount of question percent answered by the user
  const scorePerCent = 80; // TODO to change

  // choose the image based on the scorePerCent
  comment = "AMAZING !";
  image = "img/100.png";

  if (scorePerCent <= 20) {
    comment = "HUMM !";
    image = "img/20.png";
  } else if (scorePerCent <= 40) {
    comment = "YOU CAN IMPROVE !";
    image = "img/40.png";
  } else if (scorePerCent <= 60) {
    comment = "NOT BAD !";
    image = "img/60.png";
  } else if (scorePerCent <= 80) {
    comment = "GOOD !";
    image = "img/80.png";
  }
  dom_score.innerHTML = "<img src=" + image + ">";
  dom_score.innerHTML += "<p>" + comment + " : " + scorePerCent + " %</p>";
}
