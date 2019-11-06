<!DOCTYPE html>
<html lang="en">
<head>   
    <title> Industrial - Industry, Factory and Engineering Template </title>
    <?php include 'head.php'; ?>
    <style type="text/css">
        .fun-fact .grid:after {
            display: none;
        }

        .tabs-box{
    position: relative;
}

.tabs-box .tab-buttons{
    position: relative;
}

.tabs-box .tab-buttons .tab-btn{
    position: relative;
    display: inline-block;
    cursor: pointer;
}

.tabs-box .tabs-content{
    position: relative;
}

.tabs-box .tabs-content .tab{
    position: relative;
    display: none;
}

.tabs-box .tabs-content .tab.active-tab{
    display: block;
}

.tabs-style-one .tab-buttons{
    position: relative;
    margin-bottom: 35px;
}

.tabs-style-one .tab-buttons .tab-btn{
    position: relative;
    float: left;
    margin-right: 45px;
    text-align: center;
    font-size: 18px;
    text-transform: capitalize;
    color: #888888;
    font-weight: 700;
    transition:all 500ms ease;
    -moz-transition:all 500ms ease;
    -webkit-transition:all 500ms ease;
    -ms-transition:all 500ms ease;
    -o-transition:all 500ms ease;
}

.tabs-style-one .tab-buttons .tab-btn .icon{
    display: block;
    line-height: 1em;
    font-size: 32px;
    font-weight: 400;
    margin-bottom: 15px;
}

.tabs-style-one .tab-buttons .tab-btn .txt{
    display: block;
    position: relative;
    padding-bottom: 5px;
}

.tabs-style-one .tab-buttons .tab-btn .txt:before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    border-bottom: 3px solid transparent;
    transition:all 500ms ease;
    -moz-transition:all 500ms ease;
    -webkit-transition:all 500ms ease;
    -ms-transition:all 500ms ease;
    -o-transition:all 500ms ease;
}

.tabs-style-one .tab-buttons .tab-btn.active-btn .txt{
    color: #001e57;
}

.tabs-style-one .tab-buttons .tab-btn.active-btn .txt:before{
    width: 100%;
    border-color: #fdce19;
}

.tabs-style-one .tab-buttons .tab-btn.active-btn .icon{
    color: #fdce19;
}

.tabs-style-one .tab p{
    margin-bottom: 30px;
}

.tabs-style-one .tab ul{
    position: relative;
    margin-bottom: 30px;
}

.tabs-style-one .tab ul li{
    position: relative;
    padding-left: 28px;
    font-weight: 700;
    color: #222222;
    margin-bottom: 10px;
    line-height: 1.5em;
}

.tabs-style-one .tab ul li:before{
    position:absolute;
    left: 0;
    top: 0px;
    display:block;
    font-size:14px;
    line-height: 1.4em;
    padding: 0px;
    color:#888888;
    font-weight:900;
    font-family: "Font Awesome 5 Free";
}

.tabs-style-one .tab .link-box{
    position: relative;
    padding-top: 20px;
}

.tabs-style-one .tab .read-more{
    position:relative;
    color:#fdce19;
    font-weight:700;
    display:inline-block;
    font-size: 14px;
    text-transform:uppercase;
    text-decoration:underline;
    transition:all 500ms ease;
    -moz-transition:all 500ms ease;
    -webkit-transition:all 500ms ease;
    -ms-transition:all 500ms ease;
    -o-transition:all 500ms ease;
}

.tabs-style-one .tab .read-more .fas{
    position:relative;
    font-size:16px;
    font-weight:700;
    padding-left:5px;
    color:#001e57;
}

.tabs-style-one .tab .read-more:hover{
    color:#fdce19;
}


    </style>
</head>

