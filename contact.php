<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Validation
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    
    if (empty($subject)) {
        $errors[] = "Subject is required";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    // Process if no errors
    if (empty($errors)) {
        // In a real application, you would send an email here
        // For this example, we'll just save to a file and show success message
        
        $to = "john.doe@example.com";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        
        $email_content = "
        <html>
        <head>
            <title>$subject</title>
        </head>
        <body>
            <h2>Contact Form Submission</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong></p>
            <p>$message</p>
        </body>
        </html>
        ";
        
        // Save to file for demonstration (in real app, use mail() function)
        $file_content = "Date: " . date("Y-m-d H:i:s") . "\n";
        $file_content .= "Name: $name\n";
        $file_content .= "Email: $email\n";
        $file_content .= "Subject: $subject\n";
        $file_content .= "Message: $message\n";
        $file_content .= "-------------------------\n";
        
        file_put_contents("contact_messages.txt", $file_content, FILE_APPEND);
        
        $success = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="index.php" class="logo">JD</a>
            <ul class="nav-links">
                <li><a href="index.php#home">Home</a></li>
                <li><a href="index.php#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section class="contact-result">
        <div class="container">
            <div class="result-card">
                <?php if (isset($success) && $success): ?>
                    <div class="result-success">
                        <i class="fas fa-check-circle"></i>
                        <h2>Message Sent Successfully!</h2>
                        <p>Thank you, <strong><?php echo $name; ?></strong>. Your message has been received.</p>
                        <p>I'll get back to you at <strong><?php echo $email; ?></strong> as soon as possible.</p>
                        <a href="index.php" class="btn btn-primary">Back to Portfolio</a>
                    </div>
                <?php elseif (!empty($errors)): ?>
                    <div class="result-error">
                        <i class="fas fa-exclamation-circle"></i>
                        <h2>Oops! There was a problem.</h2>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="index.php#contact" class="btn btn-secondary">Try Again</a>
                    </div>
                <?php else: ?>
                    <div class="result-info">
                        <i class="fas fa-info-circle"></i>
                        <h2>Form Submission Page</h2>
                        <p>This page processes contact form submissions.</p>
                        <a href="index.php#contact" class="btn btn-primary">Go to Contact Form</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <style>
        .contact-result {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .result-card {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        .result-success i {
            font-size: 4rem;
            color: #2ecc71;
            margin-bottom: 20px;
        }
        
        .result-error i {
            font-size: 4rem;
            color: #e74c3c;
            margin-bottom: 20px;
        }
        
        .result-info i {
            font-size: 4rem;
            color: #3498db;
            margin-bottom: 20px;
        }
        
        .result-card h2 {
            margin-bottom: 20px;
            color: #2c3e50;
        }
        
        .result-card p {
            margin-bottom: 15px;
            color: #555;
        }
        
        .result-error ul {
            list-style: none;
            margin-bottom: 25px;
            text-align: left;
        }
        
        .result-error li {
            background: #ffeaea;
            padding: 10px;
            margin-bottom: 10px;
            border-left: 4px solid #e74c3c;
        }
    </style>
</body>
</html>