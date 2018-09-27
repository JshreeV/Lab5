<?php
/**
 * Created by PhpStorm.
 * User: Jayshree
 * Date: 2018-09-27
 * Time: 12:11 PM
 */

require_once 'Page.php';

$page = new Page('Humber North Campus','Copyright 2018','Welcome to Humber');
echo $page->displayPage();