<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href="<?= base_url() . 'assets/css/bootstrap.min.css' ?>" rel="stylesheet">
        <link href="<?= base_url() . 'assets/css/app.css' ?>" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="<?= base_url() . 'assets/js/jquery.min.js' ?>"></script>
        <script src="<?= base_url() . 'assets/js/bootstrap.min.js' ?>"></script>
        <script src="<?= base_url() . 'assets/js/app.js' ?>"></script>
    </head>
    <body>
        <div class="jumbotron text-center">
            <div class="container ">
                <h1 class="text-white">Please take a survey and win a free gift hamper</h1>
            </div>
            <a  id="next" class="btn btn-lg btn-success btn-bottom">Take a survey</a

            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <div class="" id="questions">
            <div class="container-fluid row text-center">
                <h1>
                    Which tea is best to prevent <?= $random_question ?>? 
                    <br />
                    <small class="text-muted">Click on a correct answer below to get your free gift hamper</small>
                </h1>
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-sm-offset-3 col-sm-6">
                        <div class="text-center alert alert-danger" role="alert">
                            <strong>Oh Snap!</strong> You gave a wrong answer. You can take the survey again. 
                            <br />
                            <br />
                            <a href="<?= base_url() ?>" class="btn btn-danger btn lg">Try Again</a>
                        </div>
                        <div class="text-center  alert alert-warning" role="alert">
                            <strong>Hey !</strong> You did not select any option. 

                        </div>
                    </div>
                    <form class=" form-horizontal">
                        <div class="col-md-offset-4 col-md-4">
                            <section id="first" class="section">
                                <?php $key = 1;
                                foreach ($answerlist as $answer => $value) :
                                    ?>
                                    <div class="wrapper">
                                        <input type="radio"  class='answer'  id="radio-<?= $key ?>" name="group1" value="<?= $value ?>">
                                        <label for="radio-<?= $key ?>"><span class="radio"><?= $answer ?></span></label>
                                    </div>
                                    <hr />
                                    <?php $key++; ?>
<?php endforeach; ?>
                            </section>
                            <button id="submit" class="btn btn-block btn-primary btn-lg">Check Answer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <div class="modal fade" id="exampleModal" tabindex="-1" style="margin-top:30px"  role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document" style="margin-top:30px">
            <div class="modal-content" style="margin-top:30px">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="exampleModalLabel">Please provide your details to collect your free sample</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="post" action="<?=  site_url().'/welcome/submit_request'?>">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name * </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name"  required='required' placeholder="Your Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email *</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" required='required' placeholder="Your Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="col-sm-2 control-label">Gender * </label>
                            <div class="col-sm-10">
                                <select  required='required' name="gender" id="" class="form-control">
                                    <option value=""></option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="age" class="col-sm-2 control-label">Age</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="age"  placeholder="Your Age">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact" class="col-sm-2 control-label">Mobile</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="contact"  placeholder="Your Mobile number">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</html>