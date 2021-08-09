<?php require_once( 'gcxadmin/cms.php' ); ?>
<cms:template title='Procurement' clonable='1'>
    <cms:editable name='gcx_contract_number' required='1' label='Contract Number'  type='text'/>
    <cms:editable
        type='datetime'
        name='gcx_expiry_date'
        label='Expiry Date'
        required='1'
        />
    <cms:editable name='gcx_awarded_to' required='1' label='Awarded To'  type='text'/>
    <cms:editable name='gcx_procurement_file'  required='1' label='PDF Document' desc='Upload the file here' type='file'/>
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