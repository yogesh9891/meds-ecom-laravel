<div class="sidebar">
    <div class="mainsidebar">
        <h2 class="sidebar-heading"><a data-toggle="modal" data-target="#fda_model"><img
                    src="{{ asset('img/checkmark.png') }}" alt="911GlobalMeds" width="20px" height="20px"> Buy FDA Approved
                Drugs/Medications*</a></h2>
        <p class="text-center mb-3 dgrey-text"><strong>STAMP OF GENUINITY: <br>FDA Issued Manufacturing / Import License
                number printed on each Drug Pack **</strong></p>
        <p class="mb-3 blue-text"><strong>*all Drugs / Medications approved by the FDA of the Manufacturing / Importing
                country.</strong></p>

        <div class="owl-carousel approved-drugs owl-theme">
            <div class="slide2">
                <div class="approve-img">
                    <a href="https://www.canada.ca/en/health-canada.html" target="_blank">
                        <img src="{{ asset('img/icon-fda-1-health-canada.webp') }}" alt="Health Canada Logo Icon" />
                        {{-- <span class="rounded-circle"><i class="fa fa-check" aria-hidden="true"></i></span> --}}
                    </a>
                </div>
            </div>
            <div class="slide2">
                <div class="approve-img">
                    <a href="https://www.ema.europa.eu/en" target="_blank">
                        <img src="{{ asset('img/icon-fda-2-european-medicines-agency.webp') }}"
                             alt="Health Canada Logo Icon" />
                        {{-- <span class="rounded-circle"><i class="fa fa-check" aria-hidden="true"></i></span> --}}
                    </a>
                </div>
            </div>
            <div class="slide2">
                <div class="approve-img">
                    <a href="https://cdscoonline.gov.in/CDSCO/homepage" target="_blank">
                        <img src="{{ asset('img/icon-fda-3-central-drugs-standard-control-organisation-india.webp') }}"
                             alt="CDSCO Central Drugs Standard Control Organization India Logo Icon" />
                        {{-- <span class="rounded-circle"><i class="fa fa-check" aria-hidden="true"></i></span> --}}
                    </a>
                </div>
            </div>
            <div class="slide2">
                <div class="approve-img">
                    <a href="https://www.health.govt.nz/" target="_blank">
                        <img src="{{ asset('img/icon-fda-4-ministry-of-health-manatu-hauora-new-zealand.webp') }}"
                             alt="Ministry Of Health Manatu Hauora New Zealand Logo Icon" />
                    </a>
                </div>
            </div>
            <div class="slide2">
                <div class="approve-img">
                    <a href="https://www.fda.gov/home" target="_blank">
                        <img src="{{ asset('img/icon-fda-5-us-food-and-drug-administration.webp') }}"
                             alt="US FDA Food And Drug Administration Logo Icon" />
                    </a>
                </div>
            </div>
            <div class="slide2">
                <div class="approve-img">
                    <a href="https://www.gov.uk/government/organisations/medicines-and-healthcare-products-regulatory-agency"
                        target="_blank">
                        <img src="{{ asset('img/icon-fda-6-uk-medicines-healthcare-products-regulatory-agency.webp') }}"  alt="UK MHRA Medicines Healthcare Products Regulatory Agency Logo Icon" />
                    </a>
                </div>
            </div>
            <div class="slide2">
                <div class="approve-img">
                    <a href="https://www.tga.gov.au/" target="_blank">
                        <img src="{{ asset('img/icon-fda-7-therapeutic-goods-administration-australia.webp') }}"
                             alt="TGA Therapeutic Goods Administration Australia Logo Icon" />
                        {{-- <span class="rounded-circle"><i class="fa fa-check" aria-hidden="true"></i></span> --}}
                    </a>
                </div>
            </div>
            <div class="slide2">
                <div class="approve-img">
                    <a href="https://www.hsa.gov.sg/" target="_blank">
                        <img src="{{ asset('img/icon-fda-8-health-sciences-authority-singapore.webp') }}"
                             alt="HSA Health Sciences Authority Singapore Logo Icon" />
                        {{-- <span class="rounded-circle"><i class="fa fa-check" aria-hidden="true"></i></span> --}}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="mainsidebar sidebagap">
        <h4 class="sidebar-heading"><a href="{{ route('testimonial') }}" class="text-underline"><i
                    class="fa fa-thumbs-up text-dark" aria-hidden="true"></i> Reviews on 911GlobalMeds.com</a></h4>
        <div class="reviewscrollmain">
            <div class="reviewscroll owl-carousel default-slider owl-theme text-center">
                @foreach ($testimonials->where('home', 1) as $testimonial)
                    <div class="starrating text-center mb-4">
                        @if ($testimonial->rating > 0)
                            @php
                                $star = array_fill(0, $testimonial->rating + 1, '');
                                $blank_star = array_fill(0, 5 - ($testimonial->rating - 1), '');
                                
                            @endphp
                            {!! implode(' <span class="fa fa-star orange-text"></span>', $star) !!}
                            {!! implode(' <span class="fa fa-star "></span>', $blank_star) !!}
                        @endif
                        <div class="test-heading"><a href="">{{ $testimonial->full_name }},
                                {{ $testimonial->country }}</a></div>
                        <p>{{ $testimonial->comment }}</p>
                    </div>
                @endforeach

            </div>
        </div>
        <p class="text-center mb-3 mt-4 trust-piolet">
            <a href="{{ route('testimonial') }}" target="_blank"><img
                    src="{{ asset('img/911-global-meds-com-TrustPilot-Verified-Reviews.webp') }}" 
                    alt="Reviews on 911GlobalMeds.com"></a></p>
        <div class="mt-3 allreview">
            <a href="#" data-toggle="modal" data-target="#leavereview"
                data-target=".bd-example-modal-lg">Write a review</a>
            <a href="{{ route('testimonial') }}">View all {{ $testimonials_count }} review</a>
        </div>

    </div>


