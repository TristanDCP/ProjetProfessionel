<?php
$nicknameRegex = '/^[A-Za-z][A-Za-z0-9]{5,31}$/';
$passwordRegex = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{7,}$/';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nickname = $_POST['nickname'];
    $email = $_POST["email"];
    $password = $_POST['password'];
    $filtermail = filter_var($email, FILTER_VALIDATE_EMAIL);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <form method="post" action="userregister.php">
        <div>
            <label for="nickname">Pseudonyme : </label>
            <input type="text" name="nickname" id="nickname" value="<?= isset($nickname) ? $nickname : '' ?>" required>
        </div>
        <div>
            <label for="password">Mot de passe : </label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="email">Adresse email : </label>
            <input type="text" name="email" id="email" value="<?= isset($email) ? $email : '' ?>" required>
        </div>
        <input type="submit">
    </form>

    <?php 
if(isset($nickname) && $filtermail == true && preg_match($nicknameRegex, $nickname) && preg_match($passwordRegex, $password)){
    ?>
    <p><?= $nickname ?></p>
    <p><?= $password ?></p>
    <p><?= $email ?></p>
    <?php
} else {
    echo "Erreur";
}?>

</body>

</html>