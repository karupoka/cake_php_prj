<!DOCTYPE html>
<html>
    <body>
        <?php foreach ($onepeace as $chara) { ?>
            <tr>
                <td>
                    <h2><?php echo img_tag2($chara['name']) ?>
                    名前:<?php echo $chara['name'] ?>
                    </h2>
                    <?php echo $chara['comment'] ?>
                </td>
            </tr>

            <!-- <input type="hidden" name='code2' value="<?php echo $chara['code2'] ?>"> -->
        <?php } ?>
        
    </body>
</html>




<!-- // file_put_contents("/tmp/test.log","### START oguri " . date("Y/m/d H:i:s ") . __FILE__ . "(line ".__LINE__.")↓↓↓¥n",FILE_APPEND); -->
<!-- // file_put_contents("/tmp/test.log", print_r($goods, true) ."¥n",FILE_APPEND); -->
<!-- // file_put_contents("/tmp/test.log","### E N D oguri " . date("Y/m/d H:i:s ") . __FILE__ . "(line ".__LINE__.")↑↑↑¥n¥n",FILE_APPEND); -->
