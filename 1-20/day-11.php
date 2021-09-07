<?php 
    $page_title = "Creating a Todo list";
    include "../header.php";
    include "../header-menu.php";
?>
<main>
    <section class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h1>
                    <?php echo $page_title;?> ( <span class="date">September 7 <sup>th</sup>, 2021</span> )
                </h1>
                <form action="">
                    <input type="text" class="todo-input">
                    <button type="submit" class="todo-btn btn btn-main">+</button>
                </form>
                <div class="todo-container">
                    <ul class="todo-list">
                        <li></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    const todoInput = document.querySelector('.todo-input')
    const todoBtn = document.querySelector('.todo-btn')
    const todoList = document.querySelector('.todo-list')

    todoBtn.addEventListener('click', addTodo)

    function addTodo(event) {
        event.preventDefault()
        alert('I think it is working now')
    }
</script>
<?php include "../footer.php";?>