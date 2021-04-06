<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>Добавить/Изменить книгу</title>
</head>
<body>
    <?php
        require('header.php');
    ?>
    
    <main>
        <?php
            //Чтение данных из формы
            $bookName = htmlentities($_POST['book-name']);
            $bookAuthor = $_POST['book-author'];
            $bookYear = (int) $_POST['book-year'];
            
            print_r($bookName);
            //print_r($bookAuthor);
            foreach($bookAuthor as $item)
                print_r(htmlentities($item));
            print_r($bookYear);
        ?>
    </main>
    
    <?php
        require('footer.php');
    ?>
</body>
</html>