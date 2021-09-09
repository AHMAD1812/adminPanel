<?php

include "../db.php";

if (isset($_GET['playerId'])) {
    $res = mysqli_query($conn, "Select * from player where playerId=".$_GET['playerId']);
    $player=array();
    header('Content-Type', 'application/json');
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $player['id']=$row['playerId'];
            $player['name']= $row['playerName'];
            $player['pic']= $row['profilePic'];
            $player['tokens']= $row['avaliableTokens'];
            $player['email']=$row['email'];
            $player['phone']=$row['phone'];
            $player['address']=$row['address'];
            
            $win=($row['wins']/$row['totalGames'])*100;
            $lose=($row['lose']/$row['totalGames'])*100;
            $draw=$row['wins']+$row['lose'];
            
            if($draw==$row['totalGames']){
                $draw=0;
            }else{
                $draw=(($row['totalGames']-$draw)/$row['totalGames'])*100;
            }

            $player['wins']= $win;
            $player['lose']= $lose;
            $player['draw']= $draw;
            $player['rankPower']= $row['rankPower'];
            $player['weaponDamage']= $row['weaponDamage'];
            $player['comboDamage']= $row['comboDamage'];

        }
        
        $query = mysqli_query($conn, "Select * from totalwithdraw where playerId=".$_GET['playerId']);
        $withdraw=array();
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $withdraw[]=$row;
            }
        }
        $player['withdraw']=$withdraw;

        $query = mysqli_query($conn, "Select * from medialinks where playerId=".$_GET['playerId']);
        $mediaLinks=array();
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $mediaLinks[]=$row;
            }
        }
        $player['mediaLinks']=$mediaLinks;

        $query = mysqli_query($conn, "Select * from rank where playerId=".$_GET['playerId']);
        $rank=array();
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $rank['Level 1']=$row['1'];
                for($i=2;$i<=9;$i++){
                    if($row[$i]!=0){
                        $rank['level '.$i]=$row[$i];
                    }
                }
                $player['rank']=$rank;
            }
        }

        echo json_encode(
            ['status' => true, 
            'data' => $player, 
            'result' => 'Found']
        );
    }
    else {
        echo json_encode(
            ['status' => true, 
            'data' => 'No Data found for this playerId', 
            'result' => 'Not Found']
        );
    }
}
else {
    echo json_encode(
        ['status' => true, 
        'data' => 'No Data Found Please Give Player Id', 
        'result' => 'Not Found']
    );
}

?>