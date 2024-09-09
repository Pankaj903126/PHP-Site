<?php
// Basic PHP landing page

// Start output buffering
ob_start();

// PHP code can dynamically generate content here
$today = date("l, F j, Y");

// Output the HTML content
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Simple PHP Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
        }
        .landing-content {
            text-align: center;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            background-color: #fff;
            border-radius: 8px;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
        .cta-button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }
        .cta-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class='container'>
    <div class='landing-content'>
        <h1>Welcome to Our Landing Page</h1>
        <p>Your one-stop solution for all your needs.</p>
        <p>Today is $today</p>
        <a href='#' class='cta-button'>Get Started</a>
    </div>
</div>

</body>
</html>
";

// End output buffering and flush the output
ob_end_flush();
?>
