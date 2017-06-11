<?php
include '../classes/DBAccess.php';
include '../classes/DBRequest.php';

echo "<pre>";
print_r($_SESSION);
echo "</pre>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PMI Workflow</title>
    <link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/style.css"> -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
</head>
<body>
    <div>
        <header>

        </header>
        <main>
            <aside class="navbar">
                <p>authorized as: <?php echo $_SESSION['logged_user']['login']?></p>
                <a href="app.php">new app</a>
                <a href="stock.php">stock</a>
                <a href="report.php">report</a>
                <a href="archive.php">app archive</a>
                <a href="profile.php">profile</a>
                <a href="options.php">options</a>
                <a href="spec.php">specification</a>
                <a href="index.php">main</a>
                <a href="logedout.php">logout</a>
            </aside>
            <table>
                <tr id="table">
                    <th>Date |</th>
                    <th>Region |</th>
                    <th>Application type |</th>
                    <th>Description |</th>
                    <th>Author |</th>
                    <th>Previous approval |</th>
                    <th>Lead time |</th>
                    <th>Status</th>
                    <th>Actions <a href="app_detail.php">view</a><a href="app_edit.php">edit</a><a href="app_delete.php">delete</a></th>
                </tr>
                <tr>
                    <?php

                    foreach ($variable as $key => $value) {
                        # code...
                    }

                    ?>
                    <td></td>
                </tr>
            </table>
        </main>
        <footer>

        </footer>
    </div>
</body>
</html>


