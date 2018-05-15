@extends('layout')
@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">お問い合わせ</div>
                <div class="panel-body">
                    <p>誤りがないことを確認のうえ送信ボタンをクリックしてください。</p>
 
                    <form action="/contact/done" method="post">
                        {{ csrf_field() }}
                        <table class="table">
                            <tr>
                                <th>お名前</th>
                                <td>{{ $request->name }}</td>
                            </tr>
                            <tr>
                                <th>メールアドレス</th>
                                <td>{{ $request->mail_address }}</td>
                            </tr>
                            <tr>
                                <th>件名</th>
                                <td>{{ $request->title }}</td>
                            </tr>
                            <tr>
                                <th>内容</th>
                                <td>{{ $request->content }}</td>
                            </tr>
                        </table>
                        @foreach($contact->getAttributes() as $key => $value)
                            <input type="hidden" name="{{$key}}" value="{{$value}}">
                        @endforeach
                        <input type="submit" name="action" value="戻る">
                        <input type="submit" name="action" value="送信">
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
