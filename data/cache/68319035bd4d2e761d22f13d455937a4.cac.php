<?php if (class_exists('\Mobile_Detect')) { $oMobileDetect = new \Mobile_Detect; } else { $oMobileDetect = null; } if ($oMobileDetect !== null && $oMobileDetect->isMobile()) { if (file_exists("C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenuMobile.tpl").".cac.php")) { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenuMobile.tpl").".cac.php"; } else { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenu.tpl").".cac.php"; } } else { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenu.tpl").".cac.php"; } ?>
<!-- Main content -->
                <section class="content">
                    <h4 class="page-header">
                        <?php $oI18n = new \Apollina\I18n; echo $oI18n->_("AllThemes"); ?>
                        <small><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("TheThemeContainEpic"); ?></small>
                    </h4>
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <?php if (count($_aProtectedVar['aProjects']) > 0) { foreach($_aProtectedVar['aProjects'] as $_aProtectedVar['iKey'] => $_aProtectedVar['oProject']) { ?>
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box <?php echo $_aProtectedVar['oProject']->get_color(); ?>">
                                    <div class="inner">
                                        <h3>
                                            <?php echo $_aProtectedVar['aCountEpics'][$_aProtectedVar['oProject']->get_id()]; ?>
                                        </h3>
                                        <p>
                                            <?php echo $_aProtectedVar['oProject']->get_name(); ?>
                                        </p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion <?php echo $_aProtectedVar['oProject']->get_icon(); ?>"></i>
                                    </div>
                                    <a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('theme', array( 'id' => $_aProtectedVar['oProject']->get_id())); ?>" class="small-box-footer">
                                        <?php $oI18n = new \Apollina\I18n; echo $oI18n->_("MoreInfo"); ?> <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div><!-- ./col -->
                        <?php }} ?>
                    </div><!-- /.row -->
                </section>
<?php /* C:/Users/judicael.paquet/Zend/workspaces/DefaultWorkspace10/scrum/data/cache/68319035bd4d2e761d22f13d455937a4.cac.php */ ?>
<?php /* template : /src/Front/View/Project.tpl */ ?>