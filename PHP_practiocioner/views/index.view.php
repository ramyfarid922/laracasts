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
    </h1>
  </header>

  <nav>
    <ul>
      <li><a href="/about.php">About Page</a></li>
      <li><a href="/contact.php">Contact Page</a></li>
    </ul>
  </nav>

  <h1>My Tasks</h1>
  <ul>
    <?php foreach ($tasks as $task) : ?> 
      <li> <?= $task->description ?></li>
    <?php endforeach; ?>
  </ul>
  
</body>
</html>