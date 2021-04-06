<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Добавить/Изменить книгу</title>
</head>
<body>
    <?php
        require('templates/header.php');
    ?>
    
    <main>
        <form action="templates/add-book.php" method="post" name="add-edit-book" class="book-change">
            <h3>Добавить/изменить книгу</h3>
            <input type="text" name="book-name" id="" placeholder="Название книги">
            <input type="text" name="book-year" id="" placeholder="Год издания">
            <select name="book-author[]" id="" multiple="multiple">
                <option value="Иванов И.И.">Иванов И.И.</option>
                <option value="Петров П.П.">Петров П.П.</option>
                <option value="Сидоров С.С.">Сидоров С.С.</option>
            </select>
            <input type="submit" value="Применить" class="button-submit">
        </form>
    </main>
    
    <?php
        require('templates/footer.php');
    ?>
</body>
</html>