@extends('layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">お問い合わせ</div>
                <div class="panel-body">
                    <form action="/contact/confirm" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="name-group col-sm-12">
                                <label for="name" class="col-sm-2 control-label">名前</label>
                                <div class="col-sm-6">
                                    <input type="text" name="name" id="contact-name" class="form-control" value="{{old('name')}}">
                                    @if ($errors->has('name'))
                                        <div class="error">
                                            <p>{{ $errors->first('name') }}</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="mail-group col-sm-12">
                                <label for="mail_address" class="col-sm-2 control-label">メールアドレス</label>
                                <div class="col-sm-6">
                                    <input type="text" name="mail_address" id="contact-mail_address" class="form-control" value="{{old('mail_address')}}">
                                    @if ($errors->has('mail_address'))
                                        <div class="error">
                                            <p>{{ $errors->first('mail_address') }}</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class ="title-group col-sm-12">
                                <label for="title" class="col-sm-2 control-label">件名</label>
                                <div class="col-sm-6">
                                    <input type="text" name="title" id="contact-title" class="form-control" value="{{old('title')}}">
                                    @if ($errors->has('title'))
                                        <div class="error">
                                            <p>{{ $errors->first('title') }}</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="content-group col-sm-12">
                                <label for="content" class="col-sm-2 control-label">内容</label>
                                <div class="col-sm-6">
                                    <textarea name="content" id="contact-content" class="form-control">{{old('content')}}</textarea>
                                    @if ($errors->has('content'))
                                        <div class="error">
                                            <p>{{ $errors->first('content') }}</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                        <input type="submit" class="btn btn-default " value="確認">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
