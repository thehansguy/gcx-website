<?php require_once( 'gcxadmin/cms.php' ); ?>
<cms:template title='Commodities' clonable='1' order='1' dynamic_folders='1'>
    <!-- commodity 1 -->
    <cms:editable name='gcx_commodity_name' label='Commodity 1 short name' required='1' type='text'/>
    <cms:editable name='gcx_commodity_content' type='richtext' required='1' label='Provide commodity content' />
    <cms:editable name='gcx_commodity_image' label='Provide commodity image' 
                  type='image'
                  show_preview='1'
                  preview_width='150'
                  width='900'
                  crop='1'
                  required='1'
                  desc='Image width should be 900 pixels'
                  />
    <cms:editable name='gcx_commodity_file_desc' label='Commodity file description' required='1' type='text'/>
    <cms:editable name='gcx_commodity_file' label='Commodity PDF Document' required='1'  desc='Upload download file here' type='file'/>
    <!-- commodity 2 -->
    <cms:editable name='gcx_commodity_name_2' label='Commodity 2 short name' required='0' type='text'/>
    <cms:editable name='gcx_commodity_content_2' type='richtext' required='0' label='Provide commodity content' />
    <cms:editable name='gcx_commodity_image_2' label='Provide commodity image' 
                  type='image'
                  show_preview='1'
                  preview_width='150'
                  width='900'
                  crop='1'
                  required='0'
                  desc='Image width should be 900 pixels'
                  />
    <cms:editable name='gcx_commodity_file_desc_2' label='Commodity file description' required='0' type='text'/>
    <cms:editable name='gcx_commodity_file_2' label='Commodity PDF Document' required='0'  desc='Upload download file here' type='file'/>
<!-- commodity 3 -->
<cms:editable name='gcx_commodity_name_3' label='Commodity 3 short name' required='0' type='text'/>
    <cms:editable name='gcx_commodity_content_3' type='richtext' required='0' label='Provide commodity content' />
    <cms:editable name='gcx_commodity_image_3' label='Provide commodity image' 
                  type='image'
                  show_preview='1'
                  preview_width='150'
                  width='900'
                  crop='1'
                  required='0'
                  desc='Image width should be 900 pixels'
                  />
    <cms:editable name='gcx_commodity_file_desc_3' label='Commodity file description' required='0' type='text'/>
    <cms:editable name='gcx_commodity_file_3' label='Commodity PDF Document' required='0'  desc='Upload download file here' type='file'/>
<!-- commodity 4 -->
<cms:editable name='gcx_commodity_name_4' label='Commodity 4 short name' required='0' type='text'/>
    <cms:editable name='gcx_commodity_content_4' type='richtext' required='0' label='Provide commodity content' />
    <cms:editable name='gcx_commodity_image_4' label='Provide commodity image' 
                  type='image'
                  show_preview='1'
                  preview_width='150'
                  width='900'
                  crop='1'
                  required='0'
                  desc='Image width should be 900 pixels'
                  />
    <cms:editable name='gcx_commodity_file_desc_4' label='Commodity file description' required='0' type='text'/>
    <cms:editable name='gcx_commodity_file_4' label='Commodity PDF Document' required='0'  desc='Upload download file here' type='file'/>

</cms:template>
<!DOCTYPE html>
<html lang="en">
    <head>
    <cms:embed 'header_details.html' />
    <cms:load_edit  />
</head>

<body style="display:none;" onload="document.body.style.display = ''; smoothScroll(window, parallax);">

