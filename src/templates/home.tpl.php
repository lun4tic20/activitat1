<?php
    include 'partials/header.tpl.php';
?>
<hr>
    <?php include 'partials/nav.tpl.php' ?>
    <main>
        <?php
            foreach($alumnes as $alumne):?>
            <p><?= $alumne;?></p>
            <?php endforeach;?>
    </main>
</body>
</html>