<?php 
    $page_title = "Setting up the environment for javascript and the website to record my progress";
    include "../header.php";
    include "../header-menu.php";
?>
<main>
    <section class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        <?php echo $page_title;?> ( <span class="date">August 24 <sup>th</sup>, 2021</span> )
                    </h1>
                    <p id="greetings">

                    </p>
                    <p>
                        This day I just set up the environment for JavaScript. 
                    </p>
                    <p id="text">
                        0
                    </p>

            
                    <button onClick="incrementValue()">
                        Increment
                    </button>
                    <button onClick="decrementValue()">
                        Decrement
                    </button>


                    <h1>&nbsp;</h1>
                    <h3>Simple calculator</h3>
                    <span id="num-1"></span>
                    <span id="operator"></span>
                    <span id="num-2"></span>
                    <span> = </span>
                    <button onClick="add()">Add</button>
                    <button onClick="subtract()">Subtract</button>
                    <button onClick="multiply()">Multiply</button>
                    <button onClick="divide()">Divide</button>
                    <spam id="result">0</span>
                    
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    let num1 = 78
    let num2 = 423
    let result = 0

    document.getElementById("num-1").textContent = num1
    document.getElementById("num-2").textContent = num2

    function add() {
        result = num1 + num2
        document.getElementById("result").textContent = result
        document.getElementById("operator").textContent = " + "
    }

    function subtract() {
        result = num1 - num2
        document.getElementById("result").textContent = result
        document.getElementById("operator").textContent = " - "
    }

    function multiply() {
        result = num1 * num2
        document.getElementById("result").textContent = result
        document.getElementById("operator").textContent = " * "
    }

    function divide() {
        result = num1 / num2
        document.getElementById("result").textContent = result
        document.getElementById("operator").textContent = " / "
    }




    let count = 0;
    let conterHolder = document.getElementById("text")
    function incrementValue(){
        count += 1
        if(count < 0){
            count = 0
        }
        else{
            conterHolder.innerText = count
        }
        console.log(count)
    }

    function decrementValue(){
        count = count - 1
        if(count < 0){
            count = 0
        }
        else{
            conterHolder.textContent += count
        }
        console.log(count)
    }

    let greeting = document.getElementById("greetings")
    let name = "Paul Osiemo"
    let myGreeting = "Hi, my name is "
    let fullGreeting = myGreeting + name
    greeting.innerText += fullGreeting
    console.log(fullGreeting)

    // textContent and innerText
</script>
<?php include "../footer.php";?>