<!doctype html>
<html lang="en">
<head>
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A-Frame VR</title>
</head>
<body>
<a-scene>
    <a-entity rotation="0 0 0" animation="property: rotation; to: 0 -360 0; loop: true; dur: 3000">
        <a-sphere position="0 2 4" color="#c7db30"></a-sphere>
    </a-entity>
    <a-plane
        position="0 0 0"
        rotation="-90 0 0"
        scale="2 2 2"
        width="10"
        height="10"
        color="#7BC8A4"
    ></a-plane>
    <a-sky
        color="#399bff"
    ></a-sky>
</a-scene>
</body>
</html>