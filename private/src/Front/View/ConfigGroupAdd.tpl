{include file='/src/Front/View/ProjectMenu.tpl'}
<div class="line_statut">
    <form name="f3" method="post">
        <table>
            <tr>
                <td>{gettext word='Name'}:</td>
                <td><input name="name" class="form-control" type="text" placeholder="{gettext word='EnterTheGroupName'}" required{if $oRole} value="{$oRole->get_name()}"{/if}></td>
            </tr>
            <tr>
                <td>{gettext word='Type'}:</td>
                <td>
                    <select name='type' class="form-control">
                        <option value='human'{if $oRole->get_type() == 'human'} selected="selected"{/if}>{gettext word='Human'}</option>
                        <option value='engine'{if $oRole->get_type() == 'engine'} selected="selected"{/if}>{gettext word='Engine'}</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="form-control" value="{gettext word='Validate'}"></td>
            </tr>
        </table>
    </form>
</div>