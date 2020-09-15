<?php include('database_connection.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oglasi proba</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php foreach($oglasi as $oglas): ?>
    <div class="container">
        <div class="rotatedContainer"><img src="img/<?php echo $oglas['title']?>/1.jpg" alt=""></div><!-- end .rotatedContainer -->
        <div class="text">
        <h3><?php echo htmlspecialchars($oglas['title']);?></h3>
        <p><?php echo htmlspecialchars($oglas['descr']);?></p>
        <h4>cena: <?php echo htmlspecialchars($oglas['price']);?> $</h4>
        </div><!-- end .text -->
        <a href="#">detalji</a>
    </div><!-- end .container -->
    <?php endforeach; ?>   
</body>
</html>