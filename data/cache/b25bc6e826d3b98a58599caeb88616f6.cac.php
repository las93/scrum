<?php if (class_exists('\Mobile_Detect')) { $oMobileDetect = new \Mobile_Detect; } else { $oMobileDetect = null; } if ($oMobileDetect !== null && $oMobileDetect->isMobile()) { if (file_exists("C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenuMobile.tpl").".cac.php")) { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenuMobile.tpl").".cac.php"; } else { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenu.tpl").".cac.php"; } } else { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/ProjectMenu.tpl").".cac.php"; } ?>
<div class="line_statut">
    <form name="f3" method="post">
        <table>
            <tr>
                <td><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Name"); ?>:</td>
                <td><input name="name" class="form-control" type="text" placeholder="<?php $oI18n = new \Apollina\I18n; echo $oI18n->_("EnterTheGroupName"); ?>" required<?php if ($_aProtectedVar['oTeam']) { ?> value="<?php echo $_aProtectedVar['oTeam']->get_name(); ?>"<?php } ?>></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="form-control" value="<?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Validate"); ?>"></td>
            </tr>
        </table>
    </form>
</div>
<?php /* C:/Users/judicael.paquet/Zend/workspaces/DefaultWorkspace10/scrum/data/cache/b25bc6e826d3b98a58599caeb88616f6.cac.php */ ?>
<?php /* template : /src/Front/View/ConfigGroupAdd.tpl */ ?>