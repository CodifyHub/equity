@extends('layouts.app')

@section('content')
    <br />
    <br />
    <!-- Hero Section with Background Image -->
    <section
        class="bg-[url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center bg-no-repeat opacity-80 py-20 text-center">

        <div class="max-w-screen-xl mx-auto px-4 text-[#fff] rounded-lg">
            <h1 class="text-5xl font-bold mb-4">Contact EquityHome</h1>
            <p class="text-lg max-w-2xl mx-auto">We'd love to hear from you — whether you're looking to buy, sell, or just
                ask a few questions.</p>
        </div>
    </section>

    <!-- Info & Form Section -->
    <section class="py-16 bg-white">
        <div class="max-w-screen-xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 gap-12">

            <!-- Company Info -->
            <div>
                <h2 class="text-3xl font-bold mb-4">Get in Touch</h2>
                <p class="text-gray-700 mb-6">
                    Our team is here to help with all your real estate and smart home needs. Reach out to us with inquiries,
                    feedback, or to schedule a property tour. We'll respond as quickly as possible.
                </p>
                <ul class="text-gray-700 space-y-4">
                    <li><strong>📍 Address:</strong> 123 Smart Street, Port Harcourt, Nigeria</li>
                    <li><strong>📞 Phone:</strong> +234 800 123 4567</li>
                    <li><strong>✉️ Email:</strong> info@equityhome.com</li>
                    <li><strong>🕒 Hours:</strong> Mon - Fri, 9am - 5pm</li>
                </ul>
            </div>

            <!-- Contact Form -->
            <div>
                <form action="#" method="POST" class="bg-gray-50 p-8 rounded-lg shadow">
                    <h3 class="text-2xl font-semibold mb-6 text-gray-800">Send us a message</h3>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                        <input type="text" name="name"
                            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" name="email"
                            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                        <input type="text" name="subject"
                            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea name="message" rows="5"
                            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-3 rounded hover:bg-blue-700 transition">Send
                        Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Map Embed -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-screen-xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-6">Our Location</h2>
            <div class="rounded-lg overflow-hidden shadow-lg">
                <iframe class="w-full h-96" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.662145002087!2d6.990338414769167!3d4.815554096516266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069cf7ef9939df7%3A0xd5c6977ff4db1d6!2sPort%20Harcourt%2C%20Nigeria!5e0!3m2!1sen!2sng!4v1681657435702!5m2!1sen!2sng"></iframe>
            </div>
        </div>
    </section>
@endsection
