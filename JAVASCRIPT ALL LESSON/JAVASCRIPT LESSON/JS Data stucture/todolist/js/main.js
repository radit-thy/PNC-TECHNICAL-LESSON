let container = document.querySelector('.container');
container.className = 'container';

let row1 = document.createElement('div');
row1.className = 'row';

let col= document.createElement('div');
col.className = 'col-6 mt-5';

let h2 = document.createElement('h2');
h2.textContent = 'All tasks';

let row2 = document.createElement('div');
row2.className = 'row'; 

let card= document.createElement('div');
col.className = 'card p-4 border-danger mt-2';

let span = document.createElement('span');

let input = document.createElement('input');
input.type = 'checkbox';

let p = document.createElement('p');
p.textContent = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. tiae voluptates labore?';

let a = document.createElement('a');
a.href = 'google.come';
a.textContent = 'Read more';

let button = document.createElement('button');
button.className = 'btn btn-danger';
button.textContent = 'Delete';

container.appendChild(row1);
row1.appendChild(h2);
row1.appendChild(col);
col.appendChild(row2);
row2.appendChild(card);
card.appendChild(span);
span.appendChild(input);
span.appendChild(p);
span.appendChild(a);
card.appendChild(button)

for (i = 0 ; i <3 ; i ++){
    
}