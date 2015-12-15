<?php if (class_exists('\Mobile_Detect')) { $oMobileDetect = new \Mobile_Detect; } else { $oMobileDetect = null; } if ($oMobileDetect !== null && $oMobileDetect->isMobile()) { if (file_exists("C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenuMobile.tpl").".cac.php")) { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenuMobile.tpl").".cac.php"; } else { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenu.tpl").".cac.php"; } } else { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenu.tpl").".cac.php"; } ?>
                 <!-- Main content -->
                <section class="content">
                    <!-- START ALERTS AND CALLOUTS -->
                    <div class="row">
                        <?php if ($_aProtectedVar['app']['get']['msg']) { ?>
                            <div class="alert alert-success alert-dismissable">
                                <i class="fa fa-check"></i>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <b><?php echo $_aProtectedVar['app']['get']['msg']; ?>!</b>
                            </div>
                        <?php } ?>
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Groups"); ?> <a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('setup_group_add', array()); ?>"><i class="fa fa-plus"></i></a></h3>
                                    <div class="box-tools">
                                        <div class="input-group">
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="<?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Search"); ?>"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tr>
                                            <th><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Id"); ?></th>
                                            <th><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Group"); ?></th>
                                            <th><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Role"); ?></th>
                                            <th><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Login"); ?></th>
                                            <th><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Lastname"); ?></th>
                                            <th><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Firstname"); ?></th>
                                            <th><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Options"); ?></th>
                                        </tr>
                                        <?php if (count($_aProtectedVar['aUsers']) > 0) { foreach($_aProtectedVar['aUsers'] as $_aProtectedVar['iKey'] => $_aProtectedVar['oUser']) { ?>
                                        <tr>
                                            <td><?php echo $_aProtectedVar['oUser']->get_id(); ?></td>
                                            <td><?php echo $_aProtectedVar['oUser']->get_team()->get_name(); ?></td>
                                            <td><?php echo $_aProtectedVar['oUser']->get_role()->get_name(); ?></td>
                                            <td><?php echo $_aProtectedVar['oUser']->get_login(); ?></td>
                                            <td><?php echo $_aProtectedVar['oUser']->get_lastname(); ?></td>
                                            <td><?php echo $_aProtectedVar['oUser']->get_firstname(); ?></td>
                                            <td>
                                                <a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('setup_user_update', array( 'id' => $_aProtectedVar['oUser']->get_id())); ?>"><i class="fa fa-edit"></i></a>
                                                &nbsp;&nbsp;&nbsp;
                                                <a href="javascript:void(0);" onClick="if (confirm('<?php $oI18n = new \Apollina\I18n; echo $oI18n->_("WouldYouReallyDeleteIt"); ?>')) { window.location.href='<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('setup_users', array()); ?>?delete=<?php echo $_aProtectedVar['oUser']->get_id(); ?>'; }"><i class="fa fa-ban"></i></a>
                                            </td>
                                        </tr>
                                        <?php }} ?>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                     
                    </div> <!-- /.row -->
               </section>
<?php /* C:/Users/judicael.paquet/Zend/workspaces/DefaultWorkspace10/scrum/data/cache/6f7b4d64baa38fa9c3b29f6f1b9f6ad0.cac.php */ ?>
<?php /* template : /src/Front/View/ConfigUsers.tpl */ ?>