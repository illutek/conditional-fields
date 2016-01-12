<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 12/01/2016
 * Time: 10:44
 * yourtheme dien je te vervangen door je theme name uiteraard
 * hieronder zijn de sidebars vrschillende van breedte, maar met een
 * minimum aan aanpassingen kunnen deze ook gelijk zijn en zelf van breedte
 * anders zijn afhankelijk van ja of nee content in de andere sidebar
 * Allebei content left=4 en right=3
 * Enkel right dan zou deze bv left=5 kunnen zijn aanpassingen onder
 * // als er enkel in de sidebar first content is
 */

/**
 * @param $variables
 */

function yourtheme_preprocess_page(&$variables) {
// als er in beide sidebars content is
if (!empty($variables['page']['sidebar_first']) && !empty($variables['page']['sidebar_second'])) {
$variables['contentlayout'] = 'col-md-5 col-md-push-4';
$variables['sidebarfirst'] = 'col-md-4 col-md-pull-5';
$variables['sidebarsecond'] = 'col-md-3';
}
// als er enkel in de sidebar first content is
elseif (!empty($variables['page']['sidebar_first'])) {
$variables['contentlayout'] = 'col-md-8 col-md-push-4';
$variables['sidebarfirst'] = 'col-md-4 col-md-pull-8';
}
// als er enkel content is in de rechter sidebar
elseif (!empty($variables['page']['sidebar_second'])) {
$variables['contentlayout'] = 'col-md-9';
$variables['sidebarsecond'] = 'col-md-3';
}
// geen enkel content in beide zijbalken
else {
$variables['contentlayout'] = 'col-md-12';
}
}

