@extends('layouts.frontend')

@section('content')
  <!-- START: BREADCRUMB -->
  <section class="bg-gray-100 py-8 px-4">
    <div class="container mx-auto">
      <ul class="breadcrumb">
        <li>
          <a href="katalog.html">Katalog</a>
        </li>
      </ul>
    </div>
  </section>
  <!-- END: BREADCRUMB -->

  <!-- START: COMPLETE YOUR ROOM -->
  <section class="bg-white px-10 py-16">
    <div class="flex overflow-x-auto mb-4 -mx-3">
        @foreach ($products as $product)
      <div class="px-3 flex-none" style="width: 290px">
        <div class="rounded-xl p-4 pb-8 relative bg-white">
          <div class="rounded-xl overflow-hidden card-shadow w-full h-36">
            <img src="{{ $product->galleries()->exists() ? Storage::url($product->galleries->first()->url) : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mN88B8AAsUB4ZtvXtIAAAAASUVORK5CYII=' }}" alt="" class="w-full h-full object-cover object-center" />
          </div>
          <h5 class="text-lg font-semibold mt-4">{{ $product->name }}</h5>
          <span class="">IDR {{ number_format($product->price) }}</span>
          <a href="{{ route('details', $product->slug) }}" class="stretched-link">
            <!-- fake children -->
          </a>
        </div>
      </div>
      @endforeach
      </div>

      <!-- Pagination -->
    <nav aria-label="Page navigation example">
      <ul class="inline-flex -space-x-px">
        <li>
          <a href="#"
            class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
        </li>
        <li>
          <a href="#"
            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
        </li>
        <li>
          <a href="#"
            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
        </li>
        <li>
          <a href="#" aria-current="page"
            class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
        </li>
        <li>
          <a href="#"
            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
        </li>
        <li>
          <a href="#"
            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
        </li>
        <li>
          <a href="#"
            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
        </li>
      </ul>
    </nav>
    <!-- Pagination -->
  </section>
  <!-- END: COMPLETE YOUR ROOM -->
@endsection