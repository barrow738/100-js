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
                    <h2>A simple web plugin</h2>


                    <h3>Files needed for a chrome extension </h3>
                
                    <input type="text" name="" placeholder="Type your text here" id="inputField">
                    <button id="inputBtn" class="btn btn-main">Save Input</button>
                    <ul id="inputList">
                    </ul>
                    <p id="lsContent"></p>
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
</script>
<?php include "../footer.php";?>