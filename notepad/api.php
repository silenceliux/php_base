
<?php
        //主机名
        $db_host = 'localhost';
        //用户名
        $db_user = 'root';
        //密码
        $db_password = '';
        //数据库名
        $db_name = 'jishiben';

        //连接数据库
        $conn = mysqli_connect($db_host,$db_user,$db_password,$db_name) or die('连接数据库失败！');

        if($_POST['name'] == "add"){
            mysqli_query($conn, "insert into list (content) values(".$_POST['content'].")");
        }
        if($_POST['name'] == "list"){
            //查询数据库
            $result = mysqli_query($conn, "SELECT * FROM list");
            //处理返回的数据集
            $data = [];
            while($row = mysqli_fetch_object($result)) {//mysqli_fetch_array
            $data[] = $row;
            }
            exit(json_encode($data));
        }
        if($_POST['name'] == "remove"){
            mysqli_query($conn, "delete from list where id = ".$_GET['id']);
        }
        if($_POST['name'] == "modify"){
        mysqli_query($conn, "update list set content='".$_POST['content']."' where id=".$_POST['id']);
        }
        ?>
