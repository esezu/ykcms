<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge" >
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"/>
  <title>Aliplay记忆播放器</title>
  <link rel="stylesheet" href="https://g.alicdn.com/de/prismplayer/2.8.7/skins/default/aliplayer-min.css" />
  <script type="text/javascript" charset="utf-8" src="https://g.alicdn.com/de/prismplayer/2.8.7/aliplayer-min.js"></script>
  <script type="text/javascript" charset="utf-8" src="https://player.alicdn.com/aliplayer/presentation/js/aliplayercomponents.min.js"></script>
  <style type="text/css">
    body,html{background-color:#000;padding: 0;margin: 0;width:100%;height:100%;}
    #liryCN{width:100%;height:100%;padding:0;margin:0;display:block;}
  </style>
</head>
<body>
<div id="liryCN" class="prism-player"></div>
<script type="text/javascript">
var player = new Aliplayer({
         id: "liryCN",
     "source": "<?php echo $_GET['url']; ?>",
      width: "100%",
     height: "100%",
   autoplay: true,
    preload: true,
     rePlay: false,
playsinline: false,
 useH5Prism: false,
     isLive: false,
 components: [{
      name: 'MemoryPlayComponent',
        type: AliPlayerComponent.MemoryPlayComponent,
      args: [true]
    }], 
}, 
function (player) {
      console.log("The player is created");
  }
 );
try{ 
//document.getElementById('liryCN').style.height = parent.MacPlayer.Height + 'px';  
}
catch(e){}
</script>
</body>
</html>