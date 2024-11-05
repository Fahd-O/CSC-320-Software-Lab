<?php
    require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">

                <?php
                    if(isset($_SESSION['userId']))
                    {
                       echo '';
                    }
                    else
                    {
                        echo '';
                    }
                ?>
            
            </section>
        </div>
    </main>

<?php
    require "footer.php";
?>