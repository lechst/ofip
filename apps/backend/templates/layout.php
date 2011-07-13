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
        <div id="container">
            <div id="header">
                <h1>
                    <a href="<?php echo url_for('homepage') ?>"></a>
                </h1>
            </div>

            <div id="menu">
                <ul>
                    <li>
                        <?php echo link_to('archive', 'archive') ?>
                    </li>
                    <li>
                        <?php echo link_to('archive_exhibition_audio', 'archive_exhibition_audio') ?>
                    </li>
                    <li>
                        <?php echo link_to('archive_exhibition_image', 'archive_exhibition_image') ?>
                    </li>
                    <li>
                        <?php echo link_to('archive_exhibition_video', 'archive_exhibition_video') ?>
                    </li>
                    <li>
                        <?php echo link_to('archive_gallery', 'archive_gallery') ?>
                    </li>
                    <li>
                        <?php echo link_to('audio', 'audio') ?>
                    </li>
                    <li>
                        <?php echo link_to('cafeteria_program', 'cafeteria_program') ?>
                    </li>
                    <li>
                        <?php echo link_to('calendar', 'calendar') ?>
                    </li>
                    <li>
                        <?php echo link_to('concert_program', 'concert_program') ?>
                    </li>
                    <li>
                        <?php echo link_to('conference_program', 'conference_program') ?>
                    </li>
                    <li>
                        <?php echo link_to('conference_speaker', 'conference_speaker') ?>
                    </li>
                    <li>
                        <?php echo link_to('exhibitions', 'exhibitions') ?>
                    </li>
                    <li>
                        <?php echo link_to('file', 'file') ?>
                    </li>
                    <li>
                        <?php echo link_to('image', 'image') ?>
                    </li>
                    <li>
                        <?php echo link_to('layout_image', 'layout_image') ?>
                    </li>
                    <li>
                        <?php echo link_to('logotype', 'logotype') ?>
                    </li>
                    <li>
                        <?php echo link_to('picnic_participant', 'picnic_participant') ?>
                    </li>
                    <li>
                        <?php echo link_to('picnic_participant_image', 'picnic_participant_image') ?>
                    </li>
                    <li>
                        <?php echo link_to('picnic_plan', 'picnic_plan') ?>
                    </li>
                    <li>
                        <?php echo link_to('picnic_program', 'picnic_program') ?>
                    </li>
                    <li>
                        <?php echo link_to('registration_form', 'registration_form') ?>
                    </li>
                    <li>
                        <?php echo link_to('saturdays_breakfast_program', 'saturdays_breakfast_program') ?>
                    </li>
                    <li>
                        <?php echo link_to('saturdays_breakfast_speaker', 'saturdays_breakfast_speaker') ?>
                    </li>
                    <li>
                        <?php echo link_to('saturdays_breakfast_speaker_image', 'saturdays_breakfast_speaker_image') ?>
                    </li>
                    <li>
                        <?php echo link_to('speaker_image', 'speaker_image') ?>
                    </li>
                    <li>
                        <?php echo link_to('spectacle_program', 'spectacle_program') ?>
                    </li>
                    <li>
                        <?php echo link_to('static_content_global', 'static_content_global') ?>
                    </li>
                    <li>
                        <?php echo link_to('static_content_subpage', 'static_content_subpage') ?>
                    </li>
                    <li>
                        <?php echo link_to('subpage', 'subpage') ?>
                    </li>
                    <li>
                        <?php echo link_to('user_area_accommodation', 'user_area_accommodation') ?>
                    </li>
                    <li>
                        <?php echo link_to('user_area_place', 'user_area_place') ?>
                    </li>
                    <li>
                        <?php echo link_to('user_area_users', 'user_area_users') ?>
                    </li>
                    <li>
                        <?php echo link_to('user_area_user_image', 'user_area_user_image') ?>
                    </li>
                    <li>
                        <?php echo link_to('video', 'video') ?>
                    </li>
                </ul>
            </div>

            <div id="content">
                <?php echo $sf_content ?>
            </div>

        </div>
    </body>
</html>
