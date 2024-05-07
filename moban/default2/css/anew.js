//迅雷下载
function $$(id){
	return document.getElementById(id);
}

function CheckAll(num)
{
              i=num
	var allBox=document.getElementsByName('downid'+i+'[]');
	var checked=document.getElementById('chk_'+i+'').checked;
	for(var k=0;k<allBox.length;k++)
	{
		allBox[k].checked=checked;
		
	}
}
function XunLeiAll(num)
{
	BatchTasker.BeginBatch(4,97379);
	i=num
	allBox=document.getElementsByName('downid'+i+'[]');
	for(var k=0;k<allBox.length;k++){
		if (allBox[k].checked==true)
		{
			BatchTasker.AddTask(allBox[k].value);
		}

	}
	BatchTasker.EndBatch();
}

function xunbotask(linkObj)
{
	var urls=linkObj.getAttribute("thunderHref");
	BatchTasker.BeginBatch(4,97379);
	BatchTasker.AddTask(urls);

	BatchTasker.EndBatch();
}
function get_movie_name(filename, arsg){ var tname = filename.split(arsg); if(tname.length>2){return get_movie_name(tname[(tname.length-1)], ']');}else{return tname[(tname.length-1)];}}
function unlinexuan(num)
{
	var i=num;
	var allBox=document.getElementsByName('CopyAddr'+i+'');
	
	var args = "";
	for(var k=0;k<allBox.length;k++){
		if (allBox[k].checked==true)
		{
			var mvfile = get_movie_name(allBox[k].value, '/');
			args += '{"url":"'+allBox[k].value+'", "file_name":"'+mvfile+'","cookie":"xunbo'+k+'"},';
		}
	}
	if(args!=""){ 
		var reg=/,$/gi; args=args.replace(reg,"");args= '['+args+']';
		var tasks={"sid":97379, "data":eval( "(" + args + ")" )};
		XFLIB.startDownload_BatchTaskLixian(tasks);
	}else{
		alert('请选择您要下载的电影!');
	}
}
function onlinexuan(num)
{
	var i=num;
	var allBox=document.getElementsByName('CopyAddr'+i+'');
	
	var args = "";
	for(var k=0;k<allBox.length;k++){
		if (allBox[k].checked==true)
		{
			var mvfile = get_movie_name(allBox[k].value, '/');
			args += '{"url":"'+allBox[k].value+'", "file_name":"'+mvfile+'","cookie":"xunbo'+k+'"},';
		}
	}
	if(args!=""){ 
		var reg=/,$/gi; args=args.replace(reg,"");args= '['+args+']';
		var tasks={"sid":97379, "data":eval( "(" + args + ")" )};
		XFLIB.startDownload_BatchTask(tasks);
	}else{
		alert('请选择您要下载的电影!');
	}
}
//end
//迅雷看看
var kkDapCtrl = null;
function kkGetDapCtrl() {
    if (null == kkDapCtrl) {
        try {
            if (window.ActiveXObject) {
                kkDapCtrl = new ActiveXObject("DapCtrl.DapCtrl");
            } else {
                var browserPlugins = navigator.plugins;
                for (var bpi = 0; bpi < browserPlugins.length; bpi++) {
                    try {
                        if (browserPlugins[bpi].name.indexOf('Thunder DapCtrl') != -1) {
                            var e = document.createElement("object");
                            e.id = "dapctrl_history";
                            e.type = "application/x-thunder-dapctrl";
                            e.width = 0;
                            e.height = 0;
                            document.body.appendChild(e);
                            break;
                        }
                    } catch(e) {}
                }
                kkDapCtrl = document.getElementById('dapctrl_history');
            }
        } catch(e) {}
    }
    return kkDapCtrl;
}

function kkis() {
    var type = 0;
    var ver = 0;
    try {
        var dapCtrl = kkGetDapCtrl();
        if (typeof(dapCtrl) != "undefined") {
            ver = dapCtrl.GetThunderVer("KANKAN", "INSTALL");
            type = dapCtrl.Get("IXMPPACKAGETYPE");
        } else {
            return false;
        }
    } catch(e) {
        return false;
    }
    if (type && ver && ver > 672 && (type == 2401 || type > 3000)) {
        return true;
    }
    return false;
}

function kkPlay(url, moviename) {
    var dapCtrl = kkGetDapCtrl();
    try {
        var ver = dapCtrl.GetThunderVer("KANKAN", "INSTALL");
        var type = dapCtrl.Get("IXMPPACKAGETYPE");
        if (ver && type && ver >= 672 && type >= 2401) {
            dapCtrl.Put("SXMP4ARG", '"' + url + '" /title "' + moviename + '" /startfrom "_web_xunbo" /openfrom "_web_xunbo"');
        } else {
            var r = confirm("请先下载安装迅雷看看，点确定进入迅雷看看官网下载。   ");
            if (r == true) {
                //window.location.href = wtd_ChangFolder(xlPid);
			window.open("http://www.kankan.com/app/xmp.html");
            }
        }
    } catch(e) {
        var r = confirm("请先下载安装迅雷看看，点确定进入迅雷看看官网下载。   ");
        if (r == true) {
            //window.location.href = wtd_ChangFolder(xlPid);
			window.open("http://www.kankan.com/app/xmp.html");
        }
    }
}
//end 