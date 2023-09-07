<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <div class="container mx-auto mt-10 mb-10">
        <ul role="list" class="divide-y divide-gray-100">
        @foreach ($data as $datas)
            <li class="flex justify-between gap-x-6 py-5 px-2 mt-5 h-50" style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px; border-radius: 10px">
                <div class="flex min-w-0 gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                src="{{$datas['CarrierLogo']}}" alt="">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">{{$datas['Caree']}}</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                        {{$datas['Segments'][0][0]['DepFrom']}} - {{$datas['Segments'][0][0]['ArrTo']}}</p>
                </div>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 font-bold text-gray-900">{{$datas['TotalFare']}} {{$datas['Currency']}}</p>
                </div>  
                
            </li>
        @endforeach
        </ul>
    </div>
</body>
</html>