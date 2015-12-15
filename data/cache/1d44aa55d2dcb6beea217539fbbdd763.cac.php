<?php if (class_exists('\Mobile_Detect')) { $oMobileDetect = new \Mobile_Detect; } else { $oMobileDetect = null; } if ($oMobileDetect !== null && $oMobileDetect->isMobile()) { if (file_exists("C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenuMobile.tpl").".cac.php")) { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenuMobile.tpl").".cac.php"; } else { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenu.tpl").".cac.php"; } } else { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenu.tpl").".cac.php"; } ?>
                 <!-- Main content -->
                <section class="content">
                    <!-- START ALERTS AND CALLOUTS -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("AllUserStoriesForThisEpic"); ?></h3>
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
                                            <th><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("User"); ?></th>
                                            <th><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("UserStory"); ?></th>
                                            <th><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Date"); ?></th>
                                            <th><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Status"); ?></th>
                                            <th><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Task"); ?></th>
                                        </tr>
                                        <?php if (count($_aProtectedVar['aUserStories']) > 0) { foreach($_aProtectedVar['aUserStories'] as $_aProtectedVar['iKey'] => $_aProtectedVar['oUserStory']) { ?>
                                        <tr>
                                            <td><?php echo $_aProtectedVar['oUserStory']->get_id(); ?></td>
                                            <td><?php echo $_aProtectedVar['oUserStory']->get_user()->get_login(); ?></td>
                                            <td><?php echo $_aProtectedVar['oUserStory']->get_name(); ?></td>
                                            <td><?php echo $_aProtectedVar['oUserStory']->get_date_create(); ?></td>
                                            <td><span class="label <?php echo $_aProtectedVar['oUserStory']->get_statut()->get_color(); ?>"><?php echo $_aProtectedVar['oUserStory']->get_statut()->get_name(); ?></span></td>
                                            <td><?php echo $_aProtectedVar['oUserStory']->count; ?></td>
                                        </tr>
                                        <?php }} ?>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                     
                    </div> <!-- /.row -->
               </section>
<?php /* C:/Users/judicael.paquet/Zend/workspaces/DefaultWorkspace10/scrum/data/cache/1d44aa55d2dcb6beea217539fbbdd763.cac.php */ ?>
<?php /* template : /src/Front/View/Epic.tpl */ ?>