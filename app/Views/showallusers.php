<h1><?= esc($title) ?></h1>
<table border=1>
    <tr>
        <td>First Name</td>
        <td>Last Name</td>
    </tr>
    <?php  foreach ($users as $user) {
        ?>
        <tr>
            <td> <?= $user['first_name'] ?></td>
            <td> <?= $user['last_name'] ?></td>
        </tr>
        <?php
    } ?>
</table>
