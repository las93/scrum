{include file='/src/Front/View/ProjectMenu.tpl'}
<div class="line_statut">
    <form name="f1" method="post">
        <table border="0">
            <tr>
                <td>{gettext word='Name'}:</td>
                <td><input name="name" type="text" placeholder="{gettext word='EnterTheThemeName'}" required></td>
            </tr>
            <tr>
                <td>{gettext word='Description'}:</td>
                <td><textarea name="description" placeholder="{gettext word='EnterTheThemeDescription'}"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="submit" value="{gettext word='Validate'}"></td>
            </tr>
        </table>
    </form>
</div>