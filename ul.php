<ul>
    <?php
    $arr = ['a', 'b', 'c', 'd'];
    for ($i = 0; $i < sizeof($arr); $i++) {
        echo "<li>$arr[$i]</li>";
    }
    ?>
</ul>