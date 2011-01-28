<?php
// $Id$

/**
 * @file
 * Display Suite 4 column template.
 */
?>
<div class="<?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <div class="group-first <?php print $first_classes; ?>">
    <?php print $first; ?>
  </div>

  <div class="group-second <?php print $second_classes; ?>">
    <?php print $second; ?>
  </div>

  <div class="group-third <?php print $third_classes; ?>">
    <?php print $third; ?>
  </div>

  <div class="group-fourth <?php print $fourth_classes; ?>">
    <?php print $fourth; ?>
  </div>
</div>