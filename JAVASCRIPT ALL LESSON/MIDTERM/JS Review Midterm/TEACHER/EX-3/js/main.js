
const removePoster = (event) => {
    let poster = event.target.closest('.poster');
    let isRemove = window.confirm('Are you sure you want to remove this poster');
    if (isRemove) {
        poster.remove();
    }
}


// Main 
const buttons = document.querySelectorAll('button');
for (let button of buttons) {
    button.addEventListener('click',  removePoster);
}