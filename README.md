## Name

EDISON
====

![logo](./edison_logo.png)

</br>

## Overview

PHPを利用して電球管理アプリケーションを制作
お家の電球データを格納して，いつ切れるのかがわかるようになるアプリケーション

## Description

* 実行環境
    - XAMPPをインストールし，以下の2項目をRunnig状態にする
        - MySQL Database
        - Apache Web Server
    - local環境を利用して実行

* データベースの構築
    - XAMPPのMySQLに以下のデータベースを作成する
    - データベース
        ``` 
        CREATE DATABASE edison_db;
        ```

    - テーブル
        - 会員情報テーブル
            ``` 
            DROP TABLE IF EXISTS member;
            CREATE TABLE member (
                id          INT UNSIGNED NOT NULL AUTO_INCREMENT,
                username   	VARCHAR(50),
                password   	VARCHAR(128),
                name     	VARCHAR(50),
                reg_date   	DATETIME,
                cancel_date DATETIME,
                PRIMARY KEY (id)
            ) ENGINE=INNODB;
            ```

            - username      : メールアドレスを格納
            - name          : 自分の名前
            - reg_date      : 登録日
            - cancel_date   : 退会日

        

        - 仮会員情報テーブル
            ``` 
            DROP TABLE IF EXISTS premember;
            CREATE TABLE premember (
                id          INT UNSIGNED NOT NULL AUTO_INCREMENT,
                username   	VARCHAR(50),
                password   	VARCHAR(128),
                name     	VARCHAR(50),
                link_pass   VARCHAR(50),
                reg_date   	DATETIME,
                PRIMARY KEY (id)
            ) ENGINE=INNODB;
            ```

            - link_pass : 本人確認用URLの保持

        - 電球設置テーブル
            ``` 
            DROP TABLE IF EXISTS light_installation;
            CREATE TABLE light_installation (
                id          MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
                member_id   INT UNSIGNED NOT NULL,
                light_place VARCHAR(50),
                light_date  DATETIME,
                light_use   INT,
                PRIMARY KEY (id),
                FOREIGN KEY(member_id) REFERENCES member(id) ON UPDATE CASCADE ON DELETE CASCADE
            )ENGINE=INNODB;
            ```

            - member_id   : 所持しているユーザのid (foreign key で制約)
            - light_place : 設置している場所
            - light_date  : 設置した日
            - light_use   : 1日にどのくらい使用するかを時間単位で入力

        - 電球情報テーブル
            ``` 
            DROP TABLE IF EXISTS light_detail;
            CREATE TABLE light_detail (
                id          SMALLINT,
                light_last  INT,
                light_name  VARCHAR(50),
                PRIMARY KEY (id)
            )ENGINE=INNODB;
            ```

            - light_name : 電球の名前
            - light_last : 電球がどれだけもつか([hour]単位で入力してもらう)

            - 電球の種類を先にInsertする
                - Insert文を増やすことで新しい種類にも対応
                - 今回対応するのは大まかな種類のみであり，実際に実装する場合にはより詳細なデータを作るべきである
            ``` 
            INSERT  INTO light_detail (id, light_last, light_name) VALUES(  1,  1500, '白熱電球');
            INSERT  INTO light_detail (id, light_last, light_name) VALUES(  2,  7750, '電球型蛍光灯');
            INSERT  INTO light_detail (id, light_last, light_name) VALUES(  3, 30000, 'LED電球');
            INSERT  INTO light_detail (id, light_last, light_name) VALUES(  4,  2000, 'ハロゲン電球');
            ```

### splashについて

* 参照元
    - https://github.com/MoriKeigoYUZU/splash
- コードは内部に追加されているため，追加する必要はない