<?php
/**
 * Created by PhpStorm.
 * User: stefan
 * Date: 12/01/2016
 * Time: 10:02
 * deze file wordt page.tlp.php of page--front.tpl.php uiteraard in je theme
 * Onderstaande enkel als de beide sidebars even breed zijn
 * in dit voorbeeld beide md-3 (bootstrap)
 * Beter op template.php zeker als beide sidebars een verschillende breedte
 * mee krijgen.
 * Hierna de uitleg die op drupal.org staat omtrent logic on tpl.php files.
 * For all the conditional logic and data processing of the output,
 * there is the template.php file. It is not required, but to keep the .tpl.php files
 * tidy it can be used to hold preprocessors for generating variables before they are
 * merged with the markup inside .tpl.php files. Custom functions, overriding theme
 * functions or any other customization of the raw output should also be done here.
 */
?>
<div class="container">
	<?php if ($page['sidebar_first']): ?>
        <!-- #sidebar-first -->
        <div id="sidebar-first" class="col-md-3">
            <?php print render($page['sidebar_first']); ?>
        </div><!-- /#sidebar-first -->
        <?php endif; ?>
		
	<?php if ($page['sidebar_first'] && $page['sidebar_second']) { ?>
        <div id="content" class="col-md-6">
        <?php } elseif ($page['sidebar_first'] || $page['sidebar_second']) { ?>
        <div id="content" class="col-md-9">
		<?php } else { ?>
        <div id="content" class="col-md-12">
        <?php } ?>
            <?php
            /**
             * hier de content, heb enkel de content print geplaatst om de code
             * kort te houden, dus hier komt het befaamde Word stuk Koen Timmers
             */
            ?>
		<?php print render($page['content']); ?>

		</div><!-- /#content -->
		
		<?php if ($page['sidebar_second']): ?>
        <!-- #sidebar-first -->
        <div id="sidebar-second" class="col-md-3">
            <?php print render($page['sidebar_second']); ?>
        </div><!-- /#sidebar-first -->
        <?php endif; ?>
</div>