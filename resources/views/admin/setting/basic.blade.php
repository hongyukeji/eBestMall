@extends("admin.layouts.content")

@section("content")
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>基本设置 <small>网站基本设置</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form action="" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">网站名称</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{ config('setting.site.name') }}" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">网站标题</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" value="{{ config('setting.site.title') }}" class="form-control">
                                <span class="help-block m-b-none">网站标题仅显示在网站首页</span>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">网站关键词</label>

                            <div class="col-sm-10">
                                <input type="text" name="keywords" value="{{ config('setting.site.keywords') }}" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">网站简介</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="description" class="form-control" rows="3">{{ config('setting.site.description') }}</textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">网站版权</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="copyright" class="form-control" rows="3">{{ config('setting.site.copyright') }}</textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit">保存内容</button>
                                <button class="btn btn-white" type="submit">取消</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection