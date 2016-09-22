<div class="col-xs-6 columns">
    <label class="pull-left" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('cobrowse/browse','Show my mouse position to visitor')?>"><input type="checkbox" value="on" id="show-operator-mouse" ><i class="material-icons">mouse</i></label> <label title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('cobrowse/browse','On highlight scroll user window location to match my')?>" class="pull-left"><input id="scroll-user-window" value="on" type="checkbox"><i class="material-icons">navigation</i></label> <label title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('cobrowse/browse','Follow user scroll position')?>" class="pull-left"><input id="sync-user-scroll" value="on" type="checkbox"><i class="material-icons">gamepad</i></label> <label title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('cobrowse/browse','On click navigate user browser')?>" class="pull-left"><input id="status-icon-control" value="on" type="checkbox"><i class="material-icons">keyboard</i></label>
    <?php if (erLhcoreClassUser::instance()->hasAccessTo('lhchat','allowredirect')) : ?>
        <a class="material-icons pull-left" onclick="lhinst.redirectToURL('<?php echo $chat->id?>','<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/adminchat','Please enter a URL');?>')" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/adminchat','Redirect user to another url');?>">link</a>
    <?php endif;?>

    <i title="" id="status-icon-sharing" class="pull-left material-icons"><?php echo $browse->is_sharing == 0 ? 'visibility_off' : 'visibility'?></i>
    <label id="last-message" class="pull-right"><?php echo $browse->mtime > 0 && $browse->initialize != '' ? $browse->mtime_front : '' ?></label>
</div>