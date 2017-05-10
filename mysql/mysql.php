
<!DOCTYPE html>
<html>
<body>

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

        //添加数据
        // mysqli_query($conn, "insert into persons values('si','m',12)");
        //修改数据
       // mysqli_query($conn, "update persons set age=14 where name='si'");
        //删除数据
        mysqli_query($conn, "delete from persons where name='si'");
        //查询数据库
        $result = mysqli_query($conn, "SELECT * FROM persons");
        //处理返回的数据集
        $data = [];
        while($row = mysqli_fetch_assoc($result)) {//mysqli_fetch_array
        $data[] = $row;
        }

        //在页面上打印
        var_dump($data);
?>
</body>
</html>