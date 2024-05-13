<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if (\Session::has('success'))
<div class="container mx-auto px-4">
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">{!! \Session::get('success') !!}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20">
                <title>Close</title>
                <path
                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
            </svg>
        </span>
    </div>
</div>
@endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're Form here") }}
                    <form action="{{ route('contact.create') }}" method="post" class="space-y-4">
                        @csrf
                        <x-input-label> Name</x-input-label>
                        <x-text-input name="name"  label="Not Title" placeholder="It's been a great day."
                            class="w-full" />
                        <x-input-label> Email</x-input-label>
                        <x-text-input name="email" type="email"  label="Not Title" placeholder="It's been a great day."
                            class="w-full" />
                        <x-input-label> Title</x-input-label>
                        <x-text-input name="title"  label="Not Title" placeholder="It's been a great day."
                            class="w-full" />
                        <x-input-label> Message</x-input-label>
                        <textarea name="message" id="message" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write your thoughts here..."></textarea>
                        <div class="pt-4">
                            <button type="submit" class="bg-green-200 px-5 py-2 rounded">Submit</button>
                            {{-- <x-secondary-button type="submit">Send</x-button> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
