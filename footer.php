
<footer>

<?php  
  // Output the contact modal.
    get_template_part('template-parts/modal-contact');
    //affichage menu
    wp_nav_menu(['theme_location' => 'footer']) 
    ?>
</footer>
<?php wp_footer() ?>


</body>

</html>