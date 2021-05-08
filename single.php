<?php
$theme = \Woof\Theme\Theme::getInstance();
$view = $theme->getView('_blank');
$view->setPart('main', true);
?>
    <section>
        <?php
            foreach($theme->getModel()->getPosts() as $post) {
                echo "<article>
                    {$post->getThumbnailURL()}
                    <figure>
                        <img src=\"{$post->getThumbnailURL('full')}\"/>
                    </figure>
                    <h2>{$post->getTitle()}</h2>
                    <main>
                        <p>{$post->getContent()}</p>
                    </main>
                </article>";
            }
        ?>
    </section>

<?php
    $view->endPart('main');
    echo $view->render();
?>
