let buttons = document.querySelectorAll('button');
function removeTable(event) {
    console.log(event.target.closest('tr'));
    let isConfrim = confirm('Are you want to delete?')
    console.log(isConfrim);
    let tableRow = event.target.closest('tr');
    if (isConfrim) {
        tableRow.remove()
    }
}
for (const button of buttons) {
    button.addEventListener('click', removeTable)
}






















