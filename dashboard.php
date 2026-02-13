<?php
$role = "admin"; 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="top-bar">
    <div class="left-menu">
        <button>Dashboard</button>
        <button>Categories</button>
        <button>Products</button>
    </div>
    <div class="right-menu">
        <button>Logout</button>
    </div>
</div>
<div class="welcome">
    <?php
        if ($role == "admin") {
            echo "<h2>Welcome Admin</h2>";
        } else {
            echo "<h2>Welcome Encoder</h2>";
        }
    ?>
</div>
</body>
</html>
