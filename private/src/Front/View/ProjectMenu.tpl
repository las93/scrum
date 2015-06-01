                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        {gettext word='Projects'}
                        <small><a href="{url alias='project_add'}">+ {gettext word='Add'}</a></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Data tables</li>
                    </ol>
                </section>

<!--
<div id="statut">
    {foreach from=$aProjects key=$iKey item=$oProject}
        <input type="button" value="{$oProject->get_name()}" onclick="window.location.href='{url alias='board' id=$oProject->get_id()}'">
    {/foreach}
    <a href="{url alias='project_add'}">+ {gettext word='Add'}</a>
</div>
-->