

document.addEventListener('DOMContentLoaded', () => {
    // Select DOM elements
    const submitBtn = document.getElementById('submitBtn');
    const usernameInput = document.getElementById('usernameInput');
    const responseMessage = document.getElementById('responseMessage');

    // Attach click event listener to the submit button
    submitBtn.addEventListener('click', handleVerification);

    /**
     * Handles the verification process when the button is clicked.
     */
    async function handleVerification() {
        const username = usernameInput.value.trim();

        // Check if the input is empty
        if (!username) {
            alert('Please enter a user name.');
            // Clear any previous messages
            responseMessage.textContent = '';
            return; // Stop execution if empty
        }

        try {
            // Disable button to prevent multiple submissions
            submitBtn.disabled = true;
            submitBtn.textContent = 'Verifying...';

            // Prepare form data to send via POST
            const formData = new FormData();
            formData.append('username', username);

            // Send AJAX request using Fetch API
            const response = await fetch('info.php', {
                method: 'POST',
                body: formData
            });

            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }

            // Get the text response from the server
            const result = await response.text();
            
            // Display logic based on the response
            displayResponse(result.trim());

        } catch (error) {
            console.error('Error during verification:', error);
            displayResponse('Error processing request');
        } finally {
            // Re-enable the button
            submitBtn.disabled = false;
            submitBtn.textContent = 'Submit';
        }
    }

    /**
     * Updates the UI based on the server response.
     * @param {string} result - The response string from the server.
     */
    function displayResponse(result) {
        responseMessage.textContent = result;
        
        // Strict requirement: green text for Verified, red text for Error
        if (result === 'Verified') {
            responseMessage.style.color = 'green';
        } else if (result === 'Error') {
            responseMessage.style.color = 'red';
        } else {
            // Fallback for unexpected responses
            responseMessage.style.color = '#333';
        }
    }
});
