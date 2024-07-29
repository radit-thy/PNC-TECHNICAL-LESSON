
const  clearInput = () => {
   //TODO: Clear data from input field
   firstName.value = "";
   lastName.value = "";
   province.value = "";
   comment.value = "";


   for(let gender of genders){
      if (gender.checked){
         gender.checked = false;
      }
   }

   for(let skill of skills){
      if (skill.checked){
         skill.checked = false;
      }
   }
}

const createRow = (event) => {
   event.preventDefault();
   // TODO: Create new row with data from input field
   let gender = "Male"
   for (let genderInput of genders){
      if (genderInput.checked){
         gender = genderInput.value
      }
   }
   let allSkill = ""
   for(let skill of skills){
      if (skill.checked){
         allSkill += skill.value + ","
      }
   }

   let tr = document.createElement("tr");
   let tdFirstName = document.createElement("td");
   tdFirstName.textContent = firstName.value;
   let tdLastName = document.createElement("td");
   tdLastName.textContent = lastName.value;
   let tdProvince = document.createElement("td");
   tdProvince.textContent = province.value;
   let tdGender = document.createElement("td");
   tdGender.textContent = gender;
   let tdSkill = document.createElement("td");
   tdSkill.textContent = allSkill;
   let tdComment = document.createElement("td");
   tdComment.textContent = comment.value;

   tr.appendChild(tdFirstName);
   tr.appendChild(tdLastName);
   tr.appendChild(tdProvince);
   tr.appendChild(tdGender);
   tr.appendChild(tdSkill);
   tr.appendChild(tdComment);

   tbody.appendChild(tr);
   clearInput();
}


// Main
const firstName = document.querySelector('#firstname');
const lastName = document.querySelector('#lastname');
const province = document.querySelector('#province');
const genders = document.querySelectorAll('input[type="radio"]');
const skills = document.querySelectorAll('.skill');
const comment = document.querySelector('#comment');
const tbody = document.querySelector('tbody');
const btnSubmit = document.querySelector('button');

// TODO: add event listeners to submit button
btnSubmit.addEventListener("click", createRow)