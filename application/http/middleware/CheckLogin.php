<?php

namespace app\http\middleware;

class CheckLogin
{
    public function handle($request, \Closure $next)
    {
        if(!session('?admin.user')) {
            return redirect('admin/login/index')->with('error','非法请求，请重新登录');
        }
        return $next($request);
    }
}
