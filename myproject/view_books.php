<?php
  $conn = mysqli_connect("localhost", "username", "password", "Librarybook");

  if (!$conn) {
    die("������ ����������� � ���� ������: " . mysqli_connect_error());
  }

  $query = "SELECT * FROM books";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr><th>��������</th><th>�����</th><th>��������</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>" . $row['title'] . "</td><td>" . $row['author_id'] . "</td><td>" . $row['description'] . "</td></tr>";
    }
    echo "</table>";
  } else {
    echo "��� ����";
  }

  mysqli_close($conn);
?>
