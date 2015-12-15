{include file='/src/Front/View/ProjectMenu.tpl'}
<div class="line_statut">
    <form name="f3" method="post">
        <table>
            <tr>
                <td>{gettext word='Name'}:</td>
                <td><input name="name" class="form-control" type="text" placeholder="{gettext word='EnterTheGroupName'}" required{if $oTeam} value="{$oTeam->get_name()}"{/if}></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="form-control" value="{gettext word='Validate'}"></td>
            </tr>
        </table>
    </form>
</div>