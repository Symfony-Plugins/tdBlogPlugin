<?php use_helper('I18N') ?>
<li class="sf_admin_action_deactivate" id="ajax_deactivate_<?php echo $td_article->getId() ?>">
<?php use_helper('jQuery'); ?>
  <?php echo jq_link_to_remote(__('Deactivate', array(), 'sf_admin'), array(
    'update'   => 'article_is_active_action_'.$td_article->getId(),
    'url'      => '@ajax_article_deactivate?id='.$td_article->getId(),
    'script' => true,
    'complete' => jq_remote_function( array(
      'update' => 'article_is_active_column_'.$td_article->getId(),
      'url'    => 'graphics/empty',
      'script' => true
    )),
  )) ?>
</li>
