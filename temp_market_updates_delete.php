<?php require_once( 'gcxadmin/cms.php' ); ?>
<cms:template clonable='1' title='Market Updates' executable='0'>
    <cms:folder name="gcx_market_update_folder_maize" title="Maize" />
    <cms:folder name="gcx_market_update_folder_rice" title="Rice" />
    <cms:folder name="gcx_market_update_folder_soy" title="Soya Bean" />
    <cms:folder name="gcx_market_update_folder_cocoa" title="Cocoa" />
    <cms:folder name="gcx_market_update_folder_gold" title="Gold" />

    <cms:repeatable name='market_updates_details' title='Market Updates Details'>

        <cms:editable name='gcx_market_update_com_type' label='Commodity Type' type='text' desc='Provide commodity type' required='1'/>
        <cms:editable
            name="gcx_market_update_com_grade"
            label="Commodity Grade"
            desc="Provide commodity grade"
            opt_values='Select Grade=- | Grade 1 | Grade 2 | Grade 3 | Grade 4 | Grade 5 | Grade 6 | Grade 7 | Grade 8 | Grade 9 | Grade 10'
            type='dropdown'
            required='1'
            />
        <cms:editable name='gcx_market_update_opening_com_price' label='Opening Commodity Price' type='text' desc='Provide opening commodity price' required='1'/>
        <cms:editable name='gcx_market_update_com_price' label='Closing Commodity Price' type='text' desc='Provide closing commodity price' required='1'/>
        <cms:editable name='gcx_market_update_price_change' label='Percentage Price Change' type='text' desc='Provide the price change in percentage' required='1'/>
        <cms:editable name='gcx_market_update_del_center' label='Delivery Center' type='text' desc='Provide delivery center type' required='1' validator='min_len=4'/>

    </cms:repeatable>

</cms:template>
<?php COUCH::invoke(); ?> 