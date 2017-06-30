<?php
        class returnObj{
        function obj(){
        $this->status = 200;
        $this->message = "评论成功";
        return $this;
        }
        }
        $conn = mysqli_connect("localhost","root","","blog") or die("失败");
        $result = mysqli_query($conn,"insert into reply values(".$_post['id'].",".$_post['content'].")");
        $result = new returnObj();
        $return = $result->obj();
        exit(json_encode($return));
        ?>