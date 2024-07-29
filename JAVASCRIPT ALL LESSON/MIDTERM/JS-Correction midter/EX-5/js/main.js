
// Remove row functions from the table
const removeRow = (event) => {
    event.preventDefault();
    if(confirm("Do you want to delete?") == true){
        event.target.parentElement.parentElement.remove();
    }
   // TODO: Remove row with confirmation message when click on remove button
}

// View user information in list 
const viewUser = (event) => {
    event.preventDefault();
    // TODO: View user information in list by click on view button
    let tr = event.target.parentElement.parentElement.children;
    let index = 0;
    for (let data of tr){
        if (index < tr.length - 1){
            let li = document.createElement("li");
            li.textContent = data.textContent;
            leftBox.children[1].appendChild(li)
        }
        index++;
    }
}

// Main
const leftBox = document.querySelector('.left-box');
const btnViews = document.querySelectorAll('.view');
const btnRemoves = document.querySelectorAll('.remove');

// TODO: Add Event listeners to remove button


// TODO: Add event listeners to view button
for (let btnView of btnViews){
    btnView.addEventListener("click", viewUser);
    
}
for (let btnRemove of btnRemoves){
    btnRemove.addEventListener("click", removeRow);
}