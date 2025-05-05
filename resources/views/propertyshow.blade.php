@extends('layouts.app')

@section('content')
    <br />
    <br />
    <div class="max-w-screen-xl mx-auto px-4 py-12 ">

        <!-- Property Title -->
        <h1 class="text-4xl font-bold mb-6 text-gray-900">Luxury Modern Apartment</h1>

        <!-- Carousel -->
        <div id="property-carousel" class="relative w-full mb-10" data-carousel="slide">
            <div class="relative h-64 md:h-[450px] overflow-hidden rounded-lg">
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1600&q=80"
                        class="w-full h-full object-cover " alt="Property Image 1">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://images.unsplash.com/photo-1599423300746-b62533397364?auto=format&fit=crop&w=1600&q=80"
                        class="w-full h-full object-cover" alt="Property Image 2">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?auto=format&fit=crop&w=1600&q=80"
                        class="w-full h-full object-cover" alt="Property Image 3">
                </div>
            </div>

            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </span>
            </button>
        </div>

        <!-- Two-column layout on large screens -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10">

            <!-- Property Description (Left) -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-2xl font-semibold mb-4">Property Description</h2>
                <p class="text-gray-700 leading-relaxed">
                    Experience elevated urban living in this luxury modern apartment located in the heart of the city.
                    Featuring high ceilings, panoramic views, smart home technology, and elegant finishes throughout,
                    this apartment is perfect for professionals or small families who appreciate comfort and connectivity.
                </p>
            </div>

            <!-- Property Details & CTA (Right) -->
            <div class="bg-white rounded-lg shadow p-6 flex flex-col justify-between h-full">
                <!-- Details Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-1">Price</h3>
                        <p class="text-blue-600 text-xl font-bold">$1,250,000</p>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-1">Location</h3>
                        <p>Upper Manhattan, New York City</p>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-1">Bedrooms</h3>
                        <p>3</p>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-1">Bathrooms</h3>
                        <p>2</p>
                    </div>
                    <div class="md:col-span-2">
                        <h3 class="font-semibold text-gray-800 mb-1">Smart Features</h3>
                        <ul class="list-disc list-inside text-gray-700">
                            <li>Smart thermostat & lighting</li>
                            <li>Automated blinds & voice control</li>
                            <li>24/7 monitored smart security</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-1">Size</h3>
                        <p>1,800 sqft</p>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="mt-auto">
                    <button
                        class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg text-lg font-semibold hover:bg-blue-700 transition">
                        Buy Now
                    </button>
                </div>
            </div>

            <!-- Map Embed -->
            <div class="mb-10 w-full lg:col-span-2">
                <h2 class="text-2xl font-semibold mb-4">Location on Map</h2>
                <div class="rounded-lg overflow-hidden shadow">
                    <iframe class="w-full h-96" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.662145002087!2d6.990338414769167!3d4.815554096516266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069cf7ef9939df7%3A0xd5c6977ff4db1d6!2sPort%20Harcourt%2C%20Nigeria!5e0!3m2!1sen!2sng!4v1681657435702!5m2!1sen!2sng"></iframe>
                </div>
            </div>
        </div>


    </div>
@endsection
