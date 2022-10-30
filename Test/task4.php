<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="1">
        <button>1</button>
    </div>
    <div id="2">
        <button>2</button>
    </div>
    <div id="3">
        <button>3</button>
    </div>
    <div id="4">

    </div>
    <script>
        //При клике на любую кнопку происходит перемещение button
        $("button").click(function(){
            $('#4').append($('#1>button')); //button1 в div4
            $('#1').append($('#2>button')); //button2 в div1
            $('#2').append($('#3>button')); //button3 в div2
            $('#3').append($('#4>button')); //button1 в div3
        });
    </script>
</body>
</html>