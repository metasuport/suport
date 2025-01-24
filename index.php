
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meta For Business</title>
    <!-- <style>
    #myVideo {
      width: 100%;
      height: auto;
    }
  </style> -->
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
    #myVideo {
      max-width: 100%;
      max-height: 100%;
    }
  </style>
</head>

<body>
    
        <video id="myVideo" autoplay muted playsinline>
            <source src="/img/Mate.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    

    <script>
        setTimeout(function () {
            window.location.href = "support.html";
        }, 4000);
    </script>
</body>

</html>