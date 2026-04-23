<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Verification</title>
    <style>
        /*CSS Reset and Body Styling */
        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Container for the form to center and style it */
        .verification-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        h2 {
            margin-bottom: 24px;
            color: #333;
        }

        /* Input field Style */
        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        .input-group input:focus {
            outline: none;
            border-color: #4CAF50;
        }

        .submit-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease, transform 0.1s ease;
        }

        .submit-btn:hover {
            background-color: #45a049;
        }

        .submit-btn:active {
            transform: scale(0.98);
        }

        #responseMessage {
            margin-top: 20px;
            font-weight: bold;
            min-height: 24px; 
        }
    </style>
</head>
<body>

    <div class="verification-container">
        <h2>Verify Username</h2>
        
        <div class="input-group">
            <label for="usernameInput">User Name</label>
            <input type="text" id="usernameInput" placeholder="Enter username..." />
        </div>

        <button type="button" id="submitBtn" class="submit-btn">Submit</button>

        <div id="responseMessage"></div>
    </div>

    <!-- AJAX logic script -->
    <script src="verify_ajax.js"></script>
</body>
</html>
