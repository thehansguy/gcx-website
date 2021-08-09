<?php require_once( 'gcxadmin/cms.php' ); ?>
<cms:template clonable='1' title='Slider' executable='0'>
    <cms:editable name='gcx_slider_sub_title' label='Sub Title' type='text' required='1' validator_msg='required=Should not be empty'/>
    <cms:editable name='gcx_slider_link' label='Link Url' validator='url' validator_msg='required=Provide a valide url' type='text' desc='Optional'/>
    <cms:editable name='gcx_slider_link_external' label='Open link in new window?' opt_values='No|Yes' opt_selected = 'No' type='radio'/>
    <cms:editable name='gcx_slider_image' required='1' label='Slider Image' desc='Image dimension of 1920 by 1080'
                  type='image'
                  width='1920'
                  crop='1'
                  show_preview='1'
                  preview_width='150'
                  />

    <cms:folder name="gcx_slider_folder_home" title="home" />
</cms:template>
<?php COUCH::invoke(); ?> 