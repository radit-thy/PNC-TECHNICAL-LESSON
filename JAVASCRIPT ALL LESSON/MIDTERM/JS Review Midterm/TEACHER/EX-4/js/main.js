
const viewImage = (event) => {

   const view = document.querySelector('.view');
   view.remove();

   const newView = document.createElement('div');
   newView.className = 'view';

   let img = event.currentTarget.firstElementChild.firstElementChild.src;
   let title = event.currentTarget.firstElementChild.nextElementSibling.firstElementChild.textContent;
   let description = event.currentTarget.firstElementChild.nextElementSibling.firstElementChild.nextElementSibling.textContent;

   let newImg = document.createElement('img');
   newImg.classList.add('view-img');
   newImg.src = img

   let newTitle = document.createElement('h1');
   newTitle.textContent = title;

   let newDescription = document.createElement('p');
   newDescription.textContent = description;
  
   newView.appendChild(newImg);
   newView.appendChild(newTitle);
   newView.appendChild(newDescription);

   right.appendChild(newView);
}


// Main 
const posters = document.querySelectorAll('.poster');
const right = document.querySelector('.right');
for (let poster of posters) {
   poster.addEventListener('click', viewImage)
}