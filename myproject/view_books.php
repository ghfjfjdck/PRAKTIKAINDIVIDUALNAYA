<?php
  $conn = mysqli_connect("localhost", "username", "password", "Librarybook");

  if (!$conn) {
    die("Ошибка подключения к базе данных: " . mysqli_connect_error());
  }

  $query = "SELECT * FROM books";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Название</th><th>Автор</th><th>Описание</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>" . $row['title'] . "</td><td>" . $row['author_id'] . "</td><td>" . $row['description'] . "</td></tr>";
    }
    echo "</table>";
  } else {
    echo "Нет книг";
  }

  mysqli_close($conn);
?>
