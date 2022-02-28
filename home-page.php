<?php
/*
Template Name: Home Page
*/
get_header();
$profile = get_field('profile');
$about = get_field('about');
$basicInformation = get_field('basic_information');
?>
<div class="page-content">
    <div>
        <div class="profile-page">
            <div class="wrapper">
                <div class="page-header page-header-small" filter-color="green">
                    <div class="page-header-image" data-parallax="true"
                         style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/cc-bg-1.jpg')"></div>
                    <div class="container">
                        <div class="content-center">
                            <div class="cc-profile-image"><a href="#"><img src="<?= $profile['avatar'] ?>"
                                                                           alt="<?= $profile['full_name'] ?>"/></a>
                            </div>
                            <div class="h2 title"><?= $profile['full_name'] ?></div>
                            <p class="category text-white"><?= $profile['role'] ?></p><a
                                    class="btn btn-primary smooth-scroll mr-2" href="<?= $profile['hire_me'] ?>"
                                    data-aos="zoom-in"
                                    data-aos-anchor="data-aos-anchor">Hire Me</a><a class="btn btn-primary"
                                                                                    href="<?= $profile['download_cv'] ?>"
                                                                                    data-aos="zoom-in"
                                                                                    data-aos-anchor="data-aos-anchor">Download
                                CV</a>
                        </div>
                    </div>
                    <div class="section">
                        <div class="container">
                            <div class="button-container">
                                <?php if (have_rows('socials')): ?>

                                    <?php while (have_rows('socials')): the_row();
                                        ?>
                                        <a class="btn btn-default btn-round btn-lg btn-icon"
                                           href="<?= get_sub_field('link') ?>"
                                           rel="tooltip" title="<?= get_sub_field('name') ?>"><i
                                                    class="<?= get_sub_field('icon') ?>"></i></a>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="about">
            <div class="container">
                <div class="card" data-aos="fade-up" data-aos-offset="10">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card-body">
                                <div class="h4 mt-0 title">About</div>
                                <?= $about ?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card-body">
                                <div class="h4 mt-0 title">Basic Information</div>
                                <div class="row">
                                    <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
                                    <div class="col-sm-8"><?= $basicInformation['age'] ?></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                                    <div class="col-sm-8"><?= $basicInformation['email'] ?></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
                                    <div class="col-sm-8"><?= $basicInformation['phone'] ?></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
                                    <div class="col-sm-8"><?= $basicInformation['address'] ?></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>
                                    <div class="col-sm-8"><?= $basicInformation['language'] ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="skill">
            <div class="container">
                <div class="h4 text-center mb-4 title">Professional Skills</div>
                <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="card-body">
                        <div class="row">
                            <?php if (have_rows('professional_skills')): ?>

                                <?php while (have_rows('professional_skills')): the_row();
                                    ?>
                                    <div class="col-md-6">
                                        <div class="progress-container progress-primary"><span
                                                    class="progress-badge"><?= get_sub_field('name') ?></span>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-primary" data-aos="progress-full"
                                                     data-aos-offset="10" data-aos-duration="2000" role="progressbar"
                                                     aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                     style="width: <?= get_sub_field('value') ?>%;"></div>
                                                <span class="progress-value"><?= get_sub_field('value') ?>%</span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="h4 text-center mb-4 title">Portfolio</div>
                        <div class="nav-align-center">
                            <ul class="nav nav-pills nav-pills-primary" role="tablist">

                                <?php if (have_rows('portfolio')): ?>
                                    <?php while (have_rows('portfolio')): the_row();
                                        ?>
                                        <li class="nav-item"><a
                                                    class="nav-link <?= get_row_index() == 1 ? 'active' : '' ?>"
                                                    data-toggle="tab"
                                                    href="#<?= sanitize_title(get_sub_field('name')) ?>"
                                                    role="tablist"><i class="<?= get_sub_field('icon') ?>"
                                                                      aria-hidden="true"></i></a></li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="tab-content gallery mt-5">
                    <?php if (have_rows('portfolio')): ?>
                        <?php while (have_rows('portfolio')): the_row();
                            ?>
                            <div class="tab-pane <?= get_row_index() == 1 ? 'active' : '' ?>"
                                 id="<?= sanitize_title(get_sub_field('name')) ?>">
                                <div class="ml-auto mr-auto">
                                    <div class="row">
                                        <?php foreach (get_sub_field('projects') as $key => $project): ?>
                                            <div class="col-md-6">
                                                <div class="cc-porfolio-image img-raised" data-aos="fade-up"
                                                     data-aos-anchor-placement="top-bottom"><a href="#">
                                                        <figure class="cc-effect"><img src="<?= $project['image'] ?>"
                                                                                       alt="<?= $project['name'] ?>"/>
                                                            <figcaption>
                                                                <div class="h4"><?= $project['name'] ?></div>
                                                                <p><?= $project['skill'] ?></p>
                                                            </figcaption>
                                                        </figure>
                                                    </a></div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="section" id="experience">
            <div class="container cc-experience">
                <div class="h4 text-center mb-4 title">Work Experience</div>
                <?php if (have_rows('work_experience')): ?>

                    <?php while (have_rows('work_experience')): the_row();
                        ?>
                        <div class="card">
                            <div class="row">
                                <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50"
                                     data-aos-duration="500">
                                    <div class="card-body cc-experience-header">
                                        <p><?= get_sub_field('from') ?> - <?= get_sub_field('to') ?></p>
                                        <div class="h5"><?= get_sub_field('name') ?></div>
                                    </div>
                                </div>
                                <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                                    <div class="card-body">
                                        <div class="h5"><?= get_sub_field('position') ?></div>
                                        <p><?= get_sub_field('description') ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="section">
            <div class="container cc-education">
                <div class="h4 text-center mb-4 title">Education</div>
                <?php if (have_rows('education')): ?>

                    <?php while (have_rows('education')): the_row();
                        ?>
                        <div class="card">
                            <div class="row">
                                <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50"
                                     data-aos-duration="500">
                                    <div class="card-body cc-education-header">
                                        <p><?= get_sub_field('from') ?> - <?= get_sub_field('to') ?></p>
                                        <div class="h5"><?= get_sub_field('degree') ?></div>
                                    </div>
                                </div>
                                <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                                    <div class="card-body">
                                        <div class="h5"><?= get_sub_field('name') ?></div>
                                        <p class="category"><?= get_sub_field('sub_name') ?></p>
                                        <p><?= get_sub_field('description') ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="section" id="reference">
            <div class="container cc-reference">
                <div class="h4 mb-4 text-center title">References</div>
                <div class="card" data-aos="zoom-in">
                    <div class="carousel slide" id="cc-Indicators" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php if (have_rows('references')): ?>

                                <?php
                                $numRows = count(get_sub_field('references'));
                                for ($i = 0; $i <= $numRows; $i++):
                                    ?>
                                    <li class="<?= $i === 0 ? 'active' : '' ?>" data-target="#cc-Indicators"
                                        data-slide-to="<?= $i ?>"></li>
                                <?php endfor; ?>
                            <?php endif; ?>
                        </ol>
                        <div class="carousel-inner">
                            <?php if (have_rows('references')): ?>

                                <?php while (have_rows('references')): the_row();
                                    ?>
                                    <div class="carousel-item <?= get_row_index() == 1 ? 'active' : '' ?>">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 cc-reference-header"><img
                                                        src="<?= get_sub_field('avatar') ?>"
                                                        alt="<?= get_sub_field('name') ?>"/>
                                                <div class="h5 pt-2"><?= get_sub_field('name') ?></div>
                                                <p class="category"><?= get_sub_field('position') ?></p>
                                            </div>
                                            <div class="col-lg-10 col-md-9">
                                                <p><?= get_sub_field('description') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="contact">
            <div class="cc-contact-information"
                 style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/staticmap.png')">
                <div class="container">
                    <div class="cc-contact">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="card mb-0" data-aos="zoom-in">
                                    <div class="h4 text-center title">Contact Me</div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <form action="https://formspree.io/your@email.com" method="POST">
                                                    <div class="p pb-3"><strong>Feel free to contact me </strong></div>
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <div class="input-group"><span class="input-group-addon"><i
                                                                            class="fa fa-user-circle"></i></span>
                                                                <input class="form-control" type="text" name="name"
                                                                       placeholder="Name" required="required"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <div class="input-group"><span class="input-group-addon"><i
                                                                            class="fa fa-file-text"></i></span>
                                                                <input class="form-control" type="text" name="Subject"
                                                                       placeholder="Subject" required="required"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <div class="input-group"><span class="input-group-addon"><i
                                                                            class="fa fa-envelope"></i></span>
                                                                <input class="form-control" type="email" name="_replyto"
                                                                       placeholder="E-mail" required="required"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <textarea class="form-control" name="message"
                                                                          placeholder="Your Message"
                                                                          required="required"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <button class="btn btn-primary" type="submit">Send</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <p class="mb-0"><strong>Address </strong></p>
                                                <p class="pb-2">140, City Center, New York, U.S.A</p>
                                                <p class="mb-0"><strong>Phone</strong></p>
                                                <p class="pb-2">+1718-111-0011</p>
                                                <p class="mb-0"><strong>Email</strong></p>
                                                <p>anthony@company.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
