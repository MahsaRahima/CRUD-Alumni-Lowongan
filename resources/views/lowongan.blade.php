<x-layout>
    <x-card>        
        <div class="flex justify-between"> 
            <button class="bg-laravel text-white rounded py-5 px-10 hover:bg-white ml-10"> 
                <a href="{{ route('listings.index') }}" class="text-black">Lowongan Kerja</a> 
            </button> 
            <button class="bg-laravel text-white rounded py-5 px-10 hover:bg-white mr-10"> 
                <a href="{{ route('listingmagang.index') }}" class="text-black">Lowongan Magang</a> 
            </button> 
        </div>
    </x-card>
</x-layout>
