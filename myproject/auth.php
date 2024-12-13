<?php
  $username = $_POST['username'];
  $password = $_POST['password'];

  $conn = mysqli_connect("localhost", "username", "password", "Librarybook");

  if (!$conn) {
    die("Ошибка подключения к базе данных: " . mysqli_connect_error());
  }

  $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    if ($user['role'] == 'admin') {
      header("Location: admin.php");
    } else {
      header("Location: user.php");
    }
  } else {
    echo "Неправильный логин или пароль";
  }

  mysqli_close($conn);
?>