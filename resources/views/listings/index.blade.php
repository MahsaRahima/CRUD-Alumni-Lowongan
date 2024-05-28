<x-layout>
  
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
  <div style="display: flex; justify-content: space-between;">
    <!-- Tabel Lowongan -->
    <div style="width: 60%;">
      <div class="p-2.5">
        @unless(count($listings) == 0)

        @foreach($listings as $listing)
        <x-listing-card :listing="$listing" />
        @endforeach

        @else
        <p>No Lowongan Found</p>
        @endunless
      </div>
    </div>
    
    <!-- Tabel Pengalaman Kerja -->
    <div style="width: 35%;">
      <div class="bg-blue-500 text-white p-2 rounded-t-lg mr-10">
        Pengalaman Kerja
      </div>
      <div class="border border-blue-500 bg-blue-100 p-4 rounded-b-lg mr-10 mb-4">
        <label class="flex items-center mb-2">
          <input type="checkbox" class="mr-2" /> Tanpa Pengalaman
        </label>
        <label class="flex items-center mb-2">
          <input type="checkbox" class="mr-2" /> Fresh Graduate
        </label>
        <label class="flex items-center mb-2">
          <input type="checkbox" class="mr-2" /> Minimal 1 Tahun
        </label>
        <label class="flex items-center mb-2">
          <input type="checkbox" class="mr-2" /> Minimal 2 Tahun
        </label>
        <label class="flex items-center mb-2">
          <input type="checkbox" class="mr-2" /> Minimal 3 Tahun
        </label>
        <label class="flex items-center">
          <input type="checkbox" class="mr-2" /> Lebih dari 3 Tahun
        </label>
      </div>
      <!-- Tipe Pekerjaan-->
      <div class="bg-blue-500 text-white p-2 rounded-t-lg mr-10">
        Pengalaman Kerja
      </div>
      <div class="border border-blue-500 bg-blue-100 p-4 rounded-b-lg mr-10">
        <label class="flex items-center mb-2">
          <input type="checkbox" class="mr-2" /> Freelance
        </label>
        <label class="flex items-center mb-2">
          <input type="checkbox" class="mr-2" /> Full Time
        </label>
        <label class="flex items-center mb-2">
          <input type="checkbox" class="mr-2" /> Magang
        </label>
        <label class="flex items-center mb-2">
          <input type="checkbox" class="mr-2" /> Kontrak
        </label>
        <label class="flex items-center mb-2">
          <input type="checkbox" class="mr-2" /> Sementara
        </label>
      </div>
    </div>      
  </div>
          
  
  <div class="mt-6 p-4">
    {{$listings->links()}}
  </div>
  
</x-layout>

