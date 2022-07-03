<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{config('app.name', 'Mayibuye i-Afrika Trading')}}</title>
</head>
<body>
    <div class="container">
    <div class="row">
       
<div class="col-md-12">
    <p>
    <strong>Message:</strong>
    <br>
    {{$data[0]['__message']}}
    </p>
</div>

<div class="col-md-6">
{{$data[0]['first__name']}} {{$data[0]['last__name']}}
</div>
<div class="col-md-6">
    <strong>E.</strong> {{$data[0]['__email']}}
</div>
<div class="col-md-6">
    <strong>T.</strong> {{$data[0]['__phone']}}
</div>
<br/>
<br/>

<p> <em>--- Message sent from the website</em></p>
    </div>
    </div>

</body>
</html>

