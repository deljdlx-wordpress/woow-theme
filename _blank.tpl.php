<!DOCTYPE html>
<html>
<head>
    <?php $view->getHeader();?>
</head>
<body>


    <?php
        echo $template->include('partials/sections/header');
    ?>

    <div class="row no-gutters">

        <div class="col-md-3">
            <section>
                Nav
            </section>
        </div>

        <main class="col-md-9">
            <?php
                echo $view->getPart('main');
            ?>
        </main>
    </div>



    <?php $view->getFooter();?>
</body>
</html>
