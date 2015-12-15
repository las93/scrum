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
                                    <h3 class="box-title"><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Roles"); ?> <a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('setup_role_add', array()); ?>"><i class="fa fa-plus"></i></a></h3>
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
                                            <th><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Type"); ?></th>
                                            <th><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Users"); ?></th>
                                            <th><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Options"); ?></th>
                                        </tr>
                                        <?php if (count($_aProtectedVar['aRoles']) > 0) { foreach($_aProtectedVar['aRoles'] as $_aProtectedVar['iKey'] => $_aProtectedVar['oRole']) { ?>
                                        <tr>
                                            <td><?php echo $_aProtectedVar['oRole']->get_id(); ?></td>
                                            <td><?php echo $_aProtectedVar['oRole']->get_name(); ?></td>
                                            <td><?php echo $_aProtectedVar['oRole']->get_type(); ?></td>
                                            <td><?php if (count($_aProtectedVar['oRole']->get_user()) > 0) { foreach($_aProtectedVar['oRole']->get_user() as $_aProtectedVar['iKey2'] => $_aProtectedVar['oUser']) { ?><a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('setup_user_add', array( 'id' => $_aProtectedVar['oUser']->get_id())); ?>"><?php echo $_aProtectedVar['oUser']->get_login(); ?></a> <?php }} ?></td>
                                            <td>
                                                <a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('setup_role_update', array( 'id' => $_aProtectedVar['oRole']->get_id())); ?>"><i class="fa fa-edit"></i></a>
                                                &nbsp;&nbsp;&nbsp;
                                                <a href="javascript:void(0);" onClick="if (confirm('<?php $oI18n = new \Apollina\I18n; echo $oI18n->_("WouldYouReallyDeleteIt"); ?>')) { window.location.href='<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('setup_roles', array()); ?>?delete=<?php echo $_aProtectedVar['oRole']->get_id(); ?>'; }"><i class="fa fa-ban"></i></a>
                                            </td>
                                        </tr>
                                        <?php }} ?>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                     
                    </div> <!-- /.row -->
               </section>
<?php /* C:/Users/judicael.paquet/Zend/workspaces/DefaultWorkspace10/scrum/data/cache/cb58730690d0ef03c9b4ea15d92dfe45.cac.php */ ?>
<?php /* template : /src/Front/View/ConfigRoles.tpl */ ?>