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
        <div class="jumbotron text-center">
            <div class="container ">
                <h1 class="text-white">Please complete our game and win a free gift hamper</h1>
            </div>
            <a  id="next" class="btn btn-lg btn-success btn-bottom"> Start Game </a

            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        
    </body>
    <div class="modal fade" id="exampleModal" tabindex="-1" style="margin-top:30px"  role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document" style="margin-top:30px">
            <div class="modal-content" style="margin-top:30px">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="exampleModalLabel">Please provide your details to start the Game</h4>
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