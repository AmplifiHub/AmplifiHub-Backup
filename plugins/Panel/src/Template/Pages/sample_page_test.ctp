
<?php
/**
 * @var \App\View\AppView $this
 */
 $this->assign('title','About');
?>

    <style>
        .video-wrapper {
        	position: relative;
        	padding-bottom: 56.25%; /* 16:9 */
        	padding-top: 25px;
        	height: 0;
        }
        
        .video-wrapper video {
            	position: absolute;
            	top: 0;
            	left: 0;
            	width: 100%;
            	height: 100%;
        }
        
        @media screen and (max-width: 960px){
         
            .video-wrapper video {
                top: 30px;
            }
            
        }
        
        @media screen and (max-width: 600px){
            
            .video-wrapper video {
                
                   width: 200% !important;
                   height: 400px;
                   top: 75px !important;
                    margin-left: -44%;
            }
        }
    </style>
    <style>
    /*@media (min-width: 360px) and (max-width: 399px){ 
        .fa{
            font-size: 20px;
            color: #E40D40;
        }
        
    }
    @media (min-width: 400px){ 
        .fa{
            font-size: 20px;
            color: #E40D40;
        }*/
        
    }
</style>

    <main id="main">
<div class="wrap-area">
         <div id="mobile-menu"></div>
     
     <div class="header-area">
            <div class="container">
                <div class="row" style="margin-top:80px;">
                   <div class="col-11 col-sm-6" style="margin:10px;">
                       <div class="header-text">
                            <h2>The Best Of African Samples, Packs, Midi And Loops Just For You.</h2>
                            <strong><p style="font-size:17px; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, hic cum minus eligendi officiis vero labore omnis est maxime aperiam quam officia eius nisi quod nam quos neque incidunt aut at quis nemo laborum deserunt commodi eos voluptates. Iste, laudantium.</p></strong>
                        </div>
                   </div>
                    <div class="col-12 col-sm-5">
                        <div class="header-image">
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-12">
                        <div class="simple-search-are">
                            <form action="">
                                <input type="submit" value="Search for Samples">
                                <span>Or Sort By...</span>
                                <select class="mdb-select md-form year">
                                  <option value="" disabled selected>Year</option>
                                  <option value="1">2018</option>
                                  <option value="2">2017</option>
                                  <option value="3">2016</option>
                                </select>
                                <select class="mdb-select md-form genre">
                                  <option value="" disabled selected>Genre</option>
                                  <option value="1">2 Person</option>
                                  <option value="2">4 Person</option>
                                  <option value="3">6 Person</option>
                                </select>
                                <select class="mdb-select md-form type">
                                  <option value="" disabled selected>Type</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="featured-simple-area">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col text-center">
                         <h4>Featured Samples</h4>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-6 col-sm-3">
                         <div class="Featured-simples-gallery">
                             <div class="featured-bg">
                                <div class="card-btn">
                                    <a href=""><i class="fa fa-shopping-cart fa-2x"></i></a>
                                </div>
                                 <div class="play-btn">
                                     <a href=""><i class="fa fa-play"></i></a>
                                 </div>
                                 <div class="featured-content">
                                     <ul>
                                         <li><a href="">Afrobeat</a></li>
                                         <li><a href="">90s</a></li>
                                         <li><a href="">Drums</a></li>
                                     </ul>
                                 </div>
                             </div>
                             <span>Sample Name - <strong>$2,000</strong></span>
                         </div>
                     </div>
                     <div class="col-6 col-sm-3">
                         <div class="Featured-simples-gallery">
                             <div class="featured-bg">
                                <div class="card-btn">
                                    <a href=""><i class="fa fa-shopping-cart fa-2x"></i></a>
                                </div>
                                 <div class="play-btn">
                                     <a href=""><i class="fa fa-play"></i></a>
                                 </div>
                                 <div class="featured-content">
                                     <ul>
                                         <li><a href="">Afrobeat</a></li>
                                         <li><a href="">90s</a></li>
                                         <li><a href="">Drums</a></li>
                                     </ul>
                                 </div>
                             </div>
                             <span>Sample Name - <strong>$2,000</strong></span>
                         </div>
                     </div>
                     <div class="col-6 col-sm-3">
                         <div class="Featured-simples-gallery">
                             <div class="featured-bg">
                                <div class="card-btn">
                                    <a href=""><i class="fa fa-shopping-cart fa-2x"></i></a>
                                </div>
                                 <div class="play-btn">
                                     <a href=""><i class="fa fa-play"></i></a>
                                 </div>
                                 <div class="featured-content">
                                     <ul>
                                         <li><a href="">Afrobeat</a></li>
                                         <li><a href="">90s</a></li>
                                         <li><a href="">Drums</a></li>
                                     </ul>
                                 </div>
                             </div>
                             <span>Sample Name - <strong>$2,000</strong></span>
                         </div>
                     </div>
                     <div class="col-6 col-sm-3">
                         <div class="Featured-simples-gallery">
                             <div class="featured-bg">
                                <div class="card-btn">
                                    <a href=""><i class="fa fa-shopping-cart fa-2x"></i></a>
                                </div>
                                 <div class="play-btn">
                                     <a href=""><i class="fa fa-play"></i></a>
                                 </div>
                                 <div class="featured-content">
                                     <ul>
                                         <li><a href="">Afrobeat</a></li>
                                         <li><a href="">90s</a></li>
                                         <li><a href="">Drums</a></li>
                                     </ul>
                                 </div>
                             </div>
                             <span>Sample Name - <strong>$2,000</strong></span>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-6 col-sm-3">
                         <div class="Featured-simples-gallery">
                             <div class="featured-bg">
                                <div class="card-btn">
                                    <a href=""><i class="fa fa-shopping-cart fa-2x"></i></a>
                                </div>
                                 <div class="play-btn">
                                     <a href=""><i class="fa fa-play"></i></a>
                                 </div>
                                 <div class="featured-content">
                                     <ul>
                                         <li><a href="">Afrobeat</a></li>
                                         <li><a href="">90s</a></li>
                                         <li><a href="">Drums</a></li>
                                     </ul>
                                 </div>
                             </div>
                             <span>Sample Name - <strong>$2,000</strong></span>
                         </div>
                     </div>
                     <div class="col-6 col-sm-3">
                         <div class="Featured-simples-gallery">
                             <div class="featured-bg">
                                <div class="card-btn">
                                    <a href=""><i class="fa fa-shopping-cart fa-2x"></i></a>
                                </div>
                                 <div class="play-btn">
                                     <a href=""><i class="fa fa-play"></i></a>
                                 </div>
                                 <div class="featured-content">
                                     <ul>
                                         <li><a href="">Afrobeat</a></li>
                                         <li><a href="">90s</a></li>
                                         <li><a href="">Drums</a></li>
                                     </ul>
                                 </div>
                             </div>
                             <span>Sample Name - <strong>$2,000</strong></span>
                         </div>
                     </div>
                     <div class="col-6 col-sm-3">
                         <div class="Featured-simples-gallery">
                             <div class="featured-bg">
                                <div class="card-btn">
                                    <a href=""><i class="fa fa-shopping-cart fa-2x"></i></a>
                                </div>
                                 <div class="play-btn">
                                     <a href=""><i class="fa fa-play"></i></a>
                                 </div>
                                 <div class="featured-content">
                                     <ul>
                                         <li><a href="">Afrobeat</a></li>
                                         <li><a href="">90s</a></li>
                                         <li><a href="">Drums</a></li>
                                     </ul>
                                 </div>
                             </div>
                             <span>Sample Name - <strong>$2,000</strong></span>
                         </div>
                     </div>
                     <div class="col-6 col-sm-3">
                         <div class="Featured-simples-gallery">
                             <div class="featured-bg">
                                <div class="card-btn">
                                    <a href=""><i class="fa fa-shopping-cart fa-2x"></i></a>
                                </div>
                                 <div class="play-btn">
                                     <a href=""><i class="fa fa-play"></i></a>
                                 </div>
                                 <div class="featured-content">
                                     <ul>
                                         <li><a href="">Afrobeat</a></li>
                                         <li><a href="">90s</a></li>
                                         <li><a href="">Drums</a></li>
                                     </ul>
                                 </div>
                             </div>
                             <span>Sample Name - <strong>$2,000</strong></span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
        
        <div class="sample-content">
             <div class="sample-playlist-area">
                <div class="playlist-title">
                     <h4>Samples Playlist</h4>
                 </div>
                 <div class="custom-scrollbar">
                     <div class="sample-playlist">
                         <div class="single-playlist">
                             <div class="playlist-btn">
                                 <a href=""><i class="fa fa-play"></i></a>
                             </div>
                             <p>sample name - genre - year - sample type - <strong>N2,000</strong></p>
                             <a href="" class="buy-btn"> Buy</a>
                         </div>
                     </div>
                     <div class="sample-playlist">
                         <div class="single-playlist">
                             <div class="playlist-btn">
                                 <a href=""><i class="fa fa-play"></i></a>
                             </div>
                             <p>sample name - genre - year - sample type - <strong>N2,000</strong></p>
                             <a href="" class="buy-btn"> Buy</a>
                         </div>
                     </div>
                     <div class="sample-playlist">
                         <div class="single-playlist">
                             <div class="playlist-btn">
                                 <a href=""><i class="fa fa-play"></i></a>
                             </div>
                             <p>sample name - genre - year - sample type - <strong>N2,000</strong></p>
                             <a href="" class="buy-btn"> Buy</a>
                         </div>
                     </div>
                     <div class="sample-playlist">
                         <div class="single-playlist">
                             <div class="playlist-btn">
                                 <a href=""><i class="fa fa-play"></i></a>
                             </div>
                             <p>sample name - genre - year - sample type - <strong>N2,000</strong></p>
                             <a href="" class="buy-btn"> Buy</a>
                         </div>
                     </div>
                     <div class="sample-playlist">
                         <div class="single-playlist">
                             <div class="playlist-btn">
                                 <a href=""><i class="fa fa-play"></i></a>
                             </div>
                             <p>sample name - genre - year - sample type - <strong>N2,000</strong></p>
                             <a href="" class="buy-btn"> Buy</a>
                         </div>
                     </div>
                     <div class="sample-playlist">
                         <div class="single-playlist">
                             <div class="playlist-btn">
                                 <a href=""><i class="fa fa-play"></i></a>
                             </div>
                             <p>sample name - genre - year - sample type - <strong>N2,000</strong></p>
                             <a href="" class="buy-btn"> Buy</a>
                         </div>
                     </div>
                     <div class="sample-playlist">
                         <div class="single-playlist">
                             <div class="playlist-btn">
                                 <a href=""><i class="fa fa-play"></i></a>
                             </div>
                             <p>sample name - genre - year - sample type - <strong>N2,000</strong></p>
                             <a href="" class="buy-btn"> Buy</a>
                         </div>
                     </div>
                     <div class="sample-playlist">
                         <div class="single-playlist">
                             <div class="playlist-btn">
                                 <a href=""><i class="fa fa-play"></i></a>
                             </div>
                             <p>sample name - genre - year - sample type - <strong>N2,000</strong></p>
                             <a href="" class="buy-btn"> Buy</a>
                         </div>
                     </div>
                     <div class="sample-playlist">
                         <div class="single-playlist">
                             <div class="playlist-btn">
                                 <a href=""><i class="fa fa-play"></i></a>
                             </div>
                             <p>sample name - genre - year - sample type - <strong>N2,000</strong></p>
                             <a href="" class="buy-btn"> Buy</a>
                         </div>
                     </div>
                     <div class="sample-playlist">
                         <div class="single-playlist">
                             <div class="playlist-btn">
                                 <a href=""><i class="fa fa-play"></i></a>
                             </div>
                             <p>sample name - genre - year - sample type - <strong>N2,000</strong></p>
                             <a href="" class="buy-btn"> Buy</a>
                         </div>
                     </div>
                     <div class="sample-playlist">
                         <div class="single-playlist">
                             <div class="playlist-btn">
                                 <a href=""><i class="fa fa-play"></i></a>
                             </div>
                             <p>sample name - genre - year - sample type - <strong>N2,000</strong></p>
                             <a href="" class="buy-btn"> Buy</a>
                         </div>
                     </div>
                     <div class="sample-playlist">
                         <div class="single-playlist">
                             <div class="playlist-btn">
                                 <a href=""><i class="fa fa-play"></i></a>
                             </div>
                             <p>sample name - genre - year - sample type - <strong>N2,000</strong></p>
                             <a href="" class="buy-btn"> Buy</a>
                         </div>
                     </div>
                 </div>
             </div>


             <div class="sample-packs-area">
                 <div class="packs-title">
                     <h4>Sample packs</h4>
                 </div>
                 <div class="sample-packs">
                     <div class="single-packs-bg">
                        <div class="card-btn">
                            <a href=""><i class="fa fa-shopping-cart fa-2x"></i></a>
                        </div>
                     </div>
                     <span>Sample Pack - <strong>$2,000</strong></span>
                 </div>
                 <div class="sample-packs">
                     <div class="single-packs-bg">
                        <div class="card-btn">
                            <a href=""><i class="fa fa-shopping-cart fa-2x"></i></a>
                        </div>
                     </div>
                     <span>Sample Pack - <strong>$2,000</strong></span>
                 </div>
                 <div class="sample-packs">
                     <div class="single-packs-bg">
                        <div class="card-btn">
                            <a href=""><i class="fa fa-shopping-cart fa-2x"></i></a>
                        </div>
                     </div>
                     <span>Sample Pack - <strong>$2,000</strong></span>
                 </div>
                 <div class="sample-packs">
                     <div class="single-packs-bg">
                        <div class="card-btn">
                            <a href=""><i class="fa fa-shopping-cart fa-2x"></i></a>
                        </div>
                     </div>
                     <span>Sample Pack - <strong>$2,000</strong></span>
                 </div>
             </div>
         </div>
         
         
     
     
     
     </div>    
</div>
