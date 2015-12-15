<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $_aProtectedVar['app']['const']['WEBSITE_TITLE']; ?> | <?php if ($_aProtectedVar['title']) { ?><?php echo $_aProtectedVar['title']; ?><?php } else { ?>Homepage<?php } ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- Scrum -->
        <link href="/css/scrum.css" rel="stylesheet" type="text/css" />
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('home', array()); ?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <?php echo $_aProtectedVar['app']['const']['WEBSITE_TITLE']; ?>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="/img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="/img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="/img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="/img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="/img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-globe"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header"><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("ChooseYourLanguage"); ?></li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <?php if (count($_aProtectedVar['aLanguage']) > 0) { foreach($_aProtectedVar['aLanguage'] as $_aProtectedVar['aOne']) { ?>
                                        <li><!-- Task item -->
                                            <a href="?language=<?php echo $_aProtectedVar['aOne']['i18n']; ?>">
                                                <h3>
                                                    <img src="<?php echo $_aProtectedVar['aOne']['flag']; ?>">
                                                    <small class="pull-right"><?php echo $_aProtectedVar['aOne']['title']; ?></small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <?php }} ?>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="/img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Hello"); ?>, <?php echo $_aProtectedVar['aUser']->get_login(); ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('project', array()); ?>">
                                <i class="fa fa-th"></i> <span><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Themes"); ?></span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Sprint</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <?php if (count($_aProtectedVar['aSprints']) > 0) { foreach($_aProtectedVar['aSprints'] as $_aProtectedVar['iKey'] => $_aProtectedVar['oSprint']) { ?>
                                    <li><a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('sprint', array( 'id' => $_aProtectedVar['oSprint']->get_id())); ?>"><i class="fa fa-angle-double-right"></i> Sprint <?php echo $_aProtectedVar['oSprint']->get_number(); ?></a></li>
                                    <?php if (count($_aProtectedVar['oSprint']->boards) > 0) { foreach($_aProtectedVar['oSprint']->boards as $_aProtectedVar['iKey2'] => $_aProtectedVar['oBoard']) { ?>
                                        <li><a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('board', array( 'id' => $_aProtectedVar['oBoard']->get_id())); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $_aProtectedVar['oBoard']->get_name(); ?></a></li>
                                    <?php }} ?>
                                <?php }} ?>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Impeded Sprint</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('setup', array()); ?>">
                                <i class="fa fa-gear"></i> <span><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Configuration"); ?></span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">  
                <?php $_aProtectedVar['model'] = str_replace("\\", "/", $_aProtectedVar['model']); if (!strstr($_aProtectedVar['model'], '/')) { $_aProtectedVar['model'] = "src/Front/View/".$_aProtectedVar['model']; } if (class_exists('\Mobile_Detect')) { $oMobileDetect = new \Mobile_Detect; } else { $oMobileDetect = null; } if ($oMobileDetect !== null && $oMobileDetect->isMobile()) { if (file_exists('C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/'.md5($_aProtectedVar['model']).".cac.php")) { include 'C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/'.md5($_aProtectedVar['model']).".cac.php"; } else { include 'C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/'.md5($_aProtectedVar['model']).".cac.php"; }} else { include 'C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/'.md5($_aProtectedVar['model']).".cac.php"; } ?>
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="/js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- Jquery UI -->
        <script src="/js/jqueryui/jquery-ui.js" type="text/javascript"></script>
        <!-- Global -->
        <script src="/js/scrum/global.js"></script>

    </body>
</html>
<?php /* C:/Users/judicael.paquet/Zend/workspaces/DefaultWorkspace10/scrum/data/cache/dccf8350c3af6a73902f131cf50e473e.cac.php */ ?>
<?php /* template : \src\Front\View\Layout.tpl */ ?>