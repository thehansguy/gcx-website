<?php require_once( 'gcxadmin/cms.php' ); ?>
<cms:template title='GCX Feature Article' clonable='1' order='1'>
    <cms:editable   name='gcx_feature_article_content' type='richtext' required='1' label='Provide GCX Feature Article content' />
    <cms:editable   name='gcx_feature_article_image'   label='Provide feature article image' 
                    type='image' 
                    show_preview='1'
                    preview_width='150' 
                    width='900' 
                    crop='1' 
                    required='1' 
                    desc='Image width should be 900 pixels' 
                    />

    <cms:editable name='group_seo' label='Search Engine Optimization' desc='Provide details to improve SEO ranking' type='group' />
    <cms:editable name='seo_meta_title' label='Meta Title' group='group_seo' desc='Default is the page title' type='text' />
    <cms:editable name='seo_meta_keywords' required='1' label='Meta Keywords' desc='Comma separated' group='group_seo' type='text' />
    <cms:editable name='seo_meta_description' required='1' label='Meta Description' desc='Maximum 255 chars. Meta Description should optimally be between 150-160 characters' group='group_seo' type='text' />
    
    <cms:folder name="gcx_feature_article" title="Feature Article" />
    <cms:folder name="gcx_other_article" title="Other Article" />
</cms:template>
<!DOCTYPE html>
<html lang="en">

<head>
    <cms:embed 'header_details.html' />
    <cms:load_edit />
</head>

<body style="display:none;" onload="document.body.style.display = ''; smoothScroll(window, parallax);">

    <!-- Prelaoder 
    <div class="preloader-background">
        <div class="status"></div>
    </div>
    -->