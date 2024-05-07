<?php
error_reporting(0);
$网站名='玉兔资源';
$地址='百度.com';
$邮箱='admin@admin.com';
$统计='';

$资源接口='https://apiyutu.com/api.php/provide/vod/at/xml';
$资源分类='<ty id="20">精品推荐</ty><ty id="21">国产精品</ty><ty id="22">主播秀色</ty><ty id="23">日本有码</ty><ty id="24">日本无码</ty><ty id="25">中文字幕</ty><ty id="26">童颜巨乳</ty><ty id="27">性感人妻</ty><ty id="28">强奸乱伦</ty><ty id="29">欧美情色</ty><ty id="30">童真萝莉</ty><ty id="31">三级伦理</ty><ty id="32">卡通动漫</ty><ty id="33">丝袜OL</ty><ty id="34">口爆颜射</ty><ty id="35">自拍偷拍</ty><ty id="36">日本片商</ty><ty id="37">Cosplay</ty><ty id="38">素人自拍</ty><ty id="39">台湾色情</ty><ty id="40">韩国自拍</ty><ty id="41">性感港姐</ty><ty id="42">东南亚情色</ty><ty id="43">凌辱束缚</ty><ty id="44">剧情介绍</ty><ty id="45">多P 3P</ty><ty id="46">91系列</ty><ty id="47">网红系列</ty><ty id="48">野外系列</ty><ty id="49">女仆系列</ty><ty id="50">学生中出</ty><ty id="51">性感旗袍</ty><ty id="52">兽耳作品</ty><ty id="53">瑜伽裤</ty><ty id="54">骚货护士</ty><ty id="55">及膝袜</ty><ty id="56">网曝系列</ty><ty id="57">麻豆传媒</ty><ty id="58">女同人妖</ty><ty id="59">恋腿癖</ty>';

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
