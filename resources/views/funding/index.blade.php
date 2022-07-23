@extends('layouts.app')

@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container py-14 py-md-16 text-center">
            <div class="row mb-3">
                <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
                    <h2 class="fs-19 text-uppercase text-dark mb-3">Funding Oppurtunities</h2>
                    {{-- <h3 class="display-4 mb-7 px-lg-19 px-xl-18">Think unique and be innovative. Make a difference with Sandbox.</h3> --}}
                </div>
                <!--/column -->
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                    <div class="card">
                        <figure class="card-img-top"> <img src="{{ asset('img/twas.png') }}" alt="" /></figure>
                        <div class="card-body">
                            <h2 class="display-4 mb-3" style="font-size: 16px;">TWAS GRANTS & OPPURTUNITIES</h2>
                            <p class="lead  mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">TWAS research grants are
                                awarded to both individual scientists and research groups.</p>
                            <a href="https://4atki.r.a.d.sendibm1.com/mk/mr/vACjDH-qJCiZV8Qw-JXngTaSsldmYVGRPN2KZ1hEiTAItL1HL329gVjk7TAUboKHCkHE2leQpk9Fa_CaZnCT3Ls2Sva-4pkxGtgKLW2GSMvWqcxgorWbTToZY8DWWzfxUueVWu8"
                                target="_blank" class="btn btn-primary rounded">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                    <div class="card">
                        <figure class="card-img-top"> <img src="{{ asset('img/nwu.png') }}" alt=""
                                style="width: 370px;" /></figure>
                        <div class="card-body">
                            <h2 class="display-4 mb-3" style="font-size: 16px;">POST DOCTORAL FELLOW FIXED-TERM APPOINTMENT
                            </h2>
                            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">A postdoctoral fellowship
                                position is available in the DSI/NWU Preclinical Drug Development Platform (PCDDP),
                                North-West University, Potchefstroom, South Africa.</p>
                            <a href="{{ route('nwu') }}" class="btn btn-primary rounded">Read More</a>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <p></p>
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                    <div class="card">
                        <figure class="card-img-top"> <img src="{{ asset('img/OWSD.png') }}" alt=""
                                style="width: 380px;" /></figure>
                        <div class="card-body">
                            <h2 class="display-4 mb-3" style="font-size: 16px;">CALL FOR APPLICATION FOR THE 2022 OWSD PhD
                                FELLOWSHIP.</h2>
                            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">The Fellowship is offered to
                                women scientists from Science and Technology Lagging Countries to undertake PhD research in
                                the natural, engineering and information technology sciences at a host institute in the
                                South.</p>
                            <a href="{{ route('owsd') }}" class="btn btn-primary rounded">Read More</a>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                    <div class="card">
                        <figure class="card-img-top"> <img src="{{ asset('img/ntu.jpg') }}" alt=""
                                style="width: 360px;" /></figure>
                        <div class="card-body">
                            <h2 class="display-4 mb-3" style="font-size: 16px;">CALL FOR APPLICATIONS NTU PRESIDENTIAL
                                POSTDOCTORAL FELLOWSHIP 2022</h2>
                            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">The Presidential Postdoctoral
                                Fellowship (PPF), aims to provide the opportunity for outstanding early career researchers
                                from Singapore and around the world, to conduct independent investigations in any discipline
                                at NTU.</p>
                            <a href="{{ route('ntu') }}" class="btn btn-primary rounded">Read More</a>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                    <div class="card">
                        <figure class="card-img-top"> <img src="{{ asset('img/picture7.png') }}" alt=""
                                style="width: 360px;" /></figure>
                        <div class="card-body">
                            <h2 class="display-4 mb-3" style="font-size: 16px;">AuthorAID — Online Course: Research Writing
                                in the Sciences</h2>
                            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">AuthorAID invites participants
                                to apply for the online course ‘Research Writing in the Sciences’ for researchers in
                                developing countries. The course duration is 6 weeks and aims to cover literature review;
                                research and publication ethics; targeting the right journals; writing and publishing a
                                research paper; and communicating research outside academia. Please note that although this
                                is an open course, enrollment may be limited due to server capacity. The course starts on 05
                                April 2022.</p>
                            <a href="https://www.authoraid.info/en/news/details/1544/" target="_blank"
                                class="btn btn-primary rounded">Read More</a>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                    <div class="card">
                        <figure class="card-img-top"> <img src="{{ asset('img/link.jpeg') }}" alt=""
                                style="width: 360px;" /></figure>
                        <div class="card-body">
                            <h2 class="display-4 mb-3" style="font-size: 16px;">Biomimicry Institute — Nature-Inspired
                                Solutions for a Healthy Planet</h2>
                            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">The Biomimicry Institute seeks
                                applications for the Ray of Hope Prize which celebrates nature-inspired solutions addressing
                                the world’s biggest environmental and sustainability challenges. The challenge is open to
                                innovative ideas from a variety of topics, such as agriculture, water, clean energy,
                                biotechnology, and many more. Up to 10 startups will be selected as finalists to pitch their
                                business idea for US$100 thousand in prize money which can be used to develop their ideas
                                into market-ready products. The competition is open to entrepreneurs and inventors
                                worldwide. The application deadline for the 2022 prize is 08 April 2022.</p>
                            <a href="https://biomimicry.org/rayofhopeprize/" target="_blank"
                                class="btn btn-primary rounded">Read More</a>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                    <div class="card">
                        <figure class="card-img-top"> <img src="{{ asset('img/twas.png') }}" alt=""
                                style="width: 360px;" /></figure>
                        <div class="card-body">
                            <h2 class="display-4 mb-3" style="font-size: 16px;">World Academy of Sciences — Short Course on
                                Science and Diplomacy</h2>
                            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">The American Association for
                                the Advancement of Science (AAAS) and The World Academy of Sciences (TWAS) seek candidates
                                for the third AAAS-TWAS course on science and diplomacy. This 5-day course is for young
                                scientists whose work has brought them into the international policy-making arena;
                                policymakers interested in science-based themes that might influence their work;
                                administrators of research institutions; and research funders focused on building
                                international networks. Due to the ongoing COVID-19 pandemic, the workshop will be held
                                virtually. Women are especially encouraged to apply. Applications are due by 15 April 2022.
                            </p>
                            <a href="https://twas.org/opportunity/aaas-twas-course-science-diplomacy" target="_blank"
                                class="btn btn-primary rounded">Read More</a>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                    <div class="card">
                        <figure class="card-img-top"> <img src="{{ asset('img/unibonn.png') }}" alt=""
                                style="width: 360px;" /></figure>
                        <div class="card-body">
                            <h2 class="display-4 mb-3" style="font-size: 16px;">University of Bonn — SDG Fellowships</h2>
                            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">The University of Bonn
                                invites international postdoctoral fellows for a joint research project on the Sustainable
                                Development Goals (SDGs). The scientists will research and teach together with a professor
                                from the University of Bonn for one or two semesters. The university seeks collaborations
                                with universities and research institutes in Africa, Asia and Latin America. Post-doctoral
                                researchers invited by a professor of the University of Bonn for a joint research project
                                are eligible. The funding can cover a travel allowance, a scholarship of €3 thousand per
                                month and a research expense allowance of up to €500 per month. The application must be
                                submitted by a full-time professor at the University of Bonn together with the fellow. The
                                submission deadline is 01 May 2022.</p>
                            <a href="https://www.uni-bonn.de/en/research-and-teaching/support-for-researchers-and-teachers/research-funding/university-grants/bonn-sdg-fellowships"
                                target="_blank" class="btn btn-primary rounded">Read More</a>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                    <div class="card">
                        <figure class="card-img-top"> <img src="{{ asset('img/logo-komputer-en.png') }}" alt=""
                                style="width: 360px;" /></figure>
                        <div class="card-body">
                            <h2 class="display-4 mb-3" style="font-size: 16px;">Polish National Agency for Academic
                                Exchange — Scientific Exchanges with Poland</h2>
                            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">The Polish National Agency
                                for Academic Exchange (NAWA) accepts applications for the Ulam Programme. The Program allows
                                exchange visits (6-24 months) of scientists from all around the world to Poland in order to
                                strengthen the scientific potential of Polish entities and increase scientific
                                internationalization in all fields of science. (Note: This may include one or more focus
                                areas of the Terra Viva Grants Directory.) Awardees will receive a mobility and monthly
                                maintenance allowance. The deadline for submission is 10 May 2022.</p>
                            <a href="https://nawa.gov.pl/en/scientists/the-ulam-programme/call-for-proposals-2022"
                                target="_blank" class="btn btn-primary rounded">Read More</a>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                    <div class="card">
                        <figure class="card-img-top"> <img src="{{ asset('img/twas.png') }}" alt=""
                                style="width: 360px;" /></figure>
                        <div class="card-body">
                            <h2 class="display-4 mb-3" style="font-size: 16px;">World Academy of Sciences — Research
                                Grants in Basic Sciences (Individuals)</h2>
                            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">The TWAS Research Grants
                                Program in Basic Sciences supports researchers in developing countries, particularly those
                                that lack access to appropriate research facilities. Grants are awarded for research
                                projects in Biology, Chemistry, Mathematics and Physics either to individual young
                                researchers or to research units. Individual scientists can apply for up to US$20 thousand.
                                Individual applicants must be nationals of developing countries. The application deadline is
                                11 May 2022.</p>
                            <a href="https://twas.org/opportunity/twas-research-grants-programme-basic-sciences-individuals"
                                target="_blank" class="btn btn-primary rounded">Read More</a>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                    <div class="card">
                        <figure class="card-img-top"> <img src="{{ asset('img/twas.png') }}" alt=""
                                style="width: 360px;" /></figure>
                        <div class="card-body">
                            <h2 class="display-4 mb-3" style="font-size: 16px;">World Academy of Sciences — Research
                                Grants in Basic Sciences (Groups)</h2>
                            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">The TWAS Research Grants
                                Program in Basic Sciences supports researchers in developing countries, particularly those
                                that lack access to appropriate research facilities. Grants are awarded for research
                                projects in Biology, Chemistry, Mathematics and Physics either to individual young
                                researchers or to research units. Individual scientists can apply for up to US$20 thousand.
                                Individual applicants must be nationals of developing countries. The application deadline is
                                11 May 2022.</p>
                            <a href="https://twas.org/opportunity/twas-research-grants-programme-basic-sciences-groups"
                                target="_blank" class="btn btn-primary rounded">Read More</a>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                    <div class="card">
                        <figure class="card-img-top"> <img src="https://africafoundation.heineken.com/img/logo.png"
                                alt="" style="width: 360px;" /></figure>
                        <div class="card-body">
                            <h2 class="display-4 mb-3" style="font-size: 16px;">Heineken Africa Foundation — Water,
                                Sanitation, and Health for Africa</h2>
                            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">The Heineken Africa
                                Foundation funds projects to improve mother/child care, and projects for water, sanitation,
                                and health (WASH). The support extends to projects in Sub-Saharan African countries where
                                Heineken has a local operating presence. For each project a partnership is created between
                                the Foundation, the local Heineken brewery and a local or international NGO. The Foundation
                                provides funding and administrative assistance. Grants are up to €125 thousand per year for
                                a maximum of two years. The deadline for the next proposal round is 15 April 2022.</p>
                            <a href="https://africafoundation.heineken.com/our-approach/" target="_blank"
                                class="btn btn-primary rounded">Read More</a>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                    <div class="card">
                        <figure class="card-img-top"> <img src="{{ asset('img/link.jpeg') }}" alt=""
                                style="width: 360px;" /></figure>
                        <div class="card-body">
                            <h2 class="display-4 mb-3" style="font-size: 16px;">100+ Accelerator — Water Stewardship</h2>
                            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">100+ Accelerator seeks
                                startups that have solutions to create and implement sustainable and energy-efficient
                                practices to build a more water secure world. The Accelerator delivers 6 months of remote
                                training to accelerate the collaboration and growth of cohort companies. Participants have
                                access to mentor networks and may receive up to US$100 thousand toward pilot execution. The
                                deadline to apply is 30 April 2022.</p>
                            <a href="https://www.100accelerator.com/en/challenge/water" target="_blank"
                                class="btn btn-primary rounded">Read More</a>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                    <div class="card">
                        <figure class="card-img-top"> <img
                                src="{{ asset('img/siwi_logo_less_common_project_pages.svg') }}" alt=""
                                style="width: 360px;" /></figure>
                        <div class="card-body">
                            <h2 class="display-4 mb-3" style="font-size: 16px;">Stockholm International Water Institute —
                                Stockholm Water Prize 2023</h2>
                            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">The Stockholm Water Prize is
                                awarded annually for outstanding achievements supporting the availability, conservation, and
                                protection of the world’s water resources. The award is open to individuals and
                                organizations of any nationality whose work contributes broadly to the conservation and
                                protection of water resources. The Stockholm Water Prize consists of an award of US$150
                                thousand and a crystal sculpture. The deadline for nominations is 30 September 2022.</p>
                            <a href="https://siwi.org/stockholm-water-prize/nominate?iproject=stockholm-water-prize"
                                target="_blank" class="btn btn-primary rounded">Read More</a>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                    <div class="card">
                        <figure class="card-img-top"> <img src="{{ asset('img/twas.png') }}" alt=""
                                style="width: 360px;" /></figure>
                        <div class="card-body">
                            <h2 class="display-4 mb-3" style="font-size: 16px;">TWAS-SN Bose Postdoctoral Fellowship
                                Programme</h2>
                            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">The S.N. Bose National Centre
                                for Basic Science in Kolkata, India, and TWAS have established a fellowship programme for
                                foreign scholars from developing countries who wish to pursue postdoctoral research in
                                physical sciences.</p>
                            <a href="https://twas.org/opportunity/twas-sn-bose-postdoctoral-fellowship-programme"
                                target="_blank" class="btn btn-primary rounded">Read More</a>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                    <div class="card">
                        <figure class="card-img-top"> <img src="{{ asset('img/twas.png') }}" alt=""
                                style="width: 360px;" /></figure>
                        <div class="card-body">
                            <h2 class="display-4 mb-3" style="font-size: 16px;">TWAS-NCP Postdoctoral Fellowship Programme
                            </h2>
                            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">For young scientists from
                                developing countries (other than Pakistan) who wish to pursue postdoctoral research in
                                physical sciences in departments and laboratories of the National Centre for Physics (NCP)
                                in Islamabad.</p>
                            <a href="https://twas.org/opportunity/twas-ncp-postdoctoral-fellowship-programme"
                                target="_blank" class="btn btn-primary rounded">Read More</a>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                    <div class="card">
                        <figure class="card-img-top"> <img src="{{ asset('img/twas.png') }}" alt=""
                                style="width: 360px;" /></figure>
                        <div class="card-body">
                            <h2 class="display-4 mb-3" style="font-size: 16px;">TWAS-BIOTEC Postdoctoral Fellowship
                                Programme</h2>
                            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">For young scientists from
                                developing countries (other than Thailand) who wish to pursue advanced research in the
                                biotechnology at the National Center for Genetic Engineering and Biotechnology (BIOTEC) in
                                Thailand.</p>
                            <a href="https://twas.org/opportunity/twas-biotec-postdoctoral-fellowship-programme"
                                target="_blank" class="btn btn-primary rounded">Read More</a>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                    <div class="card">
                        <figure class="card-img-top"> <img src="{{ asset('img/twas.png') }}" alt=""
                                style="width: 360px;" /></figure>
                        <div class="card-body">
                            <h2 class="display-4 mb-3" style="font-size: 16px;">TWAS-CUI Postdoctoral Fellowship Programme
                            </h2>
                            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">The TWAS-CUI Fellowship
                                Programme for Postdoctoral Research offers fellowships to young scientists from developing
                                countries (other than Pakistan) who wish to pursue postdoctoral research in natural or
                                social sciences. Duration: from a minimum of six months to a maximum of 12 months.</p>
                            <a href="https://twas.org/opportunity/twas-cui-postdoctoral-fellowship-programme"
                                target="_blank" class="btn btn-primary rounded">Read More</a>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                    <div class="card">
                        <figure class="card-img-top"> <img src="{{ asset('img/twas.png') }}" alt=""
                                style="width: 360px;" /></figure>
                        <div class="card-body">
                            <h2 class="display-4 mb-3" style="font-size: 16px;">TWAS-CSIR Postdoctoral Fellowship
                                Programme</h2>
                            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">For young scientists from
                                developing countries (other than India) who wish to pursue postdoctoral research in emerging
                                areas in science and technology for which facilities are available in laboratories and
                                institutes of the Council of Scientific and Industrial Research (CSIR) of India.</p>
                            <a href="https://twas.org/opportunity/twas-csir-postdoctoral-fellowship-programme"
                                target="_blank" class="btn btn-primary rounded">Read More</a>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                    <div class="card">
                        <figure class="card-img-top"> <img src="{{ asset('img/twas.png') }}" alt=""
                                style="width: 360px;" /></figure>
                        <div class="card-body">
                            <h2 class="display-4 mb-3" style="font-size: 16px;">TWAS-DBT Postdoctoral Fellowship Programme
                            </h2>
                            <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">The Department of
                                Biotechnology (DBT) of the Ministry of Science and Technology, India, and TWAS have
                                established a fellowship programme for foreign scholars from developing countries who wish
                                to pursue postdoctoral research in biotechnology.</p>
                            <a href="https://twas.org/opportunity/twas-dbt-postdoctoral-fellowship-programme"
                                target="_blank" class="btn btn-primary rounded">Read More</a>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                  <div class="card">
                      <figure class="card-img-top"> <img src="{{ asset('img/logoiubmb.png') }}" alt=""
                              style="width: 360px;" /></figure>
                      <div class="card-body">
                          <h2 class="display-4 mb-3" style="font-size: 16px;">The International Union of Biochemistry and Molecular Biology (IUBMB)
                          </h2>
                          <p class="lead mb-6 px-xl-10 px-xxl-15" style="font-size: 16px;">The International Union of Biochemistry and Molecular Biology (IUBMB) invites you to consider applying for one of the many fellowships we have to offer scientists from around the world. These include, among other things</p>
                          <a href="{{route('iubmb-fellowship')}}"
                               class="btn btn-primary rounded">Read More</a>
                      </div>
                  </div>
                  <!-- /column -->
              </div>
                <!-- /.row -->
                <!-- /.row -->

            </div>
            <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
