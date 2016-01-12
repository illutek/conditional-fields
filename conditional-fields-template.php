<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 12/01/2016
 * Time: 11:03
 * deze file wordt page.tlp.php of page--front.tpl.php uiteraard in je theme
 * Kijk eens hoe clean, en de content wordt in code voor de sidebar geprint
 * beter voor google SEO (de content is meestal belangrijker dan de inhoud van de sidebars.
 * Door de acties pull and push op de template.php file
 * wordt de sidebar-first toch eerst geprint voor de bezoeker
 */
?>
<main class="container">
    <div class="row">
        <div class="layout-content <?php print $contentlayout; ?>">
            <?php
            /**
             * hier de content, heb enkel de content print geplaatst om de code
             * kort te houden, dus hier komt het befaamde Word stuk Koen Timmers
             */
            ?>
            <?php print render($page['content']); ?>
        </div><!-- /.layout-content -->

        <?php if ($page['sidebar_first']): ?>
            <aside class="layout-sidebar-first test1 <?php print $sidebarfirst; ?>">
                <?php print render($page['sidebar_first']); ?>
            </aside>
        <?php endif; ?>

        <?php if ($page['sidebar_second']): ?>
            <aside class="layout-sidebar-second <?php print $sidebarsecond; ?>">
                <?php print render($page['sidebar_second']); ?>
            </aside>
        <?php endif; ?>
    </div>
</main>

