<?php
$pageTitle = "Contact - Levi Batkin";
$pageDescription = "Get in touch with Levi Batkin for bookings, collaborations, or general inquiries.";

// Initialize variables
$formSubmitted = false;
$errors = [];
$successMessage = '';

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    // Validation
    if (empty($name)) {
        $errors[] = 'Name is required';
    }
    
    if (empty($email)) {
        $errors[] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address';
    }
    
    if (empty($subject)) {
        $errors[] = 'Subject is required';
    }
    
    if (empty($message)) {
        $errors[] = 'Message is required';
    } elseif (strlen($message) < 10) {
        $errors[] = 'Message must be at least 10 characters long';
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        // Email configuration
        $to = 'contact@levibatkin.com'; // Replace with actual email
        $emailSubject = 'Contact Form: ' . $subject;
        $emailBody = "Name: $name\n";
        $emailBody .= "Email: $email\n";
        $emailBody .= "Subject: $subject\n\n";
        $emailBody .= "Message:\n$message\n";
        
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        // In a production environment, you would send the email here
        // mail($to, $emailSubject, $emailBody, $headers);
        
        // For now, just set success message
        $successMessage = 'Thank you for your message! We will get back to you soon.';
        $formSubmitted = true;
        
        // Clear form data
        $name = $email = $subject = $message = '';
    }
}

include 'header.php';
?>

    <!-- Contact Hero Section -->
    <section class="hero" style="padding: 120px 0 60px;">
        <div class="container">
            <div class="hero-content">
                <h2 class="hero-title">Get In Touch</h2>
                <p class="hero-subtitle">Have a question, booking inquiry, or collaboration idea? Reach out below!</p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-wrapper">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <div class="info-item">
                        <div class="info-icon">📧</div>
                        <div class="info-content">
                            <h4>Email</h4>
                            <p>contact@levibatkin.com</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">📍</div>
                        <div class="info-content">
                            <h4>Location</h4>
                            <p>United Kingdom</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">💼</div>
                        <div class="info-content">
                            <h4>Services</h4>
                            <p>DJ Bookings, Music Production, Collaborations</p>
                        </div>
                    </div>
                    <div class="social-links">
                        <h4>Follow Me</h4>
                        <div class="social-icons">
                            <a href="https://www.beatstars.com" target="_blank" rel="noopener noreferrer">🎹</a>
                            <a href="https://www.beatport.com" target="_blank" rel="noopener noreferrer">🎧</a>
                            <a href="https://music.apple.com" target="_blank" rel="noopener noreferrer">🍎</a>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form-container">
                    <?php if ($formSubmitted && $successMessage): ?>
                        <div class="success-message">
                            ✓ <?php echo htmlspecialchars($successMessage); ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($errors)): ?>
                        <div class="error-messages">
                            <?php foreach ($errors as $error): ?>
                                <div class="error-message">✗ <?php echo htmlspecialchars($error); ?></div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    
                    <form method="POST" action="contact.php" class="contact-form">
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name ?? ''); ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email ?? ''); ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <input type="text" id="subject" name="subject" value="<?php echo htmlspecialchars($subject ?? ''); ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="6" required><?php echo htmlspecialchars($message ?? ''); ?></textarea>
                        </div>
                        
                        <button type="submit" class="submit-button">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
