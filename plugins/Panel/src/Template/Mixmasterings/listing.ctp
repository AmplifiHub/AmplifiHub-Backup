<?php
/*
echo "<pre>";
print_r($searchusers);
foreach($searchusers as $users){
    echo $users->fullname;
    echo $users->aka;
    echo $users->id;
    
}
*/

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mixmastering[]|\Cake\Collection\CollectionInterface $mixmasterings
 */
 $this->assign('title','MIXING AND MASTERING HUB');
?>



<style>
    @media (min-width: 1200px){
        .video-wrapper .info-wrapper .profile {
            font-size: 10px;
            line-height: 14px;
            min-height: 42px;
        }
    }
    
    @media (min-width: 1024px){
        .video-wrapper .info-wrapper .profile {
            min-height: 46px;
        }
    }
    

    .video-wrapper .info-wrapper .profile {
        font-size: 14px;
        line-height: 14px;
        min-height: 42px;
        padding-top: 0px;
    }
    
    .playlist li a {
        color: #fff;
        padding: 7px 5px 12px;
        display: block;
        vertical-align: top;
    }
    .playlist{
            max-height: 73px !important;
    }

    
    
    @media screen and (max-width: 380px){
        .playlist {
            max-height: 110px !important;
        }
        
        .playlist li.before a, .playlist li.after a {
            padding: 20px 5px;
        }
        
        
        .video-wrapper .info-wrapper .profile{
            padding: 28px;
        }
    }
    
         @media screen and (max-width: 480px){
        
        .playlist {
            max-height: 140px !important;
        }
        .img-wrapper{
            margin-bottom: 0px !important;
        }
        .playlist li a{
            padding: 20px 15px;
        }
        
        .video-wrapper .info-wrapper .profile{
            padding: 16px 0px;
            font-size: 10px;
        }
    }
    
    @media screen and (max-width: 560px){
        .video-wrapper .name{
            font-size: 12px !important;
        }
    }
</style>
<div id="preloder">
        <div class="loader"></div>
    </div>
<section class="toprated-block container-fluid">
    <h1>The African Mixing And Mastering Hub.</h1>
    <?php if($banner){ ?>
    <div class="bg" style="background-image: url(<?= 'https://s3.us-east-2.amazonaws.com/amplifihub/PageBanner/file_name/'.$banner->file_name ?>);"></div>
    <?php } ?>

        <?php // $this->Form->create(null,[ 'url' => '/mixing-and-mastering-hub','class'=> 'search-form']) ?>
        <?= $this->Form->create(null,[
            'url' => '/mixing-and-mastering-hub',
            'class'=>"search-form",
            'type' => 'get',
            'style'=>"background:none;"
            ]
        ) ?>

    <div class="form-group">
        <div class="input-wrap">
            <a href="#" class="search"><i class="fa fa-search fa-2x" style="color:#666;opacity:0.1;"></i></a>
            <input type="Searach" name="mixer" class="form-control search-input" placeholder="Search Mixers ">
        </div>
    </div>

    <?= $this->Form->end() ?>
</section>
<section>
    <div class="container">
    
                        <div class="table-wrapper" style="height:auto !important" id="storeHolder">
                <table class="beat-table">
                    <tbody>
                        <?php

                           if($searchusers){
                                 echo count($searchusers) ." Results found";
                        
                        foreach ($searchusers as $user): ?>
                            <tr class="beatslist"    id="">
                                <td>
                                    <div class="control-wrap">
                                        <?php if($user->photo){ ?>
                                        <a href="/mixer/<?= $user->id ?>">
                                            <img src="https://s3.us-east-2.amazonaws.com/amplifihub/Users/photo/<?= $user->photo ?>" 
                                            class="img-thumbnail img-responsive" alt="" width="64px" style="
    padding: 1px;
">
                                        </a>
                                        <?php }else{ ?>
                                        <a href="/mixer/<?= $user->id ?>">
                                            <img src="/images/default-user.jpg" 
                                            class="img-thumbnail img-responsive" alt="" width="64px" style="
    padding: 1px;
">
                                            
                                        </a>
                                        
                                        
                                        <?php } ?>
                                    
                                    </div>
                                </td>
                               
                                <td>
<a class="" href="/mixer/<?= $user->id; ?>">                                        <?= $user->aka  ?> </a>
                                </td>
                                
                                <td>
                                    <a class="btn btn-success" href="/mixer/<?= $user->id; ?>">Show Profile </a>    
                                </td>
                                
                            </tr>
                        <?php endforeach;
                           
                      } ?>
                    </tbody>
                </table>
                <div id="noBeats" style="display:none">
                    <p>No more Results</p>
                </div>
            </div>
            </div>

