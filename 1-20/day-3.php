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
                        <h3 id="message" class="text-main">Start game</h3>
                        <h4>Cards: <span id="cards"></span></h4>
                        <h4>Sum: <span id="sum"></span></h4>
                        <button onClick="startGame()" class="btn btn-main">
                            Start Game
                        </button>
                        <button onClick="playGame()" class="btn btn-main"> Play Game </button>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    let fCard = Math.floor((Math.random() * 10) + 1)
    let sCard = Math.floor((Math.random() * 10) + 1)
    let cSum = fCard + sCard
    message = document.getElementById("message")
    cards = document.getElementById("cards")
    sum= document.getElementById("sum")

    function startGame(){
        cards.innerText = fCard + " + " + sCard
        sum.innerText = cSum
    }

    function playGame(){
        let rCard = Math.floor((Math.random() * 10) + 1)
            cards.innerText += " + " + rCard
            cSum += rCard
            sum.innerText = cSum
        
        if (cSum < 21){
            message.innerText = "Do you want to draw a new card?" 
        }
        else if (cSum === 21){
            message.innerText = "You have won the blackjack" 
        }
        else{
            message.innerText = "You have lost" 
        }
    }
    
</script>
<?php include "../footer.php";?>