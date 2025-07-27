@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <br />
    <br />
    <section class="bg-[#e9e9e9] dark:bg-gray-900 ">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Welcome to Equity Home
                </h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From
                    Your trusted partner in real estate with a smart home twist. We provide premium properties integrated
                    with top-of-the-line smart home devices.
                </p>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-[#0d0b35] dark:bg-[#dc975c] hover:bg-[#dc975c] focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Explore Properties
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>

            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('assets/images/heros/house-banner-1.png') }}" alt="mockup">
            </div>
        </div>
    </section>
    <!-- About Us Section -->
    <section class="bg-white dark:bg-gray-800">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                    About Equity Homes
                </h2>
                <p class="mb-4">
                    EquityHome blends the best of real estate and modern smart home technology. With years of experience and
                    hundreds of successful deals, we help you find not just a house—but a future-ready home
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png"
                    alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png"
                    alt="office content 2">
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-[#F0F5FF] dark:bg-gray-700 text-white py-16 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <svg class="w-12 h-12 mx-auto mb-4 text-[#dc975c] " xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <h3 class="text-3xl font-bold mb-2 text-[#0d0b35] dark:text-white">100+</h3>
                    <p class="text-gray-600 dark:text-white">Properties Sold</p>
                </div>
                <div class="text-center">
                    <svg class="w-12 h-12 mx-auto mb-4 text-[#dc975c]" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                    <h3 class="text-3xl font-bold mb-2 text-[#0d0b35] dark:text-white">5+</h3>
                    <p class="text-gray-600 dark:text-white">Years Experience</p>
                </div>
                <div class="text-center">
                    <svg class="w-12 h-12 mx-auto mb-4 text-[#dc975c]" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                    <h3 class="text-3xl font-bold mb-2 text-[#0d0b35] dark:text-white">100+</h3>
                    <p class="text-gray-600 dark:text-white">Smart Devices Sold</p>
                </div>
                <div class="text-center">
                    <svg class="w-12 h-12 mx-auto mb-4 text-[#dc975c]" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                    </svg>
                    <h3 class="text-3xl font-bold mb-2 text-[#0d0b35] dark:text-white">50+</h3>
                    <p class="text-gray-600 dark:text-white">Happy Clients</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Properties  -->
    <section id="properties" class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-screen-xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-8">Featured Properties</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Card -->
                @forelse ($properties as $property)
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-4">
                        <img src="{{ asset('storage/' . $property->image) }}" class="rounded mb-4" />
                        <div class="px-5 pb-5">
                            <a href="#">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                    {{ $property->name }}
                                </h5>
                            </a>
                            <p class="text-gray-600 dark:text-gray-300 mt-2 text-justify text-sm">

                                {{ $property->short_description }}
                            </p>

                            <div class="flex items-center justify-between mt-5">
                                <span class="text-1xl font-bold text-gray-900 dark:text-white">
                                    &#8358; {{ number_format($property->price, 2) }}
                                </span>
                                <a href="{{ route('property.show', $property->slug) }}"
                                    class="text-white bg-[#0d0b35] dark:bg-[#dc975c] hover:bg-[#dc975c] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    View
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p> No properties yet </p>
                @endforelse
                {{-- <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-4">
                    <img src="{{ asset('assets/images/properties/p-2.jpg') }}" class="rounded mb-4" />
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                Modern Apartment Port Harcourt
                            </h5>
                        </a>
                        <p class="text-gray-600 dark:text-gray-300 mt-2">
                            A beautifully designed apartment with smart home features, located in the heart of Port Harcourt
                            City.
                        </p>

                        <div class="flex items-center justify-between mt-5">
                            <span class="text-1xl font-bold text-gray-900 dark:text-white">
                                &#8358; 100 m
                            </span>
                            <a href="#"
                                class="text-white bg-[#0d0b35] hover:bg-[#dc975c] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                View
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-4">
                    <img src="{{ asset('assets/images/properties/p-3.jpg') }}" class="rounded mb-4" />

                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                Suburban Family Home
                            </h5>
                        </a>
                        <p class="text-gray-600 dark:text-gray-300 mt-2">
                            3 beds, 2 baths, smart thermostat and energy-efficient appliances included in the package.
                        </p>

                        <div class="flex items-center justify-between mt-5">
                            <span class="text-1xl font-bold text-gray-900 dark:text-white">
                                &#8358; 150 m
                            </span>
                            <a href="#"
                                class="text-white bg-[#0d0b35] hover:bg-[#dc975c] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                View
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="text-center mt-8">
                <a href="#" class="px-6 py-3 bg-[#0d0b35] dark:bg-[#dc975c] text-white rounded-lg hover:bg-[#dc975c]">
                    View More Properties
                </a>
            </div>
        </div>
    </section>

    <!-- Smart Home Devices  -->
    <section id="devices" class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-8">Smart Home Devices</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Device Card -->
                @forelse ($smartHomeDevices as $device)
                    <div class="bg-gray-50 dark:bg-gray-700 rounded-lg shadow p-4">
                        <img src="{{ asset('storage/' . $device->image) }}" class="rounded mb-4"
                            alt="{{ $device->name }}" />
                        <div class="px-5 pb-5">
                            <a href="#">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                    {{ $device->name }}
                                </h5>
                            </a>
                            <p class="text-gray-600 dark:text-gray-300 mt-2 text-sm text-justify">
                                {{ $device->short_description }}
                            </p>

                            <div class="flex items-center justify-between mt-5">
                                <span class="text-1xl font-bold text-gray-900 dark:text-white">
                                    &#8358; {{ number_format($device->price, 2) }}
                                </span>
                                <a href="{{ route('device.show', $device->slug) }}"
                                    class="text-white bg-[#0d0b35] hover:bg-[#dc975c] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    View
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
            <div class="text-center mt-8">
                <a href="#"
                    class="px-6 py-3 bg-[#0d0b35] dark:bg-[#dc975c] text-white rounded-lg hover:bg-[#dc975c]">
                    View More Devices
                </a>
            </div>
        </div>
    </section>

    <!-- Customers reviews slides -->
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white text-center">
                Customer Reviews
            </h2>
            <div class="flex justify-center mb-6">
                <svg class="w-10 h-10 text-[#dc975c]" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6l4 2m0 0l4 2m-4-2l4-2m-4 2V6m0 0L8 6m4 0l4 2m0 0l4 2m-4-2V6m0 0L8 6m4 0l4 2m0 0l4 2m-4-2V6" />
                </svg>
            </div>
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1">
                    <!-- Review Card -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                        <p class="text-gray-600 dark:text-gray-300">"EquityHome made my home buying experience seamless and
                            enjoyable. The smart home features are a game-changer!"</p>
                        <h3 class="mt-4 text-lg font-semibold text-gray-800 dark:text-white">John Doe</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Homeowner</p>
                    </div>
                    <!-- Review Card -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                        <p class="text-gray-600 dark:text-gray-300">"I love my new smart home! The team at EquityHome was
                            incredibly helpful and knowledgeable."</p>
                        <h3 class="mt-4 text-lg font-semibold text-gray-800 dark:text-white">
                            Jane Smith</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Homeowner</p>
                    </div>
                    <!-- Review Card -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                        <p class="text-gray-600 dark:text-gray-300">"EquityHome's smart home technology has made my life so
                            much easier. Highly recommend!"</p>
                        <h3 class="mt-4 text-lg font-semibold text-gray-800 dark:text-white">Emily Johnson</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Homeowner</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
