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
                        <?php echo $page_title;?> ( <span class="date">August 23 <sup>rd</sup>, 2021</span> )
                    </h1>
                    <p>
                        This day I just set up the environment for JavaScript. 
                    </p>
                    <p>
                        The activities involved were:
                    </p>
                    <ul>
                        <li>Creating a git repository on Github.</li>
                        <li>Setting the repository on my machine. (Am currently using a macbook Air, i3, early 2015 model, 8GB RAM, 1.6 GHz Processing speed and 128GB SSD)</li>
                        <li>Setting up the boilerplate for the website. In this I just created an <code>index.php</code> file in VS Code and then generated the basic HTML5 document 
                            using by typing ! and then hitting <kbd>tab</kbd> key. The main reason for using PHP is to enable me just use one header and footer file by using the <code>include()</code>
                            function.
                        </li>
                        <li>
                            Spliting the content of <code>index.php</code> into <code>header.php</code> and <code>footer.php</code>. The header has consists all the upper part of <code>index.php</code>
                            up to the start of the body tag. In the title I used <code>echo</code> function to display each page title which will be passed within the php tags before including the header.
                            The footer consists of the closing body tag and the closing html tag. This will make it easier for me to include any script in any page.
                        </li>
                        <li>
                            Creating the assets folder to hold all CSS, JavaScript and images for the website.
                        </li>
                        <li>
                            Creating <code>styles.css</code> and <code>app.js</code> files and then linking on the header.php file.
                        </li>
                        <li>
                            I then pushed to Github.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "../footer.php";?>