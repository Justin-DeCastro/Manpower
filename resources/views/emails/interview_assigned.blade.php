<!DOCTYPE html>
<html>
<head>
    <title>Interview Invitation</title>
</head>
<body>
    <h2>Dear {{ $name }},</h2>
    <p>We are pleased to invite you for an interview for the position of {{ $position }}.</p>
    <p>The details of the interview are as follows:</p>
    <ul>
        <li><strong>Date:</strong> {{ $application->date }}</li>
        <li><strong>Location:</strong> [We will insert the location]</li>
    </ul>
    <p>Please confirm your availability for this interview by responding to this email or contacting us at [Contact Information].</p>
    <p>We have received your application, and we will review it. If your qualifications match our requirements, we will contact you to discuss the next steps.</p>
    <p>We appreciate your interest in joining our team.</p>

    <p>Best regards,</p>
    <p>ABIC Manpower Service Corp</p>
</body>
</html>
