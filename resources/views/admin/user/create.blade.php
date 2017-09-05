@extends("admin.layouts.content")

@section("content")
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>添加用户</h5>
                    <div class="ibox-tools">
                        <a href="{{ url('/admin/user') }}" class="J_menuItem btn btn-primary btn-xs">返回用户列表</a>
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal" action="{{ url('/admin/user/create') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="col-sm-3 control-label">用户名：</label>

                            <div class="col-sm-8">
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="用户名" class="form-control">
                                <span class="help-block m-b-none text-danger">{{ $errors->first('name') }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">邮箱：</label>

                            <div class="col-sm-8">
                                <input type="text" name="email" value="{{ old('email') }}" placeholder="邮箱" class="form-control">
                                <span class="help-block m-b-none text-danger">{{ $errors->first('email') }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">密码：</label>

                            <div class="col-sm-8">
                                <input type="password" name="password" placeholder="密码" class="form-control">
                                <span class="help-block m-b-none text-danger">{{ $errors->first('password') }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-8">
                                <button class="btn btn-primary " type="submit"><i class="fa fa-check"></i>&nbsp;提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection