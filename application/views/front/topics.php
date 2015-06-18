<?php include ('include/header.php'); ?>

    <section id="topics-page">
        <div class="container">
            <div class="row">
                <div class="row-same-height row-full-height with-border-bottom">
                    <div class="col-md-2 with-border-right col-md-height col-full-height col-top">
                        <?php include ('include/navigation.php'); ?>

                        <div id="statistic">
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

                    <div class="col-md-7 without-padding with-border-right col-md-height col-full-height col-top">
                        <div id="primary-content">
                            <ul class="nav nav-tabs topics-tabs">
                                <li role="presentation"><a href="#tab1" data-toggle="tab">All</a></li>
                                <li role="presentation" class="active"><a href="#tab2" data-toggle="tab">Recent</a></li>
                                <li role="presentation"><a href="#tab3" data-toggle="tab">Weakest</a></li>
                                <li role="presentation"><a href="#tab4" data-toggle="tab">Strongest</a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="tab2">
                                    <div class="row">
                                        <div class="col-md-4 without-padding-right">
                                            <ul class="nav nav-tabs topics-tabs-content">
                                                <li role="presentation">
                                                    <a href="#recent-tab1" data-toggle="tab">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                Odds &amp; Evens:<br/>
                                                                Progressions
                                                            </label>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li role="presentation">
                                                    <a href="#recent-tab2" data-toggle="tab">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                Other polygons:<br/>
                                                                Progressions
                                                            </label>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li role="presentation">
                                                    <a href="#recent-tab3" data-toggle="tab">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                Formulas<br/>
                                                                Progressions
                                                            </label>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li role="presentation" class="active">
                                                    <a href="#recent-tab4" data-toggle="tab">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                Arithmetic and Geometric<br/>
                                                                Progressions
                                                            </label>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="col-md-8 with-border-left col-xs-height col-full-height">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="recent-tab4">
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
                                                                <img src="../../../img/dog.jpg" alt="img">

                                                                <div class="summary-content">
                                                                    <ul>
                                                                        <li><i class="fa fa-clock-o"></i></li>
                                                                        <li><i class="fa fa-clock-o"></i></li>
                                                                        <li><i class="fa fa-clock-o"></i></li>
                                                                    </ul>
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
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab1">
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

                    <div class="col-md-3 col-md-height col-full-height col-top">
                        <div id="secondary-content">
                            <h4 class="text-center">ADDITIONAL ACTIONS</h4>
                            <ul>
                                <li><a><i class="fa fa-clock-o"><span>Take a simulation test</span></i> </a></li>
                                <li><a><i class="fa fa-clock-o"><span>Take a simulation test</span></i> </a></li>
                                <li><a><i class="fa fa-clock-o"><span>Take a simulation test</span></i> </a></li>
                                <li><a><i class="fa fa-clock-o"><span>Take a simulation test</span></i> </a></li>
                                <li><a><i class="fa fa-clock-o"><span>Take a simulation test</span></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<footer>

</footer>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>