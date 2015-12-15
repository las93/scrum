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
                                            <th><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Users"); ?></th>
                                            <th><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Options"); ?></th>
                                        </tr>
                                        <?php if (count($_aProtectedVar['aTeams']) > 0) { foreach($_aProtectedVar['aTeams'] as $_aProtectedVar['iKey'] => $_aProtectedVar['oTeam']) { ?>
                                        <tr>
                                            <td><?php echo $_aProtectedVar['oTeam']->get_id(); ?></td>
                                            <td><?php echo $_aProtectedVar['oTeam']->get_name(); ?></td>
                                            <td><?php if (count($_aProtectedVar['oTeam']->get_user()) > 0) { foreach($_aProtectedVar['oTeam']->get_user() as $_aProtectedVar['iKey2'] => $_aProtectedVar['oUser']) { ?><?php echo $_aProtectedVar['oUser']->get_login(); ?> <?php }} ?></td>
                                            <td>
                                                <a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('setup_group_update', array( 'id' => $_aProtectedVar['oTeam']->get_id())); ?>"><i class="fa fa-edit"></i></a>
                                                &nbsp;&nbsp;&nbsp;
                                                <a href="javascript:void(0);" onClick="if (confirm('<?php $oI18n = new \Apollina\I18n; echo $oI18n->_("WouldYouReallyDeleteIt"); ?>')) { window.location.href='<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('setup_groups', array()); ?>?delete=<?php echo $_aProtectedVar['oTeam']->get_id(); ?>'; }"><i class="fa fa-ban"></i></a>
                                            </td>
                                        </tr>
                                        <?php }} ?>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                     
                    </div> <!-- /.row -->
               </section>
<?php /* C:/Users/judicael.paquet/Zend/workspaces/DefaultWorkspace10/scrum/data/cache/ce846c8f961db12d10e00b6e596b378b.cac.php */ ?>
<?php /* template : /src/Front/View/ConfigGroups.tpl */ ?>