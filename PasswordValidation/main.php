<?php
    if (isset($_POST['submit'])) {

        $password = $_POST['password'];

        $AtLeast1Number = preg_match('/\d/', $password);  

        $SpecialSymbol = preg_match('/=+{};:,<.>?[\][!@#$%^&*()\-_`~]/', $password);

        $MinimumLenght = strlen($password) >= 9;

        if ($AtLeast1Number && $SpecialSymbol && $MinimumLenght) {
            echo "<p>Password Is valid to use</p>";
        } else {
            echo "<p>Password must have at least 1 number, 9 characters and 1 special-symbol</p>";
        }
    }
