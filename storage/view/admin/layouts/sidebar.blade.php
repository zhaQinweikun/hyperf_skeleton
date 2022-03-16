<div class="left-nav">
    <div id="side-nav">
        <ul id="nav">
            <li>
                <a href="javascript:;" onclick="xadmin.add_tab('我的桌面','welcome.html')">
                    <i class="layui-icon left-nav-li" lay-tips="首页">&#xe68e;</i>
                    <cite>首页</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>

            </li>

            <li class="layui-nav-item">
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="文章管理">&#xe6a2;</i>
                    <cite>文章管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('文章类型列表','articletype-list.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>文章类型列表</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('文章列表','article-list.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>文章列表</cite></a>
                    </li>
                </ul>


            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="公告管理">&#xe6c0;</i>
                    <cite>公告管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('公告类型','noticetype-list.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>公告类型</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('公告列表','notice-list.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>公告列表</cite></a>
                    </li>
                </ul>


            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="栏目管理">&#xe604;</i>
                    <cite>栏目管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('栏目列表','cate.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>栏目列表</cite></a>
                    </li>
                </ul>
            </li>
            <!--<li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="城市联动">&#xe723;</i>
                    <cite>城市联动</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('三级地区联动','city.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>三级地区联动</cite></a>
                    </li>
                </ul>
            </li>-->
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="管理员管理">&#xe726;</i>
                    <cite>管理员管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('管理员列表','admin-list.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>管理员列表</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('角色管理','admin-role.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>角色管理</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('权限分类','admin-cate.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>权限分类</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('权限管理','admin-rule.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>权限管理</cite></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="会员管理">&#xe6b8;</i>
                    <cite>会员管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">

                    <li>
                        <a onclick="xadmin.add_tab('会员列表','member-list.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>会员列表</cite></a>
                    </li>

                    <li>
                        <a onclick="xadmin.add_tab('会员删除','member-del.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>会员删除</cite></a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="系统设置">&#xe60d;</i>
                    <cite>系统设置</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('系统设置','sys-set.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>系统设置</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('屏蔽词','sys-shild.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>屏蔽词</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('系统日志','sys-log.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>系统日志</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('图片水印设置','sys-watermark.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>图片水印设置</cite></a>
                    </li>


                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="友情连接">&#xe636;</i>
                    <cite>友情连接</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('友情连接列表','link.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>友情连接列表</cite></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="便签管理">&#xe6c5;</i>
                    <cite>便签管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('便签列表','note.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>便签列表</cite></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="邮件管理">&#xe64a;</i>
                    <cite>邮件管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('邮件管理','email.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>邮件管理</cite></a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="其它页面">&#xe6b4;</i>
                    <cite>其它页面</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="login.html" target="_blank">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>登录页面</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('错误页面','error.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>错误页面</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('更新日志','log.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>更新日志</cite></a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="数据管理">&#xe70c;</i>
                    <cite>数据管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('文件管理','instrument.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>文件管理</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('数据库','database.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>数据库</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('备份管理','backups.html')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>备份管理</cite></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
