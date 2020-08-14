<?php
  require('lib/print.php');
  require('view/top.php');
 ?>

    <a href="create.php">Create</a>
    <form action="create_process.php" method="post">
    <p>
      <input type="text" name="title" placeholder="Title" />
    </p>
    <p>
      <textarea name="description" placeholder="Description"></textarea>
    </p>
    <p>
      <input type="submit" value="Submit">
    </p>
    </form>

    <?php if(isset($_GET['id'])){ ?>
      <a href="update.php?id=<?=$_GET['id'] ?>">update</a>
      <form action="delete_process.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>"/>
        <input type="submit" value="delete" />
      </form>
    <?php } ?>

    <h2>
      <?php
        print_title();
      ?>
    </h2>
    <?php
      print_description();
    ?>
  <?php
      require('view/bottom.php');
  ?>
