<span id="article_is_active_action_<?php echo $td_article->getId() ?>">
  <?php if ($td_article->getActive()): ?>
    <?php include_partial('td_article/ajax_deactivate', array('td_article' => $td_article)) ?>
  <?php else: ?>
    <?php include_partial('td_article/ajax_activate', array('td_article' => $td_article)) ?>
  <?php endif; ?>
</span>