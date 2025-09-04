<?php
require 'classes.php';
require 'form.php';
$page = new structure();
$form = new user_from();
$page->heading();
$page->footer();
$form->signup();