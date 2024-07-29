// create a new card

function createCard() {
  const card = document.createElement('div');
  card.classList.add('card');

  // TODO CARD BODY 
  // Create a div named "cardBody"
  // Add class name "card-body" to cardBody
  // append cardBody to card 
  const cardBody = document.createElement('div');
  cardBody.classList.add('card-body');
  card.appendChild(cardBody)


  // TODO CARD IMAGE 
  // create a img named cardImage
  // add src images/sample.png to the cardImage 
  // append cardImage to cardBody 
  const cardImage = document.createElement('img');
  cardImage.src = "images/sample.png"
  cardBody.appendChild(cardImage)



  //  TODO CARD TEXT 
  // Create a p named cardText
  // add text above to cardText
  // text = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, atque."
  // append cardText to cardBody
  const cardText = document.createElement('p');
  cardText.textContent = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, atque."
  cardBody.appendChild(cardText)
  

  // TODO CARD FOOTER 
  // create a div named cardFooter
  // add class name "card-footer" to cardFooter
  // append cardFooter to  card
  const cardFooter = document.createElement('div');
  cardFooter.className = "card-footer"
  card.appendChild(cardFooter)


  // TODO BUTTON IN CARD FOOTER 
  // create a button named cardButton
  // add class name "button" to cardButton
  // add text content "Add Card" to cardButton 
  // append cardButton to cardFooter 
  const cardButton = document.createElement('button');
  cardButton.textContent = "Add Card"
  cardFooter.appendChild(cardButton)


  // add card to containers
  container.appendChild(card)
}


// Main
const btnCreate = document.querySelector('#create');
const container = document.querySelector('.container');

btnCreate.addEventListener('click', createCard);