<?php
  $conn = mysqli_connect("localhost", "username", "password", "Librarybook");

  if (!$conn) {
    die("Ошибка подключения к базе данных: " . mysqli_connect_error());
  }

  if (isset($_POST['title']) && isset($_POST['author_id']) && isset($_POST['description'])) {
    $title = $_POST['title'];
    $author_id = $_POST['author_id'];
    $description = $_POST['description'];

    $query = "INSERT INTO books (title, author_id, description) VALUES ('$title', '$author_id', '$description')";
    mysqli_query($conn, $query);

    echo "Книга добавлена";
  } else {
    echo "Ошибка добавления книги";
  }

  mysqli_close($conn);
?>
