<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://cv.com/docs/off-canvas-menu/
 */
?>

<header>
    <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
            <div class="container">
                <div class="navbar-translate"><a class="navbar-brand" href="<?php echo home_url(); ?>" rel="tooltip">Creative CV</a>
                    <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <?php cv_top_nav(); ?>
                </div>
            </div>
        </nav>
    </div>
</header>