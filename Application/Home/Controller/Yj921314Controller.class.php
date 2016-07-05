<?php
namespace Home\Controller;
use Home\Controller;
class Yj921314Controller extends FontEndController {
    public function index(){
        $this->display();
    }
    public function begin() {
        $tikumodel=D('Tiku');
        //$map['xuanxiang'] = array('LIKE','a:3%');
        //$arr_id=$tikumodel->where($map)->select();
        //var_dump($arr_id);
        //exit();
        
        
        $arr_id=$tikumodel->getField('id',true);
        //$count=$tikumodel->count();
        //var_dump($count);
        $suiji=  rand(0, 432);
        $id=$arr_id[$suiji];
        $arr_timu=$tikumodel->where("id=$id")->find();
        $xuanxiang=  unserialize($arr_timu['xuanxiang']);
        $this->assign('xuanxiang',$xuanxiang);
        $this->assign('timu',$arr_timu);
        
        $this->display();
    }
    public function danxuan(){
        //$arr=array(
            //0=>'√',
            //1=>'×'
        //);
        //var_dump(serialize($arr));
        //exit();361  390
        
        
        
        
        $str=file_get_contents('ceshi.txt');
        //$str=str_replace(array("\r\n", "\r", "\n"), "timufenge", $str);$arr=  preg_split('/\n|\r\n/',$str);
        $arr=  split('mmmmmm',$str);
        $tikumodel=D('Tiku');
        foreach ($arr as $value) {
            $arr_1=split('参考答案：',$value);
            $daan=$arr_1[1];
            $arr_2=  preg_split('/\n|\r\n/',$arr_1[0]);
            array_pop($arr_2) ;
            //$timu=substr($arr_2[0],strpos($arr_2[0],'、')+3);
            $timu=substr($arr_2[0],strpos($arr_2[0],'.')+1);
            array_shift($arr_2);
            foreach ($arr_2 as &$value2){
                $value2=str_replace(" ","",$value2);
            }
            $xuanxiang=serialize($arr_2);
            $row=array(
                'zhangjie'=>'税收违法违纪行为处分规定',
                'tixing'=>3,
                'timu'=>$timu,
                'xuanxiang'=>'a:2:{i:0;s:3:"√";i:1;s:2:"×";}',
                'daan'=>$daan
            );
            //var_dump($row);
            
            $result=$tikumodel->add($row);
            if($result){
                echo '输入数据库成功</br>';
            }

        }
        
    }


}