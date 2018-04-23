<html lang="en">
<head>
    <title>Poker distributor</title>
</head>

<body>
<div
    style="margin: 0 auto; width: 600px;  height: 500px; position: relative;
    top: 20%; padding: 20px; text-align: center; overflow: scroll">
    <button class="btn btn-primary" onclick="deal();">New card</button>
    <div id="result" ></div>
</div>
</body>
#bg {
}

<body

    background="https://ss0.bdstatic.com/94oJfD_bAAcT8t7mm9GUKT-xh_/timg?image&quality=100&size=b4000_4000&sec=1524447781&di=93396a379196e56c39769dcf92500171&src=http://imgsrc.baidu.com/imgad/pic/item/faedab64034f78f06fd3fbd073310a55b3191c3c.jpg"

>

<script>



    var pokers = ["clubs","diamonds","hearts","spades"];

    function deal(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200){
                var pre = document.createElement("pre");
                var content = document.createTextNode(this.response);
                pre.appendChild(content);
                document.getElementById("result").appendChild(pre);
            }
        };
        var value = parseInt(Math.random()*4 + "", 10);
        var poker = pokers[value];
        xhttp.open("GET", "requestCountAPI.php?poker=" + poker, true);
        xhttp.send(null);
    }

</script>
</html>

