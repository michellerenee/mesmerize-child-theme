<div id="post-<?php the_ID();?>" <?php post_class(); ?>>
  <div class="post-content-single">
    <h3 class="page-title">
      <?php _e('Ingenting fundet', 'mesmerize');?>
    </h3>
    <?php if (is_home() && current_user_can('publish_posts')): ?>
      <p><?php printf(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'mesmerize'), esc_url(admin_url('post-new.php')));?></p>
    <?php elseif (is_search()): ?>
      <p><?php _e('Desværre, der var ikke noget der matchede dine søgekriterier. Prøv igen med nogle andre nøgleord.', 'mesmerize');?></p>
      <?php get_search_form();?>
    <?php else: ?>
      <p><?php _e('Det ser ud til, at vi ikke kan finde det du søger. Måske en søgning kan hjælpe.', 'mesmerize');?></p>
      <?php get_search_form();?>
    <?php endif; ?>
  </div>
</div>