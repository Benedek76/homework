// Choose at random variants A or B.
function chooseVariant() {

    // Generate a random number between 0 and 1.
    const randomNumber = Math.random();

    // If the number generated is less than 0.5, it is variant A.
    if (randomNumber < 0.5) {
        return 'A';
    } 
    // By the way, variant B.
    else {
        return 'B';
    }
}

// Applying the style of the button depending on the A/B test variant.
function applyVariant() {
  
    const variant = chooseVariant();
    // Select item button.
    var button = document.getElementById('testButton');
    // Set the style of the button to the color of variant A.
    if (variant === 'A') {
        button.style.backgroundColor = 'blue'; 
    } 
    // Set the style of the button to the color of variant A.
    else {
        button.style.backgroundColor = 'red'; 
    }
    // Click event on the button.
    button.addEventListener('click', function() {
        // Send the results of the A/B test
        sendABTestResult(variant);
    });
}

function sendABTestResult(variant) {
    // Get the CSRF token from the meta tag.
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    // Send a POST request to the server with the selected variant.
    fetch('/homework/public/log-variant', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': token   // Include the CSRF token in the request headers.
        },
        body: JSON.stringify({ variant: variant }),
    })
    .then(response => {
        if (response.ok) {
            // If the response is successful, log a success message.
            console.log('A/B test result successfully logged.');
        } else {
            // If the response is not successful, log an error message.
            console.error('Failed to log A/B test result.');
        }
    })
    .catch(error => {
        // Log any errors that occur during the fetch request.
        console.error('Error logging A/B test result:', error);
    });
}

// Wait for the DOM to fully load before executing the script.
document.addEventListener('DOMContentLoaded', function() {
    // Randomly select variant A or B.
    var selectedVariant = Math.random() < 0.5 ? 'A' : 'B';
    // Get the button element by its ID.
    var button = document.getElementById('testButton');
    // Set the button's background color based on the selected variant.
    button.style.backgroundColor = selectedVariant === 'A' ? 'blue' : 'red';

    // Add an event listener to the button to log the A/B test result when clicked.
    button.addEventListener('click', function() {
        sendABTestResult(selectedVariant);
    });
});
