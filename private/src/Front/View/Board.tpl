<div id="statut">
    {foreach from=$aBoard key=$iKey item=$oBoard}
        <input type="button" value="{$oBoard->get_name()}" onclick="window.location.href='{url alias='board' id=$oBoard->get_id()}'">
    {/foreach}
</div>
<div class="line_statut">
    {foreach from=$aBoardPart key=$iKey item=$oBoardPart}
        <div class="statut">{$oBoardPart->get_name()}</div>
    {/foreach}
</div>
{foreach from=$aBoardPart key=$iKey item=$oBoardPart}
    <div style="left:{$iKey*170+165}px;" class="separator"></div>
{/foreach}
<script>var max_width={$iKey*170};</script>

<div class="line_userstory">
    <div id="draggable" class="draggable ui-widget-content">
      <div class="epic">Cart</div><br/>
      En tant que Batman, je veux retrouver Robin
    </div>
</div>