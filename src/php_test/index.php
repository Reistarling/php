<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九表</title>
    <style>
        table{
            border-collapse:collapse
        }
        td{
            border:1px solid black;
            padding;2px 4px;
            text-align:center;
            font-size:12px;
        }
    </style>
</head>
<body>
<table>
<?php
    for($i = 1; $i <= 9; $i++){
        echo "<tr>";
        for($j = 1; $j <= 9; $j++){
            echo "<td>";
            echo $i * $j;
            echo "</td>";
        }
        echo "</tr>";
    }
?>
</table>
</body>

</html>