@extends('layouts.app')

@section('content')
    <br />
    <br />
    <!-- Hero Section -->
    <section
        class="bg-[url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center bg-no-repeat opacity-80 py-20 text-center">

        <div class="max-w-screen-xl mx-auto px-4 text-[#fff] rounded-lg">
            <h1 class="text-5xl font-bold mb-4"> Equity Home</h1>
            <p class="text-lg max-w-2xl mx-auto">Redefining real estate through smart innovation and trusted relationships.
            </p>
        </div>
    </section>

    <!-- About Description -->
    <section class="py-16 bg-white dark:bg-gray-900 text-gray-900 dark:text-white">
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Who We Are</h2>
                <p class="max-w-3xl mx-auto text-gray-600 leading-relaxed dark:text-white">
                    At EquityHome, we believe a home is more than just a place to live — it’s a reflection of your
                    lifestyle, your values, and your future. Founded on the principles of integrity, innovation, and
                    excellence, EquityHome has grown to become a trusted name in the real estate industry, bridging the gap
                    between traditional home ownership and cutting-edge smart home technology.
                    <br /><br />
                    We are passionate about helping individuals and families find their perfect home while offering the
                    benefits of modern, connected living. With years of experience in the real estate market, we provide
                    comprehensive services — from buying and selling properties to integrating the latest smart devices that
                    enhance security, comfort, and energy efficiency.
                    <br /><br />
                    Our approach is deeply customer-centric. We take pride in understanding the unique needs of every client
                    and delivering tailored solutions that make home buying and selling a seamless, empowering experience.
                    Whether you're a first-time buyer or a seasoned investor, EquityHome is here to support your journey —
                    every step of the way.
                </p>
            </div>

            <!-- Mission & Vision Grid -->
            <div class="grid md:grid-cols-2 gap-10">
                <!-- Mission -->
                <div class="bg-gray-50 p-8 rounded-lg shadow">
                    <h3 class="text-2xl font-semibold text-blue-600 mb-4">Our Mission</h3>
                    <p class="text-gray-700 leading-relaxed">
                        To revolutionize the real estate experience by combining personalized service, innovative
                        technology, and smart home solutions that empower people to live better, safer, and more connected
                        lives.
                        <br /><br />
                        We aim to make home ownership smarter — not just in the way homes are built or sold, but in how they
                        enhance the everyday lives of those who live in them.
                    </p>
                </div>

                <!-- Vision -->
                <div class="bg-gray-50 p-8 rounded-lg shadow">
                    <h3 class="text-2xl font-semibold text-blue-600 mb-4">Our Vision</h3>
                    <p class="text-gray-700 leading-relaxed">
                        To be the most trusted and forward-thinking real estate brand in Africa and beyond — known for
                        transforming houses into smart homes, and clients into lifelong partners.
                        <br /><br />
                        We envision a future where every home is intelligent, sustainable, and tailored to the needs of its
                        owner — and where EquityHome leads the way in making that future a reality.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