</section>
<section class="topdirector-block container-fluid">
    <div class="bg">
        <h1>top Mixers</h1>
        <div class="video-wrapper">
            <div class="row">



                <?php foreach ($topArtistes as $mix): ?>
                <div class="col">
                    <div class="box">
                        <div class="box-holder">
                            <div class="img-wrapper">
                                <div class="img-holder" style="
    background-color: transparent;
">
                                    <div class="img">
                                        <?= (null !== $mix->user->photo)? $this->Html->link($this->html->image('https://s3.us-east-2.amazonaws.com/amplifihub/Users/photo/'.$mix->user->photo,['class'=>'img-thumbnail img-responsive', 'style'=>'padding:1px; background-color:#ccc;']),'#',['escape' => false]) : '<img src="/img/default.png" class="img-circle" alt="Upload Image" style="
    color: #f4f4f4;
">'; ?>
                                      <!-- <img src="images/img12.jpg" alt="image description"> -->
                                    </div>
                                    <span class="name"><?php
                                                if (strlen($mix->user->aka) > 8) {
                                                    echo substr($mix->user->aka, 0, 8) . "..";
                                                } else {
                                                    echo $mix->user->aka;
                                                }
                                                ?></span>
                                </div>
                            </div>
                            <div class="info-wrapper">
                                <ul class="playlist" style="
    border-right: none;
    border-left: none;
    border-top: none;
">
                                    <li class="before">
                                        <a href="#" style="
    background-color: transparent;
    border-right: 1px solid #666;
">
                                            <span class="title">before</span>
                                        </a>
                                        <div class="control-wrap">



                                            <a href="javascript:void(0)" data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Mixmasterings/original/<?=h($mix->original);?>"
                                               data-type="<?=h($mix->original_type);?>" 
                                               data-name="Before Mixing"
                                               data-user="<?= h(substr($mix->user->aka, 0, 10));?>"
                                               class="play-wrap show play" style="
    background-color: transparent;
">
                                                <i class="fa fa-play" style="font-size:20px"></i>
                                            </a>
                                            <a class="pause-wrap hide play" style="
    background-color: transparent;
">
                                                <i class="fa fa-pause" style="font-size:20px"></i>
                                            </a>


                                        </div>

                                    </li>
                                    <li class="after">
                                        <a href="#" style="border-left: 1px solid #666;">
                                            <span class="title">after</span>
                                        </a>
                                        <div class="control-wrap">



                                            <a href="javascript:void(0)" data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Mixmasterings/after/<?=h($mix->after);?>"
                                               data-type="<?=h($mix->after_type);?>" 
                                               data-name="After Mixing"
                                               data-user="<?= h(substr($mix->user->aka, 0, 10));?>"
                                               class="play-wrap show play">
                                                <i class="fa fa-play" style="font-size:20px"></i>
                                            </a>
                                            <a class="pause-wrap hide play">
                                                <i class="fa fa-pause" style="font-size:20px"></i>
                                            </a>


                                        </div>

                                    </li>
                                </ul>
                                <a href="<?= '/mixer/'.$mix->user->id ?>" class="profile" style="
    background: #3bb75e;
    border: 2px solid #333;
    border-radius: 10px;
    box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);
