<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>The Library</title>
</head>
<body>
<?php
    require('templates/header.php');
?>
    <main>
        <form action="" method="get" name="author-filter" class="filter">
            <h3>Фильтр книг по автору</h3>
            <div>
                <img src="img/filter-logo.png" alt="filter">
                <select name="author-select" id="author-select">
                    <option value="1">Иванов И.И.</option>
                    <option value="2">Петров П.П.</option>
                    <option value="3">Сидоров С.С.</option>
                </select>
                <input type="submit" value="Применить" class="button-submit">
            </div>
        </form>

        <?php
            require('templates/connection.php');
            $query = "SELECT * FROM Books";
            $result = mysqli_query($connect, $query) or die("Ошибка " . mysqli_error($connect));
            if($result) {
                $rows = mysqli_num_rows($result);
                echo '<table class="book-table">
                        <caption>Книги в библиотеке</caption>
                        <tr>
                            <th class="col-id">id</th>
                            <th class="col-name">Название</th>
                            <th class="col-author">Автор(ы)</th>
                            <th class="col-date">Год издания</th>
                            <th class="col-edit">Редактировать</th>
                            <th class="col-del">Удалить</th>
                        </tr>';
                        
                $tableClasses = [
                    'col-id',
                    'col-name',
                    'col-author',
                    'col-date',];
                    
                for ($i = 0 ; $i < $rows ; ++$i)
                {
                    $row = mysqli_fetch_row($result);
                    echo "<tr>";
                        for ($j = 0 ; $j < 4 ; ++$j) {
                            echo '<td class="' . $tableClasses[$j] . '">' . $row[$j] . '</td>';
                        }/*echo '<td class=".$tableClasses[$j].">$row[$j]</td>'*/;
                    echo '<td class="col-edit"><button>Редактировать</button></td>';
                    echo '<td class="col-del"><button>Удалить</button></td>';
                    echo '</tr>';
                }
                echo "</table>";
            }
            mysqli_free_result($result);
            mysqli_close($connect);
        ?>
        
        <button class="button-add"><a href="index.php?page=add-book">Добавить книгу</a></button>
    </main>
<?php
    require('templates/footer.php');
?>
</body>
</html>