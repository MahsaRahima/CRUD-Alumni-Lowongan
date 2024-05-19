@props(['listing'])

<x-card>
  <div class="flex">
    <img class="hidden w-48 mr-6 md:block"
      src="{{$listing->Logo ? asset('/storage/imglogo/'. $listing->Logo) : asset('/images/no-image.png')}}" alt="" />
    <div>
      <h3 class="text-2xl">
        <a href="/loker/{{$listing->id}}">{{$listing->Posisi}}</a>
      </h3>
      <div class="text-xl font-bold mb-4">{{$listing->NamaPerusahaan}}</div>
      <x-listing-tags :tagsCsv="$listing->Tags" />
      <div class="text-lg mt-4">
        <i class="fa-solid fa-location-dot"></i> {{$listing->Alamat}}
      </div>
    </div>
  </div>
</x-card>