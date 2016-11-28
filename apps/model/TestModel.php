<?php
/**
 * Created by PhpStorm.
 * User: zhaoye
 * Date: 2016/10/24
 * Time: 下午4:33
 */

namespace model;


use ZPHP\Core\Db;
use ZPHP\Core\Log;

class TestModel{

    function __construct()
    {
        Log::write('testmodel construct');
    }

    public function test($key){
        $data = yield Db::redis()->cache($key);
        return $data;
    }
}