<?php
if(isset($_POST['mobile']) && isset($_POST['message']) && isset($_POST['guardian_name'])){
    $number = htmlspecialchars($_POST['mobile']);
    $message = htmlspecialchars($_POST['message']);
    $name = htmlspecialchars($_POST['guardian_name']);

    echo "<div style='max-width:600px;margin:40px auto;padding:20px;border:2px solid #333;border-radius:10px;text-align:center;'>";
    echo "<h2>Message Sent Successfully!</h2>";
    echo "<p><strong>To:</strong> $name</p>";
    echo "<p><strong>Mobile Number:</strong> $number</p>";
    echo "<p><strong>Message:</strong> $message</p>";
    echo "<br><a href='page_three.html'>Go Back</a>";
    echo "</div>";
} else {
    echo "<p>No data received. Please go back and try again.</p>";
}
?>
