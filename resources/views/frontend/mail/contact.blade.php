<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to our platform</title>
    <style>
        /* Inline CSS */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f6f6f6; /* Background color */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .logo {
            max-width: 150px;
            display: block;
            margin: 0 auto 20px;
        }

        .name {
            font-size: 28px;
            color: #333333;
            text-align: center;
            margin-bottom: 10px;
        }

        .salutation {
            font-size: 18px;
            color: #555555;
            text-align: center;
            margin-bottom: 20px;
        }

        .description {
            font-size: 16px;
            color: #777777;
            line-height: 1.6;
            margin-bottom: 30px;
            text-align: justify;
        }

        .button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body style="background-color: #f6f6f6;"> <!-- Background color -->
    <div class="container">
        <!-- Replace 'company-logo.png' with your actual company logo -->
        <img src="{{asset('uploads/setting/logo/'.$setting->site_logo)}}" alt="Company Logo" class="logo">
        <h2 class="name">ITCS</h2>
        <p class="salutation">Dear {{ $contactData['name'] }},</p>
        <p class="description">Thank you for contacting us. We have received your message and will get back to you as soon as possible. If you have any urgent inquiries, please feel free to call us at <a href="tel:{{$setting->contact_no}}">{{$setting->contact_no}}</a> or email us at <a href="mailto:{{$setting->contact_email}}">{{$setting->contact_email}}</a>.</p>
        
        <!-- Button to website -->
        <div style="text-align: center;">
            <a href="https://icts.com" class="button">Visit Our Website</a>
        </div>
    </div>
</body>
</html>
