@props(['row'])
@if($row->custom_promo === true)
    <div class="py-1 px-2 rounded-lg flex items-center justify-center bg-blue-600 h-12 w-10">
        <span class=" text-white text-3xl font-bold">C</span>
    </div>
@else
    <img src="{{ $row->image }}" class="h-12 image-fit lg:mr-1 rounded"/>
@endif
