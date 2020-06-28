<?php
function hit_count(){
    $ip_address=$_SERVER['REMOTE_ADDR'];
    ////file - Reads entire file into an array
    $ip_file=file('ip.txt');
    foreach ($ip_file as $ip) {
        $ip_single=trim($ip);
        if ($ip_address==$ip_single) {
            $found=true;
            break;
        } else {
            $found=false;
        }
    }

        if($found==false){
            $filename='count.txt';
            $handle=fopen($filename,'r');
            $current=fread($handle,filesize($filename));
            fclose($handle);
            //if ip does not exist we write to it
            $current_incr=$current +1;
            $handle=fopen($filename,'w');
            fwrite($handle,$current_incr);
            fclose($handle);
            

            $handle=fopen('ip.txt','a');
            fwrite($handle,$ip_address."\n");
            fclose($handle);


        }
   
}

?>