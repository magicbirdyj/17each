<?php
namespace Home\Controller;
use Home\Controller;
class Yj921314Controller extends FontEndController {
    public function index(){
        $this->display();
    }
    public function begin() {
        $tixing=$_GET['tixing'];
        
        $tikumodel=D('Tiku');
 
      
        $where['tixing']=array('in',$tixing);
        $arr_id=$tikumodel->where($where)->getField('id',true);
        $count=$tikumodel->where($where)->count();
        $suiji=  rand(0, $count-1);
        $id=$arr_id[$suiji];
        $arr_timu=$tikumodel->where("id=$id")->find();
        $xuanxiang=  unserialize($arr_timu['xuanxiang']);
        $this->assign('xuanxiang',$xuanxiang);
        $this->assign('timu',$arr_timu);
        
        $this->display();
    }
    


}