</div>



<!-- Leave a review Modal -->
<div class="modal fade bd-example-modal-lg" id="fda_model" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <img src="{{ asset('img/911-Global-Meds-logo.jpg') }}"
                    alt="buy fda approved prescription drugs online at global and canada pharmacy" class="float-left"
                    width="180" height="58px">
                <div class="modal-title feedbackheading" id="exampleModalLongTitle">
                    *Only the Drugs / Medications approved by the following countries <br>Food & Drug Authorities are
                    posted on our marketplace website.
                </div>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="leavereview">

                    <p><span><strong><a href="http://www.anmat.gov.ar/principal_en.asp"
                                    target="_blank"><span>Argentina: National Administration on Drugs, Foods, and
                                        Medical Devices (ANMAT)</span></a></strong></span></p>

                    <p>The National Administration of Drugs, Foods, and Medical Devices, also known
                        as&nbsp;Administraci&oacute;n Nacional de Medicamentos, Alimentos y Tecnolog&iacute;a
                        M&eacute;dica (ANMAT), is responsible for the oversight and regulation of the healthcare,
                        pharmaceuticals, and food and beverage industries within Argentina. The site contains
                        information on regulations, press releases, and publications as well as state agency and medical
                        publications links. Some areas of the site are only available in Spanish.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.tga.gov.au/" target="_blank"><span>Australia: Therapeutic
                                        Goods Administration (TGA)</span></a></strong></span></p>

                    <p>The Therapeutic Goods Administration (TGA) is the regulatory authority for the Australian
                        pharmaceutical industry. The TGA oversees and regulates numerous therapeutic goods including
                        prescription medicines, vaccines, and medical devices. The&nbsp;site contains information
                        catered specifically to consumers, health professionals, and industry manufacturers.
                        It&nbsp;also lists recent pharmaceutical recalls and alerts.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.bda.bg/en/" target="_blank"><span>Bulgarian Drug Agency
                                        (BDA)</span></a></strong></span></p>

                    <p>The Bulgarian Drug Agency (BDA) is associated with the country&#39;s&nbsp;Ministry of Health. It
                        is responsible for overseeing the safe production of medicines in Bulgaria. The BDA inspects
                        laboratories, drugs, and medical devices in order to ensure the quality and safety of drug use.
                        Their site includes useful information for citizens, medical specialists, and companies
                        regarding medical laws, devices, and treatments.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.sukl.eu/index.php?lang=2" target="_blank"><span>Czech
                                        Republic: State Institute for Drug Control (SUKL)</span></a></strong></span></p>

                    <p>The State Institute for Drug Control (SUKL) regulates the safe production of pharmaceuticals in
                        the Czech Republic. SUKL is responsible for the surveillance of advertising and marketing
                        medicines and medical devices. The site contains various databases that allow users to search
                        for clinical trials, medicinal products, and pharmacies. Articles covering the results of recent
                        clinical trials are also posted on the homepage.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://laegemiddelstyrelsen.dk/en/" target="_blank"><span>Denmark:
                                        Danish Medicines Agency (DKMA)</span></a></strong></span></p>

                    <p>The Danish Medicines Agency (DKMA) is responsible for the oversight and regulation of the
                        healthcare and pharmaceutical industries within Denmark. The site contains information on
                        licensing and supervision, product information, medical devices, pharmacies, and sale of
                        medicines. A library of publications about pharmaceutical research and development is also
                        available.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.ravimiamet.ee/en" target="_blank"><span>Estonia: Agency of
                                        Medicines</span></a></strong></span></p>

                    <p>The Agency of Medicines of Estonia&nbsp;is charged with the oversight and regulation of the
                        healthcare and pharmaceuticals industries within Estonia. The site contains information on
                        regulations, drug trials, and proper healthcare techniques in Estonia.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.ema.europa.eu/" target="_blank"><span>European Medicines
                                        Agency (EMA)</span></a></strong></span></p>

                    <p>The European Medicines Agency (EMA) protects and promotes public health through the evaluation of
                        medicines. The EMA provides recommendations on the quality and safety of medicines. They apply
                        evaluation procedures to help bring new medicines to the European Union.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.fimea.fi/web/en" target="_blank"><span>Finland: Finnish
                                        Medicines Agency (Fimea)</span></a></strong></span></p>

                    <p>The Finnish Medicines Agency (Fimea) promotes the health and safety of the population by
                        regulating medicinal, blood and tissue products, and by developing the pharmaceuticals sector.
                        The site provides medicine databases, a directory of pharmacies, and veterinary information.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.bfarm.de/EN/Home/home_node.html"
                                    target="_blank"><span>Germany: Federal Institute for Drugs and Medical Devices
                                        (BfArM)</span></a></strong></span></p>

                    <p>The Federal Institute for Drugs and Medical Devices (BfArM) is responsible for licensing and
                        registering finished medicinal products as proof of safety and efficacy. BfArM monitors the
                        risks of medicinal products by collecting and evaluating laboratory reports. The institute also
                        evaluates and develops safe medical devices in Germany. The BfArM site contains information
                        about the institute and its functions, medicinal products, and medical devices. Various research
                        documents covering topics such as pharmacogenomics, pharmacoepidemiology, safety of medical
                        devices, neuropsychopharmacology, special indications, and biostatistics are also
                        available.&nbsp;</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.eof.gr/web/guest;jsessionid=12be6bcc4b24009be44813191f86"
                                    target="_blank"><span>Greece: National Organization for
                                        Medicines</span></a></strong></span></p>

                    <p>Greece&#39;s National Organization for Medicines (EOF)&nbsp;protects public health in relation to
                        medicinal products,&nbsp;medical devices, supplements, and cosmetics. The EOF evaluates new safe
                        and effective products,&nbsp;control the production of medicines to meet the standards of good
                        manufacturing, and&nbsp;promotes medical and pharmaceutical research. The site provides
                        announcements for various products and laws.&nbsp;Only available in Greek.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.ogyei.gov.hu/main_page/" target="_blank"><span>Hungary:
                                        National Institute of Pharmacy and Nutrition
                                        (OGY&Eacute;I)</span></a></strong></span></p>

                    <p>The National Institute of Pharmacy and Nutrition (OGY&Eacute;I) is a licensing and administrative
                        authority for pharmaceutical products. The OGY&Eacute;I&nbsp;also evaluates medicines, issues
                        licenses, and supervises medical testing. The site includes news as well as information
                        regarding authorization, supervision, methodology, and drugs. Some information is only available
                        in Hungarian.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.ima.is/" target="_blank"><span>Icelandic Medicines Agency
                                        (IMA)</span></a></strong></span></p>

                    <p>The Icelandic Medicines Agency (IMA) is responsible for assessing the quality and safety of
                        medicinal products in Iceland. They provide inspections to confirm that regulatory requirements
                        are fulfilled. The IMA website&nbsp;serves as&nbsp;a source of information for health
                        professionals and the public. The site includes information regarding licenses, inspections, and
                        Medical devices. It also has a section covering the latest medical publications.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://cdsco.gov.in/opencms/opencms/en/Home/"
                                    target="_blank"><span>India: Central Drugs Standard Control
                                        Organization</span></a></strong></span></p>

                    <p>The Central Drugs Standard Control Organization in India sets standards and regulatory measures
                        for&nbsp;medications. The organization provides guidance on health issues and medicines. They
                        also regulate the standards of imported drugs and clinical research in India. Various regulatory
                        documents and forms are available to download for free in PDF&nbsp;from the website.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.hpra.ie/" target="_blank"><span>Ireland: Health Products
                                        Regulatory Authority (HPRA)</span></a></strong></span></p>

                    <p>The Health Products Regulatory Authority (HPRA) protects the public and animal health by
                        regulating medicines, medical devices, and healthcare products. They also monitor the safety of
                        cosmetics. The HPRA&nbsp;website includes product listings, descriptions of different medicines,
                        current topics in medicine and legislation, as well as news and publications.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.aifa.gov.it/" target="_blank"><span>Italian Medicines Agency
                                        (AIFA)</span></a></strong></span></p>

                    <p>The Italian Medicines Agency (AIFA) promotes good health through medicines by setting
                        pharmaceutical policies and assuring their consistent application nationwide. AIFA promotes
                        pharmaceutical research and development to further the safety and efficiency of drugs and
                        medical devices. The site provides information on pricing and reimbursement, medical and
                        scientific information, assessment and registration, and inspections and certifications.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="http://www.nihs.go.jp/english/"
                                    target="_blank"><span>Japan: National Institute of Health Sciences
                                        (NIHS)</span></a></strong></span></p>

                    <p>The National Institute of Health Sciences (NIHS) conducts testing, research, and studies toward
                        the proper evaluation of the quality, safety, and efficacy of pharmaceutical products, foods,
                        and the numerous chemicals in the living environment. The site includes information on drugs,
                        medical devices, food, and chemicals&nbsp;as well as general information on the NIHS.</p>

                    <p>&nbsp;</p>

                    <p><a href="https://www.niid.go.jp/niid/en/" target="_blank"><span><span><strong>Japan: National
                                        Institute of Infectious Diseases (NIID)&nbsp;</strong></span></span></a></p>

                    <p>The National Institute of Infectious Diseases (NIID) is a research institute attached to the
                        Ministry of Health, Labor and Welfare for conducting fundamental and applied research on
                        infectious diseases and setting testing standards for the development of antibiotics and
                        vaccines. The NIID website contains information about the institute, as well as recent news
                        articles and research being done.&nbsp;</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.zva.gov.lv/?setlang=en" target="_blank"><span>Latvia: State
                                        Agency of Medicines of Latvia (SAMLV)</span></a></strong></span></p>

                    <p>The State Agency of Medicines of Latvia (SAMLV) implements local and international legislation to
                        ensure that human medicines and medical devices are safe and efficient. SAMLV provides objective
                        information on medicines while ensuring inspection, accreditation, and certification of drug
                        manufacturers and distributors. The SAMLV site contains information about pharmaceutical
                        legislation, services provided by the agency, and recent news posts related to the agency&#39;s
                        activities.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.vvkt.lt/" target="_blank"><span>Lithuania: State Medicines
                                        Control Agency (SMCA) of Lithuania</span></a></strong></span></p>

                    <p>The State Medicines Control Agency (SMCA) of Lithuania is responsible for the protection of
                        public health through the evaluation and supervision of medicines for human use. The SMCA
                        supervises manufacturing authorization holders, wholesale distributors, and pharmacies in
                        Lithuania.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.npra.gov.my/" target="_blank"><span>Malaysia: National
                                        Pharmaceutical Regulatory Agency (NPRA)</span></a></strong></span></p>

                    <p>The National Pharmaceutical Regulatory Agency&nbsp;(NPRA) in Malaysia ensures the quality and
                        safety of pharmaceutical products. The NPRA&nbsp;site contains information about the agency,
                        press releases, a newsletter section, and a product search feature.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="http://www.medicinesauthority.gov.mt/home" target="_blank"><span>Malta:
                                        Medicines Authority</span></a></strong></span></p>

                    <p>The mission of the Medicines Authority is the protection of public health in Malta through the
                        regulation of medicinal products and pharmaceutical activities. The authority provides
                        licensing, monitoring, and inspection services for pharmaceutical activities.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://english.cbg-meb.nl/" target="_blank"><span>Netherlands:
                                        Medicines Evaluation Board (MEB)</span></a></strong></span></p>

                    <p>The Medicines Evaluation Board (MEB) assesses and guards the efficacy,&nbsp;safety, and quality
                        of&nbsp;both human&nbsp;and veterinary medicinal products. The MEB is the primary source of
                        information on new medicinal products, new applications, and current risk information in the
                        Netherlands.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.medsafe.govt.nz/" target="_blank"><span>New Zealand
                                        Medicines and Medical Devices Safety Authority</span></a></strong></span></p>

                    <p>New Zealand Medicines and Medical Devices Safety Authority&nbsp;(Medsafe) is accountable for the
                        regulation of therapeutic products in New Zealand. Medsafe ensures that medicines meet
                        acceptable standards of safety and quality. They also provide information about medicine to
                        health care professionals, consumers, and industry professionals. Information is provided on
                        medicines, devices, dietary supplements, safety, news and events, and publications.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.pharmac.govt.nz/" target="_blank"><span>New Zealand:
                                        Pharmaceutical Management Agency (PHARMAC)</span></a></strong></span></p>

                    <p>New Zealand&#39;s Pharmaceutical Management Agency (PHARMAC) is responsible for the safe
                        production of medicine and medical devices. PHARMAC provides information to citizens and
                        healthcare professionals regarding drugs and devices. PHARMAC is also now responsible for the
                        management of hospital pharmaceuticals</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://legemiddelverket.no/English" target="_blank"><span>Norwegian
                                        Medicines Agency (NoMA)</span></a></strong></span></p>

                    <p>The Norwegian Medicines Agency (NoMA) is responsible for&nbsp;updating&nbsp;and safeguarding
                        public and animal health by ensuring the efficacy, quality, and safety of medicines. NoMA is
                        also responsible&nbsp;for the authorization, pricing, and classification of medicines.
                        Furthermore, NoMA provides information about clinical trials, regulatory affairs, and
                        pharmacovigilance.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="http://www.infarmed.pt/web/infarmed-en/" target="_blank"><span>Portugal:
                                        National Institute of Pharmacy and Medicines
                                        (Infarmed)</span></a></strong></span></p>

                    <p>The National Institute of Pharmacy and Medicines (Infarmed) is accountable to the Health Ministry
                        of Portugal. The objective of Infarmed is to monitor, assess, and regulate all activities
                        relating to human medicines and health products for the protection of public health. The site
                        provides detailed information regarding medicinal products, medical devices, cosmetics,
                        licensing bodies, and monitoring the market.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.anm.ro/en/" target="_blank"><span>Romania: National Agency
                                        for Medicines and Medical Devices (NAMMD)</span></a></strong></span></p>

                    <p>The National Agency of Medicines and Medical Devices (NAMMD) surveys the safety of medicinal
                        products for human use in Romania. The NAMMD maintains a high level of performance and safety of
                        medical devices in use by healthcare networks. The agency also ensures access to useful
                        information on medicinal products for patients and healthcare professionals.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.alims.gov.rs/eng/" target="_blank"><span>Serbia: Medicines
                                        and Medical Devices Agency (ALIMS)</span></a></strong></span></p>

                    <p>The Medicines and Medical Devices Agency of Serbia (ALIMS) issues market authorizations for
                        medical products and equipment, evaluates their&nbsp;quality in compliance with laws and
                        standards, and provides public information about the use of medicines and medical devices. The
                        ALIMS website contains information about regulations, medical commodities, veterinary medicines,
                        and pharmacovigilance. News and press releases are also available.&nbsp;</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.sukl.sk/hlavna-stranka/english-version?page_id=256"
                                    target="_blank"><span>Slovakia: State Institute for Drug Control
                                        (SIDC)&nbsp;</span></a></strong></span></p>

                    <p>The State Institute for Drug Control (SIDC) is a part of the Ministry of Health of the Slovak
                        Republic and is responsible for ensuring the surveillance of the quality and safety of medicinal
                        products. SIDC supervises pharmacies and controls advertisements of medicinal products.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="http://www.mz.gov.si/en/" target="_blank"><span>Slovenia: Ministry of
                                        Health&nbsp;</span></a></strong></span></p>

                    <p>The Ministry of Health is concerned with matters relating to healthcare and health insurance in
                        Slovenia. The ministry monitors the nation&#39;s health programs and health measures to be taken
                        in the event of natural disasters. It also protects the population against diseases and other
                        health problems, especially pertaining to environmental harms like toxic water or waste.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.mfds.go.kr/eng/index.do" target="_blank"><span>South Korea:
                                        Ministry of Food and Drug Safety (MFDS)</span></a></strong></span></p>

                    <p>South Korea&#39;s Ministry of Food and Drug Safety (MFDS) seeks to secure national health and
                        safety of its citizens, mainly through its operations in the food and drug industries. This is
                        done through the enhancement of risk management systems, tightened safety control, and reform on
                        safety regulations. The site provides information on the ministry&#39;s projects, relative
                        market news, and economic statistics.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.aemps.gob.es/?lang=en" target="_blank"><span>Spain: Medicine
                                        and Health Products Agency (AEMPS)</span></a></strong></span></p>

                    <p>The Spanish Agency for Medicine and Health Products (AEMPS) evaluates and authorizes medicines
                        for human and veterinary use. AEMPS monitors the safety and efficacy of medicines, licenses and
                        inspects pharmaceutical laboratories, and fights against illegal drugs and counterfeit health
                        products. The website provides information about human medicines, veterinary medicines, medical
                        devices, cosmetics and hygiene, and the medical industry.&nbsp;</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://en.nim.ac.cn/node/647" target="_blank"><span>State
                                        Administration for Market Regulation (SAMR)</span></a></strong></span></p>

                    <p>China&#39;s State Administration for Market Regulation (SAMR) is responsible for drug
                        administration, food safety, trademarks, and patents, as well as anti-monopoly policies. The
                        website offers market data, information on government affairs, and services such as business
                        registration and a small business directory. Recent news is also provided.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.lakemedelsverket.se/english/" target="_blank"><span>Sweden:
                                        Medical Products Agency (MPA)</span></a></strong></span></p>

                    <p>The Medical Products Agency (MPA) is responsible for regulating and monitoring&nbsp;the
                        development of drugs and medicinal products. MPA&#39;s website contains information regarding
                        herbal, homeopathic, and other types of medicinal products as well as medical devices. Recent
                        news releases from the MPA regarding recalls or updates in the pharmaceutical industry&nbsp;are
                        also posted on the homepage of the site.&nbsp;</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.swissmedic.ch/swissmedic/en/home.html"
                                    target="_blank"><span>Switzerland: Swiss Agency for Therapeutic Products
                                        (Swissmedic)</span></a></strong></span></p>

                    <p>The Swiss Agency for Therapeutic Products (Swissmedic) ensures that authorized therapeutic
                        products are of high quality, effective, and safe. Its goal is to protect the health of humans
                        and animals and to also safeguard Switzerland as a location for industry and research. Their
                        site provides the latest news in the Swiss therapeutic industry and information on licensing,
                        authorizations, market surveillance, and legal matters.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a
                                    href="https://www.gov.uk/government/organisations/medicines-and-healthcare-products-regulatory-agency"
                                    target="_blank"><span>United Kingdom: Medicines &amp; Healthcare Products
                                        Regulatory Agency (MHRA)</span></a></strong></span></p>

                    <p>The Medicines &amp; Healthcare products Regulatory Agency (MHRA) is the government
                        agency&nbsp;responsible for ensuring the proper use of medicine and medical devices.&nbsp;The
                        MHRA is an executive agency of the Department of Health.</p>

                    <p>&nbsp;</p>

                    <p><span><strong><a href="https://www.fda.gov/" target="_blank"><span>United States: Food and Drug
                                        Administration (FDA)</span></a></strong></span></p>

                    <p>The Food and Drug Administration (FDA) is responsible for protecting the public health by
                        assuring the safety, efficacy, and security of human and veterinary drugs, biological products,
                        medical devices, the nation&rsquo;s food supply, cosmetics, and products that emit radiation.
                        FDA is also responsible for advancing the public health by helping to speed innovations that
                        make medicines safer, more effective, and more affordable.</p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Leave a review Modal End -->
