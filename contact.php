<html>
<?php include 'components/head.php'; ?>

<body>
    <?php include 'components/nav.php'; ?>
    <main>
        <div class="container">
            <?php
if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $company_name = htmlspecialchars($_POST['company_name']);
    $phone_number = htmlspecialchars($_POST['phone']);
    $how_hear = htmlspecialchars($_POST['how_hear']);
    // todo: email this information to yourself

    echo "Thank you " . $name . "!";
} else {
            ?>
            <h1>Contact Us</h1>
            <form action="contact.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="Company Name">Company Name:</label>
                <input type="text" id="company_name" name="company_name">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone number">Phone Number:</label>
                <input type="number" id="phone" name="phone" required>

                <label for="How did you hear about us?">How did you hear about us?:</label>
                <input type="text" id="how_hear" name="how_hear">

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit" name="submit">Submit</button>
            </form>
            <?php
}
            ?>
        </div>

    </main>
    <?php include 'components/footer.php'; ?>
</body>

</html>