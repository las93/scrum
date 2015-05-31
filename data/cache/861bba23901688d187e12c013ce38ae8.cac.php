<div id="statut">
    <?php if (count($_aProtectedVar['aProjects']) > 0) { foreach($_aProtectedVar['aProjects'] as $_aProtectedVar['iKey'] => $_aProtectedVar['oProject']) { ?>
        <input type="button" value="<?php echo $_aProtectedVar['oProject']->get_name(); ?>" onclick="window.location.href='<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('board', array( 'id' => $_aProtectedVar['oProject']->get_id())); ?>'">
    <?php }} ?>
    <a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('project_add', array()); ?>">+ <?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Add"); ?></a>
</div>
<?php /* C:/Users/judicael.paquet/Zend/workspaces/DefaultWorkspace10/scrum/data/cache/861bba23901688d187e12c013ce38ae8.cac.php */ ?>
<?php /* template : /src/Front/View/ProjectMenu.tpl */ ?>