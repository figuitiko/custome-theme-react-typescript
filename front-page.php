<?php 
get_header();
$data = casautomotive_get_theme_data();

?>
 <main id="casautomotive-main">
        <pre style="display: none;"><?php echo wp_json_encode($data) ?></pre>
</main>
<?php 
get_footer();
?>