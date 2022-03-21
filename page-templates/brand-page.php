<?php
/**
 * Template Name: brand page
 */
get_header();
$data = casautomotive_get_theme_data();

?>

<main id="casautomotive-brand">
<pre style="display: none;"><?php echo wp_json_encode($data) ?></pre>
</main>

<?php 

get_footer();
?>