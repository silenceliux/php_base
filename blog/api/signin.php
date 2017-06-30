<?php
        $conn = mysqli_connect("localhost","root","","blog") or die ("失败");
        class returnObj{
            function obj($status){
                if($status){
                $this->status = 200;
                $this->message = "登录成功";
                }
                else{
                $this->status = 500;
                $this->message = "用户名或密码不正确";
                }
            return $this;
        }
        }
        //登录
        if($_POST['name']=="" || $_POST['password'] == ""){
            exit (json_encode("用户名和密码不能为空"));
        }
        $pass = mysqli_query($conn,
        "select * from users where name=".$_POST['name']." and password=".$_POST['password']);
        $data=[];
        while($row = mysqli_fetch_object($pass)){
            $data[]=$row;
        }
        $result = new returnObj();
        exit (json_encode($result->obj(!!count($data))));
        ?>