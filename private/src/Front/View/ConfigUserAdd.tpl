{include file='/src/Front/View/ProjectMenu.tpl'}
<div class="line_statut">
    <form name="f3" method="post">
        <table>
            <tr>
                <td>{gettext word='Login'}:</td>
                <td><input name="login" class="form-control" type="text" placeholder="{gettext word='EnterTheLogin'}" required{if $oUser} value="{$oUser->get_login()}"{/if}></td>
            </tr>
            <tr>
                <td>{gettext word='Team'}:</td>
                <td>
                    <select name='team' class="form-control">
                        {foreach from=$aTeams item=$oTeam}
                            <option value='{$oTeam->get_id()}'{if isset($app.post.team) && $oTeam->get_id() == $app.post.team} selected="selected"{/if}>{$oTeam->get_name()}</option>
                        {/foreach}
                    </select>
                </td>
            </tr>
            <tr>
                <td>{gettext word='Role'}:</td>
                <td>
                    <select name='role' class="form-control">
                        {foreach from=$aRoles item=$oRole}
                            <option value='{$oRole->get_id()}'{if isset($app.post.role) && $oRole->get_id() == $app.post.role} selected="selected"{/if}>{$oRole->get_name()}</option>
                        {/foreach}
                    </select>
                </td>
            </tr>
            <tr>
                <td>{gettext word='Firstname'}:</td>
                <td><input name="firstname" class="form-control" type="text" placeholder="{gettext word='EnterTheFirstname'}" required{if $oUser} value="{$oUser->get_firstname()}"{/if}></td>
            </tr>
            <tr>
                <td>{gettext word='Lastname'}:</td>
                <td><input name="lastname" class="form-control" type="text" placeholder="{gettext word='EnterTheLastname'}" required{if $oUser} value="{$oUser->get_lastname()}"{/if}></td>
            </tr>
            <tr>
                <td>{gettext word='Password'}:</td>
                <td><input name="password" class="form-control" type="password" value="azerty" readonly> * {gettext word='EverAzerty'}</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="form-control" value="{gettext word='Validate'}"></td>
            </tr>
        </table>
    </form>
</div>