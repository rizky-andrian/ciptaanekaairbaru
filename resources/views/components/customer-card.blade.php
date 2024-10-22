<section class="w-full relative text-gray-900 p-3">
    <div class="max-w-screen-lg mx-auto py-5 flex flex-col gap-10">
        <div>
            <h2 class="text-left text-3xl text-primary font-semibold">We are trusted</h2>
            <span class="text-left text-sm italic text-primary font-semibold">Our Customer</span>
        </div>

        <div class="">
            @if ($groupedCustomers->has('Pharmaceutical'))
                <h3 class="text-xl font-bold mb-3">Pharmaceutical</h3>
            @endif
            <div class="flex gap-5">
                @if ($groupedCustomers->has('Pharmaceutical'))
                    <div class="marquee">
                        @foreach ($groupedCustomers->get('Pharmaceutical') as $item)
                            <div class="marquee-item">
                                <div class="text-primary flex flex-col justify-start h-full">
                                    <div class="h-40">
                                        <img src="/storage/img/customer/{{ $item->customer_logo }}" class="rounded"
                                            alt="">
                                        <p>{{ $item->customer_name }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                @endif
            </div>

            <!-- Personal Care Customers -->
            @if ($groupedCustomers->has('Personal care'))
                <h3 class="text-xl font-bold mb-3">Personal Care</h3>
            @endif
            <div class="flex gap-5">
                @if ($groupedCustomers->has('Personal care'))
                    <div class="marquee marquee-reverse">
                        @foreach ($groupedCustomers->get('Personal care') as $item)
                            <div class="marquee-item">
                                <div class="text-primary flex flex-col justify-start h-full">
                                    <div class="h-40">
                                        <img src="/storage/img/customer/{{ $item->customer_logo }}" class="rounded"
                                            alt="">
                                        <p>{{ $item->customer_name }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                @endif
            </div>

            <!-- Food & Beverage Customers -->

            @if ($groupedCustomers->has('food&beverage'))
                <h3 class="text-xl font-bold mb-3">Food & Beverage</h3>
            @endif
            <div class="flex gap-5">
                @if ($groupedCustomers->has('food&beverage'))
                    <div class="marquee">
                        @foreach ($groupedCustomers->get('food&beverage') as $item)
                            <div class="marquee-item">
                                <div class="text-primary flex flex-col justify-start h-full">
                                    <div class="h-40">
                                        <img src="/storage/img/customer/{{ $item->customer_logo }}" class="rounded"
                                            alt="">
                                        <p>{{ $item->customer_name }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                @endif
            </div>

            <!-- General Industry Customers -->
            @if ($groupedCustomers->has('General Industry'))
                <h3 class="text-xl font-bold mb-3">General Industry</h3>
            @endif
            <div class="flex gap-5">
                @if ($groupedCustomers->has('General Industry'))
                    <div class="marquee marquee-reverse">
                        @foreach ($groupedCustomers->get('General Industry') as $item)
                            <div class="marquee-item">
                                <div class="text-primary flex flex-col justify-start h-full">
                                    <div class="h-40">
                                        <img src="/storage/img/customer/{{ $item->customer_logo }}" class="rounded"
                                            alt="">
                                        <p>{{ $item->customer_name }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                @endif
            </div>
        </div>
    </div>
</section>
