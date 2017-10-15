<h1>HELLO INIT</h1>

<?php

/**
 * Initialization file for template files 
 * 
 * This file is automatically included as a result of $config->prependTemplateFile
 * option specified in your /site/config.php. 
 * 
 * You can initialize anything you want to here. In the case of this beginner profile,
 * we are using it just to include another file with shared functions.
 *
 */

$title = $page->get("title|title") . " ~~~ " . $page->get("headline|title");
//echo $title;

$options = $pages->get("/optionsss/");

include_once("./_func.php"); // include our shared functions

