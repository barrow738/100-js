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
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    let parg = document.createElement("p")
    let textContent = document.createTextNode("You are an awesome person")
    
</script>
<?php include "../footer.php";?>