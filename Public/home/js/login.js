/**
 * 
 */
window.onload=function(){
$('#reg').on('click', function(){  
	layui.use('layer', function(){
		  var layer = layui.layer;
		  layer.open({
		      type: 2,
		      title: '注册信息。',
		      shadeClose: true,
		      shade: false,
		      maxmin: true, //开启最大化最小化按钮
		      area: ['450px', '550px'],
		      content:'http://localhost/Login/register'
		    });
		  //各种基于事件的操作，下面会有进一步介绍
		});
});
}