<?php
// $Id$

/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
<?php if (theme_get_setting('cleanup_views_unformatted') == 0) { ?>
  <div class="views-row">
<?php } else {?>
  <div class="<?php print $classes_array[$id]; ?>">
<?php } ?>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
