<?php require_once( 'gcxadmin/cms.php' ); ?>
<cms:template clonable='1' title='Feature FAQ' executable='0'>
    <cms:editable name='gcx_faq_answer' label='FAQ Answer' type='richtext' desc='Provide the answer to the FAQ'/>
    <cms:editable name='gcx_faq_image' label='FAQ Image' desc='Optional, Maximum image dimension of 400 X 400'
                  type='image'
                  show_preview='1'
                  preview_width='150'
                  />

    <cms:folder name="gcx_folder_feature_faq" title="Feature FAQ" />
    <cms:folder name="gcx_folder_other_faq" title="Other FAQ" />
</cms:template>
<?php COUCH::invoke(); ?> 