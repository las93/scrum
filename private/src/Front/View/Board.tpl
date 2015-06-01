                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        {gettext word='Boards'}
                        <small>{$oThisBoard->get_name()}</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Data tables</li>
                    </ol>
                </section>
                
<div class="line_statut">
    {foreach from=$aBoardPart key=$iKey item=$oBoardPart}
        <div class="statut">{$oBoardPart->get_name()}</div>
    {/foreach}
</div>
{foreach from=$aBoardPart key=$iKey item=$oBoardPart}
    <div style="left:{$iKey*150+370}px;" class="separator"></div>
{/foreach}
<script>var max_width={$iKey*150};</script>

<div class="line_userstory">
    <div id="draggable" class="draggable ui-widget-content">
      <div class="epic">Cart</div><br/>
      En tant que Batman, je veux retrouver Robin
    </div>
</div>