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

    <div class="individualAdvertisement">
        <?php if($oglasBre): ?>
        <h2><?php echo htmlspecialchars($oglasBre['title']);?></h2>
        <h2><?php echo htmlspecialchars($oglasBre['descr']);?></h2>
        <h2><?php echo htmlspecialchars($oglasBre['price']);?> evri</h2>
        <h2><?php echo htmlspecialchars($oglasBre['godiste']);?></h2>
        <?php else: ?>
        <h5>No such advertisement exist!</h5>
        <?php endif; ?>
    </div> <!-- end .individualAdvertisement -->    
</body>
</html>