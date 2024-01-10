@extends('layouts.app')

@section('content')
    <!-- Begin bread crumbs -->
    <nav aria-label="breadcrumb">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <ul class="flex items-center space-x-2">
                        <a href="{{ route('welcome') }}" class="text-indigo-600 hover:text-indigo-700">Home</a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-2 text-gray-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <li class="text-gray-500" aria-current="page">Terms of use</li>
                    </ul>
                </div>
            </div>
        </div>
    </nav><!-- End bread crumbs -->

    <div class="p-6">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full">
                    <div class="text-center mb-8">
                        <h1 class="text-4xl font-bold mb-4">Terms and Conditions</h1>
                    </div>
                    <div class="content space-y-4 text-base leading-relaxed">
                        <p>Last updated: March 02, 2022</p>
                        <p>Please read these Terms and Conditions ("Terms", "Terms and Conditions") carefully before using
                            the website (the "Service") operated by PathSoft ("us", "we", or "our").</p>
                        <p>Your access to and use of the Service is conditioned on your acceptance of and compliance with
                            these Terms. These
                            Terms apply to all visitors, users and others who access or use the Service.</p>
                        <p>By accessing or using the Service you agree to be bound by these Terms. If you disagree with any
                            part of the
                            terms then you may not access the Service. The Terms and Conditions agreement for PathSoft has
                            been created with
                            the help.</p>
                        <h2 class="text-xl font-semibold mb-2">Links To Other Web Sites</h2>
                        <p>Our Service may contain links to third-party web sites or services that are not owned or
                            controlled by PathSoft.
                        </p>

                        <p>PathSoft has no control over, and assumes no responsibility for, the content, privacy policies,
                            or practices of
                            any third party web sites or services. You further acknowledge and agree that PathSoft shall not
                            be responsible
                            or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or
                            in connection
                            with use of or reliance on any such content, goods or services available on or through any such
                            web sites or
                            services.</p>

                        <p>We strongly advise you to read the terms and conditions and privacy policies of any third-party
                            web sites or
                            services that you visit.</p>

                        <h2 class="text-xl font-semibold mb-2">Termination</h2>

                        <p>We may terminate or suspend access to our Service immediately, without prior notice or liability,
                            for any reason
                            whatsoever, including without limitation if you breach the Terms.</p>

                        <p>All provisions of the Terms which by their nature should survive termination shall survive
                            termination,
                            including, without limitation, ownership provisions, warranty disclaimers, indemnity and
                            limitations of
                            liability.</p>

                        <h2 class="text-xl font-semibold mb-2">Governing Law</h2>

                        <p>These Terms shall be governed and construed in accordance with the laws of California, United
                            States, without
                            regard to its conflict of law provisions.</p>

                        <p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of
                            those rights. If
                            any provision of these Terms is held to be invalid or unenforceable by a court, the remaining
                            provisions of
                            these Terms will remain in effect. These Terms constitute the entire agreement between us
                            regarding our Service,
                            and supersede and replace any prior agreements we might have between us regarding the Service.
                        </p>

                        <h2 class="text-xl font-semibold mb-2">Changes</h2>

                        <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a
                            revision is
                            material we will try to provide at least 30 days notice prior to any new terms taking effect.
                            What constitutes a
                            material change will be determined at our sole discretion.</p>

                        <p>By continuing to access or use our Service after those revisions become effective, you agree to
                            be bound by the
                            revised terms. If you do not agree to the new terms, please stop using the Service.</p>


                        <h2 class="text-xl font-semibold mb-2">Contact Us</h2>

                        <p>If you have any questions about these Terms, please contact us.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection('content')
