<style>

.btn1 {background-color: orange;}
.btn2 {background-color: blue;}

    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
    

.toggle, .toggler {
  display: inline-block;
  vertical-align: middle;
  margin: 10px;
}

.toggler {
  color: #ddd;
  transition: .2s;
  font-weight: bold;
}

.toggler--is-active {
  color: green;
}

.b {
  display: block;
}

.toggle {
  position: relative;
  width: 60px;
  height: 27px;
  border-radius: 100px;
  background-color: green;
  overflow: hidden;
  box-shadow: inset 0 0 2px 1px rgba(0, 0, 0, 0.05);
}

.check {
  position: absolute;
  display: block;
  cursor: pointer;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  z-index: 6;
}

.check:checked ~ .switch {
  right: 2px;
  left: 57.5%;
  transition: 0.25s cubic-bezier(0.785, 0.135, 0.15, 0.86);
  transition-property: left, right;
  transition-delay: .08s, 0s;
}

.switch {
  position: absolute;
  left: 2px;
  top: 2px;
  bottom: 2px;
  right: 57.5%;
  background-color: #fff;
  border-radius: 36px;
  z-index: 1;
  transition: 0.25s cubic-bezier(0.785, 0.135, 0.15, 0.86);
  transition-property: left, right;
  transition-delay: 0s, .08s;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}

