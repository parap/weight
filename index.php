<?php
include_once('config.php');

Auth::redirectUnlogged();

$weights = Weight::getForDaysAgo(DAYS_AGO_INDEX);

// + write AJAX scripts for data update (not in this file)


include('menu.php');
include('form.php');