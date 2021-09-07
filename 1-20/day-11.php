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
    todoList.addEventListener('click', deleteCheck)

    function addTodo(event) {
        event.preventDefault()
        
        // create div
        const todoDiv = document.createElement('div')
        todoDiv.classList.add('todo')
        // create li
        const newTodo = document.createElement('li')
        newTodo.innerText = todoInput.value
        newTodo.classList.add('todo-item')
        todoDiv.appendChild(newTodo)

        const completedBtn = document.createElement('button')
        completedBtn.classList.add('completed-btn')
        completedBtn.innerHTML = 'Task completed'
        todoDiv.appendChild(completedBtn)

        const deleteBtn = document.createElement('button')
        deleteBtn.classList.add('delete-btn')
        deleteBtn.innerHTML = 'Delete Task'
        todoDiv.appendChild(deleteBtn)

        todoList.appendChild(todoDiv)

        todoInput.value = ''
    }
    function deleteCheck(e) {
        const item = e.target
        if(item.classList[0] === 'delete-btn'){
            const todo = item.parentElement
            todo.classList.add('fall')
            todo.addEventListener('transitionend', function() {
                todo.remove()
            })
        }
        if(item.classList[0] === 'completed-btn'){
            const todo = item.parentElement
            todo.classList.toggle('completed')
        }
    }
    // DOMContentLoaded and event of after the page has loaded
</script>
<?php include "../footer.php";?>