.panel-default>.panel-heading {
    color: #333;
    background-color: #f5f5f5;
    border-color: #ddd;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

</style>
<?php
/**
 * @var \App\View\AppView $this
 */
 
?>
<h1 style="font-weight: unset; margin-right: 24px;"> Upload Tracks
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item" aria-current="page">distribute music</li>
    <li class="breadcrumb-item active" aria-current="page">upload Tracks</li>
  </ol>
</nav>
<div class="row" >
    <div class="col-lg-1 col-md-1"></div>
    <div class ="col-md-12 col-lg-10">
        <div class="panel panel-default" style="
        text-align: center; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border: none;
    border-radius: 10px;">
        <div class="panel-heading">
             <?php
           // echo $today;exit;
            if($number == 0 && $beatcount <=3 && $today < $expiretrial){ ?>
            <div class="alert alert-warning">
    <strong>Trial Account!</strong> Please subscribe to a plan to fully use AmplifiHub.
    </div>
    <?php }elseif($number == 0 && $beatcount <=3 && $today > $expiretrial){ ?>
            
            
            <div class="alert alert-warning">
    <strong>Trial Account Expired!</strong> Please subscribe to a plan to continue using AmplifiHub.
    </div>
    <?php }elseif($pUser->role == 'trial'){ ?>
    <div class="alert alert-warning">
    <strong>Trial Account!</strong> Please subscribe to a plan to fully use AmplifiHub.
    </div>
    <?php } elseif($number > 0 && $beatcount <=3 && $pUser->role == 'trial'){?>
    <div class="alert alert-warning">
    <strong>Trial Account!</strong> Please subscribe to a plan to fully use AmplifiHub.
    </div>
    <?php } ?>
    <?php if($beatcount == 3 && $number == 0){ ?>
        <div class="alert alert-danger">
        <strong>Limited!</strong> You are not able to upload more than three(3) beats in trial account.
        </div>
    <?php } ?>
    
            <h1><?= __('Upload Your Track') ?> <a href="JavaScript:void(0);" data-toggle="tooltip" title="Learn  <a href='https://support.amplifihub.com/312228-Music-Distribution' target='_blank' style='color:#fff;font-weight:bolder;'>how to upload music for distribution here</a>" data-html="true" ><i class="fa fa-question-circle"></i></a></h1>
    <p>Uploading an Album? <a href='https://support.amplifihub.com/597199--How-To-Upload-An-Album-For-Distribution-On-AmplifiHub' target='_blank' style='color:#e30d40;font-weight:bolder;'>Click here to learn how to upload an album</a></p>
    <p>Uploading a Single? <a href='https://support.amplifihub.com/536843--How-To-Upload-Music-For-Distribution-On-AmplifiHub-' target='_blank' style='color:#e30d40;font-weight:bolder;'>Click here to learn how to upload a single</a></p>
    <h5 style="font-weight:bolder;">NB : Allow up to 72 hours for the team to review your submission.</h5>   
        </div>


<div class="stores form large-9 medium-8 columns content">
<div class="panel-body" >
    <?= $this->Form->create($store, ['type' => 'file','id'=> 'addtracks']) ?>
 <div class="row">
           <!--<div class="col-md-4"></div>
           <div class="col-md-4">
               <div><h3>Beat Cover Image (Square) <a href="JavaScript:void(0);" data-toggle="tooltip" title="Square min400x400" data-html="true" ><i class="fa fa-question-circle"></i></a></h3></div>
               <div id="uploaded_image"></div>
                <div class="box">
                      <?= $this->Form->control('cover',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-5','label'=> false,'required'=>true]); ?>
					<label for="file-5"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Add Cover Image</span></label>
				</div>
           </div>
           <div class="col-md-4">  </div>
       </div>
      <input type="hidden" id="new_croppie_img" name="new_croppie_img" />
      -->
      
    <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Song Title</h4></div>
            
                      <?= $this->Form->control('song_title',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'name','placeholder' => 'official song title','label'=> false,'required'=> true]); ?>
		
           </div>
           <div class="col-md-2"></div>
       </div>
    
    
     <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Music Genre</h4></div>
            
                      <?= $this->Form->control('genre',['options'=>$genre,'empty'=>'choose genre','placeholder'=>'Select Genre','templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control select2-country'],'id' => 'genre','placeholder' => 'what is the song genre?','label'=> false,'required'=>true]); ?>
		
           </div>
           <div class="col-md-2"></div>
       </div>
    
    
      <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Release/Album Title</h4></div>
            
                      <?= $this->Form->control('album_title',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'album_title','placeholder' => 'type in the album name, use song title as album name if upload is not an album','label'=> false,'required'=> true]); ?>
		
           </div>
           <div class="col-md-2"></div>
       </div>

       
       
       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Primary Artiste</h4></div>
            
                      <?= $this->Form->control('ar_name1',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'primary_artiste','placeholder' => 'your official stage name','label'=> false,'required'=> true]); ?>
		
           </div>
           <div class="col-md-2"></div>
       </div>
       
       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Featured Artiste</h4></div>
            
                      <?= $this->Form->control('ar_name2',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'featured_artiste', 'placeholder' => 'official stage names of featured artistes','label'=> false,'required'=> true]); ?>
		
           </div>
           <div class="col-md-2"></div>
       </div>
       
       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Authors</h4></div>
            
                      <?= $this->Form->control('authors',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'authors', 'placeholder' => 'real names of the singers and songwriters','label'=> false,'required'=> true]); ?>
		
           </div>
           <div class="col-md-2"></div>
       </div>
       
       
       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Composers</h4></div>
            
                      <?= $this->Form->control('composers',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'composers','placeholder' => 'real names of the singers, songwriters & music producers','label'=> false,'required'=> true]); ?>
		
           </div>
           <div class="col-md-2"></div>
       </div>
       
       
       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Label</h4></div>
            
                      <?= $this->Form->control('label',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'label','placeholder' => 'your record label name','label'=> false,'required'=> true]); ?>
		
           </div>
           <div class="col-md-2"></div>
       </div>
       
       <div class="row">
           <div class="col-md-2"></div>
           
            <div class="col-md-8">
               <div><h4>Production Year</h4></div>
                      <?= $this->Form->control('production_year',['min' => 0,'templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'production_year','placeholder' => 'what year was the song produced?','label'=> false,'required'=> true]); ?>
           </div>
        </div>
       
       <div class="row">
           <div class="col-md-2"></div>
           
            <div class="col-md-8">
               <div><h4>Country of Release</h4></div>
                      <?php $countries = array_merge(['World' => 'World'], $countries); echo $this->Form->control('country_of_release',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control select2-country'],'placeholder' => 'where was the song released?','label'=> false,'required'=> true, 'options' => $countries, 'empty' => 'Select country']); ?>
           </div>
        </div> 
       <div class="row">
           <div class="col-md-2"></div>
           
            <div class="col-md-8">
               <div><h4>Release Date</h4></div>
                      <?= $this->Form->control('release_date',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'production_year','placeholder' => 'when will the song be released?','label'=> false,'required'=> true, 'data-provide' => "datepicker",  "data-date-format" => "yyyy-mm-dd"]); ?>
           </div>
        </div> 
       <div class="row">
           <div class="col-md-2"></div>
           
            <div class="col-md-8">
               <div><h4>Executive Producers</h4></div>
                      <?= $this->Form->control('executive_producers',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'], 'id' => 'executive_producers','placeholder' => 'Executive Producers', 'label'=> false,'required'=> true,]); ?>
           </div>
        </div> 
       <div class="row">
           <div class="col-md-2"></div>
           
            <div class="col-md-8">
               <div><h4>Record Label Copyright Name</h4></div>
                      <?= $this->Form->control('record_label_copyright_name',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'], 'id' => 'record_label_copyright_name','placeholder' => 'record label copyright name', 'label'=> false,'required'=> true,]); ?>
           </div>
        </div>
       <div class="row">
           <div class="col-md-2"></div>
           
            <div class="col-md-8">
               <div><h4>Producer Publisher</h4></div>
                      <?= $this->Form->control('producer_publisher',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'], 'id' => 'producer_publisher','placeholder' => 'producer publisher', 'label'=> false,'required'=> true,]); ?>
           </div>
        </div> 
       <div class="row">
           <div class="col-md-2"></div>
           
            <div class="col-md-8">
               <div><h4>Main Artist Real Name</h4></div>
                      <?= $this->Form->control('main_artist_real_name',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'], 'id' => 'main_artist_real_name','placeholder' => 'main artist real name', 'label'=> false,'required'=> true,]); ?>
           </div>
        </div> 
       <div class="row">
           <div class="col-md-2"></div>
           
            <div class="col-md-8">
               <div><h4>Producer Real Name</h4></div>
                      <?= $this->Form->control('producer_real_name',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'], 'id' => 'producer_real_name','placeholder' => 'producer real name', 'label'=> false,'required'=> true,]); ?>
           </div>
        </div> 
       <div class="row">
           <div class="col-md-2"></div>
           
            <div class="col-md-8">
               <div><h4>Mixing and Mastering Engineer</h4></div>
                      <?= $this->Form->control('mixing_and_mastering_engineer',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'], 'id' => 'mixing_and_mastering_engineer','placeholder' => 'mixing and mastering engineer', 'label'=> false,'required'=> true,]); ?>
           </div>
        </div> 
       <div class="row">
           <div class="col-md-2"></div>
           
            <div class="col-md-8">
               <div><h4>Performers Real Name</h4></div>
                      <?= $this->Form->control('performers_real_name',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'], 'id' => 'performers_real_name','placeholder' => 'Performers real name', 'label'=> false,'required'=> true,]); ?>
           </div>
        </div> 
       <div class="row">
           <div class="col-md-2"></div>
           
            <div class="col-md-8">
               <div><h4>Writers Real Name</h4></div>
                      <?= $this->Form->control('writers_real_name',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'], 'id' => 'writers_real_name','placeholder' => 'writers real name', 'label'=> false,'required'=> true,]); ?>
           </div>
        </div> 
       <div class="row">
           <div class="col-md-2"></div>
           
            <div class="col-md-8">
               <div><h4>Lyricist Real Name</h4></div>
                      <?= $this->Form->control('lyricist_real_name',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'], 'id' => 'lyricist_real_name','placeholder' => 'lyricist real name', 'label'=> false,'required'=> true,]); ?>
           </div>
        </div> 
       <div class="row">
           <div class="col-md-2"></div>
           
            <div class="col-md-8">
               <div><h4>Lyrics</h4></div>
                      <?= $this->Form->control('lyrics',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'], 'id' => 'lyrics','placeholder' => 'lyrics', 'label'=> false,'required'=> true, 'type' => 'textarea']); ?>
           </div>
        </div> 
       <div class="row">
           <div class="col-md-2"></div>
           
            <div class="col-md-8">
               <div><h4>Language</h4></div>
                      <?= $this->Form->control('language',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'], 'id' => 'language','placeholder' => 'language', 'label'=> false,'required'=> true,]); ?>
           </div>
        </div> 
       <div class="row">
           <div class="col-md-2"></div>
           
            <div class="col-md-8">
               <div><h4>Recording Location</h4></div>
                      <?= $this->Form->control('recording_location',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'], 'id' => 'recording_location','placeholder' => 'recording location', 'label'=> false,'required'=> true,]); ?>
           </div>
        </div> 
       <div class="row">
           <div class="col-md-2"></div>
           
            <div class="col-md-8">
               <div><h4>Pre-order date</h4></div>
                      <?= $this->Form->control('pre_order_date',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'pre_order_date','placeholder' => 'set pre-order date','label'=> false,'required'=> true, 'data-provide' => "datepicker",  "data-date-format" => "yyyy-mm-dd"]); ?>
           </div>
        </div>
       <div class="row">
           <div class="col-md-2"></div>
           
            <div class="col-md-8">
                <?php
                $stores = [
                    '7Digital'=>'7Digital',
                    'Akazoo'=>'Akazoo',
                    'Amazon'=>'Amazon',
                    'Anghami' => 'Anghami',
                    'Apple Music'=>'Apple Music',
                    'Audible Magic'=>'Audible Magic',
                    'AudioLock'=>'AudioLock',
                    'AWA'=>'AWA',
                    'Boomplay'=>'Boomplay',
                    'Deezer'=>'Deezer',
                    'Facebook Audio Library'=>'Facebook Audio Library',
                    'Facebook Fingerprinting'=>'Facebook Fingerprinting',
                    'Google Music'=>'Google Music',
                    'Hungama'=>'Hungama',
                    'iHeartRadio'=>'iHeartRadio',
                    'JioSaavn'=>'JioSaavn',
                    'Joox'=>'Joox',
                    'Naver Music'=>'Naver Music',
                    'NetEase Cloud Music'=>'NetEase Cloud Music',
                    'Neurotic Media'=>'Neurotic Media',
                    'Nuuday A/S'=>'Nuuday A/S',
                    'Pandora'=>'Pandora',
                    'Resso'=>'Resso',
                    'Shazam'=>'Shazam',
                    'Simfy Africa'=>'Simfy Africa',
                    'SoundCloud'=>'SoundCloud',
                    'Spotify'=>'Spotify',
                    'Target Media'=>'Target Media',
                    'Tencent'=>'Tencent',
                    'Tesla Music'=>'Tesla Music',
                    'TIDAL'=>'TIDAL',
                    'TikTok'=>'TikTok',
                    'TIM Music'=>'TIM Music',
                    'TouchTunes / PlayNetwork'=>'TouchTunes / PlayNetwork',
                    'VEVO'=>'VEVO',
                    'Xiami'=>'Xiami',
                    'YouTube'=>'YouTube',
                    'YouTube Music'=>'YouTube Music'
                ];
                ?>
               <div><h4>Which Stores Should We Deliver To?</h4></div>
               <div class="form-group">
                  <?= $this->Form->select('delivery_stores', $stores, ['templates' => ['checkboxWrapper' => '{{label}}'], 'id' => 'delivery_stores','multiple' => 'checkbox']); ?>
               </div>
           </div>
        </div>
        <br/> 
                      <hr style="padding: 1px;background-color: #ccc;"/>
        <div class="checkbox" style="margin-left:16px; color:#e30d40;">
            <h4>Does Your Song Contain Explicit Content?</h4>
        <!--<input type="checkbox" name="advisory" id="advisory"><a style="color:#e30d40; font-weight:bold;" >Parental Advisory</a>-->
        
        <?= $this->Form->input('advisory', ['type' => 'checkbox','id'=> 'advisory','label' => 'Parental Advisory',
        'checked' => false]); ?>
        
        </div>
                
               <br/> 
                      <hr style="padding: 1px;background-color: #ccc;"/>
        <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
               <div><h3 class="songTitle">Upload Track <bolder>(ZIP FILE ONLY)</bolder> <a href="JavaScript:void(0);" data-toggle="tooltip" title="must be a ZIP file." data-html="true" ><i class="fa fa-question-circle"></i></a></h3>
                   <span>Supported type(Zip)</span>
               </div>
                <div class="box">
                      <?= $this->Form->control('song',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-7','label'=> false,'required'=> true]); ?>
					<label for="file-7"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Add Zip file&hellip;</span></label>
				</div>
				<h5 style="font-weight:bolder; color:red;">Please Include : Track(s), Artwork, Lyrics, Metadata etc. in the Zip file. Incomplete Metadata will lead to rejection. <a href='https://support.amplifihub.com/312228-Music-Distribution' target='_blank' style='color:green;font-weight:bolder;'>Click here to learn more</a></h5> 
           </div>
           <div class="col-md-4"></div>
       </div> 
       
       
       
                
                  
                
                
                
                <br/>
                
                <hr style="padding: 1px;background-color: #ccc;"/>
        <!--<div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
               <div><h3 class="songTitle">Non-Exclusive License <a href="JavaScript:void(0);" data-toggle="tooltip" title="must be mp3 only  <a href='https://amplifihub.freshdesk.com/support/solutions/articles/48000772471-understanding-the-beat-instrumental-license-types' target='_blank'>Learn more about beat licenses here</a>" data-html="true" ><i class="fa fa-question-circle"></i></a></h3>
               <span>Supported type/s(mp3 only)</span>
               </div>
                <div class="box">
                      <?= $this->Form->control('lease_name',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-4','label'=> false,'required'=> true]); ?>
					<label for="file-4"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Add Mp3 file&hellip;</span></label>
				</div>
           </div>
           <div class="col-md-4"></div>
       </div>   
                
                  <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div>
                   <?= $this->Form->input('lease_name', ['type' => 'checkbox','id'=> 'freeAccess','label' => 'Allow users to download this beat free',
    'checked' => false]); ?>
               </div>
               <div id="leasePriceHolder">
               <div><h4>Or enter pricing</h4></div>
            
                             <?= $this->Form->control('lease_price',['type'=>'number','min'=> 5000,'label' => false, 'templates' => ['inputContainer' => '{{content}}'], 'placeholder' => 'From 5000 and above','class'=>'form-control','id'=>'leasePrice','required' => true]); ?>
               </div>
		
           </div>
           <div class="col-md-2"></div>
       </div>
       
       <br/>
                <hr style="padding: 1px;background-color: #ccc;"/>
                
                <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
               <div><h3 class="songTitle">Exclusive  License <a href="JavaScript:void(0);" data-toggle="tooltip" title="must be wave <a href='https://amplifihub.freshdesk.com/support/solutions/articles/48000772471-understanding-the-beat-instrumental-license-types' target='_blank'>Learn more about beat licenses here</a>" data-html="true" ><i class="fa fa-question-circle"></i></a></h3>
               <span>Supported type/s(wave only)</span>
               </div>
                <div class="box">
                      <?= $this->Form->control('exclusive_name',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-2','label'=> false]); ?>
					<label for="file-2"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Add Wave file</span></label>
				</div>
           </div>
           <div class="col-md-4"></div>
       </div>   
       
       
                
                  <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Pricing</h4></div>
            
                             <?= $this->Form->control('exclusive_price',['type'=>'number','min'=> 10000,'label' => false, 'templates' => ['inputContainer' => '{{content}}'], 'placeholder' => 'From 10000 and above','class'=>'form-control']); ?>

		
           </div>
           <div class="col-md-2"></div>
       </div>  
                
                <br/>
                <hr style="padding: 1px;background-color: #ccc;"/>
        <!--<div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
               <div><h3 class="songTitle">Premium  License <a href="JavaScript:void(0);" data-toggle="tooltip" title="can be mp3 or wave  <a href='https://amplifihub.freshdesk.com/support/solutions/articles/48000772471-understanding-the-beat-instrumental-license-types' target='_blank'>Learn more about beat licenses here</a>" data-html="true" ><i class="fa fa-question-circle"></i></a></h3>
               <span>Supported type/s(mp3 and wave)</span>
               </div>
                <div class="box">
                      <?php // $this->Form->control('premium_name',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-3','label'=> false]); ?>
					<label for="file-3"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Add Mp3 or Wave file</span></label>
				</div>
           </div>
           <div class="col-md-4"></div>
       </div> -->  
                
            <!--      <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Pricing</h4></div>
            
            <?php // $this->Form->control('premium_price',['type'=>'number','min'=> 7000,'label' => false, 'templates' => ['inputContainer' => '{{content}}'], 'placeholder' => 'From 7000 and above','class'=>'form-control']); ?>

		
           </div>
           <div class="col-md-2"></div>
       </div>
              
              <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
               <div><h3 class="songTitle">Work for hire </h3>
               
               </div>
                <div class="box" style="padding: 0px;">
                      
				</div>
           </div>
           <div class="col-md-4"></div>
       </div> 
              
        <div id="swt" class="toggle  btn2">
            <input type="checkbox" value="1" id="switcher" class="check" name = "hire">
            <b class="b switch"></b>
        </div>
        -->
                

                <!--<br/>
                <hr style="padding: 1px;background-color: #ccc;"/>
                -->
                      
                
    <div class="checkbox" style="margin-left:16px; color:#e30d40;">
        <input type="checkbox" name="checkbox" id="checkbox"><a style="color:#e30d40; font-weight:bold;" href="#">I Accept The License Terms To Distribute With AmplifiHub</a>
    </div>
    
   
     <?php if($number == 0 && $beatcount <=3 && $today > $expiretrial){ ?>
    <button type="button" class="btn btn-default btn-lg" style="color: #333;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);" disabled>Upload</button>
    <?php }elseif($beatcount == 3 && $number == 0){ ?>
    <button type="button" class="btn btn-default btn-lg" style="color: #333;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);" disabled>Upload</button>
    <?php } elseif($number >= 0 && $beatcount >0 && $pUser->role == 'trial'){?>
    <button type="button" class="btn btn-default btn-lg" style="color: #333;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);" disabled>Upload</button>
    
    <?php } else{?>
     <div><br><?= $this->Form->button(__('Upload'),['class'=>'btn btn-default btn-lg btnid', 'style'=> "color: #333;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"]) ?></div>
    <h4 style="font-weight:bolder; color:red;">NOTE : ENSURE YOU ARE UPLOADING A ZIP FILE CONTAINING ALL METADATA.</h4> 
    <?php } ?>
    <?= $this->Form->end() ?> </div>
    <div id="my-box">
        
    </div>
</div>
</div>
</div>
<div class="col-lg-1 col-md-1"></div>
</div>

<div class="modal fade" id="upload" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border-radius:10px;">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="close"
                                        data-dismiss="modal">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">
                                    Upload Successful!
                                </h4>
                            </div>

                            <!-- Modal Body -->
                            <div class="modal-body">

                                
                                <div class="form-group">
                                    <label class="col-sm-12 control-label"
                                    >Your track/album has been received and is currently being reviewed. You will be updated soon as progress is made.</label>
                                    
                                    
                                </div>

                                
                                


                            </div>

                            <!-- Modal Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" style="box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"
                                        data-dismiss="modal">
                                    Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
                
<?php 

echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script type='text/javascript'>

    $(document).ready(function(){
    $('.btnid').hide();
    
    $('#checkbox').change(function(){
        if(this.checked)
            $('.btnid').fadeIn('slow');
        else
            $('.btnid').fadeOut('slow');

    });
    
     
    });
    
    
</script>";

?>

<script>
$(document).ready(function(){
    // alert(localStorage.getItem('upload'));
    var check = localStorage.getItem('upload');
    if(check == "uploaded"){
        $('#upload').modal('show');
    }
    var modalClose = $('#upload').is(':visible'); 
    // alert(modalClose);
    if(modalClose == true){
        localStorage.clear();
    }
    // alert($('#upload').is(':visible'));
});
</script>
<script>
     $(document).ready(function() {

         $("#swt").click(function () {
        
             if ($(this).hasClass('btn2')){
                 $('#swt').removeClass('btn2').addClass('btn1');
                 $(this).addClass('btn1').removeClass('btn2'); 
                 $("#swt").css("background-color", ""); 
                 $("#swt").css("background-color", "transparent"); 
             }

             else if ($(this).hasClass('btn1')){
                 $('#swt').removeClass('btn1').addClass('btn2');
                 $(this).addClass('btn2').removeClass('btn1');
                 $("#swt").css("background-color", ""); 
                 $("#swt").css("background-color", "green"); 
             }

         })
     })
    </script>
    
    
    <script>
        
        
        $('#addtracks').submit(function(e){
    e.preventDefault();
    //alert('Am here');
    console.log(new FormData(this));

     var formData = new FormData(this);
    $.ajax({
        xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {

                        var percentComplete = Math.ceil((evt.loaded / evt.total) * 100);
                        $(".progress-bar").width(percentComplete + '%');
                        $(".progress-bar").html(percentComplete+'%');
                    }
                }, false);
                return xhr;
            },
    url: "distribute", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,
    beforeSend: function(){
        $(".progress-bar").width('0%');
        //$('#uploadStatus').html('<img src="images/loading.gif"/>');
        $('#my-box').html('<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div>');
        //$('.progress-bar').animate({width: "30%"}, 100);
    },
    success: function(data){
       
       console.log(data);
        var value1 = jQuery.parseJSON(data);
    
       // var value = data;
        console.log(Object.keys(value1).length);


        if(value1.error === "yes"){
            var value2 = "<div class='alert alert-danger'>" + value1.message + "</div>";
            $('.progress-bar').animate({width: "100%"}, 100);
            setTimeout(function(){
                $('.progress-bar').css({width: "100%"});
                setTimeout(function(){
                    $('#my-box').html(value2);
                }, 100);
            }, 500);


            //alert("Am here");
           // location.href = 'logout';
        }else if(value1.error === "no" ){
            localStorage.setItem("upload", "uploaded");
            var value3 = "<div class='alert alert-success'>" + value1.message + "</div>";
            $('.progress-bar').animate({width: "100%"}, 100);
            setTimeout(function(){
                $('.progress-bar').css({width: "100%"});
                setTimeout(function(){
                    $('#my-box').html(value3);
                }, 100);
            }, 500);

        }else if(value1.validation){

        $.each(value1, function(key, value) {
            console.log(key, value);
$.each(value, function(key1, value4) {
      console.log(key1, value4);
    $.each(value4, function(key2, value5) {
      console.log(key2, value5);

    $('.progress-bar').animate({width: "100%"}, 100);
            setTimeout(function(){
                $('.progress-bar').css({width: "100%"}).parent().delay(100).hide();
                setTimeout(function(){
                    $('#my-box').append("<div class='alert alert-danger'>" + value5 + "</div>");
                }, 100);
            }, 500);
   // console.log(key1, value4);
    });
});
    //console.log(key, value);
});

        }
        setTimeout(function (){
          location.reload();
        }, 3000);

    },

    error: function(request, status, err) {
        console.log((status === "timeout") ? "Timeout" : "error: " + request + status + err);
    }

});

});
    </script>