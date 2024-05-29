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
    const usernameInput = document.getElementById('usernameInput');
    const passwordInput = document.getElementById('passwordInput');
    const signInButton = document.getElementById('signUpButton');
  
    signInButton.addEventListener('click', function() {
      const username = usernameInput.value;
      const password = passwordInput.value;
  
      const formData = {
        username: username,
        password: sha256(password)
      };

      console.log(formData)
  
      // make an AJAX request to server
      fetch('submit.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(formData)
      })
      .then(response => {
        // handle response from server (e.g., show success or error)
        if (response.ok) {
          console.log('Form submitted successfully!');
        } else {
          console.error('Error submitting form');
        }
      })
      .catch(error => {
        console.error('Error:', error);
      });
    });
  });
  