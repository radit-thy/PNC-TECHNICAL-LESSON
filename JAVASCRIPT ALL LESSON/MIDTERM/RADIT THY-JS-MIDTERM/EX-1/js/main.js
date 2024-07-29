const createPoster = () => {
   // TODO: Create poster here;

   let poster = document.createElement('div');
   poster.className = 'poster';

   let poster_img = document.createElement('div');
   poster_img.className = 'poster-img';

   let img = document.createElement('img');
   img.src = 'images/poster.jpg';

   let poster_text = document.createElement('div');
   poster_text.className = 'poster-text';

   let h1 = document.createElement('h1');
   h1.textContent = 'កង្រីជាតិថ្មី';

   let p = document.createElement('p');
   p.textContent = 'រឿងព្រេងខ្មែរ​ ជារឿងនិទានប្រកបដោយគតិអប់រំទាក់ទិននឹងសីលធម៌សង្គម និងសៀវភៅរូបភាពសំរាប់កុមារជាដើម។';

   poster.appendChild(poster_img);
   poster_img.appendChild(img);
   poster.appendChild(poster_text);
   poster_text.appendChild(h1);
   poster_text.appendChild(p);

   return poster

}

// Main code 
const container = document.querySelector('.container');
// TODO:  Call function to create 10 poster here
for (let i = 0; i < 10; i++) {
   container.appendChild(createPoster());
}
container.appendChild(poster)