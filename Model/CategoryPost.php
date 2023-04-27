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
            $date=new DateTime('Asia/Ho_Chi_Minh');
            $datecreate=$date->format('Y-m-d H:i:s');
            // $datetime=date('Y-m-d now',time());
            $sql="insert into category_posts(id,name,slug,icon,description,created_at) 
            values(NULL,'$name','$slug','$icon','$description','$datecreate')";
            $result=$db->exec($sql);
            return $result;
        }
        public function update($id,$name,$slug,$icon,$description){
            $db=new Connect();
            $sql="update category_posts set 
            name='$name',
            slug='$slug',
            icon='$icon',
            description='$description' where id=$id";
        }
        public function delete($id){
            $db=new Connect();
            $sql="delete from category_posts where id=$id";
            $result=$db->exec($sql);
            return $result;
        }
    }
?>