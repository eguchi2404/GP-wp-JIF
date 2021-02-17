# [WordPress案件]JIF日本国際財団のコーポレートサイト制作
JIF日本国際財団のコーポレートサイト制作のリポジトリです。

## メンバー
- 吉實　拓人（Git：なし, PJマネージャー）
- 江口　強（Git：管理者, オブザーバー, PJリーダー, webディレクター）
- 森田　柚香（Git：メンバー, アシスタント）
- 山田　浩康（Git：メンバー, PG）
- 村瀬 峰行（Git：メンバー, PG）
- 本田 理恵（Git：メンバー, PG, デザイナー）
## ローカル環境情報
■phpMyAdmin  
①新規のユーザーを作成してください  
ユーザー名：wp-JIF  
ホスト：ローカルを選択  
パスワード：q3TQSq0WwoR4lx98  
グローバル特権：全てチェックする  

②新規のデーターベースを作成してください  
DB名：wp-JIF-Corporate_db  
文字コード：utf8_general_ci  

■WordPress  
①XAMPPやMANPなどのhotdocsフォルダ直下にリモートリポジトリをクローンしてください  
場所：「…¥htdocs¥GP-wp-JIF¥wordpress（ここに設置）」  
フォルダ名：wordpress（default）  
※リネームすると本番環境に移行する際に障害が発生する可能性があるのでしません  
※インストール時のアクセスURL：localhost/GP-wp-JIF/wordpress/wp-admin  
②インストール時の設定は下記で設定してください  
サイト名：JIF日本国際財団  
ユーザー名：admin  
パスワード：j1D6Trv9KzjFMI&h%X  
メール：work@gp1000.jp  

■共有する場合  
GitHubでデータを共有をしていきます。  
必要に応じて「phpMyAdmin」のエクスポートしたsqlファイルを配布していきます。

## システム構成/プラグイン構成/ファイル構成
設計書を参照してください。
## 開発
開発中に課題が生じた際には「課題管理表」を用いてタスク管理を行います。  
また、開発に際しては「Github」を用いた「Github Flow」という開発フローで行います。


## Github Flow
#### 目的
Githubを用いたチーム開発を滞りなく行えるようにすることを目的とします。
#### 必要なもの
- Git（バージョン管理システム）  
- Githubのアカウント  
- GithubDesktop（Github用GUIアプリケーション）
#### 基本的なフロー（サービスローンチ前）
1. Issue を作る (コードを書く前に十分に議論、設計をする)
2. Branch を作る
3. コードを書いて幾つか Commit(Push) を重ねる
4. [WIP]でPull Requestを出す (この時何が終わってないのかも書くと良い)
5. Assigneeがコードレビューをする (Assigneeやチームに相談事があるときはここで相談する)
6. コードを書き進める
7. 終わったら、[WIP]を外し、レビューアーを@mentionする
8. レビューを受け、コードを修正する
9. レビューも終わり、OKならマージされる
10. Branchを削除する
11. デプロイ
12. デプロイ後の確認
#### Issueとは
「重要事項、（提起された）問題」という意味で、開発メンバー間で共有が必要な事項をスレッド形式で立てられる機能です。  
今回の開発においてはプラスでエンジニアの作業タスクの共有の場としても使用する。

##### issueで管理されるもの
- エンジニアへのタスク(機能追加、修正依頼)  
- サービス全体や機能などに関する議論

##### issueの例
- 直近の課題
- 挙動の不具合報告とその対応
- 意思決定したいこと
- これから取組みたいこと
- 資料などのフィードバック
- 新しいアイディア
- 改善したほうが良いと思ったこと
- 依頼したいタスク
##### issueをたてる際のルール
1. issueをたてる際は人は必ず以下の情報を記入してissueをたててください
  - issueタイトル命名規則 → 該当FILE名_issue内容
  - SECTION → このissueはどの部分のことなのか
  - WHY → なぜこのissueをたてたのか
  - WHAT → このisuueで何を決めたいのか
  - OUTPUT → 成果物として何を作り上げればこのisuueはcloseしていいのか
  

  [例]  
  issueタイトル命名規則 → CONTACT US.html_問い合わせ機能の追加  
  SECTION → CONTACT US.html ※固定ページのため便宜上で.htmlとしています  
  WHY → 問い合わせフォームを実装して、ユーザーからの問い合わせを可能にする。  
  WHAT → WPプラグインの種類, フォームコンテンツの内容  
  OUTPUT → WPプラグインの種類：Contact form7  
           フォームコンテンツ：名前,電話番号, メールアドレス,タイトル,本文,利用規約同意（checkBox）,利用規約リンク（利用規約はこちら）,送信ボタン  
2. Assignee(タスクの担当者、議論の最終意思決定者)を必ず「管理者」で選択する。
##### pull Requestをたてる際のルール
1. Pull Requestをたてる際は人は必要に応じて以下の情報を記入してPull Requestをたててください (この時何が終わってないのかも書くと良い)
  - Pull Requestタイトル命名規則 → WIP:該当FILE名_Pull Request内容
  - 関連URL（issue,Pull Requestなど）
  - SECTION → このPull Requestはどの部分のことなのか
  - WHY → なぜこのPull Requestをたてたのか,なにが終わっていないのか
  - TECHNICAL CHANGES → 変更概要,なにをどう変更・追加したか,どういうロジックか
  - UI CAPTURE → 変更前のキャプチャと変更後のキャプチャ
  - OTHER → レビュアーに対する注意点,リリースに対する注意点など

## テスト方法
弊社ではWPプラグイン「Public Post Preview」を用いてWEBページの表示テストを行います。  
その他にも遷移や動作検証などを行っていきます。  
テスト結果はキャプチャ撮影をして、Googleドライブ内の「エビデンス」フォルダに保存します。  
※テスト完了後に「WPサイトのメール設定」や「Contact form7」のメール設定の変更を忘れないようにしましょう。

## リリース方法
公開日の当日にWPのパラメーターを「非公開」→「公開」にしてリリースします。

## 保守運用
保守運用のタスクや課題は「保守運用管理表」を用いてタスク管理を行います。