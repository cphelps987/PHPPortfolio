<!doctype html>
<id lang="en-us">

    <?php include 'include/header.php';?>

<body>
<!-- Wrap all page content here -->
<div id="wrap">

    <nav class="navbar">

            <a class="navbar-brand">
                <h1> Courtney's Portfolio</h1>
            </a>


                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio.php">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>

    </nav>


        <div class="container-fluid">

                <!-- A fluid container that uses the full witdh -->
                <div class="row">
                    <div class="col-md-12">
                        <h2>About Me</h2>
                        <hr>
                    </div>
                </div>

                    <div class="row">
                        <div class="col-md-4" >
                            <img id="selfie" src="assets/image/FullSizeRender.jpg" alt="Courtney's image">
                        </div>
                        <div class="col-md-4">
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                <br>
                                <br>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-block"> <h5>Connect with Me</h5>
                                </div>
                                    <div class="group">
                                        <a target="_blank" href="https://www.linkedin.com/in/courtney-phelps-20100286/" class="group-item"><i class="fa fa-linkedin-square" style="font-size:36px"></i></a>
                                        <a target="_blank" href="https://github.com/cphelps987" class="group-item"><i class="fa fa-github-square" style="font-size:36px"></i></a>
                                        <a target="_blank" href="https://drive.google.com/file/d/0B7biVCjUgIlQVU9lUkRWSUNnWHc/view?usp=sharing" class="group-item"><i class="fa fa-file-o" style="font-size:31px"></i></a>
                                    </div>
                            </div><!--end of class block-->
                        </div><!--end of div col4(3)-->
                    </div> <!--end of div row1-->

        </div><!--end of container-->

</div> <!--end of wrap-->

<?php include 'include/footer.php';?>

</body>


</html>