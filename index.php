<?php
$theme = \Woof\Theme\Theme::getInstance();
$view = $theme->getView('_blank');
$view->setPart('main', true);
?>


    <section>
        <?php
            foreach($theme->getModel()->getPosts() as $post) {
                echo "<article>
                    <h2>{$post->getTitle()}</h2>
                    <main>
                        <p>{$post->getExcerpt()}</p>
                        <div>
                            <a href=\"{$post->getURL()}\">Lire la suite</a>
                        </div>
                    </main>
                </article>";
            }
        ?>
    </section>


    <section>
        <h2>Font awesome</h2>
        <div class="subsection">
            <i class="fab fa-500px fa-4x"></i>
            <i class="fas fa-box-open fa-4x"></i>
            <i class="fas fa-cat fa-4x"></i>
        </div>
    </section>


    <?php
        echo $view->loadTemplate('partials/sections/bootstrap');
    ?>

    <?php
        echo $view->loadTemplate('partials/sections/vuejs');
    ?>

    <section>
        <h1>Headings 1 </h1>
        <h2>Headings 2 </h2>
        <h3>Headings 3 </h3>
        <h4>Headings 4 </h4>
        <h5>Headings 5 </h5>
        <h6>Headings 6 </h6>
    </section>

    <section>
        <h2>Theme Parameters</h2>
        <?php

        echo '<table>';
            echo '<thead><tr>';
                echo '<th>Name</th>';
                echo '<th>Value</th>';
                echo '<th>Default value</th>';
            echo '</tr><thead>';
            echo '<tbody>';
                foreach($theme->getParameters() as $parameterName => $parameter) {
                    echo '<tr>';
                        echo '<th>' . $parameterName .'</th><td>'  . $parameter->getValue() . '</td><td>'  . $parameter->getDefaultValue() . '</td>';
                    echo '</tr>';
                }
            echo '</tbody>';
        echo '</table>';
        ?>
    </section>

<?php
    $view->endPart('main');
    echo $view->render();
?>
