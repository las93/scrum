<?php if ($_aProtectedVar['app']['session']['id_user'] > 0) { ?>
    s
<?php } else { ?>
    <div id="connection">
        <form name="f2" method="post">
            <table border="0">
                <tr>
                    <td><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Login"); ?>:</td>
                    <td><input name="login" type="text" placeholder="<?php $oI18n = new \Apollina\I18n; echo $oI18n->_("EnterTheLogin"); ?>" required pattern="[a-zA-Z0-9.@]{3,100}"></td>
                </tr>
                <tr>
                    <td><?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Password"); ?>:</td>
                    <td><input name="password" type="password" placeholder="<?php $oI18n = new \Apollina\I18n; echo $oI18n->_("EnterThePassword"); ?>" required pattern=".{6,100}"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" class="submit" value="<?php $oI18n = new \Apollina\I18n; echo $oI18n->_("Validate"); ?>"></td>
                </tr>
            </table>
        </form>
    </div>
<?php } ?>
<?php /* C:/Users/judicael.paquet/Zend/workspaces/DefaultWorkspace10/scrum/data/cache/5204daa445e09039d1112cca25a24df0.cac.php */ ?>
<?php /* template : /src/Front/View/Home.tpl */ ?>