<div>
    <h3>欢迎登录</h3>
    @include('layouts.alert')
    <form class="m-t" role="form" action="{{ url('/admin/login') }}" method="post">

        {{ csrf_field() }}

        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="用户名" required="required" autocomplete="off" autofocus>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="密码" required="">
        </div>
        <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>

        <p class="text-muted text-center">
            <a href="#"><small>忘记密码了？</small></a> | <a href="{{ url('/') }}">返回首页</a>
        </p>

    </form>
</div>