<?php 
get_header();
global $context;
$template = $context->update(__FILE__);

/* getting loop-index */
ob_start();
get_template_part('loop', 'index');
$context->loop_index = ob_get_clean();
/* getting sidebar */
ob_start();
get_sidebar();
$context->sidebar = ob_get_clean();

echo $context->render($template);

get_footer(); 
?>
