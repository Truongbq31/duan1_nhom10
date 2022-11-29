<?php
class c_Seat
{
    public function c_Seat()
    {
        include("models/m_Seat.php");
        $m_Seat = new m_Seat();
        $Seat = $m_Seat->m_Seat();
        $view = "views/Seat/v_Seat.php";
        include("templates/content.php");
    }


}