<?php
        class returnObj{
        function obj($resultData){
        $this->status = 200;
        $this->message = "查询成功";
        $this->result = $resultData;
        return $this;
        }
        }
        $conn = mysqli_connect("localhost","root","","blog") or die("失败");
        $result = mysqli_query($conn, "select * from list");
        //处理返回的数据集
        $data = [];
        while($row = mysqli_fetch_object($result)) {//mysqli_fetch_array
        $data[] = $row;
        $result2 = mysqli_query($conn, "select * from replylist where id=".($row -> id));
        $data[count($data)-1] -> reply = [] ;
        while($row2 =  mysqli_fetch_assoc($result2)){

        $data[count($data)-1] -> reply[] = $row2 ;
        }
        }
        $result = new returnObj();
        $return = $result->obj($data);
        exit(json_encode($return));
        ?>