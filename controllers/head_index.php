<?php require_once( 'gcxadmin/cms.php' ); ?>
<cms:template title='GCX Details' >
    <cms:editable name='group_contact_address' required='1'  label='Contact Address' desc='Your contact details' type='group' />
    <cms:editable name='office_location' required='1'  label='Office Location' group='group_contact_address'  type='richtext'/>
    <cms:editable name='box_address' required='1'  label='Box Address' group='group_contact_address'  type='richtext'/>
    <cms:editable name='email_address' required='1'  label='Email Address' group='group_contact_address'  type='text'/>
    <cms:editable name='telephone_address' required='1'  label='General Enquiries Number' group='group_contact_address'  type='text'/>
    <cms:editable name='telephone_membership' required='1'  label='Membership Enquiries Number' group='group_contact_address'  type='text'/>

    <cms:editable name='group_social' label='Social Profiles' desc='Your accounts on Social sites' type='group' />
    <cms:editable name='twitter_id' label='Your Twitter ID' group='group_social' type='text'/>
    <cms:editable name='facebook_id' label='Your Facebook ID' group='group_social' type='text'/>
    <cms:editable name='instagram_id' label='Your Instagram ID' group='group_social' type='text'/>

    <cms:editable name='group_global_commodity_price' label='Global Commodity Prices' desc='Global Commodity Prices Details' type='group' />
    <cms:editable
        name="global_commodity_maize"
        label="Maize Global Commodity Price"
        desc="Provide commodity grade"
        opt_values='Select direction=- | Up=0 | Down=1'
        type='dropdown'
        required='1'
        group='group_global_commodity_price'
        />

    <cms:editable
        name="global_commodity_soy"
        label="Soy Global Commodity Price"
        desc="Provide commodity grade"
        opt_values='Select direction=- | Up=0 | Down=1'
        type='dropdown'
        required='1'
        group='group_global_commodity_price'
        />

    <cms:editable
        name="global_commodity_cocoa"
        label="Cocoa Global Commodity Price"
        desc="Provide commodity grade"
        opt_values='Select direction=- | Up=0 | Down=1'
        type='dropdown'
        required='1'
        group='group_global_commodity_price'
        />

    <cms:editable
        name="global_commodity_rice"
        label="Rice Global Commodity Price"
        desc="Provide commodity grade"
        opt_values='Select direction=- | Up=0 | Down=1'
        type='dropdown'
        required='1'
        group='group_global_commodity_price'
        />

    <cms:editable
        name="global_commodity_gold"
        label="Gold Global Commodity Price"
        desc="Provide commodity grade"
        opt_values='Select direction=- | Up=0 | Down=1'
        type='dropdown'
        required='1'
        group='group_global_commodity_price'
        />

    <cms:editable name='global_commodity_price_source' label='Global Commodity Price Source' type='text'/>
    <cms:editable name='market_data_disclaimer' label='Market Data Disclaimer' type='text'/>

</cms:template>
<!DOCTYPE html>
<html lang="en">
    <head>
    <cms:embed 'header_details.html' />
    <cms:load_edit no_border='1' />
</head>

<body style="display:none;" onload="document.body.style.display = ''; smoothScroll(window, parallax);">

    <!-- Prelaoder -->
    <div class="preloader-background">
        <div class="status"></div>

    </div>
