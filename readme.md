# サンプルお問い合わせフォーム

## 導入手順
リポジトリからクーロンorダウンロードしたら、以下の手順にて有効化する。(Homestead環境を想定)

### コードの配置とサイト設定

#### プロジェクトフォルダへの配置
Homesteadでのコードフォルダにソースコードをコピーします。

#### Homestead.yamlの編集
Homestead.yamlに、サイト情報を追加します。
(Homestead環境の/home/vagrant/codeフォルダ以下に配置する場合)

```yaml
sites:
        - map: hogefuga.test
          to: /home/vagrant/code/hogehoge/public
        # ↓サイト設定を追記。mapは任意名称
        - map: contact.test
          to: /home/vagrant/code/ContactForm/public
...
databases:
        - hogehoge
        # ↓データベースを追加。任意名称
        - contact

```
変更後、プロビショニング(サイト設定・DBの再設定)を行います。

```shell
vagrant reload --provision
```

これで、新たにデータベースが作成されます。

#### hostsファイルの編集
ローカルのhostsファイルに、上記Homestead.yamlで`sites.map`に追加したサイトを追記
します(要sudo)

mac : /private/etc/hosts
windows : C:\Windows\System32\drivers\etc\hosts

```shell
 sudo vim /private/etc/hosts
```

hostsファイル
```
192.168.10.10 hogehoge.test
192.168.10.10 contact.test # 追記
```

###  プロジェクトの初期処理
#### .envの編集
/.env_exampleをコピーし、データベース設定を変更します。

#### Migration/Seederの実行
テーブル構築&初期データセットアップを行います。
プロジェクトフォルダ直下にて下記を実行
```
php artisan db:migrate
php artisan db:seed
```

### アクセス確認
http://contact.test

### 初期データについて
`database/seeds`以下に初期データについて記述しています。
初期状態で管理者画面へログインできるユーザとして、以下を登録済み。

|User |Email |Password |
|- | -| -|
|テスト |test@example.com |test |

管理画面でのテスト表示としてContactTableSeederを作成しているが、
読み込ませていないので実行はされない。

