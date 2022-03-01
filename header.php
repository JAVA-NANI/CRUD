<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php
            $page =  basename($_SERVER['PHP_SELF']);

            switch ($page) {
                case 'index.php':
                    echo "HOME";
                    break;

                case 'create.php':
                    echo "CREATE";
                    break;

                case 'update.php':
                    echo "UPDATE";
                    break;

                case 'delete.php':
                    echo 'DELETE';
                    break;
                default:
                    break;
            }
            ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <script src="./js/index.js"></script>
</head>

<body>
    <div id="header">
        <h1><?php switch ($page) {
                case 'index.php':
                    echo "HOME";
                    break;

                case 'create.php':
                    echo "CREATE";
                    break;

                case 'update.php':
                    echo "UPDATE";
                    break;

                case 'delete.php':
                    echo "DELETE";
                    break;
                default:
                    break;
            } ?></h1>
    </div>
    <div id="menu">
        <ul>
            <?php
            $index = "";
            $create = "";
            $update = "";
            $delete = "";

            switch ($page) {
                case 'index.php':
                    $index = ' class="active"';
                    break;

                case 'create.php':
                    $create = ' class="active"';
                    break;

                case 'update.php':
                    $update = ' class="active"';
                    break;

                case 'delete.php':
                    $delete = ' class="active"';
                    break;

                default:
                    break;
            }
            ?>
            <li class="menu-link ">
                <a <?php echo $index ?>" href="index.php" id="index-link">HOME</a>
            </li>
            <li class="menu-link">
                <a <?php echo $create ?>" href="create.php" id="create-link">CREATE</a>
            </li>
            <li class="menu-link">
                <a <?php echo $update ?>" href="update.php" id="update-link">UPDATE</a>
            </li>
            <li class="menu-link">
                <a <?php echo $delete ?>" href="delete.php" id="delete-link">DELETE</a>
            </li>

        </ul>
    </div>