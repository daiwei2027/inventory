<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>首页</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="left">
        <?php
        require "common.php";
        ?>
    </div>
    <div id="right">
        <?php
        $conn->query("SET NAMES UTF8");

        date_default_timezone_set("Asia/Shanghai");

        $sql = "INSERT INTO category (name) VALUES ('" . $_POST["name"] . "')";

        if ($conn->query($sql) === TRUE) {
            echo $id = $conn->insert_id;
            echo "新记录插入成功";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        header("Location: http://192.168.1.6/inventory/view.php");
        $conn->close();
        ?>
    </div>
</body>

</html>