<?php
    class CategoryRelated{
        public function __construct(){

        }
        public function CategoryRelatedAll(){
            $db=new Connect();
            $sql="select * from category_related";
            $result=$db->getList($sql);
            return $result;
        }
        public function showCateRelate_Doanhnghiep(){
            $db=new Connect();
            $sql="select * from category_related where note='doanhnghiep'";
            $result=$db->getList($sql);
            return $result;
        }
        public function Doanhnghiep_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_related where note='doanhnghiep' limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        public function CategoryRelatedId($id){
            $db=new Connect();
            $sql="select * from category_related where id=$id";
            $result=$db->getInstance($sql);
            return $result;
        }
        public function insert($name,$description,$note,$url){
            $db=new Connect();
            $date=new DateTime('Asia/Ho_Chi_Minh');
            $datecreate=$date->format('Y-m-d H:i:s');
            $sql="insert into category_related(id,name,description,note,url,created_at)
            values (NULL,'$name','$description','$note','$url','$datecreate')";
            $result=$db->exec($sql);
            return $result;
        }
        public function update($id,$name,$description,$note,$url){
            $db=new Connect();
            $date=new DateTime('Asia/Ho_Chi_Minh');
            $dateupdate=$date->format('Y-m-d H:i:s');
            $sql="update category_related set 
            name='$name',
            description='$description',
            note='$note',
            url='$url',
            updated_at='$dateupdate' where id=$id";
            $result=$db->exec($sql);
            return $result;
        }
        public function delete($id){
            $db=new Connect();
            $sql="delete from category_related where id=$id";
            $result=$db->exec($sql);
            return $result;
        }
    }
?>