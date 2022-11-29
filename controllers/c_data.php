<?php

class c_data {
    public function c_data(){
        $key = $_POST['id_ngay'];
        include "models/m_data.php";
        $m_data = new m_data();
        $result = $m_data -> m_data($key);
        $view = "views/lich_chieu/v_lich_chieu.php";
        include ("templates/layout2.php");
        foreach ($result as $index => $value){
             ?>
            <ul class="seat-plan-wrapper bg-five chi_nhanh">
                <li>
                    <div class="movie-name">
                        <div class="icons">
                            <i class="far fa-heart"></i>
                            <i class="fas fa-heart"></i>
                        </div>

                            <span><?php echo $value->ten_chi_nhanh?></span>

                        <div class="location-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                    </div>
                    <div class="movie-schedule">

                            <div class="item" onclick="location.href='seat.php'">
                                <?php echo $value->gio_bat_dau;?>
                            </div>

                    </div>
                </li>
            </ul>
       <?php
        }
    }
}
?>


