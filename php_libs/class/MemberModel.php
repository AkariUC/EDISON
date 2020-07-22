<?php

class MemberModel extends BaseModel {
    //----------------------------------------------------
    // 会員登録処理
    //----------------------------------------------------
    public function regist_member($userdata){
        try {
            $this->pdo->beginTransaction();
            $sql = "INSERT  INTO member (username, password, name, reg_date )
            VALUES ( :username, :password, :name, now() )";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':username',   $userdata['username'],   PDO::PARAM_STR );
            $stmh->bindValue(':password',   $userdata['password'],   PDO::PARAM_STR );
            $stmh->bindValue(':name',       $userdata['name'],       PDO::PARAM_STR );
            $stmh->execute();
            $this->pdo->commit();
        } catch (PDOException $Exception) {
            $this->pdo->rollBack();
            print "ERROR：" . $Exception->getMessage();
        }
    }


    //----------------------------------------------------
    // 会員のユーザ名（メールアドレス）と同じものがないか調べる。
    //----------------------------------------------------
    public function check_username($userdata){
        try {
            $sql= "SELECT * FROM member WHERE username = :username ";
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
    // 会員情報をユーザー名（メールアドレス）で検索
    //----------------------------------------------------
    public function get_authinfo($username){
        $data = [];
        try {
            $sql= "SELECT * FROM member WHERE username = :username limit 1";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':username',  $username,  PDO::PARAM_STR );
            $stmh->execute();
            $data = $stmh->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $Exception) {
            print "ERROR：" . $Exception->getMessage();
        }
        return $data;
    }


    //----------------------------------------------------
    // 会員情報をユーザーIDで検索
    //----------------------------------------------------
    public function get_member_data_id($id){
        $data = [];
        try {
            $sql= "SELECT * FROM member WHERE id = :id limit 1";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':id', $id, PDO::PARAM_INT );
            $stmh->execute();
            $data = $stmh->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $Exception) {
            print "ERROR：" . $Exception->getMessage();
        }
        return $data;
    }


    //----------------------------------------------------
    // 会員情報の更新処理
    //----------------------------------------------------
    public function modify_member($userdata){
        try {
            $this->pdo->beginTransaction();
            $sql = "UPDATE  member
                    SET 
                        username   = :username,
                        password   = :password,
                        name       = :name,
                    WHERE id = :id";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':username',   $userdata['username'],   PDO::PARAM_STR );
            $stmh->bindValue(':password',   $userdata['password'],   PDO::PARAM_STR );
            $stmh->bindValue(':name',       $userdata['name'],       PDO::PARAM_STR );
            $stmh->bindValue(':id',         $userdata['id'],         PDO::PARAM_INT );
            $stmh->execute();
            $this->pdo->commit();
            //print "データを" . $stmh->rowCount() . "件、更新しました。<br>";
        } catch (PDOException $Exception) {
            $this->pdo->rollBack();
            print "ERROR：" . $Exception->getMessage();
        }
    }


    //----------------------------------------------------
    // 会員情報を完全に削除する
    //----------------------------------------------------
    public function delete_member($id){
        try {
            $this->pdo->beginTransaction();
            $sql = "DELETE FROM member WHERE id = :id";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':id', $id, PDO::PARAM_INT );
            $stmh->execute();
            $this->pdo->commit();
            //print "データを" . $stmh->rowCount() . "件、削除しました。<br>";
        } catch (PDOException $Exception) {
            $this->pdo->rollBack();
            print "ERROR：" . $Exception->getMessage();
        }
    }

}
