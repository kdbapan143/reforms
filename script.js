document.addEventListener('DOMContentLoaded', () => {
  const chatbotButton = document.querySelector('.chatbot-btn');
  const chatbotDialog = document.querySelector('#chatbot-dialog');
  const closeButton = document.querySelector('#close-btn');
  const sendButton = document.querySelector('#send-btn');
  const userInput = document.querySelector('#user-input');
  const chatbotBody = document.querySelector('.chatbot-body');

  chatbotButton.addEventListener('click', () => {
    chatbotDialog.classList.add('show');
    chatbotDialog.style.display = 'block'; /* Add this line to force the dialog box to show */
    userInput.focus(); /* Focus on the input field when the dialog opens */
  });

  closeButton.addEventListener('click', () => {
    chatbotDialog.classList.remove('show');
    chatbotDialog.style.display = 'none'; /* Add this line to force the dialog box to hide */
  });

  sendButton.addEventListener('click', () => {
    const userInputValue = userInput.value.trim();
    let response;

    if (userInputValue.toLowerCase() === 'hello') {
      response = `Hello, Welcome to RESC.`;
    } 
    else if(userInputValue.toLowerCase() === '1'){
      response = 'We take admission for students from class II to XII. We also take College Students.';
    }
    else if(userInputValue.toLowerCase() === 'admission'){
      response = 'We take admission for students from class II to XII. We also take College Students.';
    }
    else if(userInputValue.toLowerCase() === '2'){
      response = 'For Course and Fees Realted Query, please contact us.';
    }
    else if(userInputValue.toLowerCase() === 'fees'){
      response = 'For Course and Fees Realted Query, please contact us.';
    }
    else if(userInputValue.toLowerCase() === 'charges'){
      response = 'For Course and Fees Realted Query, please contact us.';
    }
    else if(userInputValue.toLowerCase() === '3'){
      response = 'Please ask your query!';
    }
    else if(userInputValue.toLowerCase() === 'time'){
      response = 'All Day from 10:00AM to 12:00PM and 5:00PM to 10:00PM (except Sunday)';
    }
    else if(userInputValue.toLowerCase() === 'open time'){
      response = 'All Day from 10:00AM to 12:00PM and 5:00PM to 10:00PM (except Sunday)';
    }
    else {
      response = `Please Contact us for more details`;
    }

    // Display the response in the chatbot body
    const responseElement = document.createElement('p');
    responseElement.textContent = response;
    chatbotBody.appendChild(responseElement);

    // Clear the input field
    userInput.value = '';
    userInput.focus(); // Keep focus on the input field
  });
});


// Close the modal when the user clicks outside of it
window.onclick = function(event) {
  var modal = document.getElementById('registration-form');
  if (event.target == modal) {
      modal.style.display = "none";
  }
}

