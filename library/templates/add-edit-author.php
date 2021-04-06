<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Добавить/Изменить автора</title>
</head>
<body>

    <?php
        require('templates/header.php');
    ?>
    
    <main>
        <form action="" method="get" name="add-edit-author" class="author-change">
            <h3>Добавить/изменить автора</h3>
            <input type="text" name="" id="" placeholder="ФИО">
            <input type="submit" value="Применить" class="button-submit">
        </form>
    </main>
    
    <?php
        require('templates/footer.php');
    ?>
    
</body>
</html>