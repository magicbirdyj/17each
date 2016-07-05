<?php
namespace Home\Model;
use Think\Model;

class TikuModel extends Model {
    protected $fields=array(
        'id','tixing','timu','xuanxiang', 'daan',
        '_pk'=>'id','_autoinc'=>true
    );
}
