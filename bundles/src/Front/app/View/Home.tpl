{if $app.session['id_user'] > 0}
    s
{else}
    <div id="connection">
        <form name="f2" method="post">
            <table border="0">
                <tr>
                    <td>{gettext word='Login'}:</td>
                    <td><input name="login" type="text" placeholder="{gettext word='EnterTheLogin'}" required pattern="[a-zA-Z0-9.@]{3,100}"></td>
                </tr>
                <tr>
                    <td>{gettext word='Password'}:</td>
                    <td><input name="password" type="password" placeholder="{gettext word='EnterThePassword'}" required pattern=".{6,100}"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" class="submit" value="{gettext word='Validate'}"></td>
                </tr>
            </table>
        </form>
    </div>
{/if}