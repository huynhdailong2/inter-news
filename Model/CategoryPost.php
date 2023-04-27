<?php
    class CategoryPost{
        public function __construct(){

        }
        public function AllCategoryPost(){
            $db=new Connect();
            $sql="select * from category_posts";
            $result=$db->getList($sql);
            return $result;
        }
        public function getCategoryPostId($id){
            $db=new Connect();
            $sql="select * from category_posts where id=$id";
            $result=$db->getInstance($sql);
            return $result;
        }
        public function insert($name,$slug,$icon,$description){
            $db=new Connect();
            $date=new DateTime("now");
            $datecreate=$date->format("Y-m-d");
            $sql="insert into category_posts(id,name,slug,icon,description,created_at) 
            values(NULL,'$name','$slug','$icon','$description','$datacreate')";
            $result=$db->exec($sql);
            return $result;
        }
        public function delete($id){
            $db=new Connect();
            $sql="delete from category_posts where id=$id";
            $result=$db->exec($sql);
            return $result;
        }
    }
?>