<?php
    require 'koneksi.php';

    function query($query){
        global $dsn;
        return $dsn->prepare($query);
    }
    function result_Set($query){
        global $dsn;
        $sts = $dsn->query($query);
        $rows = [];
        while($row = $sts->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }
    function result_singel($query){
        global $dsn;
        $sts = $dsn->query($query);
        $row = $sts->fetch_assoc();
        return $row;
    }
    function rowCount($sts){
        global $dsn;
        $sts->execute();
        return mysqli_affected_rows($dsn);
    }
    function numrow($sts){
        $sts->execute();
        $result = $sts->get_result();
        return $result->num_rows;
    }
    function executeQuery($query){
        global $dsn;
        $link = new mysqli('localhost','root','','skulchat');
        return mysqli_query($dsn, $query);
    }
?>