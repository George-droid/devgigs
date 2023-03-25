@extends('layout')

@section('content')
{{-- @include('partials._search') --}}

<a href="/" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="relative bg-white mx-20 py-10 px-10 rounded-3xl">
   <x-card class="p-10">
      <div
         class="flex flex-col items-center justify-center text-center"
      >
         <img
               class="w-48 mr-6 mb-6"
               src="{{ asset('images/no-image.png') }}"
               alt=""
         />

         <h3 class="text-5xl mb-2">{{ $listing->title }}</h3>
         <div class="flex space-x-2 text-gray-400 text-3xl my-3">
         <!-- svg  -->
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 512 512"><title>ionicons-v5-h</title>
               <path d="M320,176V16H32V496H160V400h32v96H480V176ZM112,432H80V400h32Zm0-80H80V320h32Zm0-80H80V240h32Zm0-80H80V160h32Zm0-80H80V80h32ZM240,80h32v32H240ZM192,352H160V320h32Zm0-80H160V240h32Zm0-80H160V160h32Zm0-80H160V80h32Zm80,320H240V400h32Zm0-80H240V320h32Zm0-80H240V240h32Zm0-80H240V160h32v32ZM448,464H320V432h32V400H320V352h32V320H320V272h32V240H320V208H448Z"/>
               <rect x="384" y="400" width="5" height="5"/><rect x="384" y="320" width="32" height="32"/><rect x="384" y="240" width="32" height="32"/>
            </svg>
            <div class=" font-bold mb-4">{{ $listing->company }}</div>
         </div>
         <x-listing-tags :tagsCsv="$listing->tags" />
            
         <div class="text-lg my-4">
               <i class="fa-solid fa-location-dot"></i>{{ $listing->location }}
         </div>
         <div class="border border-gray-200 w-full mb-6"></div>
         <div>
               <h3 class="text-3xl font-bold mb-4">
                  Job Description
               </h3>
               <div class="text-lg space-y-6">
                  {{ $listing->description }}

                  <a
                     href="mailto:{{ $listing->email }}"
                     class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                     ><i class="fa-solid fa-envelope"></i>
                     Contact Employer</a
                  >

                  <a
                     href="{{ $listing->website }}"
                     target="_blank"
                     class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                     ><i class="fa-solid fa-globe"></i> Visit
                     Website</a
                  >
               </div>
         </div>
      </div>
   </x-card>
</div>
@endsection