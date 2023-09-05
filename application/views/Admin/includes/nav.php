<header>
    <div class="container head_s_a">
        <div class="row sepH_b">
            <div class="six columns">
                <div class="row">
                    <div class="five phone-two columns">
                        <div id="logo">
                            <img src="<?= base_url("media/images/") ?>logo.png" alt="Faregarden" />
                        </div>
                    </div>

                </div>
            </div>
            <div class="six columns">
                <div class="user_box cf">
                    <div class="user_avatar">
                        <img src="img/user_female.png" alt="" />
                    </div>
                    <div class="user_info user_sep">
                        <p class="sepH_a">
                            <strong><?= $this->session->userdata("username") ?></strong>
                        </p>
                        <span>

                            <a href="<?= base_url("Admin/logout") ?>">Log out</a>
                        </span>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="twelve columns">
                <nav id="smoothmenu_h" class="ddsmoothmenu tinyNav">
                    <ul class="cf">
                        <li>
                            <a href="<?= base_url("Admin") ?>" class="mb_parent first_el">Dashboard</a>
                        </li>
                        <li></li>
                        <li>
                            <a href="javascript:void(0)" class="mb_parent">Booking</a>
                            <ul style="display:none">
                                <li><a href="<?= base_url("Admin/bookings") ?>">Airline</a></li>
                                <li><a href="<?= base_url("Admin/hotel") ?>"> Hotel </a></li>
                            </ul>
                        </li>
                        <li><a href="<?= base_url("Admin/timings") ?>">Airline Timings</a></li>
                        <li>
                            <a href="javascript:void(0)" class="mb_parent">Markup</a>
                            <ul style="display:none">
                                <li><a href="<?= base_url("Admin/airlineMarkup") ?>">Add </a></li>
                                <li><a href="<?= base_url("Admin/viewMarkup") ?>"> View </a></li>

                            </ul>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
    <!-- notifications content -->
    <div style="display:none">
        <div id="ntf_tickets_panel" style="display:none">
            <p class="sticky-title">New Tickets</p>
            <ul class="sticky-list">
                <li>
                    <a href="#">Admin should not break if URL&hellip;</a>
                    <p><span class="s_color small">updated 01.04.2012</span></p>
                </li>
                <li>
                    <a href="#">Displaying submenus in custom&hellip;</a>
                    <p><span class="s_color small">updated 01.04.2012</span></p>
                </li>
                <li>
                    <a href="#">Featured image on post types.</a>
                    <p><span class="s_color small">updated 24.03.2012</span></p>
                </li>
                <li>
                    <a href="#">Multiple feed fixes and&hellip;</a>
                    <p><span class="s_color small">updated 22.03.2012</span></p>
                </li>
                <li>
                    <a href="#">Automatic line breaks in&hellip;</a>
                    <p><span class="s_color small">updated 18.03.2012</span></p>
                </li>
                <li>
                    <a href="#">Wysiwyg bug with shortcodes.</a>
                    <p><span class="s_color small">updated 08.10.2012</span></p>
                </li>
            </ul>
            <a href="#" class="gh_button btn-small">Show all tickets</a>
        </div>
        <div id="ntf_comments_panel" style="display:none">
            <p class="sticky-title">New Comments</p>
            <ul class="sticky-list">
                <li>
                    <a href="#">Lorem ipsum dolor sit amet&hellip;</a>
                    <p><span class="s_color small">John Smith on Maiden Castle, Dorset (29.10.2012)</span></p>
                </li>
                <li>
                    <a href="#">Lorem ipsum dolor sit&hellip;</a>
                    <p><span class="s_color small">John Smith on Draining and development&hellip; (29.10.2012)</span></p>
                </li>
            </ul>
            <a href="#" class="gh_button btn-small">Show all comments</a>
        </div>
        <div id="ntf_mail_panel" style="display:none">
            <p class="sticky-title">New Messages</p>
            <ul class="sticky-list">
                <li>
                    <a href="#">Lorem ipsum dolor sit amet&hellip;</a>
                    <p><span class="s_color small">From John Smith (29.10.2012)</span></p>
                </li>
                <li>
                    <a href="#">Lorem ipsum dolor sit&hellip;</a>
                    <p><span class="s_color small">From John Smith (28.10.2012)</span></p>
                </li>
            </ul>
            <a href="#" class="gh_button btn-small">Show all messages</a>
        </div>
    </div>
</header>