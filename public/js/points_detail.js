/**
 * 
 */
//列出所有支教点跟坐标，按省份区分，再转换成数组，方便以后维护
var pointsName= new Array();    //支教点所有点存储名称
var pointsXY=new Array();         //支教点对应的所有坐标点
var pointsInfo=new Array();	  	//支教点对应的所有简介信息
var pointsSrc=new Array();	  		//支教点对应的所有超链接信息
var i=0   ;  //数组用
function addAllPoints(pName,pXY,pInfo,pSrc){
	var arryPName= new Array();
	var arryPXY= new Array();
	var arryPInfo=new Array();
	var arryPSrc=new Array();
	var temp=0; 
	arryPName=pName.split("|");   //按符号”|“切割得到的数组
	arryPXY=pXY.split("|");
	arryPInfo=pInfo.split("|");
	arryPSrc=pSrc.split("|");
	for (var iIn=0;iIn<arryPName.length;iIn++)
	{
		pointsName[i]=arryPName[iIn];
		pointsXY[i]=arryPXY[iIn];
		pointsInfo[i]=arryPInfo[iIn];
		pointsSrc[i]=arryPSrc[iIn];
		i++;
	}
}
var schoolName="";   //学校名字
var schoolXY="";		//学校坐标
var schoolInfo="";		//学校简介
var schoolSrc="";		//学校链接
//广西天等------印勇小学|高州小学|品力小学
schoolName="印勇小学|高州小学|品力小学";
schoolXY="107.346026,23.286266|107.286434,23.205329|107.27088,23.316111";
schoolInfo="";
schoolSrc="";
addAllPoints(schoolName,schoolXY,schoolInfo,schoolSrc);
//广西龙州------武联小学|民建小学
var schoolName="武联小学|民建小学";
var schoolXY="106.822306,22.66804|106.81547,22.604842";
var schoolInfo="";
var schoolSrc="";
addAllPoints(schoolName,schoolXY,schoolInfo,schoolSrc);
//广西都安------坝牙小学|龙林小学
var schoolName="坝牙小学|龙林小学";
var schoolXY="107.928798,24.273346|107.795897,24.32389";
var schoolInfo="";
var schoolSrc="";
addAllPoints(schoolName,schoolXY,schoolInfo,schoolSrc);
//贵州从江------加车小学|党扭小学|加榜中心校|尧贵小学|银平小学|湾里小学|潘里小学|芩偶教学点|根里小学|斗里幼儿园|台里小学|马安小学
var schoolName="加车小学|党扭小学|加榜中心校|尧贵小学|银平小学|湾里小学|潘里小学|芩偶教学点|根里小学|斗里幼儿园|台里小学|马安小学";
var schoolXY="108.578233,25.585766|108.596475,25.612995|108.525303,25.573893|108.467469,25.538724|108.683468,25.6494|109.065131,25.551089|109.009868,25.583171|109.031447,25.533806|109.023512,25.610328|109.021024,25.560672|109.00028,25.563017|108.999727,25.61966";
var schoolInfo="";
var schoolSrc="";
addAllPoints(schoolName,schoolXY,schoolInfo,schoolSrc);
//云南巧家------大朵小学|营上小学|三合小学
var schoolName="大朵小学|营上小学|三合小学";
var schoolXY="103.043818,26.605032|103.243689,26.986733|103.205323,27.002201";
var schoolInfo="";
var schoolSrc="";
addAllPoints(schoolName,schoolXY,schoolInfo,schoolSrc);
//云南陇川------赵家寨小学|弄龙小学|曼线小学
var schoolName="赵家寨小学|弄龙小学|曼线小学";
var schoolXY="98.004009,24.542477|98.077526,24.475882|98.180646,24.426709";
var schoolInfo="";
var schoolSrc="";
addAllPoints(schoolName,schoolXY,schoolInfo,schoolSrc);
//云南维西------豪猪箐小学
var schoolName="豪猪箐小学";
var schoolXY="99.274269,27.165151";
var schoolInfo="";
var schoolSrc="";
addAllPoints(schoolName,schoolXY,schoolInfo,schoolSrc);
//云南剑川------美水小学
var schoolName="美水小学";
var schoolXY="99.56989,26.570473";
var schoolInfo="";
var schoolSrc="";
addAllPoints(schoolName,schoolXY,schoolInfo,schoolSrc);
//宁夏西吉------张湾小学
var schoolName="张湾小学" ;
var schoolXY="105.434022,35.963203";
var schoolInfo="";
var schoolSrc="";
addAllPoints(schoolName,schoolXY,schoolInfo,schoolSrc);

//初始化地图
var map = new AMap.Map('map_show', {
        resizeEnable: true,
        //center: [106.520307,29.432636],   //中间位置
        zoom: 5             //缩放级别
    });
//地图平移开始时触发，关闭窗体
map.on('click', function(e) {
	infoWindow.close();
});
//循环标记地图上的支教点
for (var iOut=0;iOut<pointsName.length;iOut++)
{
	var xy=pointsXY[iOut].split(",");
	var marker = new AMap.Marker({
        position:xy,
        map: map,
		icon: new AMap.Icon({            
            size: new AMap.Size(30, 30),  //图标大小
            image: "http://webapi.amap.com/theme/v1.3/images/newpc/poi-1.png",    //图标的取图地址。默认为蓝色图钉图片
            imageOffset: new AMap.Pixel(-335, -30)			//图标取图偏移量。当image中指定了一个大图时，可通过size和imageOffset配合，显示图标的指定范围
        })  
    });
	// 设置鼠标划过点标记显示的文字提示
	marker.setTitle( pointsName[iOut]);
//	marker.setLabel({//label默认蓝框白底左上角显示，样式className为：amap-marker-label
 //       offset: new AMap.Pixel(15, 25),//修改label相对于maker的位置
 //       content: pointsName[iOut]});  
	//绑定标记点事件
	marker.on('click', markerClick);
}
//电机标记点事件
var   infoWindow ;
function markerClick(e) {
	var info = [];
	info.push("<b>"+e.target.getTitle()+"</b>");
	for (var iName=0;iName< pointsName.length; iName++)
	{
		if (e.target.getTitle()==pointsName[iName])
		{
			//info.push("<img src='http://tpc.googlesyndication.com/simgad/5843493769827749134'>");   //窗口图片信息
			info.push(pointsInfo[iName]);                //窗口信息
			//info.push("<a href='"+pointsSrc[iName]+"'>详细信息</a>");    //窗口详细信息链接
			//info.push("详细信息");    //窗口详细信息链接
			break;
		} 
	}
	
	infoWindow= new AMap.InfoWindow({
	    content: info.join("<br/>")  //使用默认信息窗体框样式，显示信息内容
	});
    infoWindow.open(map, e.target.getPosition());
}
map.setFitView();  //根据地图上添加的覆盖物分布情况，缩放平移地图到合适的视野级别，参数overlayList默认为当前地图上添加的所有覆盖物图层