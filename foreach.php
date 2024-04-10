<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
       $merchandise_datas =['name' => '玉ねぎ', 'price' => 200, 'area' => '北海道'];
       foreach ($merchandise_datas as $merchandise_data)
        echo $merchandise_data . '<br>';
        ?>
    </p>
</body>

</html>