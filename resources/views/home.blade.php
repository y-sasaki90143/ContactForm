@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">お問い合わせ一覧</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="table-content">
                    <table class="table table-striped table-responsive">
                        <tr>
                            <th class="col-md-2">名前</th>
                            <th class="col-md-2">メールアドレス</th>
                            <th class="col-md-2">件名</th>
                            <th class="col-md-4">お問い合わせ内容</th>
                            <th class="col-md-2">削除</th>
                        </tr>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->mail_address }}</td>
                                <td>{{ $contact->title }}</td>
                                <td>{{ $contact->content }}</td>
                                <td>
                                    <form action="/delete/{{$contact->id}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
