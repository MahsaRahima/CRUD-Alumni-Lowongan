@props(['listingmagang'])

<x-card>
  <div class="flex">
    <img class="hidden w-48 mr-6 md:block"
      src="{{$listingmagang->Logo ? asset('/storage/imglogo/'. $listingmagang->Logo) : asset('/images/no-image.png')}}" alt="" />
    <div>
      <h3 class="text-2xl">
        <a href="/logang/{{$listingmagang->id}}">{{$listingmagang->Posisi}}</a>
      </h3>
      <div class="text-xl font-bold mb-4">{{$listingmagang->NamaPerusahaan}}</div>
      <x-listingmagang-tags :tagsCsv="$listingmagang->Tags" />
      <div class="text-lg mt-4">
        <i class="fa-solid fa-location-dot"></i> {{$listingmagang->Alamat}}
      </div>
    </div>
  </div>
</x-card>