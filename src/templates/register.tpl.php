<?php
    include 'partials/header.tpl.php';
    include 'partials/nav.tpl.php';
?>
<body>
    <br><br><header>REGISTER</header><br>
    <form action="?url=registeraction" method="POST">
        <label for="user">Username</label><br>
        <input type="text"><br><br>
        <label for="passwd">Password</label><br>
        <input type="text"><br><br>
        <button>REGISTER</button>
    </form>
</body>