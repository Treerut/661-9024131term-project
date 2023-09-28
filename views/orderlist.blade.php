<x-app-layout>
    <main class="my-8">
        <div class="container px-6 mx-auto">
            <div class="flex justify-center my-6">
                <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                    <div class="col-sm-10">
                        <div class="">
                        <h2 class="text-2xl font-bold text-gray-900">My Bill</h2>
                        <div class="h-1 bg-gray-800 w-20"></div>
                           @foreach ($orders as $item)
                            <div class="row searched-item cart-list-divider">
                                <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                                    <div class="px-4 py-5 sm:px-6">
                                        <h3 class="text-base font-semibold leading-6 text-gray-900">order id: {{$item->id}}</h3>
                                        <a href="detail/{{$item->id}}">
                                            <img class="" src="{{$item->image}}" width="300" height="300"/>
                                        </a>
                                      </div>
                                <div class="col-sm-3">
                                    
                                </div>
                                <div class="border-t border-gray-200">
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">ชื่อสินค้า : </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$item->name}}</dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">สถานะการจัดส่ง :</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$item->status}}</dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">ชื่อ-นามสกุลลูกค้า :</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$item->ctm_name}}</dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">ราคา :</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$item->price}}฿</dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">ที่อยู่จัดส่ง :</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$item->address}}</dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">สถานะการชำระเงิน :</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$item->payment_status}}</dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">วิธีการชำระเงิน :</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$item->payment_method}}</dd>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>