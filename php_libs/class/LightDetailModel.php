<!-- get_light_data -->
<?php

class LightDetailModel extends BaseModel {
    //----------------------------------------------------
    // 電球の取得
    //----------------------------------------------------
    public function get_light_data(){
        $light_array = [];
        try {
            $sql= "SELECT * FROM light_detail  ";
            $stmh = $this->pdo->query($sql);
            while ($row = $stmh->fetch(PDO::FETCH_ASSOC)){
                $light_array[$row['id']] = $row['light_name'];
            }
        } catch (PDOException $Exception) {
            print "エラー：" . $Exception->getMessage();
        }
        return $light_array;
    }
}
