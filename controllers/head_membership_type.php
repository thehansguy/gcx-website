<?php require_once( 'gcxadmin/cms.php' ); ?>
<cms:template title='Membership Types'>
    <cms:editable name='gcx_membership_types' required='1'  label='Membership Types Details' type='richtext'/>

    <cms:editable name='group_banner_details' label='Page Banner Details' type='group' />
    <cms:editable name='banner_details_image' required='1' label='Banner image' group='group_banner_details' desc='Image dimension of 1920 by 800'
                  type='image'
                  show_preview='1'
                  preview_width='150'
                  width='1920'
                  height="800"
                  crop='1'
                  />
    <cms:editable name='banner_details_title' label='Banner Title' group='group_banner_details' required='1'  type='text'/>
    <cms:editable name='banner_details_sub_title'  required='1' label='Banner Sub Title' group='group_banner_details' type='text'/>

    <cms:editable name='group_seo' label='Search Engine Optimization' desc='Provide details to improve SEO ranking' type='group' />
    <cms:editable name='seo_meta_title' label='Meta Title' group='group_seo' required='1'  type='text'/>
    <cms:editable name='seo_meta_keywords'  required='1' label='Meta Keywords' desc='Comma separated' group='group_seo' type='text'/>
    <cms:editable name='seo_meta_description'  required='1' label='Meta Description' desc='Maximum 255 chars. Meta Description should optimally be between 150-160 characters' group='group_seo' type='text'/>


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

    <!-- Prelaoder 
    <div class="preloader-background">
        <div class="status"></div>
    </div>-->