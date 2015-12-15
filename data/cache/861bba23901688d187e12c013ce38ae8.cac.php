                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <?php echo $_aProtectedVar['sTitle']; ?>
                        <?php if ($_aProtectedVar['iPage'] == 1) { ?><small><a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('project_add', array()); ?>">+ <?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Add"); ?></a></small><?php } ?>
                        <?php if ($_aProtectedVar['iPage'] == 3) { ?><small><a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('theme_add', array( 'id' => $_aProtectedVar['app']['get']['id'])); ?>">+ <?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Add"); ?></a></small><?php } ?>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('home', array()); ?>"><i class="fa fa-dashboard"></i> <?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Home"); ?></a></li>
                        <li<?php if (!$_aProtectedVar['sThirdTitle']) { ?> class="active"<?php } ?>><?php if ($_aProtectedVar['sThirdTitle']) { ?><a href="<?php echo $_aProtectedVar['sSecondUrl']; ?>"><?php } ?><?php echo $_aProtectedVar['sSecondTitle']; ?><?php if ($_aProtectedVar['sThirdTitle']) { ?></a><?php } ?></li>
                        <?php if ($_aProtectedVar['sThirdTitle']) { ?><li<?php if (!$_aProtectedVar['sFourTitle']) { ?> class="active"<?php } ?>><?php if ($_aProtectedVar['sFourTitle']) { ?><a href="<?php echo $_aProtectedVar['sThirdUrl']; ?>"><?php } ?><?php echo $_aProtectedVar['sThirdTitle']; ?><?php if ($_aProtectedVar['sFourTitle']) { ?></a><?php } ?></li><?php } ?>
                        <?php if ($_aProtectedVar['sFourTitle']) { ?><li class="active"><?php echo $_aProtectedVar['sFourTitle']; ?></li><?php } ?>
                    </ol>
                </section>
<?php /* C:/Users/judicael.paquet/Zend/workspaces/DefaultWorkspace10/scrum/data/cache/861bba23901688d187e12c013ce38ae8.cac.php */ ?>
<?php /* template : /src/Front/View/ProjectMenu.tpl */ ?>