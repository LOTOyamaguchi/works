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


