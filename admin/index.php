<?php
    require_once "../connection_db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>
<body>
    <div class="sidebar">
        <h2>Admin</h2>
        <ul>
            <li><a href="?page=dashboard">Dashboard</a></li>
            <li><a href="?page=users">Users</a></li>
            <li><a href="?page=data_buses">Buses</a></li>
            <li><a href="?page=settings">Settings</a></li>
            <li><a href="?page=reports">Reports</a></li>
            <li><a href="?page=logout">Logout</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="header">
            <h1>
                <?php
                if (isset($_GET['page'])) {
                    switch ($_GET['page']) {
                        case 'dashboard':
                            echo 'Dashboard';
                            break;
                        case 'users':
                            echo 'Users';
                            break;
                        case 'data_buses':
                            echo 'Buses';
                            break;
                        case 'settings':
                            echo 'Settings';
                            break;
                        case 'reports':
                            echo 'Reports';
                            break;
                        default:
                            echo 'Dashboard';
                    }
                } else {
                    echo 'Dashboard';
                }
                ?>
            </h1>
            <div class="profile">
                <span>Welcome, Admin</span>
            </div>
        </div>
        <div class="content">
            <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    $allowed_pages = ['dashboard', 'users','data_buses', 'settings', 'reports', 'logout'];
                    
                    if (in_array($page, $allowed_pages)) {
                        include "content/$page.php";
                    } else {
                        include "content/dashboard.php";
                    }
                } else {
                    include "content/dashboard.php";
                }
            ?>
        </div>
    </div>
            <?php
                include "./modal_box/modal_update.php";
                include "./modal_box/modal_add.php";
            ?>
    <div id="myModalDelete" class="modal">
        <div class="modal-content super_center">
            <span class="close">&times;</span>
            <div class="container_input">
                <button 
                id="deleteButton"
                type="submit" 
                class="btn btn-confirm"
                name="button_delete"
                >
                    Delete Buses ?
                </button>
            </div>
        </div>
    </div>
    <script src="../assets/js/data.js"></script>
</body>
</html>
