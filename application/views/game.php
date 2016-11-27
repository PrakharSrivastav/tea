<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>SPERB</title>

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
                        <div class="text-center  alert alert-success" role="alert">
                            <strong>Awesome !</strong> Please Collect you free gift hamper. <br />
                            This Page will refresh in 5 seconds.
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
        <!--</div>-->

    </body>

</html>