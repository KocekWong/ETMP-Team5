<!DOCTYPE html>
<html lang="en">

<?php include "header.php";?>
<body>
    <header>
        <img class="logo" src="images/company_logo.png" alt="Expert.com logo"/>
        <h1>Admin Account Registration Form</h1>
    </header>
    <section>
        <form id="adminRegistrationForm" method="post" action="mailto:expertdotcom@hotmail.com" novalidate="novalidate">
            <fieldset>	
                <p>
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" name="name" placeholder="full name" maxlength="25"/>
                </p>
                <p>
                    <label for="email">Email Address:</label>
                    <input type="text" id="email" name="email" placeholder="Your email"/>
                </p>
                <p>
                    <label for="phone">Phone Number:</label>
                    <input type="text" id="phone" name="phone" placeholder="0123456789" maxlength="10"/>
                </p>
                <p>
                    <label for="name">Staff ID:</label>
                    <input type="text" id="staffid" name="staffid" placeholder="staff ID" maxlength="25"/>
                </p>
                <p class="link">
                    <input type="checkbox" id = "t&c"/>
                    I agree with the <a href="#">Terms and Conditions</a> applied
                </p>
            </fieldset>
            <button type="button"><a href="login.php">Cancel</a></button>
            <input type="submit" value="Register"/>
        </form>
    </section>
  <?php include "footer.php"; ?>
  
</body>
  
</html>