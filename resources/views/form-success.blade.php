<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>eventName: {{$eventName}}</p>
    <p>bandNames: {{$bandNames}}</p>
    <p>startDate: {{$startDate}}</p>
    <p>endDate: {{$endDate}}</p>
    <p>portfolio: {{$portfolio}}</p>
    <p>ticketPrice: {{$ticketPrice}}</p>
    <p>status:
    @switch($status)
        @case(1)
        Đang diễn ra
        @break
        @case(2)
        Sắp diễn ra
        @break
        @case(3)
        Đã diễn ra
        @break
        @case(0)
        Tạm hoãn
        break
        @default
        <p>error</p>
        break
    @endswitch
    </p>
</body>
</html>
