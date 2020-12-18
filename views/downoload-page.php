<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Downoload page</title>
    <link rel="stylesheet" href="./views/app.css">
</head>
<body>
    <div class='content'>
        <form action="/downoload-file" method="post" enctype="multipart/form-data">
            <p><input id="file" type="file" name="file" value="Выберите cvs файл"></p>
            <?php if($message): ?>
                <p class='message'><?= $message ?></p>
            <?php endif; ?>
            <button type="submit">Отправить</button>

            <a href="/view-result">Посмотреть результаты</a>
            
        </form>
        
    </div>
</body>
</html>
