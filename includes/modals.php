<!-- Sign In -->
<div class="modal fade" id="Sign_In" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content pad">
            <div class="modal-header color">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                <h4 class="modal-title" id="myModalLabel">Member Portal</h4>
            </div>
            <div class="modal-body">
                <ul class="nav nav-pills nav-justified " role="tablist">
                    <li role="presentation" class="active"><a href="#SignIn" aria-controls="SignIn" role="tab" data-toggle="tab">Sign In</a></li>
                    <li role="presentation" class=""><a href="#Register" aria-controls="Register" role="tab" data-toggle="tab">Register</a></li>
                </ul>

                <div class="tab-content white pad">
                    <div role="tabpanel" class="tab-pane fade in active" id="SignIn">
                        <form role="form" method="POST" action="sendmail.php">
                            <div class="form-group">
                                <label for="Log_In_Email">Email address</label>
                                <input type="email" class="form-control" id="Log_In_Email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="Log_In_Password">Password</label>
                                <input type="password" class="form-control" id="Log_In_Password" placeholder="Password">
                            </div>
                            <button type="submit" name="Log_In" class="btn btn-clean main-text">Log In</button>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Register">
                        <p>Fill in your details and a copy of the membership form would be sent to your email. Please note that to complete registration, a fee of 50Ghs is charged upon delivery of your completed form to our office.</p>
                        <form action="" method="post" accept-charset="utf-8" class="form" role="form">
                            <div class="form-group">
                                <label for="Log_In_Password">First Name</label>
                                <input type="text" name="firstname" value="" class="form-control input-lg" placeholder="Your First Name"/>
                            </div>
                            <div class="form-group">
                                <label for="Log_In_Password">Last Name</label>
                                <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Your Last Name"/>
                            </div>
                            <div class="form-group">
                                <label for="Log_In_Password">Valid Email Address</label>
                                <input type="text" name="email" value="" class="form-control input-lg" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="Log_In_Password">Valid Phone Number</label>
                                <input type="text" name="number" value="" class="form-control input-lg" placeholder="Your Phone Number"/>
                            </div>
                            <p class="small">By clicking Register, you agree to our <a class="text-danger underline" href="javascript:void">Terms &amp; Conditions</a> and that you have read our <a class="text-danger underline" href="javascript:void">Data Use Policy</a>, including our <a class="text-danger underline" href="javascript:void">Cookie Use</a>.</p>
                            <button name="Register" class="btn bold turquoise color main-text" type="submit">Register</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn alizarin color pull-right" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Register -->
<div class="modal fade" id="Register_New" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content pad">
            <div class="modal-header color">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                <h4 class="modal-title" id="myModalLabel">Member Registration Portal</h4>
            </div>
            <div class="modal-body pad white">
                <p>Fill in your details and a copy of the membership form would be sent to your email. Please note that to complete registration, a fee of 50Ghs is charged upon delivery of your completed form to our office.</p>
                <form action="" method="post" accept-charset="utf-8" class="form" role="form">
                    <div class="form-group">
                        <label for="Log_In_Password">First Name</label>
                        <input type="text" name="firstname" value="" class="form-control input-lg" placeholder="Your First Name"/>
                    </div>
                    <div class="form-group">
                        <label for="Log_In_Password">Last Name</label>
                        <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Your Last Name"/>
                    </div>
                    <div class="form-group">
                        <label for="Log_In_Password">Valid Email Address</label>
                        <input type="text" name="email" value="" class="form-control input-lg" placeholder="Email"/>
                    </div>
                    <div class="form-group">
                        <label for="Log_In_Password">Valid Phone Number</label>
                        <input type="text" name="number" value="" class="form-control input-lg" placeholder="Your Phone Number"/>
                    </div>
                    <p class="small">By clicking Register, you agree to our <a class="text-danger underline" href="javascript:void">Terms &amp; Conditions</a> and that you have read our <a class="text-danger underline" href="javascript:void">Data Use Policy</a>, including our <a class="text-danger underline" href="javascript:void">Cookie Use</a>.</p>
                    <button name="Register" class="btn bold turquoise color main-text" type="submit">Register</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn alizarin color pull-right" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- News -->
