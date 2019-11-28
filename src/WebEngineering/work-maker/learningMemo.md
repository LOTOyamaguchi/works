# 仮想環境
## 構築
テキストではpython3だったが、python -m venv work-maker_venv

## 軌道
cd して work-maker_venvのscriptのactivate.batを起動すればOK

コマンドがうまく実行されると、＄の前に（work-maker_venv）のような文字が表示される

## 終了
仮想環境を終了deactivateのみでOK

# pythonの実行
pythonで起動 >>>となるのでそのままコードを書けば実行される
pythonを閉じるときは exit();


# django
## 構築
django-admin startproject (プロジェクト名)

## ファイルの役割
setting.py 設定用
urls.py URL指定
manage.py プロジェクトの作成、簡易サーバーの軌道など

## サーバーの起動
cd project
python manage.py runserver

http://127.0.0.1:8000/
にアクセスして表示されればOK

停止はCtrl+C

## アプリケーションとの紐づけ
setting.py に記載

projectのurls.py→appのurls.py

### フォーム作成
contribライブラリ

### ログイン制御したいページ
urls.pyに@login_requiredで追加

##　その他用語
generic　汎用ビュー　
 DetailViewやUpdateViewなど、汎用的な機能はdjangoで用意してある

### 質問メモ
1.マイグレーションの意味を理解する（ソース的に何が起きているのか）
実例を探す。
1.Modelのテストは？
1.ドキュメントを読んで疑問点の洗い出し
DetailViewがイマイチピントきてない。どういう役割？


