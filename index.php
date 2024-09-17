<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section>
        <?php

        echo '<div class="bl">';

        // Задание 1
        
        $array = array("Иванов", "Федоров", "Сидоров", "Кузнецов", "Педоров", "Раков", "Лебедев", "Щуков", "Новаров");

        echo "<h3>Список студентов:</h3>";
        foreach ($array as $student) {
            echo $student . "<br>";
        }

        $student_count = count($array);
        echo "<p>Всего студентов: $student_count</p>";

        if (in_array("Сидоров", $array)) {
            echo "<p>Студент Сидоров есть в списке.</p>";
        } else {
            echo "<p>Студента Сидорова нет в списке.</p>";
        }

        $expelled = array_pop($array);
        echo "<p>Последний студент, исключенный из списка: $expelled</p>";
        echo '</div>';

        echo '<div class="bl">';
        echo "<h3>Обновленный список студентов:</h3>";
        foreach ($array as $student) {
            echo $student . "<br>";
        }
        echo '</div>';

        ?>
    </section>

    <?php
    echo "<hr>";

    // Задание 2
    
    $clubs = array(
        "Спортивный" => "Сидоров",
        "Художественный" => "Емелина",
        "Музыкальный" => "Иванова",
        "Литературный" => "Петров",
        "Биологический" => "Антонова"
    );

    asort($clubs);

    echo "<h3>Отсортированный список кружков:</h3>";
    foreach ($clubs as $club => $surname) {
        echo "$club - $surname<br>";
    }
    echo "<hr>";
    // Задание 3
    
    $about = array(
        'name' => 'Адель',
        'surname' => 'Ситдиков',
        'group' => '428',
        'hobby' => 'Милитари ГОООООЛ, автомобили',
        'social' => [
            'Вконтакте' => 'https://vk.com/frog_sunrise',
            'Telegram' => '@frog_sunrise'
        ]
    );

    echo "<h3>Информация о студенте:</h3>";
    echo "<p><strong>Имя:</strong> " . $about["name"] . "</p>";
    echo "<p><strong>Фамилия:</strong> " . $about["surname"] . "</p>";
    echo "<p><strong>Группа:</strong> " . $about["group"] . "</p>";
    echo "<p><strong>Хобби:</strong> " . $about["hobby"] . "</p>";

    echo "<h4>Соцсети:</h4>";
    foreach ($about['social'] as $social => $link) {
        echo "$social: $link<br>";
    }
    

    ?>

</html>