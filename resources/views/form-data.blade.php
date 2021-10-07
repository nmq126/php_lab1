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
    <h1>Form</h1>
    <form action="/data-handle/form" method="post">
        @csrf
        <div>Event name: <input type="text" name="eventName"></div>
        <div>Band name: <input type="text" name="bandNames"></div>
        <div>startDate: <input type="date" name="startDate"></div>
        <div>endDate: <input type="date" name="endDate"></div>
        <div>portfolio: <input type="text" name="portfolio"></div>
        <div>ticketPrice: <input type="number" name="ticketPrice"></div>
        <div>status: <input type="number" name="status"></div>
        <button>Submit</button>
    </form>
</body>
</html>
