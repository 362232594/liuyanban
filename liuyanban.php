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

if (!empty($name) and !empty($content) and !empty($iphone)) {

    echo '提交成功';
    //    mysql($name,$iphone,$content);


    // 创建数据表
    //function mysql($name,$iphone,$content)
    //{
    $host = '127.0.0.1';
    $user = 'root';
    $password = '';
    $database = 'myDB';
    $table = 'USERS';

    //连接数据库
    $con = mysqli_connect($host, $user, $password, $database);

    if (!$con) {
    //    die()函数输出一条消息，并推出当前脚本；
        die('不能连接：' . mysqli_error($con));
    } else {
        //  创建数据表 可在可视化工具里直接运行这断代码
//            $sql = "CREATE TABLE USERS (
//                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//                    name VARCHAR(30) NOT NULL,
//                    iphone VARCHAR(30) NOT NULL,
//                    content VARCHAR(1000) NOT NULL,
//                    create_date TIMESTAMP
//                    )";
//            if($con->query($sql) === true){
//
//                echo '创建user成功';
//            } else {
//                echo '创建失败'. $con->error;
//            }

        //   插入数据 INSERT INTO
        $sql = "INSERT INTO USERS(name, iphone, content) VALUES ('".$name."','".$iphone."','".$content."')";

        if($con->query($sql) === true){
            echo '数据插入成功';
        } else {
            echo 'Errer: 数据插入失败'. $sql . '<br>' . $con->error;
        }
    }


    mysqli_close($con);

    //}


} else {
    echo '输入框不能为空';
}

