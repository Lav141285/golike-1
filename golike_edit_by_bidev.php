<?php
$red="\033[1;31m";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$green="\033[1;32m";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$yellow="\033[1;33m";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$blud="\033[1;34m";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$res="\033[1;35m";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$nau="\033[1;36m";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$trang="\033[1;37m";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$cam= "\e[38;5;208m";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$loijob=[];/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$loitk=[];/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
error_reporting(0);
system('clear');
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/

function GET($host,$tsm){
  $mr = curl_init();/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_URL => "$host",/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_CUSTOMREQUEST => "GET",/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_HTTPHEADER => $tsm,/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*//*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_FOLLOWLOCATION => true,));/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  $mr2 = curl_exec($mr); curl_close($mr);
  return $mr2;}/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  
  function HEAD($host,$tsm,$data){
  $mr = curl_init();/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  curl_setopt_array($mr, array(/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$host",/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_CUSTOMREQUEST => "HEAD",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $tsm,/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_HEADER => true));
  $mr2 = curl_exec($mr); curl_close($mr);
 return $mr2;}/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/

function POST($host,$tsm,$data){
  $mr = curl_init();/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  curl_setopt_array($mr, array(/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$host",
  CURLOPT_RETURNTRANSFER => true,/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*//*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_SSL_VERIFYPEER => false,/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_CUSTOMREQUEST => "POST",/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $tsm,/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  //CURLOPT_HEADER => true
));
  $mr2 = curl_exec($mr); curl_close($mr);/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
 return $mr2;}
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/

 function cc($vanban){$str = strlen($vanban);
 for($i=0;$i<=$str;$i++){echo $vanban[$i]; usleep(1000);}
return 1;}



$baner = $yellow."\n





vuanhle85





Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9nYXRld2F5LmdvbGlrZS5uZXRcL2FwaVwvbG9naW4iLCJpYXQiOjE3MDE1ODg3NTIsImV4cCI6MTczMzEyNDc1MiwibmJmIjoxNzAxNTg4NzUyLCJqdGkiOiJ6cHg5T2o0VUQ5SXpyam55Iiwic3ViIjoyMzE2OTIwLCJwcnYiOiJiOTEyNzk5NzhmMTFhYTdiYzU2NzA0ODdmZmYwMWUyMjgyNTNmZTQ4In0.I9lmzgN6F8Mh8cJX82fCSOD_LXNZRv6udH8PzPT3FWw





\n\n";

$mt = $yellow

."
\n\n";

cc($baner);
echo $green."
VFZSamQwMVVVWGxPUkd0NVQwRTlQUT09       \n";

$baner = $res."\n



hothithuy57




Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9nYXRld2F5LmdvbGlrZS5uZXRcL2FwaVwvbG9naW4iLCJpYXQiOjE3MDI1NTcyMjUsImV4cCI6MTczNDA5MzIyNSwibmJmIjoxNzAyNTU3MjI1LCJqdGkiOiJvdWRQeE82d3FiUzJiUXZ3Iiwic3ViIjoyMTYzMjUxLCJwcnYiOiJiOTEyNzk5NzhmMTFhYTdiYzU2NzA0ODdmZmYwMWUyMjgyNTNmZTQ4In0.4b48DATyX0aA0a95lI50RnrLMXJPjSp5-KSR9aI5T2I

\n\n";

$mt = $res

."
\n\n";

cc($baner);
echo $green."
VFZSamQwMXFWVEZPZWtrelRrRTlQUT09       \n";

$baner = $red."\n



leanhvu1985





Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9nYXRld2F5LmdvbGlrZS5uZXRcL2FwaVwvbG9naW4iLCJpYXQiOjE3MDI1OTg0NTksImV4cCI6MTczNDEzNDQ1OSwibmJmIjoxNzAyNTk4NDU5LCJqdGkiOiJLdWVGd1hVQnRyaW9DelR0Iiwic3ViIjoyNDg2NDYzLCJwcnYiOiJiOTEyNzk5NzhmMTFhYTdiYzU2NzA0ODdmZmYwMWUyMjgyNTNmZTQ4In0.sjpf_EWeUkQcELOsCEejTrogc9ii0ko_zGE3_eG5rhY


\n\n";

$mt = $red

."
\n\n";

cc($baner);
echo $green."
VFZSamQwMXFWVFZQUkZFMVRrRTlQUT09       \n";











$baner = $pink."\n






intagramlav





Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9nYXRld2F5LmdvbGlrZS5uZXRcL2FwaVwvbG9naW4iLCJpYXQiOjE3MDI5NDEyMjIsImV4cCI6MTczNDQ3NzIyMiwibmJmIjoxNzAyOTQxMjIyLCJqdGkiOiJFZ3VJbUhFMW0xbFdScXM5Iiwic3ViIjoyNDkwMDM1LCJwcnYiOiJiOTEyNzk5NzhmMTFhYTdiYzU2NzA0ODdmZmYwMWUyMjgyNTNmZTQ4In0.kz2Kt48jd80p2A2hhry2Umk1WrQ7TeDEXFI9CEDCCSo


\n\n";

$mt = $red

."
\n\n";

cc($baner);
echo $green."
VFZSamQwMXFhekZPUkVreFRVRTlQUT09       \n";





$baner = $pink."\n






dothihong1992





Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9nYXRld2F5LmdvbGlrZS5uZXRcL2FwaVwvbG9naW4iLCJpYXQiOjE3MDM0MzU3MDksImV4cCI6MTczNDk3MTcwOSwibmJmIjoxNzAzNDM1NzA5LCJqdGkiOiJpY2haT2xaZm1la1haOGZ4Iiwic3ViIjoyNDk2MDA0LCJwcnYiOiJiOTEyNzk5NzhmMTFhYTdiYzU2NzA0ODdmZmYwMWUyMjgyNTNmZTQ4In0.KGqanAmjUGazWdRFA8-UIBtCqILtLG0CcMtsANYvzic


\n\n";

$mt = $red

."
\n\n";

cc($baner);
echo $green."
VFZSamQwMTZVWHBPYWtGNVRtYzlQUT09       \n";





















cc($mt);


$baner = $yellow."\n





nanabaobao





Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9nYXRld2F5LmdvbGlrZS5uZXRcL2FwaVwvbG9naW4iLCJpYXQiOjE3MDU1NzkxNTEsImV4cCI6MTczNzExNTE1MSwibmJmIjoxNzA1NTc5MTUxLCJqdGkiOiJrT2FtczdYcllTR3E2b2daIiwic3ViIjoyNDk5NTA2LCJwcnYiOiJiOTEyNzk5NzhmMTFhYTdiYzU2NzA0ODdmZmYwMWUyMjgyNTNmZTQ4In0.VwJY0gPChP9d3gd7zbjNGxFeKGXO86Q9WXWzsbYLISg




\n\n";

$mt = $yellow

."
\n\n";

cc($baner);
echo $green."
VFZSamQwNVVWVE5QVkVVMFRVRTlQUT09       \n";

$baner = $res."\n

lavvip2





Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9nYXRld2F5LmdvbGlrZS5uZXRcL2FwaVwvbG9naW4iLCJpYXQiOjE3MDU1ODAyMDIsImV4cCI6MTczNzExNjIwMiwibmJmIjoxNzA1NTgwMjAyLCJqdGkiOiJLNlMyYlhyOHR4cXpIbmRzIiwic3ViIjoyNTA2MjE4LCJwcnYiOiJiOTEyNzk5NzhmMTFhYTdiYzU2NzA0ODdmZmYwMWUyMjgyNTNmZTQ4In0.IuuU7Y5eAcpkd9bfg90-gogrvknFCCDXy2RlrQkEjKE
\n\n";

$mt = $res

."
\n\n";

cc($baner);
echo $green."
VFZSamQwNVVWVFJOUkVrd1RVRTlQUT09       \n";

$baner = $red."\n



lavvip1





Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9nYXRld2F5LmdvbGlrZS5uZXRcL2FwaVwvbG9naW4iLCJpYXQiOjE3MDU1ODA0NTgsImV4cCI6MTczNzExNjQ1OCwibmJmIjoxNzA1NTgwNDU4LCJqdGkiOiI1cllvbFZQRFRFNldRdzBqIiwic3ViIjoyNTA0OTgzLCJwcnYiOiJiOTEyNzk5NzhmMTFhYTdiYzU2NzA0ODdmZmYwMWUyMjgyNTNmZTQ4In0.Gv6e4ifwTPI-sHu5YsC3odux--e4glpaEQHsSCCOAoY


\n\n";

$mt = $red

."
\n\n";

cc($baner);
echo $green."
VFZSamQwNVVWVFJOUkZFeVRuYzlQUT09       \n";











$baner = $pink."\n






intagramlav





Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9nYXRld2F5LmdvbGlrZS5uZXRcL2FwaVwvbG9naW4iLCJpYXQiOjE3MDI5NDEyMjIsImV4cCI6MTczNDQ3NzIyMiwibmJmIjoxNzAyOTQxMjIyLCJqdGkiOiJFZ3VJbUhFMW0xbFdScXM5Iiwic3ViIjoyNDkwMDM1LCJwcnYiOiJiOTEyNzk5NzhmMTFhYTdiYzU2NzA0ODdmZmYwMWUyMjgyNTNmZTQ4In0.kz2Kt48jd80p2A2hhry2Umk1WrQ7TeDEXFI9CEDCCSo


\n\n";

$mt = $red

."
\n\n";

cc($baner);
echo $green."
VFZSamQwMXFhekZPUkVreFRVRTlQUT09       \n";





$baner = $pink."\n






dothihong1992





Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9nYXRld2F5LmdvbGlrZS5uZXRcL2FwaVwvbG9naW4iLCJpYXQiOjE3MDM0MzU3MDksImV4cCI6MTczNDk3MTcwOSwibmJmIjoxNzAzNDM1NzA5LCJqdGkiOiJpY2haT2xaZm1la1haOGZ4Iiwic3ViIjoyNDk2MDA0LCJwcnYiOiJiOTEyNzk5NzhmMTFhYTdiYzU2NzA0ODdmZmYwMWUyMjgyNTNmZTQ4In0.KGqanAmjUGazWdRFA8-UIBtCqILtLG0CcMtsANYvzic


\n\n";

$mt = $red

."
\n\n";

cc($baner);
echo $green."
VFZSamQwMTZVWHBPYWtGNVRtYzlQUT09       \n";





















cc($mt);
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
echo "Nhập authorization : ";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$authu = trim(fgets(STDIN));
echo "Nhập t : ";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$tt = trim(fgets(STDIN));
echo "Nhập Time delay: ";
$delay = trim(fgets(STDIN));
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$lop = $res."============".$nau."===========".$yellow."===========".$green."==============\n";
system('clear');/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
///// Tools Nguyễn Văn Phúc /////
$phucc=$nau."Cre: Ng Van Phuc && Edit by Bi Dev \n";
cc($phucc);
echo $green."


    ╔═╗┌─┐┬  ┬┬┌─┌─┐
    ║ ╦│ ││  │├┴┐├┤ 
    ╚═╝└─┘┴─┘┴┴ ┴└─┘
    \n";cc($lop);

/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
////////////////////////////////////////////////////////////////
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$html="htmlspecialchars_decode";
////////////////golike//////////////////////////
$a1="Host: sv5.golike.net";
$a2="user-agent: Mozilla/5.0 (Linux; Android 12; SM-A025F Build/SP1A.210812.016;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.141 Mobile Safari/537.36";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$a3="authorization: $authu";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$a4="origin: https://app.golike.net";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$a5 ="t: $tt";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$b1 ="Host: sv4.golike.net";
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$tsm = array($a1,$a2,$a3,$a4,$a5);
$tsm1 = array($b1,$a2,$a3,$a4,$a5);
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*//*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/


$go = get("https://sv5.golike.net/api/tiktok-account",$tsm);/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$go = json_decode($go,true);/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/

$ff =0;/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
while(true){/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
	/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
	
$id = $go['data'][$ff]['id'];
$ten = $go['data'][$ff]['nickname'];
if($ten == true){
echo $yellow." [$ff] => NAME : $ten | ID : $id      \n";
$ff++;continue;}else{break;}
}
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*//*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
echo "Nhập Tài Khoản Chạy : ";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$co = trim(fgets(STDIN));/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$id = $go['data'][$co]['id'];/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$ten = $go['data'][$co]['nickname'];/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/

/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
system('clear');
///// Tools Nguyễn Văn Phúc /////
$phucc=$nau."CHỦ TOOL : Nguyễn Văn Phúc && Edit by Bi Dev \n";
cc($phucc);
echo $green."Tool Golike TikTok Vip    \n";cc($lop);
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/

while(true){

$golike = get("https://sv4.golike.net/api/advertising/publishers/tiktok/jobs?account_id=".$id."&data=null",$tsm1);/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$golike = json_decode($golike,true);
$link = $golike['data']['link'];/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$uid = $golike['data']['id'];/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$st = $golike['status'];/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$ty = $golike['data']['package_name'];
$coin = $golike['data']['price_per_after_cost'];


$linknow = explode(' ', explode('com/', $link)[1])[0];
    $now = "https://now.tiktok.com/$linknow";
 /*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$loi_id = $golike['data']['object_id'];/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
if($ty =="" or $ty == ""){
echo "Job $ty đã chặn vì chỉ follow         \r";$data = '{"ads_id":'.$uid.',"object_id":"'.$loi_id.'","account_id":'.$id.',"type":"'.$ty.'"}';/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$tsm3 = array($b1,$a2,$a3,$a4,"content-length: ".strlen($data),$a5,"content-type: application/json;charset=UTF-8","accept: application/json, text/plain, */*","referer: https://app.golike.net/");/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$loi = post("https://sv4.golike.net/api/advertising/publishers/tiktok/skip-jobs",$tsm3,$data);
$p = $red."Báo Cáo lỗi Thành công           \r";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/cc($p);
continue;}else{}/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
if($st=="400"){echo "Đang Load Lại Job            \r";sleep(0);continue;}else{echo "Đang Làm job $ty | $uid          \r";}/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
system("termux-open $link");/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
for($time=$delay;$time>-1;$time--){
echo $yellow."Vui lòng đợi $time để thực hiện...... \r";sleep(1);}/*[Tool Tao Cấm Buôn Bán ]*/





/*[Tools Nguyễn Văn Phúc ]*/
$data = '{"ads_id":'.$uid.',"account_id":'.$id.',"async":true,"data":null}';/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$tsm2 = array($b1,$a2,$a3,$a4,"content-length: ".strlen($data),$a5,"content-type: application/json;charset=UTF-8","accept: application/json, text/plain, */*","referer: https://app.golike.net/",);
/*[Tool Tao Cấm Buôn Bán ]*//*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/

$nhan = post("https://sv4.golike.net/api/advertising/publishers/tiktok/complete-jobs",$tsm2,$data);
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$nhan = json_decode($nhan,true);
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$se = $nhan['success'];
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/

if($se == "1"){/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
date_default_timezone_set('Asia/Ho_Chi_Minh');
$ngay=date("H:i");$noe++;/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$uu=$nau."$noe •".$cam." [$ngay] •".$trang." [$yellow$ty ".$trang."- $nau$uid".$trang."] •".$green." ꈤᐯᖘ •".$yellow." ".$red."=> ".$trang."[ +$coin ]  \n";cc($uu);}else{
$data = '{"ads_id":'.$uid.',"object_id":"'.$loi_id.'","account_id":'.$id.',"type":"'.$ty.'"}';/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$tsm3 = array($b1,$a2,$a3,$a4,"content-length: ".strlen($data),$a5,"content-type: application/json;charset=UTF-8","accept: application/json, text/plain, */*","referer: https://app.golike.net/");
$loi = post("https://sv4.golike.net/api/advertising/publishers/tiktok/skip-jobs",$tsm3,$data);
$p = $red."Báo Cáo lỗi Thành công           \r";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
cc($p);
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
}


}





