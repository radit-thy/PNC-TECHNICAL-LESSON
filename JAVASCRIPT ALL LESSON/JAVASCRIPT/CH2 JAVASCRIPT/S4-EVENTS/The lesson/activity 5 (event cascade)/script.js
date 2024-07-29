// ------------------------------------------------
// 1> Listen only to gand parent click => check we can also click on parent and child
// --------------------------------------------------

function doParent(event) {
  console.log("parent");

}
let parent = document.querySelector(".parent");
parent.addEventListener("click", doParent);

function doChild(event) {
  console.log("child");
}
let child = document.querySelector(".child");
child.addEventListener("click", doChild);


// ------------------------------------------------
// 2> Listen to grand parent + parent + child => understand  why child > parent > grand parent
// --------------------------------------------------

// let grandParent = document.querySelector(".grandParent");
// grandParent.addEventListener("click", (e) => console.log("grand parent"));

// let parent = document.querySelector(".parent");
// parent.addEventListener("click", (e) => console.log("parent"));

// let child = document.querySelector(".child");
// child.addEventListener("click", (e) => console.log("child"));

// ------------------------------------------------
// 3> Use event.stopPropagation() when trigering on child to avoid going to parent and grand parent
// --------------------------------------------------

// let grandParent = document.querySelector(".grandParent");
// grandParent.addEventListener("click", (e) => console.log("grand parent"));

// let parent = document.querySelector(".parent");
// parent.addEventListener("click", (e) => console.log("parent"));

// let child = document.querySelector(".child");
// child.addEventListener("click", (e) => {
//   console.log("child");
//   e.stopPropagation();
// });

// ------------------------------------------------------------------------------------
// 4> Listen to all DIV at the begining - then add a new DIV : check this new div is not listened
// --------------------------------------------------------------------------------------

// let allDiv = document.querySelectorAll("div");
// for (let d of allDiv) {
//   d.addEventListener("click", (e) => console.log("hello"));
// }

// let brother = document.createElement("div");
// brother.className = "brother";
// document.body.appendChild(brother);
