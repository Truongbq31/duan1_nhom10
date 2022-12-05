<?php
require_once("database.php");
class m_detail extends database{
    public function mdetail(){
        if(isset($_GET["id"])){
            $id=$_GET["id"];
            $sql="SELECT*FROM category_movie where id=$id";
            $this->setQuery($sql);
            return $this->loadRow();
        }
    }
    public function mbinhluan(){
        if(isset($_GET["id"])){
            $id=$_GET["id"];
            $sql="SELECT*FROM comment where id_comment=$id";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
    }
    public function binhluan($comment,$date,$idcomment,$name){
        $sql="INSERT INTO comment VALUES('','$comment','$date','$idcomment','$name')";
        $this->setQuery($sql);
        $this->execute();

    }
}
