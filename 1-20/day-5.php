<?php 
    $page_title = "Using local storage";
    include "../header.php";
    include "../header-menu.php";
?>
<main>
    <section class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h1>
                    <?php echo $page_title;?> ( <span class="date">August 27 <sup>th</sup>, 2021</span> )
                </h1>
                
                
                    <input type="text" name="" placeholder="Type your text here" id="inputField">
                    <button id="inputBtn" class="btn btn-main">Save Input</button>
                    <ul id="inputList">
                    </ul>
                    <p id="lsContent"></p>



                    <h2>Truthy and false values</h2>
                    <h4>Falsy values</h4>
                    <ul>
                        <li>0</li>
                        <li>false</li>
                        <li>""</li>
                        <li>null</li>
                        <li>undefined</li>
                        <li>NaN</li>
                    </ul>


                    <h2>Function pass in argument</h2>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    let myInputs = []
    let inputList = document.getElementById("inputList")
    const inputBtn = document.getElementById("inputBtn")

    inputBtn.addEventListener("click", function() {
        let inputField = document.getElementById("inputField")
        myInputs.push(inputField.value)
        inputField.value = ""
        
        for (let i = 0; i < myInputs.length; i++){
            inputList.innerHTML += `
            <li> 
                <a href="https://${myInputs[i]}" target="_blank"> ${myInputs[i]}</a>
            </li>`
        }
        console.log(myInputs)

    }
    
    )
    let lsContent = document.getElementById("lsContent")
    lsContent.textContent = JSON.parse( localStorage.getItem("myLeads") )
    let myLeads = `["link one", "link two", "link three"]`
    console.log(myLeads)
    console.log(typeof myLeads)
    myLeads = JSON.parse(myLeads)
    myLeads.push("Some last item")
    console.log(myLeads)
    console.log(typeof myLeads)
    myLeads = JSON.stringify(myLeads)
    console.log(myLeads)



    localStorage.setItem("myLeads", JSON.stringify(myLeads))

    console.log( localStorage.getItem("myLeads"))


    // Clearing the local storage
    // localStorage.clear()



    function greetUser(username) {
        console.log("How are you " + username )
    }
    greetUser("Paul Barrow")
</script>
<?php include "../footer.php";?>