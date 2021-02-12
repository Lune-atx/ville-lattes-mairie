        <!-- FOOTER -->
        <?php
            // on remplace les retours chariot par des BR
            $timetable_content = str_replace ( array("\r\n","\n") , '<br>' , get_theme_mod('timetable', 'Les horaires ne sont pas disponibles'));
            $address_content = str_replace ( array("\r\n","\n") , '<br>' , get_theme_mod('townhall_address', 'L\'adresse n\'est pas disponible'));
            $townahll_contact_content = str_replace ( array("\r\n","\n") , '<br>' , get_theme_mod('townahll_contact', 'Les contacts ne sont pas disponibles'));
        ?>
        <footer class="lattes_footer" style="background-image: url('../medias/backgrounds/main.jpg');">
            <div class="lattes_footer_infos">
                <div class="lattes_footer_townHall">
                    <h4 class="lattes_footer_townHall_title">Contact</h4>
                    <p class="lattes_footer_townHall_address"><?= $address_content ?></p>
                    <p class="lattes_footer_townHall_contact"><?= $townahll_contact_content ?></p>
                </div>
                <div class="lattes_footer_timetable">
                    <h4 class="lattes_footer_timetable_title">Horaires</h4>
                    <p class="lattes_footer_timetable_content" id="lattes-timetable"><?= $timetable_content?></p>
                </div>

                <div class="lattes_footer_logoArea">
                <?php 
                    $args = array('post_type' => array('logo'));
                    $query = new WP_Query( $args );
                    if ($query->have_posts() ): while ( $query->have_posts() ): $query->the_post();
                ?>
                    <a href="<?= get_field('logo_link') ?>" class="lattes_footer_logoArea_link" target="_blank">
                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title()?>" title="<?= get_the_title()?>" class="lattes_footer_logoArea_link_logo">
                    </a>

                <?php endwhile; else: ?>
                    <p> Veuillez activer le plugin Lattes </p>
                <?php endif ?>
                </div>
            </div>
            <div class="lattes_footer_legal">
                <p class="lattes_footer_legal_content">© Mairie de Lattes - <a href="https://www.ville-lattes.fr/mentions-legales/" class="lattes_footer_legal_content_link">Mentions légales</a></p>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>