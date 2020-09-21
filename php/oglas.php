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

$images = glob("../img/oglasi/{$oglasBre['title']}/*.{jpg,png,gif}", GLOB_BRACE);

$broj = 1;

?>

<?php include('secondHeader.php')?>

    <div class="individualAdvertisement">
        <?php if($oglasBre): ?>
            <h2 id="advertisementTitle"><?php echo htmlspecialchars($oglasBre['title']);?>
          
            
            <div class="swiper-container ">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
            <?php foreach($images as $image): ?>
                <div class="swiper-slide">
                    <div class="containercheRotirano">
                        <div class="content">
                            <img src="../img/oglasi/<?php echo $oglasBre['title']?>/<?php echo $broj++?>.jpg" alt="">
                        </div><!--end .content -->
                    </div> <!-- end .containercheRotirano -->
                </div> <!-- end .swiper-slide -->
            <?php endforeach; ?>   
            </div> <!-- .swioer-wrapper -->
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
    
             <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
    
            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
            </div><!-- end .container-->
            <div class="text">
            <div class="kolona">
            <p>Godište: <span><?php echo htmlspecialchars($oglasBre['godiste']);?> god</span></p>
            <p>Cena: <span><?php echo htmlspecialchars($oglasBre['price']);?> &euro;</span></p>
            <p>Prešo: <span>xxxxxxx km</span></p>
            <p>Snaga u kw:<span> xxx kw</span></p>
            <p>Snaga u ks:<span> xxx ks</span></p>
            </div>
            <div class="kolona">
            <p>Oprema: <span>Zatamnjen vizir, xenon svetla, mali karbon retrovizori, led zmigavci, poliran ram i zadnja viljuska jos nesto nabutaj ako moze, ne be roman decko napisi</span> </p>
            <p>Papiri: <span>Ima sve papire</span></p>
            <p>Stanje: <span>Odlicno, bez ulaganja.</span></p>
            <p>Prenos: <span>Obavezan</span></p>
            <p>Dodatno: <span>ima i koferce</span></p>
            <!-- <p><?php echo htmlspecialchars($oglasBre['descr']);?></p> -->
            </div>
            </div>
            <button><a href="tel:+381655325532"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="24" height="24"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M66.40633,113.6275l-18.963,-18.95583c5.7835,-10.97933 12.52017,-19.77283 20.00933,-27.219c7.44617,-7.48917 16.23967,-14.22583 27.219,-20.00933l19.10633,18.99883l36.722,-5.51833v-39.42383c0,0 -2.35067,0 -7.16667,0c-32.5295,0 -63.597,13.18667 -86.24367,35.58967c-22.403,22.64667 -35.58967,53.71417 -35.58967,86.24367c0,4.816 0,7.16667 0,7.16667h39.50267z"></path></g></g></svg>Pozovi</a></button>
        <?php else: ?>
        <h5>No such advertisement exist!</h5>
        <?php endif; ?>
    </div> <!-- end .individualAdvertisement -->    

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <script>
        var mySwiper = new Swiper('.swiper-container', {
  // Optional parameters
//   direction: 'vertical',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
//   scrollbar: {
//     el: '.swiper-scrollbar',
//   },
})
    </script>
</body>
</html>