"><span>Hire</span></a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>




            </div>
        </div>
    </div>
</section>
<section class="director-block container-fluid">
    <div class="holder">
        <div class="video-wrapper">
            <div class="row">


               <?php foreach ($mixmasterings as $mix): ?>
                <div class="col">
                    <div class="box">
                        <div class="box-holder">
                            <div class="img-wrapper">
                                <div class="img-holder" style="
    background-color: transparent;
">
                                    <div class="img">
                                        <?= (null !== $mix->user->photo)? $this->Html->link($this->html->image('https://s3.us-east-2.amazonaws.com/amplifihub/Users/photo/'.$mix->user->photo,['class'=>'img-thumbnail img-responsive', 'style'=>'padding:1px;background-color:#ccc;']),'#',['escape' => false]) : '<img src="/img/default.png" class="img-circle" alt="Upload Image" style="
    color: #f4f4f4;
">'; ?>
                                      <!-- <img src="images/img12.jpg" alt="image description"> -->
                                    </div>
                                    <span class="name"><?php
                                                if (strlen($mix->user->aka) > 8) {
                                                    echo substr($mix->user->aka, 0, 8) . "..";
                                                } else {
                                                    echo $mix->user->aka;
                                                }
                                                ?></span>
                                </div>
                            </div>
                            <div class="info-wrapper">
                                <ul class="playlist" style="
    border-right: none;
    border-left: none;
    border-top: none;
">
                                    <li class="before">
                                        <a href="#" style="
    background-color: transparent;
    border-right: 1px solid #666;
">
                                            <span class="title">before</span>
                                        </a>
                                        <div class="control-wrap">



                                            <a href="javascript:void(0)" data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Mixmasterings/original/<?=h($mix->original);?>"
                                               data-type="<?=h($mix->original_type);?>" 
                                               data-name="Before Mixing"
                                               data-user="<?= h(substr($mix->user->aka, 0, 10));?>"
                                               class="play-wrap show play" style="
    background-color: transparent;
">
                                                <i class="fa fa-play" style="font-size:20px"></i>
                                            </a>
                                            <a class="pause-wrap hide play" style="
    background-color: transparent;
">
                                                <i class="fa fa-pause" style="font-size:20px"></i>
                                            </a>


                                        </div>

                                    </li>
                                    <li class="after">
                                        <a href="#" style="border-left: 1px solid #666;">
                                            <span class="title">after</span>
                                        </a>
                                        <div class="control-wrap">



                                            <a href="javascript:void(0)" data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Mixmasterings/after/<?=h($mix->after);?>"
                                               data-type="<?=h($mix->after_type);?>" 
                                               data-name="After Mixing"
                                               data-user="<?= h(substr($mix->user->aka, 0, 10));?>"
                                               class="play-wrap show play">
                                                <i class="fa fa-play" style="font-size:20px"></i>
                                            </a>
                                            <a class="pause-wrap hide play">
                                                <i class="fa fa-pause" style="font-size:20px"></i>
                                            </a>


                                        </div>

                                    </li>
                                </ul>
                                <a href="<?= '/mixer/'.$mix->user->id ?>" class="profile" style="
    background: #3bb75e;
    border: 2px solid #333;
    border-radius: 10px;
    box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);
"><span>Hire</span></a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>



            </div>
            <div class="row row paginator_wrapper">
                <div class="paginator">
                    <ul class="pagination">
                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                        <?= $this->Paginator->last(__('last') . ' >>') ?>
                    </ul>
                </div>
            </div>
            

        </div>
    </div>
</section>


<script>
        $(document).ready(function () {
            setTimeout(function () {
                $("#preloder").hide();
                $(".loader").hide();
            }, 3500);
        });
    </script>