<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Downoload page</title>
    <link rel="stylesheet" href="./views/app.css">
</head>
<body>
    <div class="content">
        <?php if($links): ?>
            <table>
                <?php foreach($links as $link): ?>

                <?php endforeach; ?> 
            </table>
        <?php else: ?>
            
            <div class="alert">
                <p>В таблице пока нету даных</p>
                <a href="/">Обратно</a>
            </div>

        <?php endif; ?> 
        
    </div>
     
</body>
</html>


  