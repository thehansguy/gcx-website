<!-- Footer -->
<cms:pages masterpage='index.php'>
    <section id="Footer" class="container-fluid no-padding">
        <div class="container">
            <div class="row top">
                <div class="col-sm-2">
                    <h5 class="bold main-text">Menu</h5><br>
                    <ul class="list-unstyled">
                        <li><a href="https://gcx.com.gh/">Home</a></li>
                        <li><a href="<cms:link 'who_we_are.php' />">About Us</a></li>
                        <li><a href="<cms:link 'services.php' />">Our Services</a></li>
                        <li><a href="<cms:link 'membership_process.php' />">Membership</a></li>
                        <li><a href="<cms:link 'market_intelligence.php' />">Market Data</a></li>
                        <li><a href="<cms:link 'commodity.php' />">Commodities</a></li>                        
                        <li><a href="<cms:link 'career.php' />">Careers</a></li>
                        <li><a href="<cms:link 'news.php' />">Media</a></li>
                        <li><a href="<cms:link 'contact.php' />">Contact Us</a></li>
                        <li><a href="login" class="btn pumkin text-black btn-sm top main-text" data-toggle="modal" data-target="#Sign_In">Sign In</a></li>
                    </ul>     
                </div>
                <div class="col-sm-3">
                    <h5 class="bold main-text">Useful Links</h5><br>
                    <ul class="list-unstyled">
                        <li><a href="<cms:link 'commodity.php' />">Commodities</a></li>
                        <li><a href="<cms:link 'membership_type.php' />">Membership Types</a></li>
                        <li><a href="<cms:link 'membership_process.php' />">Membership Application Process</a></li>
                        <li><a href="<cms:link 'membership_application_form.php' />">Application Forms</a></li>
                        <li><a href="<cms:link 'membership_process.php' />">GCX Resources</a></li>
                        <li><a href="<cms:link 'rules_regulations.php' />">Rules &amp; Regulations</a></li>
                        <li><a href="<cms:link 'procurement.php' />">Procurement</a></li>
                        <li><a href="<cms:link 'news.php' />">News</a></li>
                    </ul>     
                </div>
                <div class="col-sm-3 col-md-offset-1">
                    <h5 class="bold main-text">Location</h5><br>
                    <address class="bottom">
                        <cms:show office_location />
                    </address> 
                </div>
                <div class="col-sm-3">
                    <h5 class="bold main-text">Contact Us</h5><br>
                    <address class="bottom">
                        <cms:show box_address />
                        <a href="mailto:<cms:show email_address />"><cms:show email_address /></a><br><br>
                    </address>

                    <address class="top">
                        <abbr title="Phone">P:</abbr> <b><cms:show telephone_address /></b><br>
                    </address>
                </div>
            </div>
        </div>
</cms:pages>
<!-- Copyright -->
<div class="container-fluid black text-center">
    <div class="container pad">
        <ul class="social-network social-circle">
            <li><a href="https://www.facebook.com/GCXGhana" title="Facebook" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://www.twitter.com/@GCXGhana" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/GCXGhana" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://gh.linkedin.com/company/ghana-commodity-exchange" title="LinkedIn" target="_blank"><i class="fab fa-linkedin"></i></a></li>
        </ul>
        <p class="">Copyright &copy; 2018 - <?php echo date("Y"); ?> Ghana Commodity Exchange. All Rights Reserved </p>
    </div>
</div>
</section>