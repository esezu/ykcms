<?php
error_reporting(0);
$网站名='玉兔资源';
$地址='百度.com';
$邮箱='admin@admin.com';
$统计='';

$资源接口='https://apiyutu.com/api.php/provide/vod/at/xml';
$资源分类='<ty id="20">精品推荐</ty>';

//资源分类copy资源站分类，在 资源站接口?ac=videolist，查看源代码，一般在最底下，注意只复制<ty到</ty>
$资源替换=array('tu.php'=>'https://www.tv6.com/tu.php');

$展示时效='';//展示 &h=24 &h=48 &h=168 或者留空
$倒序='yes';//也可以是no，一般资源站资源是倒排的，建议填yes
$解析='/Aliplay.php?url=';
// $解析='http://zhiyun.ppdsw.xyz/yjx/index.php?url=';
$数据缓存='8';//单位小时
$模板='default';
$标题['list']="yk[当前分类名]-yk[网站名]";
$标题['search']="yk[搜索词]的搜索结果-yk[网站名]";
$标题['info']="yz[name]-yk[网站名]";

$关键词['list']="yk[当前分类名],最新电影,最新电视,最新综艺,最新动漫";
$关键词['search']="yk[搜索词],最新电影,最新电视,最新综艺,最新动漫";
$关键词['info']="yz[name],最新电影,最新电视,最新综艺,最新动漫";

$描述['list']="yk[网站名]提供最新的电影、电视、综艺、动漫在线播放服务";
$描述['search']="yk[网站名]提供yk[搜索词]的在线播放服务";
$描述['info']="yk[网站名]提供yz[name]的在线播放服务";

include 'global.php';

include mb('indexs.html');
