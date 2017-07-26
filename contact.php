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
            <div class="row">
                <div class="col-md-12">
                    <h2>Contact Me</h2>
                    <hr>
                </div>
            </div>
    </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="card" id="card">
                            <div class="card-block"> <h5>Connect with Me</h5>
                            </div>
                            <div class="group">
                                <a target="_blank" href="https://www.linkedin.com/in/courtney-phelps-20100286/" class="group-item"><i class="fa fa-linkedin-square" style="font-size:36px"></i></a>
                                <a target="_blank" href="https://github.com/cphelps987" class="group-item"><i class="fa fa-github-square" style="font-size:36px"></i></a>
                                <a target="_blank" href="https://drive.google.com/file/d/0B7biVCjUgIlQVU9lUkRWSUNnWHc/view?usp=sharing" class="group-item"><i class="fa fa-file-o" style="font-size:31px"></i></a>
                            </div>
                        </div>
                    </div><!--end of class block-->
                </div> <!--end of row-->
            </div> <!--end of container-->


            <div class="container-fluid">
                <form>
                    <div class="col-md-8">
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <label for="formGroupExampleInput">Name</label>
                                    <input type="text" class="form-control" id="inlineFormInput" placeholder="Jane Doe">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <label for="formGroupExampleInput">E-Mail</label>
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="email@email.com">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <label for="formGroupExampleInput">Message</label>
                                <textarea class="form-control" rows="5" id="formGroupExampleInput" placeholder="Message Here"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>


</div> <!--end of wrap-->

<?php include 'include/footer.php';?>

</body>

</html>