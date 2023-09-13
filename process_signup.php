<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first_name = $_POST["first_name"];
    $email = $_POST["email"];
    
    // Create a new HTML file with the user's first name
    $filename = $first_name . ".html";
    
    // Generate the HTML content
    $html_content = "<html>
    <head>
        <title>User Profile</title>
    </head>
    <body>
        <h1>Welcome, $first_name!</h1>
        <p>Email: $email</p>
    </body>
    </html>";
    
    // Save the HTML content to the file
    file_put_contents($filename, $html_content);
    
    // Redirect the user to a success page
    header("Location: signup_success.html");
    exit;
}
?>
