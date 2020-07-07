<?php

class LightInstallationModel extends BaseModel {
    //----------------------------------------------------
    // ユーザが所持する電球の取得
    //----------------------------------------------------
    public function get_lightinstallation_data(){
        $lightinstallation_array = [];
        try {
            $sql= "SELECT * FROM light_installation";
            $stmh = $this->pdo->query($sql);
            while ($row = $stmh->fetch(PDO::FETCH_ASSOC)){
                for
                $light_installation_array[$row['id']] = $row['ken'];

            }
        } catch (PDOException $Exception) {
            print "エラー：" . $Exception->getMessage();
        }
        return $light_installation_array;
    }
}

