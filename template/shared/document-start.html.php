<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width:device-width, initial-scale:1:0, user-scalable:no">
    <base href="/php-initiation/public/">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css"/>
    <title>
    <?php if ("Home" === $title): ?>
        Welcome
        <?php else: ?>
        <?= $title ?>
        <?php endif; ?>
    </title>

</head>

<body>
<nav class="navbar navbar-dark bg-primary shadow p-3">
    <span class="navbar-brand mb-0 h1">MY PHP USER PROGRAM</span>
</nav>

<?= $title === "Home" ? "<h1 class='col-4 offset-2 mt-5 mb-5'>Welcome</h1>" : "<h1 class='col-4 offset-2 mt-5 mb-5'>  $title  </h1>" ?>