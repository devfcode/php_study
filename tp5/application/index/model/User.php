<?php

namespace app\index\model\User;
use think\Model;
class User extends Model
{
    protected $pk = 'user_id';

    public function myindex(){
        return "hello world! Regist.php";
    }
}
