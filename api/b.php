
<?php
        //主机名
        $db_host = 'localhost';
        //用户名
        $db_user = 'root';
        //密码
        $db_password = '';
        //数据库名
        $db_name = 'test';

        //连接数据库
        $conn = mysqli_connect($db_host,$db_user,$db_password,$db_name) or die('连接数据库失败！');

        //选择数据库
        //mysqli_select_db($conn, $db_name) or die('选择数据库失败！');
        //查询数据库
        $result = mysqli_query($conn, "SELECT * FROM persons where age=".$_GET['age']);
        //处理返回的数据集
        $data = [];
        while($row = mysqli_fetch_assoc($result)) {//mysqli_fetch_array
        $data[] = $row;
        }
        exit(json_encode($data));

        ?>
