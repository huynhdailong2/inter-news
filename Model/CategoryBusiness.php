<?php
    class CategoryBusiness{
        public function __Construct(){

        }
        public function CategoryBusinessAll(){
            $db=new Connect();
            $sql="select * from category_business";
            $result=$db->getList($sql);
            return $result;
        }
        public function CategoryBusinessId($id){
            $db=new Connect();
            $sql="select * from category_business where id=$id";
            $result=$db->getInstance($sql);
            return $result;
        }
        public function insert($name,$description,$phone,$email,$image,$url){
            $db=new Connect();
            $date=new DateTime('Asia/Ho_Chi_Minh');
            $datecreate=$date->format('Y-m-d H:i:s');
            $sql="insert into category_business(id,name,description,phone,email,image,url,created_at)
            values (NULL,'$name','$description','$phone','$email','$image','$url','$datecreate')";
            $result=$db->exec($sql);
            return $result;
        }
        public function update($id,$name,$description,$phone,$email,$image,$url){
            $db=new Connect();
            $date=new DateTime('Asia/Ho_Chi_Minh');
            $dateupdate=$date->format('Y-m-d H:i:s');
            $sql="update category_business set 
            image='$image',
            name='$name',
            position_id=$position_id,
            phone='$phone',
            email='$email',
            image='$image',
            updated_at='$dateupdate' where id=$id";
            $result=$db->exec($sql);
            return $result;
        }
        public function delete($id){
            $db=new Connect();
            $sql="delete from category_business where id=$id";
            $result=$db->exec($sql);
            return $result;
        }
    }
?>
