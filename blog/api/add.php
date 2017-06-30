<?php
        class returnObj{
        function obj(){
        $this->status = 200;
        $this->message = "添加成功";
        return $this;
        }
        }
        $conn = mysqli_connect("localhost","root","","blog") or die("失败");
        $result = mysqli_query($conn,"insert into list(name,content) values(".$_post['name'].",".$_post['content'].")");
        $result = new returnObj();
        $return = $result->obj();
        exit(json_encode($return));
        ?>