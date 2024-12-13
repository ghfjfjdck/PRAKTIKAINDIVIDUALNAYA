<?php
  $conn = mysqli_connect("localhost", "username", "password", "Librarybook");

  if (!$conn) {
    die("Ошибка подключения к базе данных: " . mysqli_connect_error());
  }

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM books WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    $book = mysqli_fetch_assoc($result);
  }

  if (isset($_POST['title']) && isset($_POST['author_id']) && isset($_POST['description'])) {
    $title = $_POST['title'];
    $author_id = $_POST['author_id'];
    $description = $_POST['description'];
    $id = $_POST['id'];

    $query = "UPDATE books SET title = '$title', author_id = '$author_id', description = '$description' WHERE id = '$id'";
    mysqli_query($conn, $query);

    echo "Книга отредактирована";
  }

  mysqli_close($conn);
?>
