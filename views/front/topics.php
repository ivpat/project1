<?php include ('../partials/header.php'); ?>

        <section id="topics-page">
            <div class="cnt-row with-border-bottom">
                <div class="nav-col with-border-right">
                    <?php include ('../partials/navigation.php'); ?>

                    <div id="cnt-statistic">
                        <span>Overall</span>
                        <div class="progress statistic-progress">
                            <div class="progress-bar progress-bar-lavender" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                            </div>
                        </div>

                        <span>Quantitative</span>
                        <div class="progress statistic-progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            </div>
                        </div>

                        <span>Verbal</span>

                        <div class="progress statistic-progress">
                            <div class="progress-bar progress-bar-success-light" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="primary-col without-padding with-border-right">
                    <div id="primary-content">
                        <ul class="nav nav-tabs topics-tabs">
                            <li role="presentation"><a href="#tab1" data-toggle="tab">All</a></li>
                            <li role="presentation" class="active"><a href="#tab2" data-toggle="tab">Recent</a></li>
                            <li role="presentation"><a href="#tab3" data-toggle="tab">Weakest</a></li>
                            <li role="presentation"><a href="#tab4" data-toggle="tab">Strongest</a></li>
                        </ul>

                        <div class="tab-content topics-tabs-content">
                            <div class="tab-pane active topics-tabs-content-pane" id="tab2">

                                <article class="cnt-content-element">
                                    <div class="content-element-tabs">
                                        <ul class="nav nav-tabs content-element-tabs-nav">
                                            <li role="presentation">
                                                <a href="#recent-tab1" data-toggle="tab">
                                                    <i class="fa fa-chevron-right"></i>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="">
                                                            <b>Odds &amp; Evens:</b><br/>
                                                            Progressions
                                                        </label>
                                                    </div>
                                                </a>
                                            </li>

                                            <li role="presentation">
                                                <a href="#recent-tab2" data-toggle="tab">
                                                    <i class="fa fa-chevron-right"></i>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="">
                                                            <b>Other polygons:</b><br/>
                                                            Progressions
                                                        </label>
                                                    </div>
                                                </a>
                                            </li>

                                            <li role="presentation">
                                                <a href="#recent-tab3" data-toggle="tab">
                                                    <i class="fa fa-chevron-right"></i>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="">
                                                            <b>Formulas</b><br/>
                                                            Progressions
                                                        </label>
                                                    </div>
                                                </a>
                                            </li>

                                            <li role="presentation" class="active">
                                                <a href="#recent-tab4" data-toggle="tab">
                                                    <i class="fa fa-chevron-right"></i>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="">
                                                            <b>Arithmetic and Geometric</b><br/>
                                                            Progressions
                                                        </label>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="pane-content">
                                        <div class="tab-content tab-content-nav">
                                            <div class="tab-pane active tab-pane-nav" id="recent-tab4">
                                                <article>
                                                    <section class="tab-content-inner">
                                                        <p class="time-line"><i class="fa fa-clock-o"></i><time>Wednesday, 16 April 2014</time><span><time>18:22</time></span></p>
                                                        <h2>Arithmetic and geometric progressions</h2>

                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                                        </p>

                                                        <p>
                                                            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                                            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                                        </p>
                                                    </section>

                                                    <section class="summary">
                                                        <h3>Summary</h3>
                                                        <div class="clearfix">
                                                            <img src="/novi/assets/images/dog.jpg" alt="dog">

                                                            <div class="summary-content">
                                                                <div class="summary-content-list">
                                                                    <div class="summary-content-list-group">
                                                                        <i class="fa fa-clock-o"></i>
                                                                        <span>Time spent on this lesson:</span>
                                                                        <b>5 Minutes</b>
                                                                    </div>

                                                                    <div class="summary-content-list-group">
                                                                        <i class="fa fa-clock-o"></i>
                                                                        <span>Status:</span>
                                                                        <b>75% Completed</b>
                                                                    </div>

                                                                    <div class="summary-content-list-group">
                                                                        <i class="fa fa-clock-o"></i>
                                                                        <span>Questions answered ot this topic:</span>
                                                                        <b>3/5</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </article>
                                            </div>

                                            <div class="tab-pane" id="recent-tab3">
                                                recent-tab3 recent-tab3 recent-tab3
                                            </div>

                                            <div class="tab-pane" id="recent-tab2">
                                                recent-tab2 recent-tab2 recent-tab2
                                            </div>

                                            <div class="tab-pane" id="recent-tab1">
                                                recent-tab1 recent-tab1 recent-tab1
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <div class="tab-pane " id="tab1">
                                This is tab 1
                            </div>

                            <div class="tab-pane" id="tab3">
                                This is tab 333333333333
                            </div>

                            <div class="tab-pane" id="tab4">
                                This is tab 4444444
                            </div>
                        </div>
                    </div>
                </div>

                <div class="secondary-col">
                    <?php include ('../partials/secondary_content.php'); ?>
                </div>
            </div>
        </section>


        <footer>

        </footer>

    </div>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>