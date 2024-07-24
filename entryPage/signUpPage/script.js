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

document.addEventListener('DOMContentLoaded', function() {
  const emailInput = document.getElementById('emailInput');
  const passwordInput = document.getElementById('passwordInput');
  const confirmPasswordInput = document.getElementById('confirmPasswordInput')
  const signUpButton = document.getElementById('signUpButton');
  const hasAccountButton = document.getElementById('hasAccountButton')

  signUpButton.addEventListener('click', function() {
    var email = emailInput.value;
    var password = passwordInput.value;
    var confirmPassword = confirmPasswordInput.value;

    if (password == confirmPassword) {
      sha256(password).then(hashHex => {
        password = hashHex

        const formData = {
          email: email,
          password: password
        };

        // make an AJAX request to server
        fetch('signUp.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(formData)
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
      })
    }
  });

  hasAccountButton.addEventListener('click', function() {
    window.location.href = '../loginPage/page.php';
  });
});
