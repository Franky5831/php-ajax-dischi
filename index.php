<?php
include 'data.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>php ajax dischi</title>
</head>
<body>
    <header>

    </header>
    <main>
        <div id="containerCards">
            <?php foreach($dati as $album){ ?>
            <div class="card">
                <img src="<?php echo $album['poster']; ?>"/>
                <h1><?php echo $album['title']; ?></h1>
                <h2><?php echo $album['author']; ?></h2>
                <h3><?php echo $album['year']; ?></h3>
            </div>
            <?php } ?>

        </div>
    </main>
</body>
</html>