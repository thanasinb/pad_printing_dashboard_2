<?php
require 'establish.php';

const ACTIVITY_BACKFLUSH=1;
const ACTIVITY_REWORK=2;

$sql = "SELECT id_activity, time_start, CURRENT_TIMESTAMP() AS time_current, total_food, total_toilet, no_send FROM activity WHERE status_work=1 AND id_machine = '" . $_GET["id_mc"] . "'";
$result = $conn->query($sql);
$data_activity = $result->fetch_assoc();
if(empty($data_activity)) {
    $sql = "SELECT id_activity, time_start, CURRENT_TIMESTAMP() AS time_current, total_food, total_toilet, no_send FROM activity_rework WHERE status_work=1 AND id_machine = '" . $_GET["id_mc"] . "'";
    $result = $conn->query($sql);
    $data_activity = $result->fetch_assoc();
    if(!empty($data_activity)) { $activity_type=ACTIVITY_REWORK; }
}else{ $activity_type=ACTIVITY_BACKFLUSH; }

//$sql = "SELECT id_activity, time_start, CURRENT_TIMESTAMP() AS time_current, total_food, total_toilet, no_send FROM activity WHERE status_work=1 AND id_machine = '" . $_GET["id_mc"] . "'";
//$result = $conn->query($sql);
//$data_activity = $result->fetch_assoc();

if(empty($data_activity)) {
    $data_json = json_encode(array("code"=>"011"), JSON_UNESCAPED_UNICODE);
    print_r($data_json);
} else {
    if (intval($data_activity["no_send"]) < $_GET["no_send"]) {
        $total_food = strtotime("1970-01-01 " . $data_activity["total_food"] . " UTC");
        $total_toilet = strtotime("1970-01-01 " . $data_activity["total_toilet"] . " UTC");
        $total_break = $total_food + $total_toilet;
        $time_start = strtotime($data_activity["time_start"]);
        $time_current = strtotime($data_activity["time_current"]);
        $time_total =  gmdate('H:i:s', $time_current-$time_start-$total_break);

        if($activity_type==ACTIVITY_BACKFLUSH){
            $sql = "UPDATE activity SET ";
        }elseif ($activity_type==ACTIVITY_REWORK){
            $sql = "UPDATE activity_rework SET ";
        }
        $sql = $sql . "status_work=3,";
        $sql = $sql . "total_work='" . $time_total . "',";
        $sql = $sql . "time_close='" . $data_activity["time_current"] . "',";
        $sql = $sql . "no_send=" . $_GET["no_send"] . ",";
        $sql = $sql . "no_pulse1=" . $_GET["no_pulse1"] . ",";
        $sql = $sql . "no_pulse2=" . $_GET["no_pulse2"] . ",";
        $sql = $sql . "no_pulse3=" . $_GET["no_pulse3"];
        $sql = $sql . " WHERE id_activity=" . $data_activity["id_activity"];
        $result = $conn->query($sql);

        $data_json = json_encode(array("time_work"=>$time_total), JSON_UNESCAPED_UNICODE);
        print_r($data_json);
    }else{
        $data_json = json_encode(array("code"=>"012"), JSON_UNESCAPED_UNICODE);
        print_r($data_json);
    }
}
require "contact.php";
require 'terminate.php';

