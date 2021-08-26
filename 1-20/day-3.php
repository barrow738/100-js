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
                        <button onClick="playGame()" class="btn btn-main"> New Card </button>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    let fCard = randomNumber()
    let sCard = randomNumber()
    let cSum = fCard + sCard
    let isAlive = true
    let hasWon = false
    message = document.querySelector("#message")
    cards = document.getElementById("cards")
    sum= document.getElementById("sum")


    function randomNumber(){
        return Math.floor((Math.random() * 10) + 1)
    }
    function startGame(){
        cards.innerText = fCard + " + " + sCard
        sum.innerText = cSum
    }

    function playGame(){
        if( isAlive && !hasWon){
            let rCard = randomNumber()
            cards.innerText += " + " + rCard
            cSum += rCard
            sum.innerText = cSum


            if (cSum < 21){
                message.innerText = "Do you want to draw a new card?"
            }
            else if (cSum === 21){
                message.innerText = "You have won the blackjack" 
                hasWon = true
            }
            else{
                message.innerText = "You have lost" 
                isAlive = false
            }
        }    
    }

    let myArray = [
        "item 1",
        "item 2",
        "item 3"
    ]

    let paul = [
        "Paul osiemo", 24, true
    ]

    paul.push("JavaScript")
    paul.push("JavaScript two")

    paul.pop()




    console.log( paul )
    console.log( myArray[0] )
    console.log( myArray.length )


    for (let count = 0 ; count < 12; count += 1) {
        console.log(count)
    }


    messages = [
        "Message one",
        "Message two",
        "Message three",
        "Message four",
        "Message five"
    ]

    for ( let i = 0; i < messages.lenght; i++ ) {
        console.log(messages[i])
    }
    

    // if (condition && conditionTwo) {
    //     statement
    // }

    // if (condition || conditionTwo) {
    //     statement
    // }
</script>
<?php include "../footer.php";?>