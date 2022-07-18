<div class="flex flex-col overflow-x-hidden">
        <div class="w-full text-center my-3">
                <h3>Ready to Connect with Top Freelance Developers & Designers?</h3>
                <div class="py-4">
                        <a class="btn btn-get-started" href="{{ url('employers') }}">Hire a developer now</a>
                </div>
        </div>
        <footer id="footer" class="mt-8">
                <div class="w-full px-6">
                        <a href="{{ url('/') }}">
                                <img style="width: 225px;" src="{{ url('logo.png') }}" alt="{{ \SiteInfo::name() }} logo">
                        </a>
                </div>
                <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-3 pt-8 px-6">
                        <div>
                                <h3 class="mb-6 text-sm font-semibold text-gray-700 uppercase">Company</h3>
                                <ul class="text-gray-700">
                                        <li class="mb-4">
                                                <a href="{{ url('pages/about-us') }}" class="hover:underline">About</a>
                                        </li>
                                        <li class="mb-4">
                                                <a href="{{ url('posts') }}" class="hover:underline">Blog</a>
                                        </li>
                                        <li class="mb-4">
                                                <a href="{{ url('login') }}" class="hover:underline">Login</a>
                                        </li>
                                </ul>
                        </div>
                        <div>
                                <h3 class="mb-6 text-sm font-semibold text-gray-700 uppercase">Our Support</h3>
                                <ul class="text-gray-700">
                                        <li class="mb-4">
                                                <a href="#!" class="hover:underline">Twitter</a>
                                        </li>
                                        <li class="mb-4">
                                                <a href="#!" class="hover:underline">Facebook </a>
                                        </li>
                                        <a href="#!" class="hover:underline"> </a>
                                        <li class="mb-4">
                                                <a href="#!" class="hover:underline">Contact Us</a>
                                        </li>
                                </ul>
                        </div>
                        <div>
                                <h3 class="mb-6 text-sm font-semibold text-gray-700 uppercase">Site Info</h3>
                                <ul class="text-gray-700">
                                        <li class="mb-4">
                                                <a href="#!" class="hover:underline">Privacy Policy</a>
                                        </li>
                                        <li class="mb-4">
                                                <a href="#!" class="hover:underline">Licensing</a>
                                        </li>
                                        <li class="mb-4">
                                                <a href="#!" class="hover:underline">Terms &amp; Conditions</a>
                                        </li>
                                </ul>
                        </div>
                        
                </div>
                <div class="py-6 px-4 md:flex md:items-center md:justify-center border-t-2">
                        <span class="mx-auto text-sm text-gray-700 sm:text-center">© 2022 <a href="{{ route('home') }}">{{ \SiteInfo::name() }}</a>. All Rights Reserved. </span>
                </div>
</div>
</footer>
</div>