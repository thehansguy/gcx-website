<?php require_once( 'gcxadmin/cms.php' ); ?>
<cms:template title='Partners' clonable='1' dynamic_folders='1'> 
    <cms:editable name='gcx_partners_image' label='Investor/Partner Image' desc='Maximum image dimension of 400 X 400'
                  type='image'
                  show_preview='1'
                  preview_width='150'
                  required='1' 
                  />
</cms:template>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129346101-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-129346101-1');
        </script>


    <cms:embed 'header_details.html' />
    <cms:load_edit  />
</head>

<body style="display:none;" onload="document.body.style.display = ''; smoothScroll(window, parallax);">
