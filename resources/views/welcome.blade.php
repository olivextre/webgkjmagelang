@extends('frontend.layouts.master')
@section('content')

<div id="fh5co-intro">
    <div class="row animate-box">
        <div class="col-md-12 col-md-offset-0 text-center">
            <h2>Living in God's Amazing Grace!</h2>
            <span>We are open Sunday to Monday</span>
        </div>
    </div>
</div>
<hr>
<div id="fh5co-counter" class="fh5co-counters">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center animate-box">
            <p>We have a fun facts far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
    </div>
    <div class="row animate-box">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="9452" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Members</span>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="214" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Ministries</span>
                </div>
                <div class="clearfix visible-sm-block visible-xs-block"></div>
                <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="433" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Classes</span>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="512" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Activities</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fh5co-services" class="fh5co-light-grey">
    <div class="row animate-box">
        <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
            <h2>Services</h2>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 animate-box">
            <div class="services">
                <a href="#" class="img-holder"><img class="img-responsive" src="{{asset('gereja/images/img-1.jpg')}}" alt="Free HTML5 Website Template by freehtml5.co"></a>
                <div class="desc">
                    <h3><a href="#">Live Events</a></h3>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 animate-box">
            <div class="services">
                <a href="#" class="img-holder"><img class="img-responsive" src="{{asset('gereja/images/img-3.jpg')}}" alt="Free HTML5 Website Template by freehtml5.co"></a>
                <div class="desc">
                    <h3><a href="#">Biblical Counseling</a></h3>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 animate-box">
            <div class="services">
                <a href="#" class="img-holder"><img class="img-responsive" src="{{asset('gereja/images/img-2.jpg')}}" alt="Free HTML5 Website Template by freehtml5.co"></a>
                <div class="desc">
                    <h3><a href="#">Helping Children</a></h3>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-sermon">
    <div class="row animate-box">
        <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
            <h2>Our Sermons</h2>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-center animate-box">
            <div class="sermon-entry">
                <div class="sermon" style="background-image: url(../gereja/images/sermon-1.jpg);">
                    <div class="play">
                        <a class="popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play3"></i></a>
                    </div>
                </div>
                <h3>Soul Winning</h3>
                <span>Pstr. John Doe</span>
            </div>
        </div>
        <div class="col-md-4 text-center animate-box">
            <div class="sermon-entry">
                <div class="sermon" style="background-image: url(../gereja/images/sermon-3.jpg);">
                    <div class="play">
                        <a class="popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play3"></i></a>
                    </div>
                </div>
                <h3>Message From God</h3>
                <span>Pstr. John Doe</span>
            </div>
        </div>
        <div class="col-md-4 text-center animate-box">
            <div class="sermon-entry">
                <div class="sermon" style="background-image: url(../gereja/images/sermon-2.jpg);">
                    <div class="play">
                        <a class="popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play3"></i></a>
                    </div>
                </div>
                <h3>Our World Today</h3>
                <span>Pstr. John Doe</span>
            </div>
        </div>
    </div>
</div>
<div id="fh5co-bible-verse">
    <div class="overlay"></div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row animate-box">
                <div class="owl-carousel owl-carousel-fullwidth">
                    <div class="item">
                        <div class="bible-verse-slide active text-center">
                            <blockquote>
                                <p>&ldquo;For God so loved the world, that he gave his only begotten Son, that whosoever believeth in him should not perish, but have everlasting life.&rdquo;</p>
                                <span>John 3:16</span>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="bible-verse-slide active text-center">
                            <blockquote>
                                <p>&ldquo;The LORD [is] my strength and my shield; my heart trusted in him, and I am helped: therefore my heart greatly rejoiceth; and with my song will I praise him.&rdquo;</p>
                                <span>Psalms 28:7</span>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="bible-verse-slide active text-center">
                            <blockquote>
                                <p>&ldquo;And we have known and believed the love that God hath to us. God is love; and he that dwelleth in love dwelleth in God, and God in him.&rdquo;</p>
                                <span>1 John 4:16</span>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fh5co-events">
    <div class="row animate-box">
        <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
            <h2>Our Events</h2>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 animate-box">
            <div class="events-entry">
                <span class="date">March 10, 2017</span>
                <h3><a href="#">Message From God</a></h3>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                <a href="#">Read More <i class="icon-arrow-right3"></i></a>
            </div>
        </div>
        <div class="col-md-4 animate-box">
            <div class="events-entry">
                <span class="date">March 20, 2017</span>
                <h3><a href="#">Message From God</a></h3>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                <a href="#">Read More <i class="icon-arrow-right3"></i></a>
            </div>
        </div>
        <div class="col-md-4 animate-box">
            <div class="events-entry">
                <span class="date">March 30, 2017</span>
                <h3><a href="#">Message From God</a></h3>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                <a href="#">Read More <i class="icon-arrow-right3"></i></a>
            </div>
        </div>
    </div>
</div>
<div id="fh5co-news" class="fh5co-light-grey">
    <div class="row animate-box">
        <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
            <h2>Our News</h2>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 animate-box">
            <div class="news">
                <a href="#" class="img-holder"><img class="img-responsive" src="images/img-1.jpg" alt="Free HTML5 Website Template by freehtml5.co"></a>
                <div class="desc">
                    <span class="date">March 30, 2017</span>
                    <h3><a href="#">Live News</a></h3>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 animate-box">
            <div class="news">
                <a href="#" class="img-holder"><img class="img-responsive" src="images/img-3.jpg" alt="Free HTML5 Website Template by freehtml5.co"></a>
                <div class="desc">
                    <span class="date">March 30, 2017</span>
                    <h3><a href="#">Biblical Counseling</a></h3>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 animate-box">
            <div class="news">
                <a href="#" class="img-holder"><img class="img-responsive" src="images/img-2.jpg" alt="Free HTML5 Website Template by freehtml5.co"></a>
                <div class="desc">
                    <span class="date">March 30, 2017</span>
                    <h3><a href="#">Helping Children</a></h3>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 animate-box">
            <div class="news">
                <a href="#" class="img-holder"><img class="img-responsive" src="images/img-4.jpg" alt="Free HTML5 Website Template by freehtml5.co"></a>
                <div class="desc">
                    <span class="date">March 30, 2017</span>
                    <h3><a href="#">Helping Children</a></h3>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    <a href="#">Read More <i class="icon-arrow-right3"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
