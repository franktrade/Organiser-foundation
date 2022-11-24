@extends('website.partials.layout')

@section('title', 'About Us')

@section('content')
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>About Us</h2>
                <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}l">Home</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

    <section class="about-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="row about-wrap">
                <div class="col-md-10 xs-padding">
                    <div class="about-content">
                        <h2>Eunice Egowure Empowerment Foundation Is An Edutech NGO</h2>
                        <p>
                            Eunice Egowure Empowerment Foundation is an Edutech NGO, incorporated in the Federal
                            Republic of Nigeria as an Incorporated Trustee in 2019. The registration number is
                            CAC/IT/NO 140570.
                        </p>
                        <p>
                            Her focus is on the sustainable development goals including SDG 1, SDG 4 and SDG 5.
                            She uses technology and community mobilization to reach the unreached in the society
                            especially those at the grassroot.
                        </p>

                        <h2>Vision Statement</h2>
                        <p>Our vision is to bridge the gap between the rich and the poor through empowerment.</p>

                        <h2>Mission Statement</h2>
                        <p>
                            Our mission is to use sensitization, education, vocation skills training, seminars, works
                            hops, mentorship and grant disbursement to positively impact the lives of the poor by focusing on the vulnerable, less privileged women and individuals in both urban and rural areas in Nigeria.
                        </p>
                        <p>
                            Our target is to lift 500,000 families in Nigeria out of poverty by the year 2032. Eunice
                            Egowure Empowerment Foundation's passion to revolutionize the operations of NGOs in Nigeria
                            stems from years of volunteering experience. Our uniqueness stems from the fact that we do
                            not just empower our beneficianes and leave them. We mentor and monitor their
                            growth for at least two years thereby supporting them in their chosen skills and businesses
                            and help them create proper accounting and operational systems.
                        </p>
                        <p>
                            We also initiate community cooperatives among communities for networking and to create
                            savings and investment culture among them. EF leverages on both technology and physical
                            community mobilization.
                        </p>

                        <h2>Board of Trustees</h2>
                        <p>1. Ijeoma Odinakachi EuniceMary</p>
                        <p>2. Onukagha Amarachi</p>
                        <p>3. ljeoma Kingsley Chinonso</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->
@endsection