<div class="modal fade" id="News_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content white">
            <div class="modal-header black5 color">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                <h4 class="modal-title" id="myModalLabel">News Title</h4>
            </div>
            <div class="modal-body modal-scroll">
                <img src="assets/img/news.jpg" class="modal-img img-responsive">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
            </div>
            <div class="modal-footer color black5">
                <button type="button" class="btn alizarin color pull-right" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="News_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content white">
            <div class="modal-header black5 color">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                <h4 class="modal-title" id="myModalLabel">GHANA COMMODITY EXCHANGE PILOTS TRADING OPERATIONS</h4>
            </div>
            <div class="modal-body modal-scroll">
                <p>Kumasi (April 24, 2018) The Ghana Commodity Exchange (GCX), a trading platform for physical commodities and futures contracts, under the auspices of the Ministry of Finance, piloted trading operations on the 24th of April 2018.</p>
                <p>The Government of Ghana’s drive to support smallholder farmers, increase value along the agricultural value chain and provide export opportunities for Ghanaian commodities, has led to its investment in GCX, in its bid to structure the commodities market towards the eventual commencement of regular formal trading. This is being done by piloting the trading of maize in certain parts of the country, with maize stored in warehouses in Bonyo/Ejura in the Ashanti region and Sandema in the Upper West region.</p>
                <p>On 24th April 2018, GCX brought together sellers and buyers of maize from all parts of the country to participate in its first auction trade which took place in Kumasi.  126 farmers were involved and  several amongst them sold 136,000 GHS of trade during two (2) trading sessions, using a Reserve Auction trading mechanism.  Buyers of maize had the opportunity to purchase high quality maize (GCX grade 1) whilst sellers (mostly small holder farmers) received premium prices and are benefiting from access to a wider market for their goods. Both parties benefiting from low transaction costs, the model presents a sustainable alternative to low prices and margins.</p>
                <p>The Chief Executive Officer (CEO) Dr Kadri Alfah explains, <em>“GCX initiated this pilot trading operation largely to demonstrate our structured trading concept which includes; commodity quality testing, grading, weighing, packaging and standardization, and to prepare our farmers and other market actors for our planned electronic trading and electronic warehouse receipts (e-WR) later this year. We are learning from other commodity exchanges that failed in Africa because they did not plan ahead to get the market behind them prior to the establishment of the trading platform”.</em></p>
                <p>With many more of these trading sessions planned, GCX intends to use this initiative to educate and train market actors including farmers, farmer cooperatives, traders, brokers, financial institutions, regulators and warehouse operators to get everyone involved from the beginning.</p>
                <p>During the first trade, farmers of White Maize were provided the opportunity to deposit their commodities, and have them graded, where they conformed to meet national and international market standards, prior to sale in a GCX Reserve Auction trading floor.  Title was transferred from sellers to buyers using highly controlled contracts. GCX has established a system of performance guarantees including guaranteeing the quality and quantity of the commodity traded, freeing the farmers from the risk of commodity losses.</p>
                <p>According to the farmers who participated in the trade, the auction was a simple, transparent and beneficial process. They were happy to receive the support to weigh and grade their grains. Some of them said they didn’t know they had high quality grains and could receive a premium for it. They were also happy to be presented with buyers which saved them time and cost. The biggest surprise for them was that they received contracts for their trade, with the guarantee from GCX that they would receive their cash settlement within five (5) days of the trade. This is fully in line with GCX’s objectives to help farmers sell their products at fair and competitive prices by providing them with real time price and market information while facilitating their access to financial institutions for loans and financing opportunities.</p>
                <p>GCX has come at the right time to support the Government’s “Growth and Transformation Plan” to double production of key stable crops, improve storage and improve the general wellbeing of Ghanaian farmers and the people of Ghana. GCX is expected to play a crucial role in supporting government initiatives such as the Ministry of Food and Agriculture’s “Planting for Food and Jobs” and the “One District One Warehouse” initiative. GCX will support these initiatives by collaborating to provide warehousing management and quality control systems.</p>
                <h5 class="main-text top">About Reserve Auctions</h5>
                <p>The GCX trading mechanism used for the pilot was a Reserve Auction. Interested buyers had the opportunity to interact with the farmers to discover prices in a fair and transparent manner. A Reserve Auction is a payment against delivery system whereby the farmers ( sellers ) announce a minimum price for their product incorporating their production cost in the sale price. The buyers then put in a bid to match the farmers’ asking price, factoring in transportation and other costs. By so doing, both the buyers and sellers hedge against their cost in a win-win situation for all.</p>
            </div>
            <div class="modal-footer color black5">
                <button type="button" class="btn alizarin color pull-right" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="News_3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content white">
            <div class="modal-header black5 color">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                <h4 class="modal-title" id="myModalLabel">The Ghana Commodity Exchange (GCX) Continues Dialogue with Industry Players</h4>
            </div>
            <div class="modal-body modal-scroll">
                <p><b>30th May 2018:</b> The Ghana Commodity Exchange (GCX) has brought together over forty (40) market actors from across several commodity value chains to provide inputs into the ongoing implementation phase. Members included representatives from farmer groups, aggregators, logistics companies, traders/brokers, agro-processors, manufacturers, financial institutions, insurance companies, and developmental organisations.</p>
                <p>Representatives from the commodity value chain market actors form the GCX Market Council, who are playing key roles in the activities of the Ghana Commodity Exchange (GCX). The Council was established to solicit inputs and feedback on the various elements needed to ensure a successful implementation of the commodity exchange for Ghana.</p>
                <p>During the session, the GCX team gave a status update on GCX activities, shared details on the GCX Membership Process and outlined the structure, rules and processes of the current trading activity that GCX was undertaking.</p>
                <p>The GCX team explained that in its efforts at structuring the commodity market for the eventual spot trade activities later this year, the market council has a crucial role to play.</p>
                <p>Whilst several challenges were highlighted by market council members, there were extremely positive sentiments regarding the role of the Exchange and a commitment by council members to champion the cause, providing insights and actions towards contributing to a successful establishment of the Exchange.</p>
                <p>The GCX, in April of this year, commenced maize trading in spots through auctions (reserve). The owner of Akandem Farms, Mr. Maxwell Akandem shared his experience from one of these recent trade activities through the GCX, expressing his delight at the efficiency of the trading and the speed with which he received his cash settlement for his commodity sold.</p>
                <p>On sustainability of the GCX, the council members opined the need for the GCX to ensure that operations would be continuously strengthened to help the nation deliver on its mandate towards greater financial inclusion, particularly regarding famers, and that the value chain as a whole would provide the ripple benefits expected.</p>
                <p>Council members advocated a well thought out plan regarding transportation and other logistics, since that is a source of loss of goods, be it through theft, damage, or time lost. The GCX was urged to develop criteria or standards in the transportation chain in order to reduce potential frictions between truck owners and goods owners.</p>
                <p>On the subject of the state of warehouse infrastructure across the country, council members requested the GCX to take practical steps to increase current stock by renovating and equipping warehouses with the right tools to enable farmers and producers of agricultural produce to have access to and use of the facilities. This will help reduce post-harvest losses in the country.</p>
                <p>In his closing remarks, the Chief Executive Officer (CEO) of GCX, Dr. Kadri Alfah, expressed his appreciation to the market council members for showing commitment towards the establishment of the Commodity Exchange, which is expected to be the leading Exchange in West Africa. He stated that this will be the first of many gatherings by market council members to deliberate on issues and challenges surrounding the commodity value chain.</p>
            </div>
            <div class="modal-footer color black5">
                <button type="button" class="btn alizarin color pull-right" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="News_4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content white">
            <div class="modal-header black5 color">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                <h4 class="modal-title" id="myModalLabel">SEC Sensitization Forum on Commodity Exchange/ Warehouse Receipt System (WRS)</h4>
            </div>
            <div class="modal-body modal-scroll">
                <p>
                    Supported by the World Bank Group (WBG), particularly the International
                    Finance Corporation (IFC) and support from the Swiss Secretariat for
                    Economic Affairs (SECO). The Securities and Exchange Commission brought
                    together eighty-one (81) key stakeholders from the Central Bank (BOG);
                    Ghana Commodity Exchange (GCX); Financial Institutions; Ministry of Food
                    and Agriculture (MOFA), Brokerage Firms, Insurance companies, Farmer
                    Groups, Academia, and more, for a review of Commodity Exchange and
                    Warehouse Receipt System at the Alisa Hotel, Accra.
                </p>
                <p>
                    The Director General of SEC, Rev. Ogbamey Tetteh in his welcome address
                    highlighted the relevance of warehousing and the need to grow the
                    commodities market shepherded by a commodities exchange. He introduced the
                    role of the regulator, opining that they would play a key part in building
                    trust in the system.
                </p>
                <p>
                    Dr. Langyintuo (IFC Senior Technical Specialist for the Ghana WRS Project)
                    in his presentation on the Project, reported that trade in Africa is a big
                    challenge because of high risks, border related difficulties, standards,
                    policy uncertainties and export finance. He explained the role warehouse
                    receipts play in filling the gap for trade and collateral financing.
                </p>
                <p>
                    He recommended the following areas to be especially considered:
                </p>
                <ul>
                    <li>
                        Ecosystem Considerations
                    </li>
                    <li>
                        Policy
                    </li>
                    <li>
                        Infrastructure
                    </li>
                </ul>
                <p>
                    Dr. Langyintuo hinted that solutions could arise from friendlier tax
                    regimes, non-discriminatory access to markets, non-interference with the
                    functioning of the markets, honoring of internationally accepted standards,
                    abiding by contractual undertakings, and ensuring the sector is free from
                    corruption.
                </p>
                <p>
                    Dr. Kadri Alfah (Chief Executive Officer, GCX) gave an overview of the
                    Warehouse Receipt System and Commodity Exchange. He indicated that the
                    Ghana Commodity Exchange operates as a market and the WRS is a key
                    component.
                </p>
                <p>
                    Dr. Alfah iterated that the Exchange’s rules are designed in the context of
                    the Securities Industry Act and that it is a membership-based market with
                    brokers who trade for themselves and on behalf of others. Dr. Alfah shared
                    that the GCX has adapted its own standards for maize, rice and soy beans
                    using the GSA standards as a benchmark.
                </p>
                <p>
                    He highlighted GCX’S current situation as follows:
                </p>
                <p>
                    - Identified 6 warehouses in Tamale, Wenchi, Ejura (3 warehouses) and
                    Kumasi
                </p>
                <p>
                    - 65 members, including 2 Banks and off-takers with capacity to buy
                </p>
                <p>
                    - New office and trading platform almost ready
                </p>
                <p>
                    - Auction traded over 6,000 mini bags (this was designed to test the system
                    which has been successful so far)
                </p>
                <p>
                    - Maize contracts designed
                    <br/>
                </p>
                <p>
                    - Capacity building of market actors has commenced (40 trained)
                </p>
                <p>
                    The way forward according to Dr. Alfah is to get rules for the Exchange and
                    WRS approved by SEC; passage of the WRS Legal Instrument (LI) and the
                    Borrowers &amp; Lenders Bill and build capacity of bank staff and other key
                    stakeholders.
                </p>
                <p>
                    He stated that the bell for the commencement of official trading activities
                    on the GCX platform is expected in November 2018. Finally, Dr. Alfah
                    mentioned readiness of the warehouses; commodity price vitalities; getting
                    interest rates below 20% for financing WHR; readiness of banks; banks
                    accepting GCX performance bond for warehouse operations and passage of the
                    WR and Commodity Exchanges’ regulations.
                </p>
                <p>
                    On the part of SEC, Evelyn Essien (Head of Exchanges) said SEC’s
                    regulations are aimed at controlling behaviors of Exchange actors in the
                    commodity market. She stated that the regulatory powers would be derived
                    from Securities Industry Law, 2016 (ACT 929) and along the line, guidelines
                    and circulars could be issued by SEC. SEC, according to Mrs. Essien, will
                    keep a close eye on possible market abuse and crimes under the Act such as
                    false trading and would apply penalties and other disciplinary measures
                    such as revocation and suspension when necessary. Mr. Caliis Baidoo (Head
                    of Legal, SEC) shared the regulatory components of the WRS, clarifying the
                    role the WRS played within the context of a Commodity Exchange, so that
                    they are clearly distinguished.
                </p>
                <p>
                    The session ended with a round table discussion chaired by Mr. Paul Ababio
                    (Deputy Director General, SEC), with Mr. Robert Owoo (Project Director,
                    GCX), Dr. A. Langyintuo and Caliis Baidoo, opening the floor for all
                    participants to seek clarifications or share their own comments on the
                    areas of operationalizing the WRS/ GCX; the role of technology, and other
                    general business opportunities that would emerge as part of the Exchange
                    ecosystem.
                </p>
                <p class="main-text top">About Ghana Commodity Exchange (GCX)
                </p>
                <p>
                    GCX is a market / platform which brings buyers and sellers together to
                    trade commodities including agricultural commodities, and as a body,
                    guarantees the quantity and quality as well as prompt settlement (cash and
                    delivery) of all products traded on the platform. This shields both buyers
                    and sellers from physical and financial losses. GCX is regulated by the
                    Securities and Exchange Commission and is managed by an experienced team of
                    professionals with varied work experiences across the commodity value chain
                    both in Ghana and abroad.
                </p>

            </div>
            <div class="modal-footer color black5">
                <button type="button" class="btn alizarin color pull-right" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
