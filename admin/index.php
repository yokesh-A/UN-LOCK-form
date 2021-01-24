<?php
$url = (explode("admin",$_SERVER['REQUEST_URI']));
$res = (explode("/",$url['1']));
if($res[1] == "raamesh@erode360" AND $res[2]=="OPEN"){
file_put_contents('../'.$res[2], 'NON');
echo "Portal is Now Open";
}
else{
    if(unlink('../OPEN'))
    echo "Portal Closed";
}
?>