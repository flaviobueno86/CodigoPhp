<html>
<body>
    <form action="superglobais.php" method="POST">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="email" name="email"><br>
    <input type="submit" name="enviar">  

    </form>
</body>
</html>

<?php
$nome = $_POST['nome'];
$email = $_POST['email'];

echo "Nome: $nome <br>";
echo "Email: $email";

?>