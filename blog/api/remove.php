<?php
        class returnObj{
        function obj(){
        $this->status = 200;
        $this->message = "删除成功";
        return $this;
        }
        }
        $conn = mysqli_connect("localhost","root","","blog") or die("失败");
        $result = mysqli_query($conn,"delete from list where id=".$_POST['id']);
        $result = mysqli_query($conn,"delete from reply where id=".$_POST['id']);
        $result = new returnObj();
        $return = $result->obj();
        exit(json_encode($return));
        ?>