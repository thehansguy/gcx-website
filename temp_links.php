<?php require_once( 'gcxadmin/cms.php' ); ?>
<cms:template clonable='1' title='Quick Links' executable='0'>
    <cms:editable name='gcx_link_subtitle' label='Sub Title' type='text' desc='Provide a short description'/>
        <cms:editable name='gcx_link' label='Link Url' type='text' desc='Optional'/>
    <cms:editable name='gcx_slider_link_external' label='Open in new windown' opt_values='yes' type='checkbox'/>
    <cms:editable name='gcx_link_image' label='Link Background Image' desc='Optional, Maximum image dimension of 400 X 400'
                  type='image'
                  show_preview='1'
                  preview_width='150'
                  />

    <cms:folder name="gcx_folder_link_set_a" title="First Set" />
    <cms:folder name="gcx_folder_link_set_b" title="Second Set" />
</cms:template>
<?php COUCH::invoke(); ?> 