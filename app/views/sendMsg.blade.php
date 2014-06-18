<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
<!--        <link rel="stylesheet" href="src/vendor/bootstrap/dist/css/bootstrap.min.css">-->
<!--        <link rel="stylesheet" href="src/vendor/bootstrap/dist/css/bootstrap-theme.min.css">-->
        <link rel="stylesheet" href="src/css/bootstrap-theme-lumen.min.css">
        <link rel="stylesheet" href="src/vendor/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="src/css/main.css">
    </head>
    <body>
        <div class="full-height container-fluid">
            <header class="navbar navbar-fixed-top">
                Navbar
            </header>
            <main  class="container">
                <h1>Send a message!</h1>
                <div class="row">
                    <form>
                        <div class="form-group col-xs-12 col-sm-6 col-md-4">
                            <label for="senderEmail" class="control-label">
                                From:
                            </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" id="senderEmail" name="senderEmail" value="" placeholder="sender@example.com" required>
                            </div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-6 col-md-4">
                            <label for="senderEmail" class="control-label">
                                To:
                            </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" id="senderEmail" name="senderEmail" value="" placeholder="receiver@example.com" required>
                            </div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-6 col-md-4">
                            <label for="senderEmail" class="control-label">
                                Password:
                            </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input type="password" class="form-control" id="senderEmail" name="senderEmail" value="" placeholder="********" required>
                            </div>
                        </div>
                        <div class="form-group col-xs-12">
                            <textarea id="message" class="form-control wysiwyg"></textarea>
                        </div>
                        <div class="col-xs-4 col-xs-offset-4 col-sm-6 col-sm-offset-0 col-md-4 col-md-offset-4">
                            <label class="control-label visible-sm visible-lg">&NonBreakingSpace;</label>
                            <div class="btn-group btn-group-justified">
                                <a type="button" class="btn btn-danger"><i class="fa fa-lock"></i> Encrypt</a>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>
        <div class="sticky-footer container-fluid">
            Footer
        </div>
        <div id="loader"><i class="fa fa-cog fa-5x fa-spin"></i></div>

        <script src="src/vendor/underscore/underscore.js"></script>
        <script src="src/vendor/jquery/dist/jquery.min.js"></script>
        <script src="src/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="src/vendor/cryptico/cryptico.min.js"></script>
        <script src="src/vendor/tinymce/tinymce.min.js"></script>
        <script src="src/js/main.js"></script>
    </body>
</html>