<body>
    <div class="page-wrapper">
        <?php include 'loader.php'; ?>
        <?php include 'header.php'; ?>
        <?php include 'slider.php'; ?>   
        <?php include 'client_section.php'; ?>  
        <?php include 'what_we_offer.php'; ?>       
        <?php // include 'home_boxes.php'; ?>
        <?php include 'recent_projects_section.php'; ?>
        <section class="fun-fact">
            <div class="container">
                <h2 style="font-weight: normal;">We are committed to provide safe, <br/>Industrial Solutions to many Factories and Organizations.</h2>
            </div>
            <div style="padding: 30px;"></div>
            <div class="container">
                <div class="row start-count">
                    <div class="col col-sm-3">
                        <div class="grid">
                            <h3><span class="counter" data-count="1200">25</span><span>+</span></h3>
                            <span class="fact-title">Years Experienced</span>
                            <p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
                        </div>
                    </div>
                    <div class="col col-sm-3">
                        <div class="grid">
                            <h3><span class="counter" data-count="152">800</span><span>+</span></h3>
                            <span class="fact-title">Industries Served</span>
                            <p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
                        </div>
                    </div>
                    <div class="col col-sm-3">
                        <div class="grid">
                            <h3><span class="counter" data-count="120" style="color: #333;">99</span></h3>
                            <span class="fact-title">Factories Built</span>
                            <p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
                        </div>
                    </div>

                    <div class="col col-sm-3">
                        <div class="grid">
                            <h3><span class="counter" data-count="167" style="color: #333;">99</span></h3>
                            <span class="fact-title">Projects Developed</span>
                            <p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <?php include 'testimonial_section.php'; ?>
        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <span>We are Maruti Nandan</span>
                        <h2 style="line-height: 1.3em">We offer Industrial Solutions that are reliable, efficient, safe and sustainable.</h2>
                        <hr/>
                        <div class="tabs-box tabs-style-one">
                            <ul class="tab-buttons clearfix">
                                <li class="tab-btn active-btn" data-toggle="tab" data-tab="#tab-1"><div class="icon"><span class="fa fa-star"></span></div><div class="txt">Approach</div></li>
                                <li class="tab-btn" data-tab="#tab-2" data-toggle="tab"><div class="icon"><span class="fa fa-heart"></span></div><div class="txt">Mission</div></li>
                                <li class="tab-btn" data-tab="#tab-3" data-toggle="tab"><div class="icon"><span class="fa fa-folder"></span></div><div class="txt">History</div></li>
                            </ul>
                            <div class="tabs-content">
                                <!--Tab-->
                                <div class="tab active-tab animated fadeIn" id="tab-1" style="display: block;">
                                    <p>Incididunt ut labore et dolore magna aliqua. At enim ad minim veniam, quis nos trud exercitation ullamco laboris nisi ut aliquip ex ea comaody consequat duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                    <ul>
                                        <li>Leading industrial solutions with best machinery</li>
                                        <li>Voluptatem acusantium doloremque laudantium totam</li>
                                        <li>Aperiam, eaque ipsa quae ab illo inventore veritatis</li>
                                    </ul>

                                    <div class="link-box"><a href="about.html" class="read-more">About Company <span class="fa fa-angle-right"></span></a></div>
                                </div>
                                <!--Tab-->
                                <div class="tab" id="tab-2" style="display: none;">
                                    <p>Incididunt ut labore et dolore magna aliqua. At enim ad minim veniam, quis nos trud exercitation ullamco laboris nisi ut aliquip ex ea comaody consequat duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                    <ul>
                                        <li>Leading industrial solutions with best machinery</li>
                                        <li>Voluptatem acusantium doloremque laudantium totam</li>
                                        <li>Aperiam, eaque ipsa quae ab illo inventore veritatis</li>
                                    </ul>

                                    <div class="link-box"><a href="about.html" class="read-more">About Company <span class="fa fa-angle-right"></span></a></div>
                                </div>
                                <!--Tab-->
                                <div class="tab" id="tab-3" style="display: none;">
                                    <p>Incididunt ut labore et dolore magna aliqua. At enim ad minim veniam, quis nos trud exercitation ullamco laboris nisi ut aliquip ex ea comaody consequat duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                    <ul>
                                        <li>Leading industrial solutions with best machinery</li>
                                        <li>Voluptatem acusantium doloremque laudantium totam</li>
                                        <li>Aperiam, eaque ipsa quae ab illo inventore veritatis</li>
                                    </ul>

                                    <div class="link-box"><a href="about.html" class="read-more">About Company <span class="fa fa-angle-right"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <img src="assets/images/s.jpg" style="width: 100%">
                    </div>
                </div>
            </div>
        </section>
        
        <?php // include 'faq_section.php'; ?>
        <?php include 'request_a_qoute.php'; ?>
        <?php //include 'recent_news_section.php'; ?>
        
        <?php include 'footer.php'; ?>
    </div>
  <?php include 'scripts.php'; ?>
  <script type="text/javascript">
      $(function(){
        if($('.tabs-box').length){
        $('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
            e.preventDefault();
            var target = $($(this).attr('data-tab'));
            
            if ($(target).is(':visible')){
                return false;
            }else{
                target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
                $(this).addClass('active-btn');
                target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
                target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab animated fadeIn');
                $(target).fadeIn(0);
                $(target).addClass('active-tab animated fadeIn');
            }
        });
    }
      });
  </script>
</body>

</html>
