<?php 
    $page_title = "Working with objects";
    include "../header.php";
    include "../header-menu.php";
?>
<main>
    <section class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        <?php echo $page_title;?> ( <span class="date">August 26 <sup>th</sup>, 2021</span> )
                    </h1>
                    <div class="card main-card text-center">
                    <p>The year is <span id="currentYear"><?php echo date("Y")?></span> and am <span id="setAge"></span> years old.</p>
                    </div>
                    
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Random color generator</h2>
                    <div class="color-div">
                        #ffffff
                    </div>
                    <button onClick="generateColor()" class="btn btn-main">Generate color</button>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    let colorDiv = document.querySelector(".color-div")

    function generateColor() {
        r1C = randomNumber()
        r2C = randomNumber()
        g1C = randomNumber()
        g2C = randomNumber()
        b1C = randomNumber()
        b2C = randomNumber()
        fullC = "#" + r1C + r2C + g1C + g2C + b1C + b2C
        console.log(fullC)
        
        colorDiv.style.backgroundColor = fullC
        colorDiv.innerText = fullC
    }

    function randomNumber(){
        singleVal = Math.floor((Math.random() * 16))

        if(singleVal === 10){
            return "a"
        }
        else if(singleVal === 11){
            return "b"
        }
        else if(singleVal === 12){
            return "c"
        }
        else if(singleVal === 13){
            return "d"
        }
        else if(singleVal === 14){
            return "e"
        }
        else if(singleVal === 15){
            return "f"
        }
        else {
            return singleVal
        }
    }

    console.log(randomNumber())

    // let cYear = document.getElementById("currentYear").textContent
    // let pAge = document.getElementById("setAge")
    // let dob = 1996
    // let getAge = cYear - dob
    // pAge.textContent = getAge

    // let Person = {
    //     name: "Paul Osiemo Nyabaro",
    //     dateOfBirth: 1996,
    //     gender: "male",
    //     isTall: true,
    //     hasMoney: false,
    //     goals: [
    //         "Be a great dad",
    //         "Make money",
    //         "Be a full stack developer",
    //         "Create my own business",
    //         "Be successful in life",
    //         "Live a happy life"
    //         ],
    //     calculateAGe: function() {
    //         let age = cYear - this.dateOfBirth
    //         console.log("I am " + age + " years old")
    //     }
    // }
    
    // console.log(Person.goals)
    // console.log(Person["goals"])

    // Person.calculateAGe()
</script>
<?php include "../footer.php";?>