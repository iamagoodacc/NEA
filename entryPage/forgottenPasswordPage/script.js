async function sendError(error) {
  if (typeof(error) === 'string') {
    const container = document.getElementById("errorContainer");
    const errorMessage = document.createElement("div")
    errorMessage.innerHTML = error
    errorMessage.classList.add('errorMessage')
    container.insertBefore(errorMessage, container.firstChild)
    setTimeout(() => {
      errorMessage.remove()
    }, 750);
  } else {
    console.error("Error message needs to be a string")
  }
}

document.addEventListener('DOMContentLoaded', function() {
    const emailInput = document.getElementById('emailInput');
    const requestButton = document.getElementById('requestButton');
    const returnButton = document.getElementById('returnButton')
    
    requestButton.addEventListener('click', function() {
      var email = emailInput.value;
  
      const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
      if (!emailRegex.test(email)) {
        sendError('Please enter a valid email!');
        return;
      }

      fetch('forgottenPassword.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({"email": email})
      })
      .then(response => {
        return response.text()
      })
      .then(text => {
        // handle the text data
        console.log(text);
      })
      .catch(error => {
        // handle errors
        console.error('There was a problem with the fetch operation:', error);
      });
    });
    
    returnButton.addEventListener('click', function() {
      window.location.href = '../loginPage/page.php';
    });
  })