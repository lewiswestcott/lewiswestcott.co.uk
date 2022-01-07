<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS stylesheet -->
    <link href="./stylesheets/index.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css">
    <!--load all styles -->
</head>



<body>


    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Lewis Westcott</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about.php">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contact.php">Contact</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <span style="font-size: 24px;">
                        <i class="fab fa-github p-1"></i>
                        <i class="fab fa-linkedin-in p-1"></i>
                        <i class="fab fa-twitter p-1"></i>
                    </span>
                </span>
            </div>
        </div>
    </nav>

    <div class="container-lg">
        <p id="mainpage">Hey! i'm Lewis.</p>
    </div>

    <div class="container my-1" id="mainpagefooter">
        <footer>
            <div class="container p-4s">
                <div class="row">
                    <div class="col-lg-10 col-md-12 mb-1">
                        <h5>lewiswestcott.co.uk</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                            voluptatem veniam, est atque cumque eum delectus sint!
                        </p>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-1">
                        <h5 class="mb-3" style="letter-spacing: 2px;">links</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1">
                                <a href="#!"">Home</a>
                            </li>
                            <li class=" mb-1">
                                    <a href="#!">About Me</a>
                            </li>
                            <li class="mb-1">
                                <a href="#!">Contact</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center p-1">
                <span style="font-size: 24px;">
                    <i class="fab fa-github p-1"></i>
                    <i class="fab fa-linkedin-in p-1"></i>
                    <i class="fab fa-twitter p-1"></i>
                </span>
            </div>
            <div class="text-center p-1">
                © 2021 Copyright:
                <a>lewiswestcott.co.uk</a>
            </div>
            <!-- Copyright -->
        </footer>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.1.9/p5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.trunk.min.js"></script>
    <script>
        VANTA.TRUNK({
            el: "body",
            mouseControls: true,
            touchControls: true,
            gyroControls: true,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00
        })
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>