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
        <div class="rotatedContainer">
        <h2>cena: <?php echo htmlspecialchars($oglasBre['price']);?> evri</h2>
        <h2>godiste: <?php echo htmlspecialchars($oglasBre['godiste']);?></h2>
        <div class="content">
            <img src="img/oglasi/<?php echo $oglasBre['title']?>/1.jpg" alt="">
        </div>
    </div>
    <div class="text">
        <h2><?php echo htmlspecialchars($oglasBre['descr']);?></h2>
        <button><a href="tel:+381655325532"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="24" height="24"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M66.40633,113.6275l-18.963,-18.95583c5.7835,-10.97933 12.52017,-19.77283 20.00933,-27.219c7.44617,-7.48917 16.23967,-14.22583 27.219,-20.00933l19.10633,18.99883l36.722,-5.51833v-39.42383c0,0 -2.35067,0 -7.16667,0c-32.5295,0 -63.597,13.18667 -86.24367,35.58967c-22.403,22.64667 -35.58967,53.71417 -35.58967,86.24367c0,4.816 0,7.16667 0,7.16667h39.50267z"></path></g></g></svg>Pozovi</a></button>
    </div><!-- end .text -->
        <h2 id="advertisementTitle"><?php echo htmlspecialchars($oglasBre['title']);?></h2>
        <?php else: ?>
        <h5>No such advertisement exist!</h5>
        <?php endif; ?>
    </div> <!-- end .individualAdvertisement -->    
</body>
</html>