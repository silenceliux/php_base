<?php
        $conn = mysqli_connect("localhost","root","","blog") or die ("失败");
        class returnObj{
        function obj($status){
        if($status){
        $this->status = 200;
        $this->message = "注册成功";
        }
        else{
        $this->status = 500;
        $this->message = "用户名已存在";
        }
        return $this;
        }
        }
        //登录
        if($_POST['name']=="" || $_POST['password'] == ""){
        exit (json_encode("用户名和密码不能为空"));
        }
        $pass = mysqli_query($conn,
        "select * from users where name=".$_POST['name']);
        $data=[];
        while($row = mysqli_fetch_object($pass)){
        $data[]=$row;
        }
        $result = new returnObj();
        if(!!count($data)){
            exit (json_encode($result->obj(!count($data))));
        }
        else{
         mysqli_query($conn,
        "insert into users values(".$_POST['name'].",".$_POST['password'].")");
        exit (json_encode($result->obj(true)));
        }
        ?>