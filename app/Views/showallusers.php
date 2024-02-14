<h1><?= esc($title) ?></h1>
<?php 
foreach ($users as $user) {
    echo $user['first_name'] . ' ' . $user['last_name'];
} ?>