                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Boards"); ?>
                        <small><?php echo $_aProtectedVar['oThisBoard']->get_name(); ?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Data tables</li>
                    </ol>
                </section>
                
<div class="line_statut">
    <?php if (count($_aProtectedVar['aBoardPart']) > 0) { foreach($_aProtectedVar['aBoardPart'] as $_aProtectedVar['iKey'] => $_aProtectedVar['oBoardPart']) { ?>
        <div class="statut"><?php echo $_aProtectedVar['oBoardPart']->get_name(); ?></div>
    <?php }} ?>
</div>
<?php if (count($_aProtectedVar['aBoardPart']) > 0) { foreach($_aProtectedVar['aBoardPart'] as $_aProtectedVar['iKey'] => $_aProtectedVar['oBoardPart']) { ?>
    <div style="left:<?php echo $_aProtectedVar['iKey']*150+370; ?>px;" class="separator"></div>
<?php }} ?>
<script>var max_width=<?php echo $_aProtectedVar['iKey']*150; ?>;</script>

<div class="line_userstory">
    <div id="draggable" class="draggable ui-widget-content">
      <div class="epic">Cart</div><br/>
      En tant que Batman, je veux retrouver Robin
    </div>
</div>
<?php /* C:/Users/judicael.paquet/Zend/workspaces/DefaultWorkspace10/scrum/data/cache/90cf03a0c5cae6f6878a871517874a9f.cac.php */ ?>
<?php /* template : /src/Front/View/Board.tpl */ ?>