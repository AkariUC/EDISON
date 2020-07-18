<?php

class PrememberModel extends BaseModel {
    //----------------------------------------------------
    // 仮会員登録処理
    //----------------------------------------------------
    public function regist_premember($userdata){
        try {
            $this->pdo->beginTransaction();
            $sql = "INSERT  INTO premember (username, password, name, link_pass, reg_date )
            VALUES ( :username, :password, :name, :link_pass, now() )";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':username',   $userdata['username'],   PDO::PARAM_STR );
            $stmh->bindValue(':password',   $userdata['password'],   PDO::PARAM_STR );
            $stmh->bindValue(':name',       $userdata['name'],       PDO::PARAM_STR );
            $stmh->bindValue(':link_pass',  $userdata['link_pass'],  PDO::PARAM_STR );
            $stmh->execute();
            $this->pdo->commit();
        } catch (PDOException $Exception) {
            $this->pdo->rollBack();
            print "ERROR：" . $Exception->getMessage();
        }
    }



    //----------------------------------------------------
    // 仮登録テーブル内にusernameが1個以上あればtrueが返ります。
    //----------------------------------------------------
    public function check_username($userdata){
        try {
            $sql= "SELECT * FROM premember WHERE username = :username ";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':username',  $userdata['username'], PDO::PARAM_STR );
            $stmh->execute();
            $count = $stmh->rowCount();
        } catch (PDOException $Exception) {
            print "ERROR：" . $Exception->getMessage();
        }
        if($count >= 1){
            return true;
        }else{
            return false;
        }
    }



    //----------------------------------------------------
    // 登録確認のメールで送られたリンクをクリックしてアクセスしたときの処理
    //----------------------------------------------------
    public function check_premember($username, $link_pass){
        $data = [];
        try {
            $sql= "SELECT * FROM premember WHERE username = :username AND link_pass = :link_pass limit 1 ";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':username',  $username,  PDO::PARAM_STR );
            $stmh->bindValue(':link_pass', $link_pass, PDO::PARAM_STR );
            $stmh->execute();
            $data = $stmh->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $Exception) {
            print "ERROR：" . $Exception->getMessage();
        }
        return $data;
    }



    //----------------------------------------------------
    // 仮登録会員の削除
    //----------------------------------------------------
    public function delete_premember_and_regist_member($userdata){
        try {
            $this->pdo->beginTransaction();
            $sql = "DELETE FROM premember WHERE id = :id";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':id', $userdata['id'], PDO::PARAM_INT );
            $stmh->execute();
            $sql = "INSERT  INTO member (username, password, name, reg_date )
            VALUES ( :username, :password, :name, now() )";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':username',   $userdata['username'],   PDO::PARAM_STR );
            $stmh->bindValue(':password',   $userdata['password'],   PDO::PARAM_STR );
            $stmh->bindValue(':name',      $userdata['name'],  PDO::PARAM_STR );
            $stmh->execute();
            $this->pdo->commit();
        } catch (PDOException $Exception) {
            $this->pdo->rollBack();
            print "ERROR：" . $Exception->getMessage();
        }
    }
}