

            <div class="vacancies-archive js-archive-container" data-page="1">

                <?php
                    get_template_part('template-parts/vacancies/vacancies','loop', $ajaxParams);
                    get_template_part('template-parts/vacancies/vacancies','pagination', $ajaxParams);
                ?>

            </div>
