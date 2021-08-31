<?php 
    $page_title = "Creating elements and Setting an Id to an object ";
    include "../header.php";
    include "../header-menu.php";
?>
<main>
    <section class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h1>
                    <?php echo $page_title;?> ( <span class="date">August 31 <sup>th</sup>, 2021</span> )
                </h1>
                <div id="nullDiv">

                </div>
                <button class="btn btn-main" onClick="reset()">Reset</button>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    let d = new Date()
    // let dob = parseInt(prompt('What is your birthday years'))
    let dob = 1996
    var age = d.getFullYear() - dob
    let prg = document.createElement('p')
    let txtCont = document.createTextNode('You are an awesome person. I am ' + age + ' years old. \nThis text has been created from javascript')
    prg.setAttribute('id', 'pargText')
    prg.appendChild(txtCont)
    document.getElementById('nullDiv').appendChild(prg)
    console.log(age)

    function reset() {
        document.getElementById('pargText').remove()
    }
</script>
<?php include "../footer.php";?>