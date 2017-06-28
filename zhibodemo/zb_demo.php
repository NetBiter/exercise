<?php
/*
传入自定义参数，即传入应用名称和流名称
*/
$AppName = 'yihe';
$StreamName = 'test1';

/*
时间戳，有效时间
*/
$time = time() + 1800;

/*
加密key，即直播后台鉴权里面自行设置
*/
$key = 'yihezhibo';

$strpush = "/$AppName/$StreamName-$time-0-0-$key";
$vhost = "zb.zmvhz.com";
/*
里面的直播推流中心服务器域名、vhost域名可根据自身实际情况进行设置
*/
$pushurl = "rtmp://video-center.alivecdn.com/$AppName/$StreamName?vhost=$vhost&auth_key=$time-0-0-".md5($strpush);

$strviewrtmp = "/$AppName/$StreamName-$time-0-0-$key";
$strviewflv = "/$AppName/$StreamName.flv-$time-0-0-$key";
$strviewm3u8 = "/$AppName/$StreamName.m3u8-$time-0-0-$key";

$rtmpurl = "rtmp://$vhost/$AppName/$StreamName?auth_key=$time-0-0-".md5($strviewrtmp);
$flvurl = "http://$vhost/$AppName/$StreamName.flv?auth_key=$time-0-0-".md5($strviewflv);
$m3u8url = "http://$vhost/$AppName/$StreamName.m3u8?auth_key=$time-0-0-".md5($strviewm3u8);

/*
打印推流地址，即通过鉴权签名后的推流地址
*/
echo "<br/><br/><br/><br/><br/>推流地址<br/>";
echo $pushurl.'<br>';
/*
打印三种直播协议播放地址，123123555即鉴权后的播放地址
*/
echo "打印三种直播地址<br/>";
echo "$rtmpurl<br>";
echo $flvurl.'<br>';
echo $m3u8url.'<br>';

?>