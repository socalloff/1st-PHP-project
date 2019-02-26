<?php if (array_key_exists($errorName, $error)): ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Warning!</strong>
        <?= $error[$errorName] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>


