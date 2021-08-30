<?php 
    $page_title = "Loops (While, For) and switch ";
    include "../header.php";
    include "../header-menu.php";
?>
<main>
    <section class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h1>
                    <?php echo $page_title;?> ( <span class="date">August 30 <sup>th</sup>, 2021</span> )
                </h1>
                <p>
                    adding new line \n
                </p>
                <p>
                    indexOf also returns -1 if no match is found
                </p>
                <p>
                    split will take ("") or (",") for an array
                </p>
                <p>
                    arrays can also be created as
                </p>
                <p>
                    let fruits = new Array('apple','banana')
                </p>
                <p>
                    toString() convert array to string
                </p>
                <p>
                    join(' - ') joins them with -
                </p>
                <p>
                    fruits.concat(vegetables)
                </p>
                <p>
                    let does not work for prompt
                </p>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    let i =0; 
    while (i<10){
        i++
        console.log(i)
    }
    for (let i = 0; i<11; i++){
        console.log(i)
    }

    let dayNumber = parseInt(prompt('What is the day number'))
    switch (dayNumber){
        case 0:
        text = 'weekend'
        break;
        case 6:
        text = 'weekend'
        break;
        default:
        text = 'weekday'
    }
    console.log(text)
    console.log(dayNumber)
</script>
<?php include "../footer.php";?>