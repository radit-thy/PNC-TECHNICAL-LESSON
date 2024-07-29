
// Remove row functions from the table
const removeRow = (event) => {
   // TODO: Remove row with confirmation message when click on remove button
   let rightBox = document.querySelector('.right-box');

   let userList = document.querySelector('.user-list')
   

   
   
   
}

const viewUser = (event) => {
// View user information in list 
    // TODO: View user information in list by click on view button
}

// Main
const leftBox = document.querySelector('.left-box');
const btnViews = document.querySelectorAll('.view');
const btnRemoves = document.querySelectorAll('.remove');

// console.log(leftBox)

// TODO: Add Event listeners to remove button


// TODO: Add event listeners to view button

for (const button of buttons) {
    button.addEventListener('click', removeRow)
}
