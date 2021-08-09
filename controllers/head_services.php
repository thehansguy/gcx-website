<?php require_once( 'gcxadmin/cms.php' ); ?>
<cms:template title='Services' clonable='1'>
    <cms:editable name='gcx_products_services_desc' required='1'  label='Services Description' type='richtext'/>
    <cms:editable name='gcx_products_services_desc_image' required='1'  label='Services Description Image' desc='Maximum image dimension of 840 X 560'
                  type='image'
                  show_preview='1'
                  preview_width='150'
                  width='840'
                  height="560"
                  crop='1'
                  />
</cms:template>
<!DOCTYPE html>
<html lang="en">
    <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129346101-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129346101-1');
</script>


    <cms:embed 'header_details.html' />
    <cms:load_edit  />
    </head>

    <body style="display:none;" onload="document.body.style.display = ''; smoothScroll(window, parallax);">

        <!-- Prelaoder -->
        <div class="preloader-background">
            <div class="status"></div>
        </div>

