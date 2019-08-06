<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <?php 
        //$pdo = new PDO('pgsql:host=localhost;port=5432;dbname=yolo1708' , 'postgres', '17081999');
        //    echo "WOW";


        $db = parse_url(getenv("DATABASE_URL"));

        $pdo = new PDO("pgsql:" . sprintf(
            "host=%s;port=%s;user=%s;password=%s;dbname=%s",
            $db["host"],
            $db["port"],
            $db["user"],
            $db["pass"],
            ltrim($db["path"], "/")
        ));
            
        $sql = "SELECT * FROM registercourse";
        $stmt = $pdo->prepare($sql);
        //Thiết lập kiểu trả về 
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $resultSet = $stmt->fetchAll();
    ?>

    <ul>
        <h1>INFOMATION</h1>
        <?php
            foreach ($resultSet as $row) {
            echo '<li>Name    :' . $row['studentname'] . "</li>";
            echo '<li>Course  :' . $row['course'] . "</li>";
            echo '<li>DoB     :' . $row['dob'] . "</li>";
            echo '<li>Gender  :' . $row['gender'] . "</li>";
            echo '<li>Favorite:' . $row['fav'] . "</li>";
            echo '<br>';
            }
        ?>
    </ul>
</body>
</html>