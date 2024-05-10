<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/header.php'; ?>

<div  class="container">
    <h1>Meet our books  </h1>

    <ul class="list-group">
        <?php foreach ($books as $book): ?>
        <li class="list-group-item"><?= $book['title'] ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<?php require 'views/partials/footer.php'; ?>


