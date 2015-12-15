<?php if (class_exists('\Mobile_Detect')) { $oMobileDetect = new \Mobile_Detect; } else { $oMobileDetect = null; } if ($oMobileDetect !== null && $oMobileDetect->isMobile()) { if (file_exists("C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenuMobile.tpl").".cac.php")) { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenuMobile.tpl").".cac.php"; } else { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenu.tpl").".cac.php"; } } else { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenu.tpl").".cac.php"; } ?>
                 <!-- Main content -->
                <section class="content">
                    <!-- START ALERTS AND CALLOUTS -->
                    <h2 class="page-header"><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("AllEpicsForThisTheme"); ?></h2>
                    <div class="row">
 
                        <?php if (count($_aProtectedVar['aEpics']) > 0) { foreach($_aProtectedVar['aEpics'] as $_aProtectedVar['iKey'] => $_aProtectedVar['oEpic']) { ?>
                            <div class="col-md-6">
                                <div class="box <?php echo $_aProtectedVar['oEpic']->get_color(); ?>">
                                    <div class="box-header">
                                        <i class="fa fa-bullhorn"></i>
                                        <h3 class="box-title"><a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('epic', array( 'id' => $_aProtectedVar['oEpic']->get_id())); ?>"><?php echo $_aProtectedVar['oEpic']->get_name(); ?></a></h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="callout callout-info">
                                            <h4><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Description"); ?></h4>
                                            <p><?php if ($_aProtectedVar['oEpic']->get_content()) { ?><?php echo $_aProtectedVar['oEpic']->get_content(); ?><?php } else { ?>...<?php } ?></p>
                                        </div>
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div><!-- /.col -->
                        <?php }} ?>
                     
                    </div> <!-- /.row -->
               </section>
<?php /* C:/Users/judicael.paquet/Zend/workspaces/DefaultWorkspace10/scrum/data/cache/ec3d88da700b6acf80ee5fc752f33c95.cac.php */ ?>
<?php /* template : /src/Front/View/Theme.tpl */ ?>