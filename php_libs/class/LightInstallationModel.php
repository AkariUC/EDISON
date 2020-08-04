<?php

class LightInstallationModel extends BaseModel {
    //----------------------------------------------------
    // ユーザが所持する電球の取得
    //----------------------------------------------------
    public function get_lightinstallation_data(){
        $light_installation_array = [];
        try {
            $sql= "SELECT * FROM light_installation";
            $stmh = $this->pdo->query($sql);
            while ($row = $stmh->fetch(PDO::FETCH_ASSOC)){
                // 連想配列
                $light_installation_array[$row['id']]['member_id']   = $row['member_id'];
                $light_installation_array[$row['id']]['light_place'] = $row['light_id'];
                $light_installation_array[$row['id']]['light_type']  = $row['light_type'];
                $light_installation_array[$row['id']]['light_date']  = $row['light_date'];
                $light_installation_array[$row['id']]['light_use']   = $row['light_use'];
            }
        } catch (PDOException $Exception) {
            print "エラー：" . $Exception->getMessage();
        }
        return $light_installation_array;
    }

    //----------------------------------------------------
    // 電球一覧取得処理
    //----------------------------------------------------
    public function get_light_list($id){
        $sql = <<<EOS
SELECT
        li.id          as id,
        m.id           as member_id,
        li.light_place as light_place,
        li.light_type  as light_type,
        li.light_date  as light_date,
        li.light_use   as light_use 
FROM
        light_installation li,
        member m 
WHERE
        li.member_id = m.id
EOS;

        $sql .= " AND ( m.id  like $id) ";

        try {
            $stmh = $this->pdo->prepare($sql);
            $stmh->execute();
            // 検索件数を取得
            $count = $stmh->rowCount();
            // 検索結果を多次元配列で受け取る
            $i=0;
            $data = [];
            while ($row = $stmh->fetch(PDO::FETCH_ASSOC)){
                foreach( $row as $key => $value){
                        $data[$i][$key] = $value;
                }
                $i++;
            }
        } catch (PDOException $Exception) {
            print "エラー：" . $Exception->getMessage();
        }
        return [$data, $count];
    }


    //----------------------------------------------------
    // 電球追加処理
    //----------------------------------------------------
    public function add_light($light_place, $light_type, $light_date, $light_use, $id){
        try {
            $this->pdo->beginTransaction();
            $sql = "INSERT INTO light_installation (member_id, light_place, light_type, light_date, light_use) VALUES ( :member_id, :light_place, :light_type, :light_date, :light_use)";
            $stmh = $this->pdo->prepare($sql);
            $stmh->bindValue(':member_id',   $id,          PDO::PARAM_INT );
            $stmh->bindValue(':light_place', $light_place, PDO::PARAM_STR );
            $stmh->bindValue(':light_type',  $light_type,  PDO::PARAM_INT );
            $stmh->bindValue(':light_date',  $light_date,  PDO::PARAM_STR );
            $stmh->bindValue(':light_use',   $light_use,   PDO::PARAM_INT );
            $stmh->execute();
            $this->pdo->commit();
        } catch (PDOException $Exception) {
            $this->pdo->rollBack();
            print "ERROR：" . $Exception->getMessage();
        }
    }

}


//CREATE TABLE light_installation (
//    id          MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
//    member_id   INT UNSIGNED NOT NULL,
//    light_place VARCHAR(50),
//    light_type  INT,
//    light_date  DATETIME,
//    light_use   INT,
//    PRIMARY KEY (id),
//    FOREIGN KEY(member_id) REFERENCES member(id) ON UPDATE CASCADE ON DELETE CASCADE
//)ENGINE=INNODB;