@extends('layouts.app')

@section('content')
    <br />
    <br />
    <br />
    <div class="bg-gray-100 ">
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-wrap -mx-4">
                <!-- Product Images -->
                <div class="w-full md:w-1/2 px-4 mb-8">
                    <img src="{{ asset('storage/' . $device->image) }}" alt="Product"
                        class="w-full h-auto rounded-lg shadow-md mb-4" id="mainImage">

                    <div class="flex gap-4 py-4 justify-center overflow-x-auto">
                        @forelse ($device->images as $item)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $device->slug }}-Thumbnail"
                                class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
                                onclick="changeImage(this.src)">
                        @empty
                        @endforelse
                    </div>
                </div>

                <!-- Product Details -->
                <div class="w-full md:w-1/2 px-4">
                    <h2 class="text-3xl font-bold mb-2">{{ $device->name }}</h2>
                    <p class="text-gray-600 mb-4">SKU: WH1000XM4</p>
                    <div class="mb-4">
                        <span class="text-2xl font-bold mr-2">&#8358; {{ number_format($device->price, 2) }}</span>
                        {{-- <span class="text-gray-500 line-through">$399.99</span> --}}
                    </div>

                    <p class="text-gray-700 mb-6">
                        {{ $device->short_description }}
                    </p>



                    <div class="mb-6">
                        <label for="quantity" class="block text-sm font-medium text-gray-700 mb-1">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" min="1" value="1"
                            class="w-12 text-center rounded-md border-gray-300  shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>

                    <div class="flex space-x-4 mb-6">
                        <button
                            class="bg-indigo-600 flex gap-2 items-center text-white px-6 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg>
                            <a href="{{ $device->whatsapp_link }}?=text=I%20want%20to%20buy%20the%20{{ $device->name }}%20for%20&#8358;{{ number_format($device->price, 2) }} please%20send%20me%20the%20details."
                                class="text-white hover:underline">Buy Now</a>
                        </button>

                    </div>

                    {{-- <div>
                        <h3 class="text-lg font-semibold mb-2">Key Features:</h3>
                        <ul class="list-disc list-inside text-gray-700">
                            <li>Industry-leading noise cancellation</li>
                            <li>30-hour battery life</li>
                            <li>Touch sensor controls</li>
                            <li>Speak-to-chat technology</li>
                        </ul>
                    </div> --}}
                </div>
            </div>


            <div class="mt-8 mb-8">
                <h3 class="text-xl font-semibold mb-4">Product Description</h3>
                <p class="text-gray-700">
                    {!! $device->description !!}
                </p>
            </div>



            <script>
                function changeImage(src) {
                    document.getElementById('mainImage').src = src;
                }
            </script>
        </div>
    @endsection
