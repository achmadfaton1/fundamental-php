<html>
    <body>
        <form action="site.php" method="get">
            Name :<input type="text" name="name">
            <br>
            Umur :<input type="text" name="age">
            <br>
            <input type="submit">
        </form>
        Nama :<?php echo $_GET["name"] ?>
        <br>
        Umur :<?php echo $_GET["age"] ?>
    </body>
</html>