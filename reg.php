<?php
    session_start();
    if ($_SESSION['users']) {
        header('Location: order.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Эх, прокачу!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <!-- форма регистрации  -->
    <div class = "textH2">
    <h2>Регистрации</h2>
</div>
<form action="vendor/signup.php" method="post" >
<label for = "fio">ФИО:</label><input type = "text" name = "fio" id="fio" required >
        <label for = "phone">Phone:</label><input type = "tel" name = "tel" id="tel" required  >
        <label for = "email">Email:</label><input type = "email" name = "email" id="email" required >
        <label for = "pswd">Пароль:</label><input type = "password" id="pass" name = "pass" required >
        <label for = "ydov">Серия и номер водительского удостоверения :</label><input type = "ydov" name = "ydov" id="ydov" required  >
        <button class = "sub" >Зарегистрироваться</button>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
    </main>
</body>
</html>