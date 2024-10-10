<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
</head>
<body>
    <h1>Vaccine Registration Successful</h1>
    <p>Dear {{ $name }},</p>
    <p>Thank you for registering for the Covid Vaccine.</p>
    <p><strong>NID Number:</strong> {{ $nid }}</p>
    <p><strong>Scheduled Date:</strong> {{ $scheduledDate }}</p>
    <p><strong>Vaccine Center:</strong> {{ $centerName }}</p>
    <p>Please arrive at your scheduled date on time.</p>

    <p>Thank you,<br>The Vaccine Team</p>
</body>
</html>
