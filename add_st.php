<?php

$m=$_POST['mid'];
$n=$_POST['pid'];
$o=$_POST['pstt'];
//$q=$_POST['muser'];
//$r=$_POST['gid'];
//$s=$_POST['tid'];

//<!-- id,name,mno,madd,muser,gid,tid-->

//$m=$_POST['m'];

$con=pg_connect("host=localhost user=harshal password=root123 dbname=gym")or die ("unable to connect DATABASE**");

$qry="insert into pay_memb values($m,'$n','$o')";

//$qry="insert into member values($m,'$n','$o','$p','$q','$r','$s');"

pg_query($con,$qry) or die ("unable to insert values in DATABASE**");

pg_close($con);

echo "Record is Added SUCCESSFFULLY**";


?><br>
<a href="payst.html">Go Back</a>

