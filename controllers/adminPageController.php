<?php
require '../models/database.php';
require '../models/admin.php';

$adminTask = new admin();
$rows = $adminTask->listUsers();
