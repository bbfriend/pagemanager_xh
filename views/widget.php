<!-- Pagemanager_XH: widget -->
<form id="pagemanager-form" action="<?php echo $actionUrl;?>" method="post" accept-charset="UTF-8" onsubmit="PAGEMANAGER.beforeSubmit()">
    <?php echo $structureWarning;?>
    <?php echo $toolbar;?>
    <div id="pagemanager" ondblclick="jQuery('#pagemanager').jstree('toggle_node')">
        <?php echo Pagemanager_pages();?>
    </div>
    <input type="hidden" name="admin" value=""/>
    <input type="hidden" name="action" value="plugin_save"/>
    <input type="hidden" name="xml" id="pagemanager-xml" value=""/>
    <input id="pagemanager-submit" type="submit" class="submit" value="<?php echo $saveButton;?>" style="display: none"/>
</form>
<div id="pagemanager-confirmation" title="<?php echo $titleConfirm;?>"></div>
<div id="pagemanager-alert" title="<?php echo $titleInfo;?>"></div>
