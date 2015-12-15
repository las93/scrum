<?php if (class_exists('\Mobile_Detect')) { $oMobileDetect = new \Mobile_Detect; } else { $oMobileDetect = null; } if ($oMobileDetect !== null && $oMobileDetect->isMobile()) { if (file_exists("C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenuMobile.tpl").".cac.php")) { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenuMobile.tpl").".cac.php"; } else { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenu.tpl").".cac.php"; } } else { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenu.tpl").".cac.php"; } ?>
<div class="line_statut">
    <form name="f3" method="post">
        <table>
            <tr>
                <td><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Login"); ?>:</td>
                <td><input name="login" class="form-control" type="text" placeholder="<?php $oI18n = new \Apollina\I18n; echo $oI18n->_("EnterTheLogin"); ?>" required<?php if ($_aProtectedVar['oUser']) { ?> value="<?php echo $_aProtectedVar['oUser']->get_login(); ?>"<?php } ?>></td>
            </tr>
            <tr>
                <td><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Team"); ?>:</td>
                <td>
                    <select name='team' class="form-control">
                        <?php if (count($_aProtectedVar['aTeams']) > 0) { foreach($_aProtectedVar['aTeams'] as $_aProtectedVar['oTeam']) { ?>
                            <option value='<?php echo $_aProtectedVar['oTeam']->get_id(); ?>'<?php if (isset($_aProtectedVar['app']['post']['team']) && $_aProtectedVar['oTeam']->get_id() == $_aProtectedVar['app']['post']['team']) { ?> selected="selected"<?php } ?>><?php echo $_aProtectedVar['oTeam']->get_name(); ?></option>
                        <?php }} ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Role"); ?>:</td>
                <td>
                    <select name='role' class="form-control">
                        <?php if (count($_aProtectedVar['aRoles']) > 0) { foreach($_aProtectedVar['aRoles'] as $_aProtectedVar['oRole']) { ?>
                            <option value='<?php echo $_aProtectedVar['oRole']->get_id(); ?>'<?php if (isset($_aProtectedVar['app']['post']['role']) && $_aProtectedVar['oRole']->get_id() == $_aProtectedVar['app']['post']['role']) { ?> selected="selected"<?php } ?>><?php echo $_aProtectedVar['oRole']->get_name(); ?></option>
                        <?php }} ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Firstname"); ?>:</td>
                <td><input name="firstname" class="form-control" type="text" placeholder="<?php $oI18n = new \Apollina\I18n; echo $oI18n->_("EnterTheFirstname"); ?>" required<?php if ($_aProtectedVar['oUser']) { ?> value="<?php echo $_aProtectedVar['oUser']->get_firstname(); ?>"<?php } ?>></td>
            </tr>
            <tr>
                <td><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Lastname"); ?>:</td>
                <td><input name="lastname" class="form-control" type="text" placeholder="<?php $oI18n = new \Apollina\I18n; echo $oI18n->_("EnterTheLastname"); ?>" required<?php if ($_aProtectedVar['oUser']) { ?> value="<?php echo $_aProtectedVar['oUser']->get_lastname(); ?>"<?php } ?>></td>
            </tr>
            <tr>
                <td><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Password"); ?>:</td>
                <td><input name="password" class="form-control" type="password" value="azerty" readonly> * <?php $oI18n = new \Apollina\I18n; echo $oI18n->_("EverAzerty"); ?></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="form-control" value="<?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Validate"); ?>"></td>
            </tr>
        </table>
    </form>
</div>
<?php /* C:/Users/judicael.paquet/Zend/workspaces/DefaultWorkspace10/scrum/data/cache/c58c9fe79c956d0dd9e5356ffadf9cb5.cac.php */ ?>
<?php /* template : /src/Front/View/ConfigUserAdd.tpl */ ?>