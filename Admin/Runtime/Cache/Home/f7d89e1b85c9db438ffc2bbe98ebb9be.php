<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="/EasyTalk/BackendPublic/css/common.css">
  <link rel="stylesheet" type="text/css" href="/EasyTalk/BackendPublic/css/adsystem.css">
  <script type="text/javascript" src="/EasyTalk/BackendPublic/js/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="/EasyTalk/BackendPublic/js/system.js"></script>
  <script type="text/javascript" src="/EasyTalk/BackendPublic/js/quitlogin.js"></script>
</head>
<body>
      <div class="bgbox topbg-1">
      	   <div class="topbg">
      	   	     <img src="/EasyTalk/BackendPublic/images/easytalklogo.png" alt="Easytalk">
      	   	     <a href="#">退出登录</a>
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
                                   <a href="/EasyTalk/admin.php/Home/Administration/aduser?html=11"><li>用户管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adteacher?html=12" class="now-a"><li>教师管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adtradata?html=13" class="labg"><li>交易数据</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adclass?html=14"><li>课程管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adexe_index?html=15" class="labg"><li>练习管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adlangindex?html=16" class="labg"><li>语种管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adpicindex" class="labg" id="moreul"><li>图片上传</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adnav" class="labg"><li>导航栏</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adcomment" class="labg"><li>意见反馈</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/ad-cpsw" class="labg"><li>密码修改</li></a>
                              </ul>
                        </div>
                        <div class="searchbox">
                              <div class="searchdiv"></div>
                              <p>教师管理</p>
                        </div>
                        <div class="conbox" style="position: relative;">
                              <ul class="ulmore">
                                  <a href="/EasyTalk/admin.php/Home/Administration/adpicindex"><li>首页图片</li></a>
                                  <a href="/EasyTalk/admin.php/Home/Administration/adpiccl"><li>课程体系</li></a>
                              </ul>
                              <table class="contitle">
                                     <tr> <td style="width: 40px"></td>
                                          <td style='width: 120px'>姓名</td>
                                          <td style="width: 120px">语种</td>
                                          <td style="width: 170px">QQ</td>
                                          <td style="width: 210px">邮箱</td>
                                          <td style="width: 200px">注册时间</td>
                                          <td style="width: 64px">操作</td>
                                     </tr>
                              </table>
                              <hr>
                              <div class="condiv">
                                    <table class="contable">
                                           <tr>
                                               <td style="text-align: left;width: 40px"><input type="checkbox" class="check"></td>
                                               <td style='width: 120px'>欧阳</td>
                                               <td style='width: 120px'><a href="#">法语</a></td>
                                               <td style='width: 170px'>21323123</td>
                                               <td style='width: 210px'>21323123@qq.com</td>
                                               <td style='width: 200px'>2016-07-14 10:30</td>
                                               <td style="width: 64px"><input type="button" value="编辑" class="tc-edit edit" name="112"></td>
                                           </tr>
                                    </table>
                              </div>
                        </div>
                        <div class="call">
                              <div class="call-1">
                                    <input type="checkbox" id="allcheck">全选
                              </div>
                              <div class="call-2">
                                    <input type="button" value="添加" class="call-bu call-bu1" id="addtc">
                                    <input type="button" value="删除" class="call-bu call-bu2" id="deleteall">
                              </div>
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