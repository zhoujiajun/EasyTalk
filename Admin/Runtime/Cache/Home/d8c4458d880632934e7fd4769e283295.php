<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="/EasyTalk/BackendPublic/css/common.css">
  <link rel="stylesheet" type="text/css" href="/EasyTalk/BackendPublic/css/adsystem.css">
  <link rel="stylesheet" type="text/css" href="/EasyTalk/BackendPublic/css/adnav.css">
  <script type="text/javascript" src="/EasyTalk/BackendPublic/js/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="/EasyTalk/BackendPublic/js/system.js"></script>
  <script type="text/javascript" src="/EasyTalk/BackendPublic/js/quitlogin.js"></script>
  <script type="text/javascript" src="/EasyTalk/BackendPublic/js/adnav.js"></script>
</head>
<body>
      <div class="bgbox topbg-1">
      	   <div class="topbg">
      	   	     <img src="/EasyTalk/BackendPublic/images/easytalklogo.png" alt="Easytalk">
      	   	     <a href="#">退出登录</a>
      	   	     <p>您好，请先登录</p>
      	   </div>
      </div>
      <div class="bgbox navbg-1">
      	   <div class="navbg">
      	   	   <ul>
                  <a href="/EasyTalk/admin.php/Home/Administration/adminlogin" class="ab nowa"><li>管理员</li></a>
                  <a href="/EasyTalk/admin.php/Home/teacher/teacherlogin" class="ab"><li>教师</li></a>
      	   	   </ul>
      	   </div>
      </div>
      <div class="bgbox centerbg-1">
            <div class="centerbg">
                  <div class="ctop">
                        <p>后台管理系统</p>
                        <span>管理员：11232</span>
                  </div>
                  <div class="ccenter">
                        <div class="cnav">
                              <ul>
                                   <a href="/EasyTalk/admin.php/Home/Administration/aduser?html=11" class="labg"><li>用户管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adteacher?html=12" class="labg"><li>教师管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adtradata?html=13" class="labg"><li>交易数据</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adclass?html=14" class="labg"><li>课程管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adexe_index?html=15" class="labg"><li>练习管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adlangindex?html=16" class="labg"><li>语种管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adpicindex" class="labg" id="moreul"><li>图片上传</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adnav" class="now-a"><li>导航栏</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adcomment" class="labg"><li>意见反馈</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/ad-cpsw" class="labg"><li>密码修改</li></a>
                              </ul>
                        </div>
                        <div class="searchbox">
                              <div class="searchdiv"></div>
                              <p>导航栏名称修改</p>
                        </div>
                        <div class="conbox" style="position: relative;">
                              <ul class="ulmore">
                                  <a href="/EasyTalk/admin.php/Home/Administration/adpicindex"><li>首页图片</li></a>
                                  <a href="/EasyTalk/admin.php/Home/Administration/adpiccl"><li>课程体系</li></a>
                              </ul>
                             <div class="addnav-top">
                                <img src="/EasyTalk/BackendPublic/images/easytalklogo.png" alt="Easytalk">
                             </div>
                             <div class="addnav-nav">
                                <div class="addnav-navbox">
                                   <ul>
                                       <li><p><?php echo ($header); ?></p><input type="text" class="addnav-text" value="<?php echo ($header); ?>" id="index"></li>
                                       <li><p><?php echo ($course); ?></p><input type="text" class="addnav-text" value="<?php echo ($course); ?>" id="classsty"></li>
                                       <li><p><?php echo ($teacher); ?></p><input type="text" class="addnav-text" value="<?php echo ($teacher); ?>" id="tcintro"></li>
                                       <li><p><?php echo ($buyclass); ?></p><input type="text" class="addnav-text" value="<?php echo ($buyclass); ?>" id="buyclass"></li>
                                       <li><p><?php echo ($personal); ?></p><input type="text" class="addnav-text" value="<?php echo ($personal); ?>" id="pccenter"></li>
                                       <li><p><?php echo ($exercise); ?></p><input type="text" class="addnav-text" value="<?php echo ($exercise); ?>" id="exe"></li>
                                   </ul>
                                </div>
                             </div>
                             <p>点击上方导航栏对应按钮进行修改</p>
                        </div>
                        <div class="call">
                              <input type="button" value="确认修改" id="adnav-up">
                        </div>
                  </div>
            </div>
      </div>
      <div class="bgbox bottombg-1">
      	   <div class="bottombg">
      	   	   <p>Copyright &copy Easy talk 小语种在线一对一学习社区 | 版权所有 京ICP证008719-5</p>
      	   </div>
      </div>
</body>
</html>