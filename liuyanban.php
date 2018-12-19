<?php
/**
 * Created by PhpStorm.
 * User: wangxiaolong
 * Date: 2018/12/19
 * Time: 15:38
 */
$name = $_POST['name'];
$iphone = $_POST['iphone'];
$content = $_POST['content'];

if (!empty($name) and !empty($content) and !empty($iphone))
{
    echo '您输入的姓名：'. $name . '<br>';
    echo '您输入的手机号码：'. $iphone . '<br>';
    echo '您输入的留言：'. $content ;
} else {
    echo '输入框不能为空';
}

