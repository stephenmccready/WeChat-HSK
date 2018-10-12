<?php
include_once 'db_connect.php';
$sql="SELECT TextNumber,Line1,Line2,Line3,Line4,Line5,Line6,Line7,Line8 FROM HSKWBText WHERE HSK='" . $_GET["HSK"] . "' AND Lesson='" . $_GET["Lesson"] . "' ORDER BY TextNumber";
$result=mysqli_query($mysqli,$sql);
mysqli_fetch_all($result,MYSQLI_ASSOC);
$answerArray=array();
foreach ($result as $row) {
	if( is_null($row["Line2"]) ) {$L2="";} else {$L2=$row["Line2"];};
	if( is_null($row["Line3"]) ) {$L3="";} else {$L3=$row["Line3"];};
	if( is_null($row["Line4"]) ) {$L4="";} else {$L4=$row["Line4"];};
	if( is_null($row["Line5"]) ) {$L5="";} else {$L5=$row["Line5"];};
	if( is_null($row["Line6"]) ) {$L6="";} else {$L6=$row["Line6"];};
	if( is_null($row["Line7"]) ) {$L7="";} else {$L7=$row["Line7"];};
	if( is_null($row["Line8"]) ) {$L8="";} else {$L8=$row["Line6"];};
	array_push($answerArray, array("id"=>$row["TextNumber"]
		,"L1"=>$row["Line1"],"L2"=>$L2,"L3"=>$L3,"L4"=>$L4
		,"L5"=>$L5,"L6"=>$L6,"L7"=>$L7,"L8"=>$L8)
	);
}
if(sizeof($answerArray)==0){
	array_push($answerArray, array("id"=>1
		,"L1"=>"Text not available yet","L2"=>"","L3"=>"","L4"=>""
		,"L5"=>"","L6"=>"","L7"=>"","L8"=>"")
	);
}
$mysqli->close();
echo json_encode($answerArray);
