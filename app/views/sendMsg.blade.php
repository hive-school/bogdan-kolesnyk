<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <link rel="stylesheet" href="src/vendor/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="src/vendor/bootstrap/dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="src/css/main.css">
    </head>
    <body>
        <div id="loader"></div>
        <div class="full-height container-fluid">
            <header class="navbar navbar-fixed-top">
                Navbar
            </header>
            <main  class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Send a message!</h1>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="senderEmail" class="control-label col-sm-4">
                                    From:
                                </label>
                                <div class="input-group col=sm-8">
                                    <span class="input-group-addon">@</span>
                                    <input type="email" class="form-control" id="senderEmail" name="senderEmail" value="" placeholder="sender@example.com" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="senderEmail" class="control-label col-sm-4">
                                    To:
                                </label>
                                <div class="input-group col=sm-8">
                                    <span class="input-group-addon">@</span>
                                    <input type="email" class="form-control" id="senderEmail" name="senderEmail" value="" placeholder="receiver@example.com" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="senderEmail" class="control-label col-sm-4">
                                    Password:
                                </label>
                                <div class="input-group col=sm-8">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input type="password" class="form-control" id="senderEmail" name="senderEmail" value="" placeholder="receiver@example.com" required>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
        <div class="sticky-footer container-fluid">
            Footer
        </div>
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="src/vendor/underscore/underscore.js"></script>
        <script src="src/vendor/jquery/dist/jquery.min.js"></script>
        <script src="src/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="src/vendor/cryptico/cryptico.min.js"></script>
        <script src="src/js/main.js"></script>
    </body>
</html>