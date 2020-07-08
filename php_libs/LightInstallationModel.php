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
}

