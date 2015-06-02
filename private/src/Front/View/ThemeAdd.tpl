{include file='/src/Front/View/ProjectMenu.tpl'}
<div class="line_statut">
    <form name="f1" method="post">
        <table>
            <tr>
                <td>{gettext word='Name'}:</td>
                <td><input name="name" type="text" placeholder="{gettext word='EnterTheThemeName'}" required></td>
            </tr>
            <tr>
                <td>{gettext word='Description'}:</td>
                <td><textarea name="description" placeholder="{gettext word='EnterTheThemeDescription'}"></textarea></td>
            </tr>
            <tr>
                <td>{gettext word='Color'}:</td>
                <td>
                    <select name='color'>
                        <option value='box-primary'>{gettext word='Navy'}</option>
                        <option value='box-info'>{gettext word='Blue'}</option>
                        <option value='box-danger'>{gettext word='Red'}</option>
                        <option value='box-warning'>{gettext word='Yellow'}</option>
                        <option value='box-success'>{gettext word='Green'}</option>
                        <option value='box-orange'>{gettext word='Orange'}</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="submit" value="{gettext word='Validate'}"></td>
            </tr>
        </table>
    </form>
</div>