<?php

namespace app\admin\controller;

use app\common\model\Articles;
use think\Controller;
use think\Request;
use app\admin\validate;

class Article extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $data = Articles::paginate(5);
        /*foreach($data as $val) {
            dump($val->cate);
        }die;*/
        $total = $data->total();
        return view('admin@article/index',compact('data','total'));
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        // 读取栏目
        $data = db('cates')->select();
        return view('admin@article/create',compact('data'));
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $data = $request->post();
        // 验证
        $res = $this->validate($data,validate\Article::class);
        if(true !== $res) {
            return $this->error($res);
        }
        // 入库
        $userInfo = session('admin.user');
        $data['user_id'] = $userInfo['id'];
        $res = Articles::create($data);
        return redirect('article/index');
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit(int $id)
    {
        // 根据ID查询
        $data = Articles::find($id);
        // 读取栏目
        $cdata = db('cates')->select();
        return view('admin@article/edit',compact('data','cdata'));
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, int $id)
    {
        $data = $request->put();
        // 验证
        $res = $this->validate($data,validate\Article::class);
        if(true !== $res) {
            return $this->error($res);
        }
        // 修改数据
        unset($data['_method']);
        unset($data['__token__']);
        $res = Articles::where('id',$id)->update($data);
        return redirect('article/index');
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete(int $id)
    {
        Articles::destroy($id);
        return json(['code'=>0,'msg'=>'删除成功']);
    }
}
