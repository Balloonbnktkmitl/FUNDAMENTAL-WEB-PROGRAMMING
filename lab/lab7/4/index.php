<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.min.js"></script>
    <style>
        body{
            display: flex;
            align-items: center;
            font-size: 20px;
            flex-direction: column;
        }
        img{
            margin : 10px;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <h1>Gallery</h1>
    <div class="container">
        <div class="row">
            <div class="col-3">
            <?php
                $images = array("https://i.pinimg.com/474x/34/40/3c/34403ca0930496ed0dd7e9b4fcfca0e7.jpg",
            "https://i.pinimg.com/474x/f2/8b/93/f28b931d801cf885bd89b777e0f34627.jpg",
            "https://i.pinimg.com/564x/b9/7e/4e/b97e4e37a51123256d3a92f9220486a7.jpg",
            "https://i.pinimg.com/564x/e9/2f/1d/e92f1d02d5fc174f97ce72c002466d7d.jpg",
            "https://i.pinimg.com/564x/c7/b8/d2/c7b8d2b64460b79d16bc3a00f6e83f9f.jpg",
        "https://i.pinimg.com/736x/43/a5/db/43a5db04fd2367a2a2fef8d93df5dc46.jpg");
                foreach($images as $image){
                    echo "<img src='$image' width='100%'>";
                }
            ?>
            </div>
            <div class="col-3">
            <?php
                $images = array("https://i.pinimg.com/564x/18/b1/73/18b173a3bc0b5834ad0a5dec52526143.jpg",
                "https://i.pinimg.com/564x/bd/50/d1/bd50d1c37c2efb84e9ee78203553118d.jpg",
                "https://i.pinimg.com/564x/5a/56/13/5a5613e189616de08dc60814433aa472.jpg",
                "https://i.pinimg.com/564x/a9/a1/3a/a9a13ab8dd250655c537f02b2699fbeb.jpg",
                "https://i.pinimg.com/564x/87/6c/b1/876cb15e41d81d09275db74fec0cbddf.jpg",
            "https://i.pinimg.com/564x/9e/81/98/9e819837189ceb5458c92fb72a1f6890.jpg");
                foreach($images as $image){
                    echo "<img src='$image' width='100%'>";
                }
            ?>
            </div>
            <div class="col-3">
            <?php
                $images = array("https://i.pinimg.com/564x/c6/67/3a/c6673ace5eee63f2974d92c70750f900.jpg",
                "https://i.pinimg.com/564x/d3/1c/a5/d31ca5563e28a37f6aedd846685b2aad.jpg",
                "https://i.pinimg.com/564x/0b/88/8f/0b888f9a8aa9cab323de30eb1bc870f9.jpg",
                "https://i.pinimg.com/564x/12/28/a9/1228a9751a3c2f8929c5c84ec0c6f10e.jpg",
                "https://i.pinimg.com/564x/30/91/d6/3091d62df2cf04a4fd95e546d3a059f9.jpg");
                foreach($images as $image){
                    echo "<img src='$image' width='100%'>";
                }
            ?>
            </div>
            <div class="col-3">
            <?php
                $images = array("https://i.pinimg.com/564x/27/ed/9d/27ed9d350a5517c1fc7a47c60bdf3617.jpg",
                "https://i.pinimg.com/564x/59/c6/06/59c6067c55de102895a902572aaef4cb.jpg",
                "https://i.pinimg.com/564x/a7/e8/17/a7e81743c358afdebcf979234ff94ac7.jpg",
                "https://i.pinimg.com/564x/8c/b8/c6/8cb8c6720e4c738c7cc6199065ddfca9.jpg",
                "https://i.pinimg.com/564x/ba/04/f3/ba04f326ed6e0b075422261feda234c1.jpg",
            "https://i.pinimg.com/736x/8d/68/fa/8d68fa4e98f819c50f7fe11ab255931e.jpg");
                foreach($images as $image){
                    echo "<img src='$image' width='100%'>";
                }
            ?>
            </div>
        </div>
    </div>
</body>
</html>