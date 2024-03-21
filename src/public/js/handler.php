<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form data
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $mstatus = $_POST['mstatus'];
    $title = $_POST['title'];
    $rsaid = $_POST['reaid'];
    $country = $_POST['country'];
    $license = $_POST['code'];
    $vehicleYear = $_POST['vyear'];
    $vehicleMake = $_POST['vmake'];
    $vehicleModel = $_POST['vmodel'];
    $emailAdd = $_POST['cemail'];
    $contact = $_POST['ccontact'];

    // Send the email
    $to = 'jorge@dmafrica.co.za'; // Replace with recipient's email
    $subject = 'Contact Form Submission from ' . $name;
    $headers = 'From: ' . $name;

    $messageBody = "
    Name: $name
    Gender: $gender
    Marital Status: $mstatus
    Title: $title
    RSA ID: $rsaid
    Issuing Country: $country 
    License Code: $license
    Vehicle Year: $vehicleYear
    Vehicle Make: $vehicleMake
    Vehicle Model: $vehicleModel
    Email: $emailAdd
    Contact: $contact
    ";

    if (mail($to, $subject, $messageBody, $headers)) {
        // Send the form data to an API
        $apiEndpoint = 'https://www.dmafrica.co.za/api/api.php'; // Replace with API URL
        $apiData = [
            'name' => $name,
            'gender' => $gender,
            'mstatus' => $mstatus,
            // Add other form fields as needed for the API
        ];

        // Initialize cURL to make an HTTP POST request to the API
        $apiCurl = curl_init($apiEndpoint);
        curl_setopt($apiCurl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($apiCurl, CURLOPT_POST, true);
        curl_setopt($apiCurl, CURLOPT_POSTFIELDS, http_build_query($apiData));

        // Execute the API request
        $apiResponse = curl_exec($apiCurl);

        // Check if the API request was successful and handle the response
        if ($apiResponse) {
            // Redirect to a "thanks-submit.htm" page with API response as a URL parameter
            header("Location: ../thanks-submit.php?apiResponse=" . urlencode($apiResponse));
            exit;
        } else {
            echo "API request failed.";
        }

        // Close the cURL session
        curl_close($apiCurl);
    } else {
        echo "Email could not be sent.";
    }
}
?>