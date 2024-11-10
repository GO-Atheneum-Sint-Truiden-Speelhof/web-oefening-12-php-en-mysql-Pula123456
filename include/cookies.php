<?php

session_start();


if (isset($_POST['accept_cookies'])) {
    
    setcookie("user_accepts_cookies", "true", time() + (86400 * 30), "/"); 
    header("Location: start2.php");
    exit();
} elseif (isset($_POST['reject_cookies'])) {
    
    header("Location: https://www.google.com");
    exit();
}


$cookies_accepted = isset($_COOKIE['user_accepts_cookies']) && $_COOKIE['user_accepts_cookies'] == "true";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startpagina</title>
</head>
<body>
    <?php if ($cookies_accepted): ?>
        <h1>Welkom op onze website!</h1>
        <p>U hebt cookies geaccepteerd. Geniet van uw bezoek.</p>
    <?php else: ?>
        <h1>Cookie Voorkeuren</h1>
        <p>Deze website maakt gebruik van cookies. Kies of u deze wilt accepteren of weigeren.</p>
        <form method="post">
            <button type="submit" name="accept_cookies">Accepteer Cookies</button>
            <button type="submit" name="reject_cookies">Weiger Cookies</button>
        </form>
    <?php endif; ?>
</body>
</html>