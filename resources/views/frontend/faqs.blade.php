@extends('frontend.layout.app')

@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>FAQs</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">FAQs</li>
                </ul>
            </div>
        </div>
    </section>
    <!--FAQs Page Start-->

    <section class="paq-page">
        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What is IRIS?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>
                                Infrastructure for Resilient Island States (IRIS) is a dedicated initiative co-curated by
                                Small Developing Island States (SIDS) and Coalition for Disaster Resilient Infrastructure
                                (CDRI) partners to promote resilient, sustainable, and inclusive infrastructure development
                                in SIDS.

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What is the need for IRIS?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            SIDS face several economic, social, and environmental challenges owing to their geophysical and
                            structural constrains. Most of these countries are prone to disastrous effects of climate change
                            while facing unique development challenges such as remoteness to global markets, poor
                            connectivity, lack of economies of scale, and inadequate labour-mobility. Resilient,
                            sustainable, and inclusive infrastructure plays a key role in addressing these challenges and
                            driving sustainable development in SIDS. Given their high-risk exposure, a necessary condition
                            for bridging the infrastructure gap in SIDS is the availability of technical and institutional
                            capacities to ensure that investments in infrastructure systems systematically manage current
                            and future risks by incorporating appropriate measures.

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                            What is the goal of IRIS?
                        </button>
                    </h2>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>The goal of iris is to support sids in achieving sustainable development through a
                                systematic approach to resilient, sustainable, and inclusive infrastructure in sids. Iris
                                will provide technical support on the
                                multifaceted issues posed by infrastructure systems and promote disaster and climate
                                resilience of
                                infrastructure assets in sids. Iris will work with sids to identify opportunities for
                                technical collaborations
                                and partnerships, but it will not invest in the construction of infrastructure assets
                                directly.
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingfour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                What is the goal of IRIS?
                            </button>
                        </h2>
                        <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>The goal of iris is to support sids in achieving sustainable development through a
                                    systematic approach to resilient, sustainable, and inclusive infrastructure in sids.
                                    Iris will provide technical support on the
                                    multifaceted issues posed by infrastructure systems and promote disaster and climate
                                    resilience of
                                    infrastructure assets in sids. Iris will work with sids to identify opportunities for
                                    technical collaborations
                                    and partnerships, but it will not invest in the construction of infrastructure assets
                                    directly.
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                    What is the goal of IRIS?
                                </button>
                            </h2>
                            <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>The goal of iris is to support sids in achieving sustainable development through a systematic approach to resilient, sustainable, and inclusive infrastructure in sids. Iris will provide technical support on the
                                        multifaceted issues posed by infrastructure systems and promote disaster and climate resilience of
                                        infrastructure assets in sids. Iris will work with sids to identify opportunities for technical collaborations
                                        and partnerships, but it will not invest in the construction of infrastructure assets directly.
                            </div>
                        </div>


                    </div>


                </div>
    </section>
@endsection
