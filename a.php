<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $experience = htmlspecialchars($_POST['experience']);
    $favoritePastry = htmlspecialchars($_POST['favoritePastry']);
    echo "
        <div style='font-family: Georgia, serif; padding: 20px; max-width: 600px; margin: 20px auto; background-color: #ffe6e6; border-radius: 10px;'>
            <h1>Application Submitted</h1>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Experience Level:</strong> $experience years</p>
            <p><strong>Favorite Pastry:</strong> $favoritePastry</p>
        </div>
    ";
}
?>
