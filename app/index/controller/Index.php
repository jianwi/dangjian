<?php
namespace app\index\controller;

use App\Http\Controllers\Controller;
use think\Db;

class Index extends \think\Controller
{
    /**
     * 首页
     * @return mixed
     */
    public function index()
    {
        return  $this->fetch("index");
    }

    /**
     * 列表页
     * @param $id   列表id
     * @return mixed
     */
    public function list($id){
        $this->assign(
            [
              "id"=>$id,
              "title"=>"课程列表"
            ]
        );
        return $this->fetch("list");
    }

    public function info($id){
        $this->assign([
            "id"=>$id,
            "title"=>"课程信息"
        ]);
        return $this->fetch("info");
    }
    public function listApi($id){
        $id=intval($id);
        $pic=Db::query("SELECT `id`,`pic`,`name` FROM `type` WHERE `id`={$id}")[0];
        $list=Db::query("SELECT `id`,`title`,`pic`,`date` FROM `courses` WHERE `type`={$id} ORDER BY `id` DESC");
        return $this->success2json([
            "info"=>$pic,
            "list"=>$list
        ]);
    }
    public function infoApi($id){
        $id=intval($id);
        return $this->success2json(Db::query("SELECT `pic`,`title`,`content` FROM `courses` WHERE id={$id}")[0]);
    }
}
