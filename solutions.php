<?php

require_once(__DIR__.'/../../config.php');
$context = context_system::instance();
$PAGE->set_context($context);
$url = new moodle_url($CFG->wwwroot.'/local/moodlemoot/solutions.php');
$title = "Solutions";
$PAGE->set_url($url);
$PAGE->set_heading($title);
$PAGE->set_title($title);

echo $OUTPUT->header();
?>
<style>
    .ideas{
        font-size:1.25em;
    }

    .container-fluid.ideas{
        padding:0;
    }
    .d-event-wrapper{
        display:block;
        padding:30px 40px;
    }
    .d-title{
        font-size:1.55em;
        font-weight:800;
        line-height:.75;
        color:rgba(75,75,75);

    }
    .d-title span.thin{
        font-weight:200 !important;
    }
    .d-sub-title{
        color:rgba(245,101,17,1);
        font-size:1em;
        font-weight:800;
        position:relative;
    }
    .d-event-wrapper h3.d-sub-title:first-child{
        line-height:2;

    }
    .d-sub-title .fa-search{
        font-size:50px;
        color:rgba(75,75,75);
        position:absolute;
        padding-left:10px;
        bottom:10px;

    }
    .ideas .title-container{
        display:block;
        margin-top:50px;
    }
    .ideas .title-container *{
        text-align:center;
        margin:0;
        padding:0;
    }
    .d-activities .d-sub-title{
        padding-bottom:0;
        margin:0;
    }
    .d-activity-list{
        list-style:none;
        margin:0;
        padding:0;
    }
    .d-activity-list li{
        padding:0px;
        display:flex;
    }
    .d-activity-list li span{
        min-width:100px;
        display:flex-column;
    }

    .d-event-block{
        color:white;
    }

    .d-event-block span.quote{
        display:flex-column;
        font-size:50px;
        float:left;
        padding:0 30px;
    }

    .d-event-block.even {
        background-color:rgba(245,101,17,1);
    }

    .d-event-block.odd {
        background-color:rgba(30,69,76,1);
    }
    .d-event-block-1-l {
        display:flex;
    }
    .d-event-block-1-l{
        width:100%;

    }
    .d-act-time-c {
        float:right;
        width:150px;

        text-align:center;
    }
    .d-act-time-c .fa-clock{
        font-size:80px;
        display:block;
    }

    .d-act-cont{
        max-width:50%;
    }
    .d-event-block a{
        font-weight:800;
        color:white;
        text-decoration:none;
    }
    .d-event-block a:hover{
        font-weight:800;
        color:white;
        text-decoration:underline;
    }

    .d-event-block .figure-caption{
        color:white;
        text-align:center;
        font-size:1em;
    }

    .d-event-block-2{
        margin-top:30px;
    }
    .d-event-block .fig{
        width:60%;
        display:inline-block;
    }
    .fig .figure{
        width:120px;
        height:120px;
        padding: 0 15px;
        margin:0;

    }

    .d-act-brand{

        text-align:right;
        width:30%;
        font-size:1.5em;
        line-height:1;
    }


    .d-act-brand img{
        float:right;
        width:75px;
        height:75px;
        margin:0 0 0 20px;

    }
    .d-act-brand > *{
        vertical-align:sub;
    }

    .d-bulletin h3{
        display:block;
        width:100%;
        position:relative;
    }

    .d-bulletin h3 i.fa-list{
        position:absolute;
        right:0;
        bottom:10px;
        font-size:40px;
        color:rgba(75,75,75);
        float:right;

    }

    ul.bulletin-list{
        margin:0;
        padding:0;
        list-style:none;
    }
    ul.bulletin-list li{
        padding: 8px 0;
    }

    ul.d-sponsor-list{
        padding:0;
        maring:0;
        list-style:none;
        width:100%;
    }

    ul.d-sponsor-list li{
        float:left;
        width:80px;
        height:80px;
        margin:5px;
    }

    ul.d-sponsor-list li img{
        width:80px;
        height:80px;
    }

    @media screen and (max-width: 640px) {
        .d-event-wrapper{
            padding:5%;
        }
        .d-event-block-1-l.d-flex{
            display:block;
        }


        .d-event-block-2 > div {
            display:inline-block !important;
        }

        .d-event-block-2.d-flex{
            display:block !important;
        }

        .d-event-block .fig,.d-act-brand{
            width:100%;
        }
        .d-act-brand{
            margin:40px 0;
        }
        .d-event-block-1-l span.quote{
            font-size:10px;
            display:none;
        }
        .d-act-cont {
            max-width: 70%;
        }
        .d-act-time-c{
            width:100px;
            text-align:center;
        }
        .d-act-time-c .fa-clock{
            font-size:50px;
        }
    }




