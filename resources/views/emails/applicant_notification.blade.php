<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Applicant Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333333;
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        .message {
            background-color: #f0f0f0;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hello, {{ $data['name'] }}</h2>
        <div class="message">
            <p>Thank you for your application. Here what we received:</p>
            <ul>
                <li><strong>Name:</strong> {{ $data['name'] }}</li>
                <li><strong>Phone:</strong> {{ $data['phone'] }}</li>
                <li><strong>Email:</strong> {{ $data['email'] }}</li>
            </ul>
            <p>We will review your application and will get back to you shortly.</p>
        </div>
    </div>
</body>
</html>
