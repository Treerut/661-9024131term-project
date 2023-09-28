<x-app-layout>
    @section('content')
    <div class="bg-white">
        <div class="pt-6">
          <nav aria-label="Breadcrumb">
            <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
              <li>
                <div class="flex items-center">
                  <a href="/products" class="mr-2 text-sm font-medium text-gray-900">Product</a>
                  <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                  </svg>
                </div>
              </li>
              
              <li>
                <div class="flex items-center">
                  <a href="#" class="mr-2 text-sm font-medium text-gray-900">{{ $product->name }}</a>
                  <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                  </svg>
                </div>
              </li>
      
              <li class="text-sm">
                <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">{{$product['id']}}</a>
              </li>
              
            </ol>
            <div class="flex justify-end py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pb-16 lg:pr-96">
              <a class="inline-flex justify-center rounded-lg text-sm font-semibold py-2.5 px-4 bg-slate-900 text-white hover:bg-slate-700 -my-2.5 ml-8" href="{{ url()->previous() }}">
                <span>Go Back <span aria-hidden="true">→</span></span></a>
            </div>
          </nav>
      
          <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
            <div class="aspect-w-3 aspect-h-4 hidden overflow-hidden rounded-lg lg:block">
              <img src="{{ url($product->image) }}" alt="Two each of gray, white, and black shirts laying flat." class="h-full w-full object-cover object-center">
            </div>
            <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
            </div>
          </div>

          <div class="mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">
            <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
              <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $product->name }}</h1>
              <h3 class="sr-only">Description</h3>
                <div class="space-y-6">
                  <p class="text-base text-gray-900">{{ $product->description }}.</p>
                </div>
            </div>

            <div class="mt-4 lg:row-span-3 lg:mt-0">
              <h2 class="sr-only">Product information</h2>
              <p class="text-3xl tracking-tight text-gray-900">฿{{ $product->price }}.-</p>

            <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pb-16 lg:pr-8">
              <div>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class="flex justify-end">
                    @csrf
                    <input type="hidden" value="{{ $product->id }}" name="id">
                    <input type="hidden" value="{{ $product->name }}" name="name">
                    <input type="hidden" value="{{ $product->price }}" name="price">
                    <input type="hidden" value="{{ $product->image }}"  name="image">
                    <input type="hidden" value="1" name="quantity">
                    <button class="px-4 py-1.5 text-white text-sm bg-blue-900 rounded">Add To Cart</button>
                    
              </div>

            </div>
          </div>
        </div>
      </div>
                
            
            </div>
        </div>
    </div>
    </x-app-layout>