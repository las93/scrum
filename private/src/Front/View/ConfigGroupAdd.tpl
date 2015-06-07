{include file='/src/Front/View/ProjectMenu.tpl'}
<div class="line_statut">
    <form name="f1" method="post">
        <table>
            <tr>
                <td>{gettext word='Name'}:</td>
                <td><input name="name" class="form-control" type="text" placeholder="{gettext word='EnterTheGroupName'}" required></td>
            </tr>
            <tr>
                <td>{gettext word='Type'}:</td>
                <td>
                    <select name='color' class="form-control">
                        <option value='human'>{gettext word='Human'}</option>
                        <option value='engine'>{gettext word='Engine'}</option>
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