<div id="header">
    <div id="logo">
        ISCRUM
    </div>
    <div id="menu">
        <div class="one_menu"><a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('board', array()); ?>"><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Boards"); ?></a></div>
        <div class="one_menu"><a href="<?php $oUrlManager = new \Venus\core\UrlManager; echo $oUrlManager->getUrl('project', array()); ?>"><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Projects"); ?></a></div>
    </div>
    <div class="clear"></div>
</div>
<?php /* C:/Users/judicael.paquet/Zend/workspaces/DefaultWorkspace10/scrum/data/cache/8a3a5d6959ead7ff15072b11dcaf3b9b.cac.php */ ?>
<?php /* template : /src/Front/View/Header.tpl */ ?>