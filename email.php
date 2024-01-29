<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "PizzaLover000@protonmail.com"; // Change this to the recipient's email address
    $from_email = "sender@example.com"; // Change this to the sender's email address
    $subject = "Test Email"; // Change this to your subject
    $body = "This is a test email."; // Change this to your message

    // Additional headers
    $headers = "From: $from_email\r\n" .
               "Reply-To: $from_email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to_email, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
    <style>
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }
        h2 {
            text-align: center;
        }
        form {
            text-align: center;
            margin-top: 20px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Send Email</h1>
        <p>From: <?php echo $from_email; ?></p>
        <p>To: <?php echo $to_email; ?></p>
    </header>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="submit" value="Send Email">
    </form>
</body>
</html>
