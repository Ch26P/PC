<div id="Modale_contact" class="modale_contact">
    <div class="modale_contact_bloc">
        <div class="modale_contact_content">
            <div class="modale_contact_content_bloc_title">
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $custom_logo_url = wp_get_attachment_image_url($custom_logo_id, 'complet'); ?>
            <?php echo '<img src="' . esc_url($custom_logo_url) . '" alt="logo" class="img_logo">'; ?>
            </div>
           <!-- <p>ontact</p>-->
            <?php echo do_shortcode(' [contact-form-7 id="2ff9183" title="Formulaire de contact 1"]') ?>
        </div> 
           <div class="modale_contact_fond">

    </div>
    </div>

</div>