
    <section class="">
         <h2>Bootstrap components demo</h2>

         <div class="subsection">

            <div class="col-12">
                <?php
                get_template_part('partials/sections/_bootstrap/navbar');
                ?>
            </div>

        </div>

        <div class="subsection">
        <div class="row">
            <div class="col-6">
                <?php
                get_template_part('partials/sections/_bootstrap/carousel');
                ?>
            </div>

            <div class="col-3">
                <div class="subsection">
                    <?php
                    get_template_part('partials/sections/_bootstrap/buttons');
                    ?>
                </div>
            </div>

            <div class="col-3">
                <div class="subsection">
                    <?php
                    get_template_part('partials/sections/_bootstrap/modal');
                    ?>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-6">
                <div class="subsection">
                    <?php
                    get_template_part('partials/sections/_bootstrap/alert');
                    ?>
                </div>
            </div>

            <div class="col-6">
                <div class="subsection">
                    <?php
                    get_template_part('partials/sections/_bootstrap/form');
                    ?>
                </div>
            </div>
        </div>


    </section>