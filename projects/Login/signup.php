<?php
    require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
            <h1>Signup</h1>
            <?php
                if (isset($GET['error'])) {
                    if ($GET['error'] == "emptyfields") {
                        echo '<p>Fill in all fields!</p>';
                    }
                    else if ($GET['error'] == "invaliduidmail") {
                        echo '<p>Invalid username and e-mail!</p>';
                    }
                    else if ($GET['error'] == "invaliduid") {
                        echo '<p>Invalid username!</p>';
                    }
                    else if ($GET['error'] == "invalidmail") {
                        echo '<p>Invalid e-mail!</p>';
                    }
                    else if ($GET['error'] == "passwordcheck") {
                        echo '<p>Your passwords do not match!</p>';
                    }
                    else if ($GET['error'] == "usertaken") {
                        echo '<p>Username is already taken!</p>';
                    }
                }
                else if ($GET['signup'] == "success") {
                    echo '<p>Signup successful!</p>';
                }
            ?>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username" />
                    <input type="text" name="mail" placeholder="E-Mail" />
                    <input type="password" name="pwd" placeholder="Password" />
                    <input type="password" name="pwd-repeat" placeholder="Repeat Password" />
                    <button type="submit" name="signup-submit">Signup</button>
                </form>
            </section>
        </div>
    </main>

<?php
    require "footer.php";
?>