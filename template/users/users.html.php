<?php include"../template/shared/document-start.html.php"; ?>

<ul>
    <?php foreach($userArray as $user): ?>

        <li>
            <?= $user->getInfo()->getFirstName() ?>
        </li>

    <?php endforeach; ?>
</ul>

<?php include"../template/shared/document-end.html.php"; ?>





