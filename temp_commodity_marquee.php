<?php require_once( 'gcxadmin/cms.php' ); ?>
<cms:template clonable='1' title='Market Data Marquee' executable='0'>    
     <cms:repeatable name='market_updates_marquee' title='Market Updates Marquee'>

        <cms:editable name='gcx_market_update_symbol' label='Symbol' type='text' desc='Provide symbol' required='1'/>
         <cms:editable name='gcx_market_update_current_price' label='Current Price' type='text' desc='Provide current price' required='1'/>
        <cms:editable
        name="gcx_market_update_price_change"
        label="Price Change"
        desc="Provide price change"
        opt_values='Select direction=- | Up=0 | Down=1 | Stable=2'
        type='dropdown'
        required='1'
        />
        <cms:editable name='gcx_market_update_unit_change' label='Unit change' type='text' desc='Provide unit change' required='1'/>
       <cms:editable name='gcx_market_update_percentage_change' label='Percentage change' type='text' desc='Provide percentage change' required='1'/>
     </cms:repeatable>
    
</cms:template>
<?php COUCH::invoke(); ?> 