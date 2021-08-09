<!-- Huge Slider -->
<section id="" class="scene_area container-fluid no-padding">

    <!-- PC / Large Screen Slider -->
    <div id="large_slider" class="scene_layer carousel slide carousel-fade" data-ride="carousel" data-parallax="-0.20">
        <!-- Indicators -->
        <ol class="carousel-indicators hidden">
            <cms:pages masterpage='index.php' limit='5'>
                <cms:if k_absolute_count eq '1' >
                        <li data-target="#large_slider" data-slide-to="<cms:show k_absolute_count />" class="active"></li>

                    <cms:else />
                    <li data-target="#large_slider" data-slide-to="<cms:show k_absolute_count />"></li>
                </cms:if>
            </cms:pages>
        </ol>


        <!-- Wrapper for slides http://placehold.it/2500x900  -->
        <div class="carousel-inner" role="listbox">
            <cms:pages masterpage='temp_slider.php' limit='5'>
                <cms:if k_absolute_count eq '1' >
                        <div class="item active">
                        <cms:else />
                        <div class="item">
                            </cms:if>
                            <a href="<cms:show gcx_slider_link />">
                                <img class="img-responsive fill" src="<cms:show gcx_slider_image />" alt="<cms:show k_page_title />">

                                <div class="carousel-caption">
                                    <div class="fadeIn animated delay">
                                        <h1 class="main-text"><cms:show k_page_title /></h1>
                                        <p class="lead"><cms:show gcx_slider_sub_title /></p>
                                        <cms:popup_edit 'k_page_title|gcx_slider_sub_title|gcx_slider_link|gcx_slider_link_external|gcx_slider_image'  link_text='Edit slider' />
                                    </div>
                                </div>
                            </a>
                        </div>
                        </cms:pages>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#large_slider" data-slide="prev">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a class="right carousel-control" href="#large_slider" data-slide="next">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    </div>
                    </section>
                    <!-- Commodity Ticker -->

                    <div class="ticker-wrap">
                        <div class="ticker">

                            <div class="ticker_item">Global Commodity Prices</div>
                            <div class="ticker_item">Maize: <i class="fas fa-lg <cms:if global_commodity_maize eq '0' >fa-caret-up<cms:else/>fa-caret-down</cms:if>" style="<cms:if global_commodity_maize eq '0'>color: #00f000<cms:else/>color: #f00</cms:if>;"></i></div>
                            <div class="ticker_item">Soya Bean: <i class="fas fa-lg <cms:if global_commodity_soy eq '0' >fa-caret-up<cms:else/>fa-caret-down</cms:if>" style="<cms:if global_commodity_soy eq '0'>color: #00f000<cms:else/>color: #f00</cms:if>;"></i></div>
                            <div class="ticker_item">Rice: <i class="fas fa-lg <cms:if global_commodity_rice eq '0' >fa-caret-up<cms:else/>fa-caret-down</cms:if>" style="<cms:if global_commodity_rice eq '0'>color: #00f000<cms:else/>color: #f00</cms:if>;"></i></div>
                            <div class="ticker_item">Gold: <i class="fas fa-lg <cms:if global_commodity_gold eq '0' >fa-caret-up<cms:else/>fa-caret-down</cms:if>" style="<cms:if global_commodity_gold eq '0'>color: #00f000<cms:else/>color: #f00</cms:if>;"></i></div>
                            <div class="ticker_item">Cocoa: <i class="fas fa-lg <cms:if global_commodity_cocoa eq '0' >fa-caret-up<cms:else/>fa-caret-down</cms:if>" style="<cms:if global_commodity_cocoa eq '0'>color: #00f000<cms:else/>color: #f00</cms:if>;"></i></div>
                            <div class="ticker_item"><cms:show global_commodity_price_source /></div>
                        </div>
                    </div>

                    <!-- Intro Section -->
                    <section id="Intro_Tab" class="container-fluid">
                        <div class="container">
                            <div class="text-left bottom">
                                <h3 class="main-text">Why Join The Ghana Commodity Exchange?</h3>
                                <p>Connecting Markets, Connecting People, Providing Opportunities</p>
                            </div>
                            <div class="row news-row">
                                <cms:pages masterpage='temp_faq.php' limit='3' folder='gcx_folder_feature_faq'>
                                    <div class="col-md-4 col-sm-6 col-xs-12 news-row-column">
                                        <div class="panel news-row-panel">
                                            <img class="img-responsive panel-img news-row-column-img" src="<cms:show gcx_faq_image />" alt="<cms:show k_page_title />">
                                            <div class="panel-body news-wrapper">
                                                <h3 class="main-text news-title"><cms:show k_page_title /></h3>
                                                <div class="news-short-description"><cms:show gcx_faq_answer /></div>
                                            </div>
                                        </div>
                                    </div>
                                </cms:pages>
                            </div>
                        </div>
                    </section>

                    <!-- CTA -->
                    <section id="CTA_Tab" class="container-fluid">
                        <cms:pages masterpage='temp_links.php' limit='1' folder='gcx_folder_link_set_a'>
                            <div class="container text-center">
                                <h2 class="main-text color"><cms:show k_page_title /></h2>
                                <p class="lead color"><cms:show gcx_link_subtitle /></p>
                                <a href="<cms:show gcx_link />" class="btn pumkin">Click Here</a>
                            </div>
                        </cms:pages>

                    </section>

                    <!-- Current Updates -->
                    <section id="Current_Tab" class="container-fluid">
                        <div class="container">
                            <div class="text-center">
                                <h3 class="main-text">Market Update</h3>
                            </div>

                            <!-- Commodity tabs -->
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="commodities_tab nav-tabs nav-justified list-unstyled" role="tablist">
                                        <li role="presentation" class="active"><a href="#Maize" aria-controls="Maize" role="tab" data-toggle="tab">Maize</a></li>
                                        <li role="presentation" class=""><a href="#Soy" aria-controls="Soy" role="tab" data-toggle="tab">Soya Bean</a></li>

                                        <li role="presentation" class=""><a href="#Rice" aria-controls="Rice" role="tab" data-toggle="tab">Rice</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Commodity tab info -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="tab-content">
                                        <!-- Maize -->
                                        <div role="tabpanel" class="tab-pane active" id="Maize">
                                            <cms:embed 'market_data_maize.html' />
                                        </div>
                                        <!-- Soy -->
                                          <div role="tabpanel" class="tab-pane" id="Soy">
                                              <cms:embed 'market_data_soy.html' />
                                          </div>

                                        <!-- Rice -->
                                        <div role="tabpanel" class="tab-pane" id="Rice">
                                            <cms:embed 'market_data_rice.html' />
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div style="color:red; text-align: center" ><cms:show market_data_disclaimer /></div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- News Section -->
                    <section id="News_Tab" class="container-fluid">
                        <div class="container">
                            <div class="text-left bottom">
                                <h3 class="main-text">Latest News</h3>
                                <p>Click <a class="text-danger" href="news">here</a> for other GCX news</p>
                            </div>
                            <div class="row news-row">
                                <cms:pages masterpage='news.php' limit='2' folder='gcx_top_news'>
                                    <div class="col-md-6 col-sm-6 col-xs-12 news-row-column">
                                        <div class="panel news-row-panel">
                                            <a href="<cms:show k_page_link />">
                                                <img class="img-responsive panel-img news-row-column-img"  src="<cms:show gcx_news_image />" alt="<cms:show k_page_title /> image">
                                                <div class="panel-body news-wrapper">
                                                    <div class="news-title"><cms:show k_page_title /></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </cms:pages>
                            </div>
                        </div>
                    </section>

                    <!-- Corporate Image Section -->
                    <section id="Corporate_Tab" class="container-fluid">
                        <div class="container">
                            <div class="text-left bottom color">
                                <h3 class="main-text">GHANA COMMODITY EXCHANGE</h3>
                                <p class="lead">Connecting Markets, Connecting People, Providing Opportunities</p>
                            </div>

                            <div class="row">
                                <cms:pages masterpage='temp_links.php' limit='2' folder='gcx_folder_link_set_b'>
                                    <div class="col-md-6">
                                        <div class="panel">
                                            <div class="panel-body text-center">
                                                <h4 class="main-text"><cms:show k_page_title /></h4>
                                                <p class=""><cms:show gcx_link_subtitle /></p>
                                                <cms:if "<cms:not_empty gcx_link />">
                                                <a href="<cms:show gcx_link />" class="btn pumkin">Click Here</a>
                                                <cms:else />
                                                <a href="javascript:void" class="btn pumkin" data-toggle="modal" data-target="#Register_New">Click Here</a>
                                                </cms:if>
                                            </div>
                                        </div>
                                    </div>
                                </cms:pages>
                            </div>
                        </div>
                    </section>
