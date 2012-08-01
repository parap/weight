<?php
include_once('config.php');
Auth::redirectUnlogged();

$weights = Weight::getForDaysAgo(DAYS_AGO_INDEX);
$email = Auth::getEmail();

Core::loadTemplate('header', array('title' => '������� ����'));
Core::loadTemplate('index', array('weights' => $weights, 'email' => $email));
Core::loadTemplate('footer', array('link' => 'graph.php', 'linkText' => '���������� ������:'));