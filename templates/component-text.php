<?php namespace ProcessWire;
$ems = $modules->get('EmsBasic');

$markup = $page->headline.'<div class="text">'.$page->textarea.'</div>';
echo $ems->wrapper($page->wrapper,$markup);