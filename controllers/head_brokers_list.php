<?php require_once( 'gcxadmin/cms.php' ); ?>
<cms:template title='Brokers' clonable='1'>
    <cms:editable name='name'  label='Broker Name' required='1' type='text' />
    <cms:editable name='email' label='Broker Email' required='1' validator='email' type='text' />
    <cms:editable name='phonenumber' label='Broker Phone number' required='1' type='text' />
    <cms:editable name='address'  label='Broker Address' required='1' type='nicedit' />
    <cms:editable name='remarks'  type='nicedit' />
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