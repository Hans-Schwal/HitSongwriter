<?php
require '../models/database.php';
require '../models/role.php';

$adminTask = new role();
$rows = $adminTask->showRoles();
