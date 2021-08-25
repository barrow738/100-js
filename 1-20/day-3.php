<?php 
    $page_title = "Creating a simple blackjack game";
    include "../header.php";
    include "../header-menu.php";
?>
<main>
    <section class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        <?php echo $page_title;?> ( <span class="date">August 25 <sup>th</sup>, 2021</span> )
                    </h1>
                    
                    <div class="card main-card text-center">
                        <h2>Want to play game?</h2>
                        <h3 id="message">Nothing here</h3>
                        <h4 id="cards">Cards: </h4>
                        <h4 id="sum">Sum: </h4>
                        <button onClick="playGame()" class="btn btn-main">
                            Start Game
                        </button>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    let fCard = 10
    let sCard = 9
    let sum = fCard + sCard
    let message = getElementById("message")

    function playGame(){
        .innerText = "Do you want to draw a new card?"
    }
    
</script>
<?php include "../footer.php";?>