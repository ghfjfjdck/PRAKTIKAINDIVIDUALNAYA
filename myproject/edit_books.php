<!DOCTYPE html>
<html>
<head>
    <title>������������� �����</title>
    <style>
        body {
            font-family: 'Great Vibes', cursive;
            background-color: #452B1F; /* �����-���������� ��� */
            color: #F7F7F7; /* ������-����� ����� */
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* ���� ������ */
        }
        
        h1 {
            font-size: 36px;
            font-weight: bold;
            color: #F7F7F7; /* ������-����� ����� */
            text-align: center;
            margin-bottom: 20px;
        }
        
        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #F7F7F7;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        
        label {
            font-size: 18px;
            color: #F7F7F7; /* ������-����� ����� */
            margin-bottom: 10px;
        }
        
        select {
            width: 100%;
            height: 30px;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #F7F7F7;
            border-radius: 5px;
        }
        
        input[type="submit"] {
            width: 100%;
            height: 30px;
            background-color: #F7F7F7; /* ������-����� ����� */
            color: #452B1F; /* �����-���������� ����� */
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #CCCCCC; /* ������-����� ����� */
        }
    </style>
</head>
<body>
    <h1>������������� �����</h1>
    <form action="edit_book.php" method="get">
        <label for="book_id">�������� �����:</label>
        <select id="book_id" name="id">
            <?php
            $conn = mysqli_connect("localhost", "username", "password", "Librarybook");

            if (!$conn) {
            die("������ ����������� � ���� ������: " . mysqli_connect_error());
            }

            $query = "SELECT * FROM books";
            $result = mysqli_query($conn, $query);

            while ($book = mysqli_fetch_assoc($result)) {
            echo "
            <option value='" . $book['id'] . "'>" . $book['title'] . "</option>" ;
                    }
                    mysqli_close($conn);
                    ?>
        </select>
        <input type="submit" value="�������������">
    </form>
</body>
</html>