</style>
<div class="container-fluid ideas">
    <div class="title-container">
        <h1 class="d-title">
            <span class="thin">Sponsor & Partner</span> Solutions
        </h1>
        <h3 class="d-sub-title">Welcome to our marketplace of Ideas and solutions</h3>
    </div>

    <div class="row">

        <div class="col-md-8">
            <div class="d-event-wrapper">
                <h3 class="d-sub-title">
                    Search for a Solution/Product
                    <i class="fas fa-search"></i>
                </h3>
                <div class="d-activities">
                    <h3 class="d-sub-title">Click to enter the exciting activities coming up next</h3>
                    <ul class="d-activity-list">
                        <li><span class="d-act-time">9.30 am</span> Exciting Big Blue Button Demo on video conferencing in schools </li>
                        <li><span class="d-act-time">10:00 am</span>Superb Red Squirrel workshop on gamification trends</li>
                        <li><span class="d-act-time">11:15 am</span> Fascinating Red Baron on video conferencing from the Bahamas whilst your pupils eat icecream</li>
                        <li><span class="d-act-time">12:30 pm</span> Rewarding Big Blue Button Demo on video conferencing in schools</li>
                        <li><span class="d-act-time">1:00 pm</span>Amazing Red Squirrel workshop on gamification trends</li>
                    </ul>
                </div>
            </div>

            <div class="d-event-block odd">
                <div class="d-event-wrapper ">
                    <div class="d-event-block-1-l  d-flex ">
                        <div class="flex-column"><span class="fas fa-quote-left quote"></span></div>
                        <div class="d-act-cont">Hi, everyone if you are having problems to get your primary school children to stay focused on the screen whilst the teacher gives a class, then this automated tickle machine is the answer for you. <a href="#">Click now</a></div>
                        <div class="d-act-time-c ml-auto"><i class="far fa-clock"></i>9.30 Next Demo</div>
                    </div>


                    <div class="d-event-block-2  d-flex ">
                        <div class="fig ">
                            <figure class="figure">
                                <img src="https://randomuser.me/api/portraits/women/1.jpg" class="figure-img img-fluid rounded-circle" alt="...">
                                <figcaption class="figure-caption">Alison</figcaption>
                            </figure>
                            <figure class="figure">
                                <img src="https://randomuser.me/api/portraits/men/59.jpg" class="figure-img img-fluid rounded-circle" alt="...">
                                <figcaption class="figure-caption">Hasan</figcaption>
                            </figure>

                            <figure class="figure">
                                <img src="https://randomuser.me/api/portraits/men/40.jpg" class="figure-img img-fluid rounded-circle" alt="...">
                                <figcaption class="figure-caption">Stark</figcaption>
                            </figure>

                        </div>

                        <div class="d-act-brand ml-auto align-self-end">
                            <img src="https://is4-ssl.mzstatic.com/image/thumb/Purple49/v4/63/81/80/638180c5-da20-399a-6b6d-5b6e929c66ea/mzl.jetjqidv.png/400x400.png" />
                            <span>Automated Learning Solution  </span>

                        </div>
                    </div>
                </div>
            </div>

            <div class="d-event-block even">
                <div class="d-event-wrapper ">
                    <div class="d-event-block-1-l  d-flex">
                        <div class="flex-column"><span class="fas fa-quote-left quote"></span></div>
                        <div class="d-act-cont">Hi, everyone if you are having problems to get your primary school children to stay focused on the screen whilst the teacher gives a class, then this automated tickle machine is the answer for you. <a href="#">Click now</a></div>
                        <div class="d-act-time-c ml-auto"><i class="far fa-clock"></i>9.30 Next Demo</div>
                    </div>


                    <div class="d-event-block-2  d-flex ">
                        <div class="fig">
                            <figure class="figure">
                                <img src="https://randomuser.me/api/portraits/women/1.jpg" class="figure-img img-fluid rounded-circle" alt="...">
                                <figcaption class="figure-caption">Alison</figcaption>
                            </figure>
                            <figure class="figure">
                                <img src="https://randomuser.me/api/portraits/men/59.jpg" class="figure-img img-fluid rounded-circle" alt="...">
                                <figcaption class="figure-caption">Hasan</figcaption>
                            </figure>

                            <figure class="figure">
                                <img src="https://randomuser.me/api/portraits/men/40.jpg" class="figure-img img-fluid rounded-circle" alt="...">
                                <figcaption class="figure-caption">Stark</figcaption>
                            </figure>

                        </div>

                        <div class="d-act-brand ml-auto align-self-end">
                            <img src="https://is4-ssl.mzstatic.com/image/thumb/Purple49/v4/63/81/80/638180c5-da20-399a-6b6d-5b6e929c66ea/mzl.jetjqidv.png/400x400.png" />
                            <span>Automated Learning Solution  </span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="d-event-block odd">
                <div class="d-event-wrapper ">
                    <div class="d-event-block-1-l  d-flex">
                        <div class="flex-column quote-col"><span class="fas fa-quote-left quote"></span></div>
                        <div class="d-act-cont">Hi, everyone if you are having problems to get your primary school children to stay focused on the screen whilst the teacher gives a class, then this automated tickle machine is the answer for you. <a href="#">Click now</a></div>
                        <div class="d-act-time-c ml-auto"><i class="far fa-clock"></i>9.30 Next Demo</div>
                    </div>


                    <div class="d-event-block-2  d-flex ">
                        <div class="fig">
                            <figure class="figure">
                                <img src="https://randomuser.me/api/portraits/women/1.jpg" class="figure-img img-fluid rounded-circle" alt="...">
                                <figcaption class="figure-caption">Alison</figcaption>
                            </figure>
                            <figure class="figure">
                                <img src="https://randomuser.me/api/portraits/men/59.jpg" class="figure-img img-fluid rounded-circle" alt="...">
                                <figcaption class="figure-caption">Hasan</figcaption>
                            </figure>

                            <figure class="figure">
                                <img src="https://randomuser.me/api/portraits/men/40.jpg" class="figure-img img-fluid rounded-circle" alt="...">
                                <figcaption class="figure-caption">Stark</figcaption>
                            </figure>

                        </div>

                        <div class="d-act-brand ml-auto align-self-end">
                            <img src="https://is4-ssl.mzstatic.com/image/thumb/Purple49/v4/63/81/80/638180c5-da20-399a-6b6d-5b6e929c66ea/mzl.jetjqidv.png/400x400.png" />
                            <span>Automated Learning Solution  </span>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="d-bulletin">
                <div class="d-event-wrapper">
                    <h3 class="d-sub-title">Partners Bulletin <i class="fas fa-list"></i></h3>
                    <ul class="bulletin-list">
                        <li>Our Partners are giving away free training apps giving away free training apps</li>
                        <li>Don't Miss martin at </li>
                        <li>Moodle Mug competiton starting over at</li>
                    </ul>
                </div>
            </div>

            <div class="d-sponsors">
                <div class="d-event-wrapper">
                    <h3 class="d-sub-title">Our Partners and Sponsors</h3>
                    <ul class="d-sponsor-list">
                        <li><img src="http://placehold.jp/100x100.png"></li><li><img src="http://placehold.jp/100x100.png"></li>
                        <li><img src="http://placehold.jp/100x100.png"></li>
                        <li><img src="http://placehold.jp/100x100.png"></li>
                        <li><img src="http://placehold.jp/100x100.png"></li><li><img src="http://placehold.jp/100x100.png"></li>
                        <li><img src="http://placehold.jp/100x100.png"></li><li><img src="http://placehold.jp/100x100.png"></li>
                        <li><img src="http://placehold.jp/100x100.png"></li>
                        <li><img src="http://placehold.jp/100x100.png"></li><li><img src="http://placehold.jp/100x100.png"></li>
                        <li><img src="http://placehold.jp/100x100.png"></li><li><img src="http://placehold.jp/100x100.png"></li>
                        <li><img src="http://placehold.jp/100x100.png"></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</div>
<?php
echo $OUTPUT->footer();