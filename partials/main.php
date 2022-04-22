<?php 
    include __DIR__.'/../server/data.php'
?>

<main id="app">
    <?php foreach($albums as $album){ ?>
        <ul>
            <li>
                <img src="<?= $album['album_cover']  ?>" alt="<?= $album['title']  ?>">
            </li>
            <li>
                <?= $album['title']  ?>
            </li>
            <li>
                <?= $album['author']  ?>
            </li>
            <li>
                <?= $album['year']  ?>
            </li>
        </ul>
    <?php } ?>
</main>