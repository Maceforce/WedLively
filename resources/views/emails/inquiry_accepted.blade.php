<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Inquiry has been Accepted</title>
</head>
<body>
    <h2>Your Inquiry Has Been Accepted!</h2>

    <p>Hello, {{ $inquiry->planner_name }}</p>
    
    <p>Good news! The vendor has accepted your inquiry for the service <strong></strong>.</p>
    
    <p>Click the link below to proceed with the booking:</p>

    <p>
            <a href="{{ route('service', $inquiry->service_url) }}" style="padding: 10px 15px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px;">
            Book Now
        </a>
    </p>

    <p>Thank you for choosing our services!</p>

    <p>Best regards, <br/> The Team</p>
</body>
</html>
