<?php
    class CategoryPost{
        public function __construct(){

        }
        public function AllCategoryPost(){
            $db=new Connect();
            $sql="select * from category_posts order by id asc";
            $result=$db->getList($sql);
            return $result;
        }
        public function showCategoryGT(){
            $db=new Connect();
            $sql="select * from category_posts where description='gioithieu'";
            $result=$db->getList($sql);
            return $result;
        }
        public function getCategoryPostId($id){
            $db=new Connect();
            $sql="select * from category_posts where id=$id";
            $result=$db->getInstance($sql);
            return $result;
        }
        public function insert($name,$slug,$icon,$description,$title){
            $db=new Connect();
            $date=new DateTime('Asia/Ho_Chi_Minh');
            $datecreate=$date->format('Y-m-d H:i:s');
            // $datetime=date('Y-m-d now',time());
            $sql="insert into category_posts(id,name,slug,icon,description,title,created_at) 
            values(NULL,'$name','$slug','$icon','$description','$title','$datecreate')";
            $result=$db->exec($sql);
            return $result;
        }
        public function update($id,$name,$slug,$icon,$description,$title){
            $db=new Connect();
            $date=new DateTime('Asia/Ho_Chi_Minh');
            $datecreate=$date->format('Y-m-d H:i:s');
            $sql="update category_posts set 
            name='$name',
            slug='$slug',
            icon='$icon',
            description='$description',
            title='$title',
            created_at='$datecreate' where id=$id";
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