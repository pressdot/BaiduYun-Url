<html>
<head>
<title>百度云网址解析</title>
<meta http-equiv="Content-Type" content="text/html; charset=Utf-8" />
</head>
<body>
<?php

if (!$_GET["Url"])
{
	$Url=$_GET["url"];
} else {
	$Url=$_GET["Url"];
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$Url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_USERAGENT,"Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"); 
curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$Url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_USERAGENT,"Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"); 
curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
curl_setopt($ch, CURLOPT_HEADER, 0);
$text=curl_exec($ch);
curl_close($ch);
preg_match_all('/yunData.setData((.*?));/',$text,$en); 
preg_match_all('/bdstoken":(.*?),/',$text,$xn); 
print_r($xn);
/*
$gsh1=substr($en[1][0],1,-1);
$gsh2='{'.substr($en[1][1],1,-1).'}';
$gsh2=str_replace(",",":",$gsh2);
$gsh2=str_replace("'",'"',$gsh2);
$sj = json_decode($gsh1,true);
$rj = json_decode($gsh2,true);
//sleep(5);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://pan.baidu.com/api/sharedownload?' . );
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_USERAGENT,"Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"); 
curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
curl_setopt($ch, CURLOPT_HEADER, 0);
$text=curl_exec($ch);
curl_close($ch);

print_r($sj);
print_r($rj);
echo '<br />' .$sj['sign'];
echo '<br />';
echo '<br />' .$sj['timestamp'].'<br />';
print_r(number_format($sj['file_list']['list'][0]['fs_id'],0,'',''));
*/
?>
</body>
</html>