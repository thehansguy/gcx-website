<?php require_once( 'gcxadmin/cms.php' ); ?>
<cms:template title='About GCX' >
    <cms:editable name='group_about_gcx' label='About GCX' desc='Provide details about GCX' type='group' />
    <cms:editable name='about_gcx_title' label='Title' group='group_about_gcx' required='1' type='text'/>
    <cms:editable name='about_gcx' label='Description' group='group_about_gcx' type='richtext' required='1' validator_msg='required=Should not be empty'/>
     
    <cms:editable name='group_what_is_gcx' label='What Is GCX?' desc='Provide details about GCX' type='group' />
    <cms:editable name='what_is_gcx_title' label='Title' group='group_what_is_gcx' required='1' type='text'/>
    <cms:editable name='what_is_gcx' label='Description' group='group_what_is_gcx' type='richtext' required='1' validator_msg='required=Should not be empty'/>

    <cms:editable name='group_banner_details' label='Page Banner Details' type='group' />
    <cms:editable name='banner_details_image' required='1' label='Banner image' desc='Image dimension of 1920 by 800'
                  type='image'
                  show_preview='1'
                  preview_width='150'
                  group='group_header_details'
                  width='1920'
                  height="800"
                  crop='1'
                  />
    <cms:editable name='banner_details_title' label='Banner Title' group='group_banner_details' desc='Default is the page title' type='text'/>
    <cms:editable name='banner_details_sub_title'  required='1' label='Banner Sub Title' group='group_banner_details' type='text'/>

    <cms:editable name='group_seo' label='Search Engine Optimization' desc='Provide details to improve SEO ranking' type='group' />
    <cms:editable name='seo_meta_title' label='Meta Title' group='group_seo' desc='Default is the page title' type='text'/>
    <cms:editable name='seo_meta_keywords'  required='1' label='Meta Keywords' desc='Comma separated' group='group_seo' type='text'/>
    <cms:editable name='seo_meta_description'  required='1' label='Meta Description' desc='Maximum 255 chars. Meta Description should optimally be between 150-160 characters' group='group_seo' type='text'/>


</cms:template>