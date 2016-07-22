@extends('welcome')

@section('content')
    <p id="power">0</p>

    <script src="https://cdn.socket.io/socket.io-1.4.5.js"></script>
    <script>
        //var socket = io('http://localhost:3000');
        var socket = io('http://192.168.99.100:3000');
        socket.on("test-channel:App\\Events\\EventName", function(message){
            console.log(message);
            // increase the power everytime we load test route
            $('#power').text(parseInt($('#power').text()) + parseInt(message.data.power));
        });
    </script>
@stop