<?php
    include 'partials/header.tpl.php';
    include 'partials/nav.tpl.php';
?>
<body>
    <br><br><header>LOGIN</header><br>
    <form action="?url=logaction" method="POST">
        <label for="email">Email</label><br>
        <input type="text" name="email"><br><br>
        <label for="password">Password</label><br>
        <input type="password" name="password"><br><br>
        <button>LOGIN</button>
    </form>
</body>