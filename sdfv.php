<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Click Counter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        #clickCount {
            font-size: 24px;
            margin-bottom: 20px;
        }
        button {
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="clickCount">Click Count: 0</div>
    <button onclick="countClicks()">Click Me!</button>

    <script>
        let clickCount = 0;

        function countClicks() {
            clickCount++;
            document.getElementById("clickCount").innerText = "Click Count: " + clickCount;
        }
    </script>
</body>
</html>
