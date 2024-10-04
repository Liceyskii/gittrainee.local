<?php
require_once 'error.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Важный проект</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <hr>
    <div id=1>
        <p>Вижу, у тебя получилось клонировать наш очень важный проект. Чтож, хорош, <strike>а теперь попробуй выйти на улицу</strike>. Мы работаем над ним вместе, но так неудачно получилось что во время последней своей сессии какое-то криворукое уёбище допустило в нем одну грубую ошибку, сообщение о ней видно выше. 
            Твоя первая задача на этой стажировке - пофиксить её и отправить репозиторий с рабочей версией проекта обратно. В первую очередь найди её и исправь, в этом тебе поможет текст ошибки.
        </p>
        <button onclick="nextStep(2)">Готово</button>
    </div>
    <div id=2 class="hidden">
        <p>Отлично, теперь ты можешь сам проверить что GIT видит твои изменения. Напиши в командную строку команду <u>git status</u> и убедись в этом. Если в ответ на эту команду тебе написало что-то типа
            modified: error.php, значит все правильно.
        </p>
        <button onclick="nextStep(3)">Все правильно</button>
    </div>
    <div id=3 class="hidden">
        <p>Окей, в таком случае нужно как-бы "сохранить" изменения. В git это называется коммит и делается в два шага:</p>
        <ul>
            <li>Добавить изменения в индекс (Указать какие файлы сохраняем)</li>
            <li>Сделать коммит (Сохранить их)</li>
        </ul>
        <p>Предлагаю сделать первый шаг. Делается это при помощи команды <u>git add &ltпуть к файлу&gt</u>. В случае если нужно добавить в индекс все измененные файлы, как сейчас, вместо пути к файлу можно писать точку:</p>
        <p><u>git add .</u></p>
        <button onclick="nextStep(4)">Готово</button>
    </div>
    <div id=4 class="hidden">
        <p>Отлично, теперь если все правильно, прописав git status, ты увидишь что файл error.php добавлен и ожидает коммита, сейчас мы его и сделаем. Закоммитить изменения можно командой <u>git commit -m "&ltкомментарий&gt"</u></p>
        <p>Обычно в комментариях пишут то что ты сделал, поэтому предлагаю написать <u>git commit -m "Исправлена ошибка в error.php"</u></p>
        <button onclick="nextStep(5)">Сделано</button>
    </div>
    <div id=5 class="hidden">
        <p>Ну все, дело за малым. Последнее что тебе осталось сделать, это отправить исправленную версию этого проекта обратно в наш репозиторий. Для этого сначала скопируй ссылку на него.</p>
        <p>Сначала подключимся к нему с помощью <u>git remote add origin &lturl репозиторий&gt</u> (например, git remote add origin https://github.com/Liceyskii/OnlyTestTask), где origin - псевдоним удаленного репозитория. Почему-то принято всегда его так называть, так что и мы будем.</p>
        <p>После этого уже наконец-то отправим свои изменения командой <u>git push origin master</u>. Что такое origin мы уже знаем, а master - это название ветки. О ветках ты узнаешь во второй задаче, пока скажу лишь что главная ветка всегда называется master и мы работали в ней.</p>
        <button onclick="nextStep(6)">Отправлено</button>
    </div>
    <div id=6 class="hidden">
        <p>Отлично. Теперь ты можешь зайти на github и увидеть что в репозиторий дошли твои изменения. Можешь прям открыть файл error.php и увидеть что сейчас там всё правильно. Теперь наш проект будет работать без ошибок.</p>
        <p>Все команды, которые ты сегодня использовал находятся в файле commands.txt, можешь сохранить его себе или подсматривать в моей репе пока не запомнишь. Пока что на этом всё, когда появится новая задача для тебя, я дам знать</p>
    </div>
</body>
</html>