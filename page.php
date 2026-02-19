<?php
$slug = get_post_field('post_name');

$template = locate_template("pages/{$slug}/index.php");

if ($template) {
  include $template;
  exit;
}
