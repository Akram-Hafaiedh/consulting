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
                        <li class="text-gray-500" aria-current="page">Privacy policy</li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- End bread crumbs -->

    <div class="section py-6">
        <div class="container mx-auto">
            <div class="row">
                <div class="w-full px-4">
                    <div class="text-center mb-8">
                        <h1 class="text-3xl font-bold mb-4">Privacy policy</h1>
                    </div>
                    <div class="content space-y-4 text-base leading-relaxed">
                        <p>Effective date: {{ date('F d, Y') }}</p>
                        <div class='space-y-4'>
                            <div class="space-y-4 text-base leading-relaxed">
                                <p>PathSoft ("us", "we", or "our") operates the website (the "Service").</p>
                                <p>This page informs you of our policies regarding the collection, use, and disclosure of
                                    personal
                                    data when you use
                                    our Service and the choices you have associated with that data. Our Privacy Policy for
                                    PathSoft
                                    is created with
                                    the help.</p>
                            </div class="space-y-4 text-base leading-relaxed">
                            <div>
                                <p>We use your data to provide and improve the Service. By using the Service, you agree to
                                    the
                                    collection and use of
                                    information in accordance with this policy. Unless otherwise defined in this Privacy
                                    Policy,
                                    terms used in this
                                    Privacy Policy have the same meanings as in our Terms and Conditions, accessible from
                                    site</p>
                            </div>
                        </div>



                        <h2 class="text-xl font-semibold mb-2">Information Collection And Use</h2>

                        <p>We collect several different types of information for various purposes to provide and improve our
                            Service to you.
                        </p>


                        <h3 class="text-lg font-semibold mb-8">Types of Data Collected</h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <!-- Personal Data -->
                            <div class="space-y-4 bg-white rounded p-4">
                                <h4 class="text-md font-bold">Personal Data</h4>
                                <p>While using our Service, we may ask you to provide us with certain personally
                                    identifiable information...</p>
                                <ul class="list-disc list-inside space-y-2">
                                    <li>Email address</li>
                                    <li>Address, State, Province, ZIP/Postal code, City</li>
                                    <li>Cookies and Usage Data</li>
                                </ul>
                            </div>

                            <!-- Usage Data -->
                            <div class="space-y-4 bg-white rounded p-4">
                                <h4 class="text-md font-bold">Usage Data</h4>
                                <p>We may also collect information how the Service is accessed and used ("Usage Data"). This
                                    Usage Data may include...</p>
                            </div>

                            <!-- Tracking & Cookies Data -->
                            <div class="space-y-4 bg-white rounded p-4">
                                <h4 class="text-md font-bold">Tracking & Cookies Data</h4>
                                <p>We use cookies and similar tracking technologies to track the activity on our Service and
                                    hold certain information...</p>
                                <ul class="list-disc list-inside space-y-2">
                                    <li><strong>Session Cookies.</strong> We use Session Cookies to operate our Service.
                                    </li>
                                    <li><strong>Preference Cookies.</strong> We use Preference Cookies to remember your
                                        preferences...</li>
                                    <li><strong>Security Cookies.</strong> We use Security Cookies for security purposes.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <h2 class="text-xl font-semibold mb-2">Use of Data</h2>

                        <p>PathSoft uses the collected data for various purposes:</p>
                        <ul class="list-disc list-inside space-y-2">
                            <li>To provide and maintain the Service</li>
                            <li>To notify you about changes to our Service</li>
                            <li>To allow you to participate in interactive features of our Service when you choose to do so
                            </li>
                            <li>To provide customer care and support</li>
                            <li>To provide analysis or valuable information so that we can improve the Service</li>
                            <li>To monitor the usage of the Service</li>
                            <li>To detect, prevent and address technical issues</li>
                        </ul>

                        <h2 class="text-xl font-semibold mb-2">Transfer Of Data</h2>
                        <p>Your information, including Personal Data, may be transferred to — and maintained on — computers
                            located outside
                            of your state, province, country or other governmental jurisdiction where the data protection
                            laws may differ
                            than those from your jurisdiction.</p>
                        <p>If you are located outside United States and choose to provide information to us, please note
                            that we transfer
                            the data, including Personal Data, to United States and process it there.</p>
                        <p>Your consent to this Privacy Policy followed by your submission of such information represents
                            your agreement to
                            that transfer.</p>
                        <p>PathSoft will take all steps reasonably necessary to ensure that your data is treated securely
                            and in accordance
                            with this Privacy Policy and no transfer of your Personal Data will take place to an
                            organization or a country
                            unless there are adequate controls in place including the security of your data and other
                            personal information.
                        </p>

                        <h2 class="text-xl font-semibold mb-2">Disclosure Of Data</h2>

                        <h3 class="text-lg font-medium mb-1">Legal Requirements</h3>
                        <p>PathSoft may disclose your Personal Data in the good faith belief that such action is necessary
                            to:</p>
                        <ul class="list-disc list-inside space-y-2">
                            <li>To comply with a legal obligation</li>
                            <li>To protect and defend the rights or property of PathSoft</li>
                            <li>To prevent or investigate possible wrongdoing in connection with the Service</li>
                            <li>To protect the personal safety of users of the Service or the public</li>
                            <li>To protect against legal liability</li>
                        </ul>

                        <h2 class="text-xl font-semibold mb-2">Security Of Data</h2>
                        <p>The security of your data is important to us, but remember that no method of transmission over
                            the Internet, or
                            method of electronic storage is 100% secure. While we strive to use commercially acceptable
                            means to protect
                            your Personal Data, we cannot guarantee its absolute security.</p>

                        <h2 class="text-xl font-semibold mb-2">Service Providers</h2>
                        <p>We may employ third party companies and individuals to facilitate our Service ("Service
                            Providers"), to provide
                            the Service on our behalf, to perform Service-related services or to assist us in analyzing how
                            our Service is
                            used.</p>
                        <p>These third parties have access to your Personal Data only to perform these tasks on our behalf
                            and are obligated
                            not to disclose or use it for any other purpose.</p>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class=" bg-white rounded p-4">
                                <h3 class="text-lg font-medium mb-1">Analytics</h3>
                                <p>We may use third-party Service Providers to monitor and analyze the use of our Service.
                                </p>
                            </div>

                            <div class=" bg-white rounded p-4">
                                <p class="font-bold">Clicky</p>
                                <p>Clicky is a web analytics service. Read the <a href="https://clicky.com/terms"
                                        class="text-violet-600 hover:text-violet-800 underline">Privacy Policy for
                                        Clicky</a>.
                                </p>
                            </div>
                            <div class=" bg-white rounded p-4">
                                <p class="font-bold">Statcounter</p>
                                <p>Statcounter is a web traffic analysis tool. You can read the <a
                                        href="https://statcounter.com/about/legal/"
                                        class="text-violet-600 hover:text-violet-800 underline">Privacy Policy for
                                        Statcounter</a>.</p>

                            </div>
                        </div>
                        <h2 class="text-xl font-semibold mb-2">Links To Other Sites</h2>
                        <p>Our Service may contain links to other sites that are not operated by us. If you click on a third
                            party link, you
                            will be directed to that third party's site. We strongly advise you to review the Privacy Policy
                            of every site
                            you visit.</p>
                        <p>We have no control over and assume no responsibility for the content, privacy policies or
                            practices of any third
                            party sites or services.</p>
                        <h2 class="text-xl font-semibold mb-2">Children's Privacy</h2>
                        <p>Our Service does not address anyone under the age of 18 ("Children").</p>
                        <p>We do not knowingly collect personally identifiable information from anyone under the age of 18.
                            If you are a
                            parent or guardian and you are aware that your Children has provided us with Personal Data,
                            please contact us.
                            If we become aware that we have collected Personal Data from children without verification of
                            parental consent,
                            we take steps to remove that information from our servers.</p>
                        <h2 class="text-xl font-semibold mb-2">Changes To This Privacy Policy</h2>

                        <p class="text-gray-800">We may update our Privacy Policy from time to time. We will notify you of
                            any changes by posting
                            the new Privacy
                            Policy on this page.</p>
                        <p class="text-gray-800">We will let you know via email and/or a prominent notice on our Service,
                            prior to the change
                            becoming effective
                            and update the "effective date" at the top of this Privacy Policy.</p>
                        <p class="text-gray-800">You are advised to review this Privacy Policy periodically for any changes.
                            Changes to this
                            Privacy Policy are
                            effective when they are posted on this page.</p>
                        <h2 class="text-xl font-semibold mb-2">Contact Us</h2>
                        <p>If you have any questions about this Privacy Policy, please contact us:</p>
                        <ul class="">
                            <li>By email: mail@example.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
