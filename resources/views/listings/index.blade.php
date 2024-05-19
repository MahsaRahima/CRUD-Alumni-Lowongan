<x-layout>
  
  {{-- @include('partials._hero') --}}
  
  <div class="mb-6 ml-5">
    <button class="bg-laravel text-white rounded py-2 px-2 hover:bg-white">
      <a href="/" class="hover:text-laravel"><i class="fa-solid fa-arrow-left"></i> Back </a>
    </button>
    <button class="bg-laravel text-white rounded py-2 px-2 hover:bg-white">
      <a href="/postLoker" class="hover:text-laravel"><i class="fa-solid fa-upload"></i> Post Lowongan </a>
    </button>
    <button class="bg-laravel text-white rounded py-2 px-2 hover:bg-white">
      <a href="/manageLoker" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Manage Lowongan </a>
    </button>
  </div>
  @include('partials._search')

  <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

    @unless(count($listings) == 0)

    @foreach($listings as $listing)
    <x-listing-card :listing="$listing" />
    @endforeach

    @else
    <p>No Lowongan Found</p>
    @endunless

  </div>

  <div class="mt-6 p-4">
    {{$listings->links()}}
  </div>
</x-layout>
