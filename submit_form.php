<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $company = htmlspecialchars($_POST['company']);
    $services = htmlspecialchars($_POST['services']);
    $phone = htmlspecialchars($_POST['phone']);
    $location = htmlspecialchars($_POST['location']);
    $inquiry = htmlspecialchars($_POST['inquiry']);

    // Here you can add code to send the email or save the data to a database
    // For example, using mail() function to send an email
    $to = "info@sojiadeniji.com"; // Change to your email
    $subject = "New Inquiry from $firstName $lastName";
    $message = "Name: $firstName $lastName\nCompany: $company\nService: $services\nPhone: $phone\nLocation: $location\nInquiry: $inquiry";
    $headers = "From: $firstName $lastName <$phone>";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Thank you! We have received your inquiry and will contact you shortly.'); window.location.href='contact.html';</script>";
    } else {
        echo "<script>alert('There was an error sending your inquiry. Please try again later.'); window.location.href='contact.html';</script>";
    }
} else {
    echo "<script>alert('Invalid request.'); window.location.href='contact.html';</script>";
}
?>
``` ```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sola Adeniji | Contact me</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Construction Company Website Template" name="keywords">
    <meta content="Construction Company Website Template" name="description">
    <link href="img/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <!-- Top Bar, Nav Bar, Page Header sections remain unchanged -->

        <!-- Contact Start -->
        <div class="contact wow fadeInUp">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>For Any Query</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info">
                            <!-- Contact info remains unchanged -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" action="submit_form.php" method="POST" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required="required" data-validation-required-message="Please enter your first name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required="required" data-validation-required-message="Please enter your last name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="company" name="company" placeholder="Company/Individual" required="required" data-validation-required-message="Please enter your company or individual name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <select class="form-control" id="services" name="services" required="required" data-validation-required-message="Please select a service">
                                        <option value="">Select a Service</option>
                                        <option value="Building Construction">Building Construction</option>
                                        <option value="Civil Engineering Works">Civil Engineering Works</option>
                                        <option value="Real Estate">Real Estate</option>
                                        <option value="Specialized Construction Services">Specialized Construction Services</option>
                                        <option value="Development Consultancy">Development Consultancy</option>
                                        <option value="Project Management Services">Project Management Services</option>
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <select class="form-control" id="location" name="location" required="required" data-validation-required-message="Please select your location">
                                        <option value="">Select a Location</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="USA">USA</option>
                                        <option value="UK">UK</option>
                                       