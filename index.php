<!DOCTYPE html>
<html>
    <head>
        <title>  </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Mclds">
        <meta name="description" content="">
        <link rel="stylesheet" type="text/css" href="main.css" media="screen">
    </head>
    <body>
        <header>
            <?php include 'header.php' ?>
        </header>
        <div class="flex-container">
            <div class="col1" style="flex-grow:1">
            </div>
            <div class="col2" style="flex-grow:9">
                <div class="content">
                    <div class="form_container">
                        <?php include 'form.php' ?> 
                    </div>
                    <div class="generator">
                        <?php include 'generator.php' ?>
                   </div> 
                </div>
            </div>
            <div class="col3" style="flex-grow:1">
            </div>
            <?php include '/srv/http/partials/footer.php'; ?>
        </div>
    </body> 
</html>
