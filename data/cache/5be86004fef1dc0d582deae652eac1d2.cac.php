<?php if (class_exists('\Mobile_Detect')) { $oMobileDetect = new \Mobile_Detect; } else { $oMobileDetect = null; } if ($oMobileDetect !== null && $oMobileDetect->isMobile()) { if (file_exists("C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenuMobile.tpl").".cac.php")) { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenuMobile.tpl").".cac.php"; } else { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenu.tpl").".cac.php"; } } else { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenu.tpl").".cac.php"; } ?>
                 <!-- Main content -->
                <section class="content">
                    <!-- START ALERTS AND CALLOUTS -->
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('setup_roles', array()); ?>"><i class="fa fa-leaf"></i> <span><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("ManageRoles"); ?></span></a>       
                        </div>      
                        <div class="col-xs-12">
                            <a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('setup_groups', array()); ?>"><i class="fa fa-group"></i> <span><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("ManageGroups"); ?></span></a>       
                        </div>      
                        <div class="col-xs-12">
                            <a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('setup_users', array()); ?>"><i class="fa fa-user"></i> <span><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("ManageUsers"); ?></span></a>       
                        </div>          
                    </div> <!-- /.row -->
               </section>
<?php /* C:/Users/judicael.paquet/Zend/workspaces/DefaultWorkspace10/scrum/data/cache/5be86004fef1dc0d582deae652eac1d2.cac.php */ ?>
<?php /* template : /src/Front/View/Config.tpl */ ?>