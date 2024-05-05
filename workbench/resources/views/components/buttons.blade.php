@extends('workbench::layouts.app')

@section('content')

    <div class="flex gap-x-10">
        <div class="flex-1">
            <div class="flex flex-col py-10 border-b border-gray-200">
                <div class="flex justify-between flex-col lg:flex-row items-center">
                    <h1 class="text-3xl sm:text-4xl font-bold">Button</h1>
                    <div>
                        GitHub
                    </div>
                </div>
                <p class="text-xl text-gray-500 mt-4">Create a button with icon, link or create a button group. </p>
            </div>
            <div class="flex mt-8">
                <x-button href="http://www.google.pt" size="md" id="dusk-button" type="submit">
                    Google
                </x-button>
            </div>
        </div>
        <div class="w-64">
            Table of Contents
        </div>
    </div>



@endsection
