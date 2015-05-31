<div id="statut">
    {foreach from=$aProjects key=$iKey item=$oProject}
        <input type="button" value="{$oProject->get_name()}" onclick="window.location.href='{url alias='board' id=$oProject->get_id()}'">
    {/foreach}
    <a href="{url alias='project_add'}">+ {gettext word='Add'}</a>
</div>