<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>

        <div class="container_main">

            <div class="container_sub">

                <?php include_partial('global/header') ?> 

                <div class="menu_main"></div>

                <div class="container">

                    <?php echo $sf_content ?>

                </div>

                <div class="footer_logo"></div>

                <div class="footer_organizers"></div>

            </div>

        </div>

        <div class="facebook_box"></div>

        <div class="twitter_box"></div>

    </body>
</html>
