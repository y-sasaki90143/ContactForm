<!DOCTYPE html>
<html lang="ja">
<style>
  body {
    background-color: #fffacd;
  }
  h1 {
    font-size: 16px;
    color: #ff6666;
  }
  #button {
    width: 200px;
    text-align: center;
  }
  #button a {
    padding: 10px 20px;
    display: block;
    border: 1px solid #2a88bd;
    background-color: #FFFFFF;
    color: #2a88bd;
    text-decoration: none;
    box-shadow: 2px 2px 3px #f5deb3;
  }
  #button a:hover {
    background-color: #2a88bd;
    color: #FFFFFF;
  }
</style>
<body>
<h1>
  テストメール
</h1>
<p>
以下のお問い合わせ内容を受け付けました。
</p>
<p>
お名前 : {{ $contact->name }}
</p>
<p>
メールアドレス : {{ $contact->mail_address }}
</p>
<p>
件名 : {{ $contact->title }}
</p>
<p>
内容 : {{ $contact->content }}
</p>
<p id="button">
  <a href="http://localhost:8000/contact">お問い合わせフォームへ</a>
</p>
</body>
</html>
