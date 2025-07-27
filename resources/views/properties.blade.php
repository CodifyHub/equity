@extends('layouts.app')

@section('content')
    <br />
    <br />
    <!-- Property Show Page -->
    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">

            <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
                @forelse ($properties as $property)
                    <div
                        class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                        <div class="h-56 w-full">
                            <a href="{{ route('property.show', $property->slug) }}">
                                <img class="mx-auto h-full dark:hidden" src="{{ asset('storage/' . $property->image) }}"
                                    alt="{{ $property->name }}" />
                                <img class="mx-auto hidden h-full dark:block"
                                    src="{{ asset('storage/' . $property->image) }}" alt="{{ $property->name }}" />
                            </a>
                        </div>
                        <div class="pt-6">


                            <a href="{{ route('property.show', $property->slug) }}"
                                class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">
                                {{ $property->name }}
                            </a>

                            <ul class="mt-2 flex items-center gap-4">
                                <li class="flex items-center gap-2">

                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                        {{ $property->bedroom }} Bedrooms
                                    </p>
                                </li>

                                <li class="flex items-center gap-2">

                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400 ml-15">
                                        {{ $property->bathroom }} bathroom
                                    </p>
                                </li>
                            </ul>

                            <div class="mt-4 flex items-center justify-between gap-4 mt-5">
                                <p class="text-lg font-extrabold leading-tight text-gray-900 dark:text-white">
                                    &#8358; {{ number_format($property->price, 2) }}
                                </p>

                                <a href="{{ route('property.show', $property->slug) }}"
                                    class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    view
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No Properties Yet </p>
                @endforelse

            </div>
            <div class="w-full text-center">
                {{ $properties->links() }}
            </div>
        </div>

    </section>
@endsection
