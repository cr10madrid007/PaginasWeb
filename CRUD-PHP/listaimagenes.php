<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
        <style>.rotate_image {-webkit-transform: rotate(90deg);-moz-transform: rotate(90deg);-ms-transform: rotate(90deg);-o-transform: rotate(90deg);transform: rotate(90deg);}h1 {color: green;}
        </style>
        </head>
        <body>
            <?php
            include_once 'Database.php';
            include_once 'Fotografias.php';
            $database = new Database();
            $db = $database->getConnection();
            $items = new Fotografias($db);
            $stmt = $items->getImages();
            $itemCount = $stmt->rowCount();
            //echo json_encode($itemCount)
            if($itemCount > 0){
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    echo $row["id"] . "</br>";
                //echo $row["imagen"];
            echo '<img src="data:image/png;base64,' . $row["imagen"] . '" width="400" height="400" rotate="180" />';}}?>
            </body>
            </html>