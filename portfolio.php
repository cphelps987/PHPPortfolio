<!doctype html>

<html lang="en-us">

    <?php include 'include/header.php';?>


<body>
<div id="wrap">
        <nav class="navbar">
            <a class="navbar-brand">
                <h1>Courtney's Portfolio</h1>
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
                    <h2>Portfolio</h2>
                    <hr>
                </div>
                        <div class="container">

                            <div class="row">
                                    <div class ="col-md-4">
                                        <img src="assets/image/dive.jpg" class=".img-fluid" id="1" alt="pillars">
                                        <a id="project" href="https://pillarsproject.herokuapp.com/"><p>Pillars Project</p></a>
                                    </div><!--end of div col4(1)-->

                                    <div class ="col-md-4">
                                        <img src="assets/image/pillars.jpg" class=".img-fluid" id="2" alt="diver">
                                        <a id="project1" href="https://cphelps987.github.io/Project1/"><p>Dive Den Project</p></a>
                                    </div><!--end of div col4(2)-->

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-block"> <h5>Connect with Me</h5>
                                        </div>
                                        <div class="group">
                                            <a target="_blank" href="https://www.linkedin.com/in/courtney-phelps-20100286/" class="group-item"><i class="fa fa-linkedin-square" style="font-size:36px"></i></a>
                                            <a target="_blank" href="https://github.com/cphelps987" class="group-item"><i class="fa fa-github-square" style="font-size:36px"></i></a>
                                            <a target="_blank" href="https://drive.google.com/file/d/0B7biVCjUgIlQVU9lUkRWSUNnWHc/view?usp=sharing" class="group-item"><i class="fa fa-file-o" style="font-size:31px"></i></a>
                                        </div><!--end of group-->
                                    </div><!--end of card-->
                                </div><!--end of div col4(3)-->

                            </div><!--end of row-->
                        </div><!--end of container-->

             </div><!--end of row-->
        </div><!--end of container-fluid->

</div> <!--end of wrap-->

    <?php include 'include/footer.php';?>

</body>


</html>