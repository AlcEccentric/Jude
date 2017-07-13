
<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170712
 * This is the Index view file of main backend site.
 */  

/*
    Team: JUDE
    generated and coded by 李弘毅1511373 at 2017-07-09
    last coded at 2017-07-12
    这是主页的index视图文件，修改了界面文字，并设置了多个按钮链接到不同的管理模块

*/
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome  back!</h1>

        <p class="lead">You have successfully entered the back platform.</p>

    </div>

    <div class="body-content">

        <div class="row">
            <h1>你可以进行:</h1>
            <div class="col-lg-2">
                <h2>文章管理</h2>
                
                
                <ul style=" height: 180px;">
                    <li>按搜索条件浏览所有组员的文章</li>
                    <li>修改文章的发布状态</li>
                    <li>修改文章的内容与其他信息</li>
                    <li>发表新的文章</li>
                    <li>删除旧的文章</li>
                </ul>
                

                <p class="index"><a class="btn btn-default" href="/advanced/backend/web/index.php?r=site-dispqry-writings%2Findex">进入 &raquo;</a></p>
            </div>
            <div class="col-lg-2">
                <h2>项目管理</h2>
                
                
                <ul style=" height: 180px;">
                    <li>按搜索条件浏览所有完成项目</li>
                    <li>修改项目的发布状态</li>
                    <li>修改项目的内容与其他信息</li>
                    <li>发表新的项目</li>
                    <li>删除旧的项目</li>
                </ul>
                

                <p class="index"><a class="btn btn-default" href="/advanced/backend/web/index.php?r=site-dispqry-projects%2Findex">进入 &raquo;</a></p>
            </div>
            <div class="col-lg-2">
                <h2>新闻管理</h2>
                
                <p>
                <ul style=" height: 180px;">
                    <li>按搜索条件浏览所有完成新闻</li>
                    <li>修改新闻的发布状态</li>
                    <li>修改新闻的内容与其他信息</li>
                    <li>发表新的新闻</li>
                    <li>删除旧的新闻</li>
                </ul>
                </p>

                <p class="index"><a class="btn btn-default" href="/advanced/backend/web/index.php?r=site-dispqry-news%2Findex">进入 &raquo;</a></p>
            </div>
            <div class="col-lg-2">
                <h2>用户管理</h2>
                
                <p>
                <ul style=" height: 180px;">
                    <li>按搜索条件浏览所有前台注册用户</li>
                    <li>修改用户的状态与其他信息</li>
                    <li>删除标记为已删除的用户</li>
                </ul>
                </p>

                <p class="index"><a class="btn btn-default" href="/advanced/backend/web/index.php?r=user%2Findex">进入 &raquo;</a></p>
            </div>
            <div class="col-lg-2">
                <h2>评论管理</h2>
                
                <p>
                <ul style=" height: 180px;">
                    <li>按搜索条件浏览所有评论</li>
                    <li>审核并发布评论</li>
                    <li>自动标识待审核评论并置于列表顶部</li>
                    <li>修改不合适评论</li>
                </ul>
                </p>

                <p class="index"><a class="btn btn-default" href="/advanced/backend/web/index.php?r=site-dispqry-comment%2Findex">进入 &raquo;</a></p>
            </div>
            <div class="col-lg-2">
                <h2>组员管理</h2>
                
                <p>
                <ul style=" height: 180px;">
                    <li>按搜索条件浏览所有组员</li>
                    <li>修改组员的个人信息</li>
                    <li>删除组员</li>
                    <li>新增组员</li>
                    <li>重置密码</li>
                </ul>
                </p>

                <p class="index"><a class="btn btn-default" href="/advanced/backend/web/index.php?r=site-disp-members%2Findex">进入 &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
