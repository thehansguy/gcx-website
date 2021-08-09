<?php require_once( 'gcxadmin/cms.php' ); ?>
<cms:template clonable='1' title='Market Updates' executable='0'>
    <cms:folder name="gcx_market_update_folder_maize" title="Maize" />
    <cms:folder name="gcx_market_update_folder_rice" title="Paddy Rice" />
    <cms:folder name="gcx_market_update_folder_soy" title="Soya Bean" />
    <cms:folder name="gcx_market_update_folder_cocoa" title="Cocoa" />
    <cms:folder name="gcx_market_update_folder_gold" title="Gold" />
    <cms:folder name="gcx_market_update_folder_sesame" title="Sesame" />
    <cms:folder name="gcx_market_update_folder_sorghum" title="Sorghum" />
    
     <cms:repeatable name='market_updates_details' title='Market Updates Details'>

        <cms:editable name='gcx_market_update_symbol' label='Symbol' type='text' desc='Provide symbol' required='1'/>
         <cms:editable name='gcx_market_update_opening_com_price' label='Opening Price' type='text' desc='Provide opening price' required='1'/>
        <cms:editable name='gcx_market_update_com_price' label='Closing Price' type='text' desc='Provide closing price' required='1'/>
        <cms:editable
        name="gcx_market_update_price_change"
        label="Price Change"
        desc="Provide price change"
        opt_values='Select direction=- | Up=0 | Down=1 | Stable=2'
        type='dropdown'
        required='1'
        />
        <cms:editable name='gcx_market_update_high' label='High price' type='text' desc='Provide high price' required='1'/>
       <cms:editable name='gcx_market_update_low' label='Low price' type='text' desc='Provide low price' required='1'/>
        <cms:editable name='gcx_market_update_volume' label='Volume(MT)' type='text' desc='Provide volume' required='1'/>

    </cms:repeatable>
    
</cms:template>
<?php COUCH::invoke(); ?> 