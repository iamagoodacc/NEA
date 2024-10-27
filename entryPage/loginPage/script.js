async function sha256(message) {
    // encode the message as a Uint8Array
    const msgUint8 = new TextEncoder().encode(message);
    
    // hash the message using SHA-256
    const hashBuffer = await crypto.subtle.digest('SHA-256', msgUint8);
    
    // convert the hash to a hexadecimal string
    const hashArray = Array.from(new Uint8Array(hashBuffer));
    const hashHex = hashArray.map(byte => byte.toString(16).padStart(2, '0')).join('');
    
    return hashHex;
}

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
    const passwordInput = document.getElementById('passwordInput');
    const signInButton = document.getElementById('signInButton');
    const createAccountButton = document.getElementById('createAccountButton')
    const forgottenPasswordButton = document.getElementById('forgottenPasswordButton')
  
    signInButton.addEventListener('click', function() {
      var email = emailInput.value;
      var password = passwordInput.value;
  
      const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
      if (!emailRegex.test(email)) {
        sendError('Please enter a valid email!');
        return;
      }
      if (password.length < 8) {
        sendError('Password length must be at least 8 characters');
        return;
      }
      const passwordRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;
      if (!passwordRegex.test(password)) {
        sendError('Password must contain atleast one uppercase, number and punctuation mark');
        return;
      }

      sha256(password).then(hashHex => {
        password = hashHex

        const formData = {
          email: email,
          password: password
        };
  
        // make an AJAX request to server
        fetch('login.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(formData)
        })
        .then(response => {
          if (!response.ok) {
            // Handle non-2xx HTTP status codes
            return response.json().then(errorData => {
              throw new Error(errorData.message);
            });
          }

          const contentType = response.headers.get('content-type')
          if (contentType.includes('application/json')) {
            return response.json();
          } else if (contentType.includes('text/html')) {
            return response.text();
          } else {
            // Handle other content types if necessary
            return response.text(); // Default to text
          }
        })
        .then(text => {
          // handle the text data
          console.log(text);
        })
        .catch(error => {
          // handle errors
          console.error('There was a problem with the fetch operation:', error);
          sendError(error);
        });
      })
    });

    createAccountButton.addEventListener('click', function() {
      window.location.href = '../signUpPage/page.php';
    });

    forgottenPasswordButton.addEventListener('click', function() {
      window.location.href = '../forgottenPasswordPage/page.php';
    });
  });
  