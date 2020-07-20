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
    public function get_member_list($search_key){
        $sql = <<<EOS
SELECT
        li.id as id,
        m.member_id    as member_id,
        li.light_place as light_place,
        li.light_date  as light_date,
        li.light_use   as light_use,
FROM
        light_place li,
        member m
WHERE
        li.member_id = m.id

EOS;
        if($search_key != ""){
            $sql .= " AND ( li.light_place like :light_place ) ";
        }

        try {
            $stmh = $this->pdo->prepare($sql);
            if($search_key != ""){
                $search_key = '%' . $search_key . '%'; 
                $stmh->bindValue(':light_place',  $search_key, PDO::PARAM_STR );
            }
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

}
