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
        public function CategoryRelatedAll_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_related limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục doanh nghiệp
        public function showCateRelate_Business(){
            $db=new Connect();
            $sql="select * from category_related where note='doanhnghiep'";
            $result=$db->getList($sql);
            return $result;
        }
        //phân trang danh mục doanh nghiệp
        public function Business_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_related where note='doanhnghiep' limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục sở hữu trí tuệ
        public function showCateRelate_IntellectualProperty(){
            $db=new Connect();
            $sql="select * from category_related where note='sohuutritue'";
            $result=$db->getList($sql);
            return $result;
        }
        // phân trang danh mục sở hữu trí tuệ
        public function IntellectualProperty_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_related where note='sohuutritue' limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục đầu tư
        public function showCateRelate_Invest(){
            $db=new Connect();
            $sql="select * from category_related where note='dautu'";
            $result=$db->getList($sql);
            return $result;
        }
        // phân trang danh mục đầu tư
        public function Invest_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_related where note='dautu' limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục giấy phép
        public function showCateRelate_License(){
            $db=new Connect();
            $sql="select * from category_related where note='giayphep'";
            $result=$db->getList($sql);
            return $result;
        }
        // phân trang danh mục giấy phép
        public function License_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_related where note='giayphep' limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục vụ việc vụ án
        public function showCateRelate_VVVA(){
            $db=new Connect();
            $sql="select * from category_related where note='vuviec-vuan'";
            $result=$db->getList($sql);
            return $result;
        }
        // phân trang danh mục vụ việc vụ án
        public function VVVA_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_related where note='vuviec-vuan' limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục  kế toán- thuế
        public function showCateRelate_KTT(){
            $db=new Connect();
            $sql="select * from category_related where note='ketoan-thue'";
            $result=$db->getList($sql);
            return $result;
        }
        // phân trang danh mục kế toán- thuế
        public function KTT_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_related where note='ketoan-thue' limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục thành lập công ty doanh nghiệp
        public function showCateRelate_TLCTDN(){
            $db=new Connect();
            $sql="select * from category_related where note='thanhlapcongtydoanhnghiep'";
            $result=$db->getList($sql);
            return $result;
        }
        // phân trang danh mục thành lập công ty doanh nghiệp
        public function TLCTDN_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_related where note='thanhlapcongtydoanhnghiep' limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục thay đổi đăng ký kinh doanh
        public function showCateRelate_TDDKKD(){
            $db=new Connect();
            $sql="select * from category_related where note='thaydoidangkykinhdoanh'";
            $result=$db->getList($sql);
            return $result;
        }
        // phân trang danh mục thay đổi đăng ký kinh doanh
        public function TDDKKD_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_related where note='thaydoidangkykinhdoanh' limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //SHOW danh mục bài viết liên quan thành lập chi nhánh công ty 
        public function showCateRelate_TLCNCT(){
            $db=new Connect();
            $sql="select * from category_related where note='thanhlapchinhanhcongty'";
            $result=$db->getList($sql);
            return $result;
        }
        //SHOW danh mục thành lập công ty (trong thành lập chi nhánh công ty)
        public function showCateRelate_TLCT(){
            $db=new Connect();
            $sql="select * from category_related where note='thanhlapcongty'";
            $result=$db->getList($sql);
            return $result;
        }
        //SHOW danh mục văn bản pháp luật (trong thành lập chi nhánh công ty)
        public function showCateRelate_VBPL(){
            $db=new Connect();
            $sql="select * from category_related where note='vanbanphapluat'";
            $result=$db->getList($sql);
            return $result;
        }
        //SHOW danh mục tư vấn pháp luật (trong thành lập chi nhánh công ty)
        public function showCateRelate_TVPL(){
            $db=new Connect();
            $sql="select * from category_related where note='tuvanphapluat'";
            $result=$db->getList($sql);
            return $result;
        }
        //SHOW danh mục thủ tục chuyển đổi loại hình doanh nghiệp
        public function showCateRelate_TTCĐLHDN(){
            $db=new Connect();
            $sql="select * from category_related where note='thu-tuc-chuyen-doi-loai-hinh-doanh-nghiep'";
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