<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SGPI to CGPA and Percentage Converter</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <link rel="stylesheet" href="assets/css/tooltipster.bundle.min.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">Converter</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Calculate</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead bg-primary text-white text-center">
        <div class="container"><img class="img-fluid d-block mx-auto mb-5" src="assets/img/icon.png">
            
            <hr class="star-light">
            <h2 class="font-weight-light mb-0">Convert your SGPI to CGPA and Percentage Converter - Mumbai University Engineering<br></h2>
        </div>
    </header>
    <section class="text-center portfolio" id="portfolio">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary">Calculate</h2>
            <hr class="star-dark mb-5">
        </div>
        <div class="text-center d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">
            <div class="table-responsive table-bordered text-left" style="width: 313px;">
                <form id="myform">
                    <table class="table table-bordered table-hover table-dark">
                        <tbody>
                            <tr>
                                <td><input type="number" id="s1" style="width: 130px;" step=".01" placeholder="Sem 1" max="10" min="0"></td>
                                <td><input type="number" id="s2" style="width: 130px;" step=".01" placeholder="Sem 2" max="10" min="0"></td>
                            </tr>
                            <tr>
                                <td><input type="number" id="s3" style="width: 130px;" step=".01" placeholder="Sem 3" max="10" min="0"></td>
                                <td><input type="number" id="s4" style="width: 130px;" step=".01" min="0" max="10" placeholder="Sem 4"></td>
                            </tr>
                            <tr>
                                <td><input type="number" id="s5" style="width: 130px;" step=".01" min="0" max="10" placeholder="Sem 5"></td>
                                <td><input type="number" id="s6" style="width: 130px;" step=".01" min="0" max="10" placeholder="Sem 6"></td>
                            </tr>
                            <tr>
                                <td><input type="number" id="s7" style="width: 130px;" step=".01" min="0" max="10" placeholder="Sem 7"></td>
                                <td><input type="number" id="s8" style="width: 130px;" step=".01" min="0" max="10" placeholder="Sem 8"></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
<!--        <button class="btn btn-primary" type="submit" form="form" onClick="calc()">Convert</button>-->
        <div class="invisible" style="padding-top: 29px;" id="inv">
            <p>Avg. of your SGPI to CPGA : <b id="avg">NAN</b></p>
            <p>Applied Formula is : <b id="f"> </b></p>
            <p>Your Percentage is : <b id="per">NAN</b> %</p>
            <p><a href="/assets/img/conversion-formula.png">Source of this Calculation</a></p>
		    <div class="container">
				<div class="warning">
                    <p>
                        <strong>
                            SGPI means Semester Grade Performance Index. The SGPI is the weighted average of the grade points obtained in all. the courses by the learner during the semester.
                        </strong>
                    </p>
                    <p>
                        <strong>
                            CGPA means Cumulative Grade Point Average. For 4 Years Course : If duration of course is of four years, the degree shall be given to students based upon CGPA considering last four semesters performance.
                        </strong>
                    </p>

                    <p>
                        <strong>
                            CGPA = Sum of SGPIs of all semesters / number of semesters <br>
                        </strong>
                    </p>
<!--                    <p>-->
<!--                        <button class="btn"><i class="fa fa-download"></i> Download Chrome Extension</button>-->
<!--                    </p>-->
<!--                    <p>-->
<!--                        <a target="_blank" href="whatsapp://send?text=Hi" class="btn btn-success">Click Here to Share This Tool with Friends on WhatsApp</a>-->
<!--                    </p>-->
				</div>
			</div>
            <p align="center">- developed by <a href="https://www.omkarbabrekar.com/">Omkar Babrekar</a></p>
        </div>
    </section>
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xl-4 offset-xl-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase">Around the Web</h4>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="https://www.facebook.com/profile.php?id=100008732141094"><i class="fa fa-facebook fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="https://github.com/Heisenberg3562"><i class="fa fa-github fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="https://www.instagram.com/techno.piracy/"><i class="fa fa-instagram fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="https://www.linkedin.com/in/omkar-babrekar/"><i class="fa fa-linkedin fa-fw"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="d-lg-none scroll-to-top position-fixed rounded"><a class="d-block js-scroll-trigger text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/tooltipster.bundle.min.js"></script>
    <script>
        $(document).ready(function () {

            // initialize tooltipster on form input elements
            $('input').tooltipster({
                trigger: 'custom', // default is 'hover' which is no good here
                position: 'top',
                animation: 'grow'
            });
            $('#myform').validate({
                // any other options & rules,
                errorPlacement: function (error, element) {
                    var ele = $(element),
                        err = $(error),
                        msg = err.text();
                    if (msg != null && msg !== '') {
                        ele.tooltipster('content', msg);
                        ele.tooltipster('open');
                    }
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass(errorClass).addClass(validClass).tooltipster('close');
                },
                success: function (label, element) {
                    $(element).tooltipster('hide');
                    calc();
                }
            });
        });
        function calc(){
            var m1 = document.getElementById("s1").value;
            var m2 = document.getElementById("s2").value;
            var m3 = document.getElementById("s3").value;
            var m4 = document.getElementById("s4").value;
            var m5 = document.getElementById("s5").value;
            var m6 = document.getElementById("s6").value;
            var m7 = document.getElementById("s7").value;
            var m8 = document.getElementById("s8").value;
            var mks = [m1,m2,m3,m4,m5,m6,m7,m8]
            var sum=0;
            var no = 0;
            var avg = 0;
            var percentage = 0;
            for(var i = 0;i<8;i++){
                if(mks[i]!=""){
                    sum += parseFloat(mks[i]);
                    no+=1;
                }
            }
            avg=sum/no;
            if(avg != 0){
                document.getElementById("avg").innerText = avg;
                document.getElementById("f").innerText = "7.25 * CGPA + 11";
                document.getElementById("per").innerText = 7.25*avg+11;
            }
        }
    </script>
</body>

</html>
