<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order)
        {
            if ($order == "asc") {
                sort($array);
            } else if ($order == "desc") {
                rsort($array);
            }
            return $array;
        }
        $nums = [15, 4, 18, 23, 10];

        // 昇順にソート
        echo "昇順にソートします。<br>";
        $sorted_nums_asc = sort_2way($nums, "asc");
        foreach ($sorted_nums_asc as $num) {
            echo $num . "<br>";
        }
        
        // 降順にソート
        echo "降順にソートします。<br>";
        $sorted_nums_desc = sort_2way($nums, "desc");
        foreach ($sorted_nums_desc as $num) {
            echo $num . "<br>";
        }
        ?>
</body>

</html>

