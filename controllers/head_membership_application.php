<?php require_once( 'gcxadmin/cms.php' ); ?>
<cms:no_cache />
<cms:template title='Application Entries' clonable='1' dynamic_folders='1'> 
    <cms:editable name='firstname'  required='1' type='text' />
    <cms:editable name='middlename' type='text' />
    <cms:editable name='lastname'  required='1' type='text' />
    <cms:editable name='email' required='1' validator='email' type='text' />
    <cms:editable name='phonenumber'  type='text' />
    <cms:editable name='address'  type='nicedit' />
    <cms:editable name='industry'  type='text' />
    <cms:editable name='remarks'  type='nicedit' />
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