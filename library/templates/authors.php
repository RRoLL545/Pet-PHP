<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Authors</title>
</head>
<body>
    <?php
        require('templates/header.php');
    ?>

    <main>
        <table class="author-table">
            <caption>Авторы книг в библиотеке</caption>
            <tr>
                <th class="col-id">id</th>
                <th class="col-author-name">ФИО</th>
                <th class="col-count">Количество книг</th>
                <th class="col-edit">Редактировать</th>
                <th class="col-del">Удалить</th>
            </tr>
            <tr>
                <td class="col-id">1</td>
                <td class="col-author-name">Иванов И.И.</td>
                <td class="col-count">2</td>
                <td class="col-edit"><button>Редактировать</button></td>
                <td class="col-del"><button>Удалить</button></td>
            </tr>
            <tr>
                <td class="col-id">2</td>
                <td class="col-author-name">Петров П.П.</td>
                <td class="col-count">1</td>
                <td class="col-edit"><button>Редактировать</button></td>
                <td class="col-del"><button>Удалить</button></td>
            </tr>
            <tr>
                <td class="col-id">888</td>
                <td class="col-author-name">Сидоров С.С.</td>
                <td class="col-count">1</td>
                <td class="col-edit"><button>Редактировать</button></td>
                <td class="col-del"><button>Удалить</button></td>
            </tr>
        </table>

        <button class="button-add"><a href="add-edit-author.html">Добавить автора</a></button>
    </main>

    <?php
        require('templates/footer.php');
    ?>
</body>
</html>