<?php require_once( 'gcxadmin/cms.php' ); ?>
<cms:template title='Vision & Purpose' >

    <cms:editable name='group_vision' label='Vison' desc='Provide details about GCX vision, purpose and objectives' type='group' />
    <cms:editable name='vision_title' label='Title' group='group_vision' required='1' type='text'/>
    <cms:editable name='vision' required='1' label='Vision of GCX' group='group_vision' type='richtext'/>

    <cms:editable name='group_purpose' label='Purpose' desc='Provide details about GCX vision, purpose and objectives' type='group' />
    <cms:editable name='purpose_title' label='Title' group='group_purpose' required='1' type='text'/>
    <cms:editable name='purpose' required='1' label='Purpose of GCX?' group='group_purpose' type='richtext'/>

    <cms:editable name='group_objectives' label='Objectives' desc='Provide details about GCX vision, purpose and objectives' type='group' />
    <cms:editable name='objectives_title' label='Title' group='group_objectives' required='1' type='text'/>
    <cms:editable name='objectives' required='1' label='Objectives of GCX?' group='group_objectives' type='richtext'/>


    <cms:editable name='group_banner_details' label='Page Banner Details' type='group' />
    <cms:editable name='banner_details_image' required='1' group='group_banner_details' label='Banner image' desc='Image dimension of 1920 by 800'
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
    <cms:editable name='seo_meta_title' label='Meta Title' group='group_seo'required='1'  type='text'/>
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

