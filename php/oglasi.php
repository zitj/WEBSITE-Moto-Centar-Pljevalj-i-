<?php
include('database_connection.php');

//check GET request id param
if(isset($_GET['id'])){
 
    
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    

    // //make sql
    $sql = "SELECT * FROM novajlija WHERE id = $id";

    
    // // get the query result
    $result = mysqli_query($conn, $sql);

    // //fetch result in array format
    $oglasBre = mysqli_fetch_assoc($result);

    // mysqli_free_result($result);
    // mysqli_close($conn);
}
?>
<?php include('secondHeader.php')?>
       
<div class="advertisements">
    <?php foreach($oglasi as $oglas): ?>
        <div class="containerAdvertisement">
            
        <div class="rotatedContainer"><a href="oglas.php?id=<?php echo $oglas['id']?>"><img src="../img/oglasi/<?php echo $oglas['title']?>/1.jpg" alt=""></a></div><!-- end .rotatedContainer -->
        
        <div class="text">
            <h3> <?php echo htmlspecialchars($oglas['title']);?></h3>
        <a href="oglas.php?id=<?php echo $oglas['id']?>">
        <p> <?php echo htmlspecialchars($oglas['descr']);?></p>
        <h4>godište: <?php echo htmlspecialchars($oglas['godiste']);?> god</h4>
        <h4>cena: <?php echo htmlspecialchars($oglas['price']);?> &euro;</h4>
        </a>
        </div><!-- end .text -->
        <a class="containerAdvertisementsButton"href="oglas.php?id=<?php echo $oglas['id']?>">detalji</a>
    
    </div><!-- end .container -->
    
    <?php endforeach; ?>   
    </div><!-- end .advertisements -->

</body>
</html>