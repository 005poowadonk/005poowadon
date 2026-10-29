<?php
   
    echo "Name:".$_POST['member_name']."<br>";
    echo "E-mail:".$_POST['member_email']. "<br>";
    echo "Phone:".$_POST['member_phone']."<br>";
    echo "Gender:".$_POST['member_gender']."<br>";
        if($_POST['member_gender']=='1'){
            echo "Male <br>";
        }
        else if($_POST['member_gender']=='2'){
            echo "Female <br>";
        }
    echo "Address:".$_POST['member_address']. "<br>";
    echo "Major:".$_POST['member_major']. "<br>";
        if($_POST['member_major']=='cs'){
            echo "Computer Science <br>";
        }
        else if($_POST['member_major']=='it'){
            echo "Infoemation Technology <br>";
        }
        else if($_POST['member_major']=='mt'){
            echo "Mutimedia Technology <br>";
        }
    echo "<br>";
    echo "Date:".$_POST['member_day']."<br>"
        if(!empty($_POST['member_day1'])){
            echo "Day1 <br>";
        }
        if(!empty($_POST['member_day2'])){
            echo "Day2 <br>";
        }
        if(!empty($_POST['member_day3'])){
            echo "Day3 <br>";
        }
        
    

?>