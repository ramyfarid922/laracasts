<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <style type="text/css">
      header {
     }
 </style>
</head>
<body>
   <header>
      <h1>
          <ul>
            <?php foreach ($tasks as $task) : ?> 
                <li> <?= $task->description ?></li>
            <?php endforeach; ?>

        </ul>
    </h1>
</header>
</body>
</html>