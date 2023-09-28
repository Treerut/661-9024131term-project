<x-app-layout>
    <main class="my-8">
        <div class="container px-60 mx-auto">
            <div class="flex justify-center my-6">
                <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                    @if ($message = Session::get('success'))
                        <div class="p-4 mb-3 bg-blue-400 rounded">
                            <p class="text-white">{{ $message }}</p>
                        </div>
                    @endif
                    <h3 class="text-3xl font-bold">Order</h3>
                    <div class="flex-1">
                        <br> <br> 
                        <form action="/orderplace" method="POST">
                            @csrf
                        <h3 class="text-xl font-bold text-black">ข้อมูลการจัดส่งและรายละเอียดการชำระเงิน</h3>
                            <br>
                            <div class="form-group border-t border-gray-200">
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <h2>ชื่อ-นามสกุล</h2>
                                <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Your Name">
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <h2>ที่อยู่จัดส่ง</h2>
                                <textarea name="address" placeholder="Enter your Address" class="form-control"></textarea>
                                </div>
                            </div><br><br>
                            <div class="px-5 py-3">
                                <label for="pwd">เลือกวิธีการชำระเงิน</label><br><br>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <div class="gap-6 mt-6">
                                        <input type="radio" value="cash" name="payment"> &nbsp;&nbsp;&nbsp; <span>Online payment</span><br><br>
                                        <input type="radio" value="cash" name="payment"> &nbsp;&nbsp;&nbsp; <span>EMI payment</span><br><br>
                                        <input type="radio" value="cash" name="payment"> &nbsp;&nbsp;&nbsp; <span>Payment on delivery</span><br><br>
                                    </div>
                                </div>
                            </div>
                            <button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-red-500">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>