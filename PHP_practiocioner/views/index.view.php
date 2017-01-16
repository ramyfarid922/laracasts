<?php require('partials/head.php') ?>
  <h1>My Tasks</h1>
  <ul>
    <?php foreach ($tasks as $task) : ?> 
      <li> <?= $task->description ?></li>
    <?php endforeach; ?>
  </ul>  
<?php require('partials/footer.php') ?>