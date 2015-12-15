                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        {$sTitle}
                        {if $iPage == 1}<small><a href="{url alias='project_add'}">+ {gettext word='Add'}</a></small>{/if}
                        {if $iPage == 3}<small><a href="{url alias='theme_add' id=$app.get.id}">+ {gettext word='Add'}</a></small>{/if}
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="{url alias='home'}"><i class="fa fa-dashboard"></i> {gettext word='Home'}</a></li>
                        <li{if !$sThirdTitle} class="active"{/if}>{if $sThirdTitle}<a href="{$sSecondUrl}">{/if}{$sSecondTitle}{if $sThirdTitle}</a>{/if}</li>
                        {if $sThirdTitle}<li{if !$sFourTitle} class="active"{/if}>{if $sFourTitle}<a href="{$sThirdUrl}">{/if}{$sThirdTitle}{if $sFourTitle}</a>{/if}</li>{/if}
                        {if $sFourTitle}<li class="active">{$sFourTitle}</li>{/if}
                    </ol>
                </section>