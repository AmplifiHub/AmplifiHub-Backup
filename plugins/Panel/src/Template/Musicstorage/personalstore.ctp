<div class="col-md-12 player-list">   
    <div id="player-wrapper" class="player-wrapper">
        <div class="main-body main-body-with-side-pannel"
             style="overflow: visible;">
            <div class="profile">
                <div class="col-md-8 col-sm-6  col-xs-12">
                    <div class="avatar">
                        <img src="<?php echo "https://s3.us-east-2.amazonaws.com/amplifihub/Users/photo/" . $userProfile[0]['photo']; ?>" class="mCS_img_loaded"></div>
                    <div class="name"><?php echo $userProfile[0]['aka']; ?></div>
                </div>
            </div>
            <!---->
            <?php $aka = $userProfile[0]['aka']; ?>
            <?=
            $this->Form->create(null, [
                'url' => "/mystore/$aka"
                , 'type' => 'get'])
            ?>
            <div class="search">
                <?= $this->Form->control('beats', ['label' => false, 'id' => 'term2', 'class' => ['search-query', 'form-control', 'search-field'], 'placeholder' => 'Search beats']); ?>
                <i class="search-icon fa fa-search"></i> <span id="search-clear" class="search-clear fa fa-times-circle-o"></span></div>
            <?= $this->Form->end() ?>
            <div class="playlist">
                <div>
                    <?php foreach ($stores as $store): ?>
                        <div class="beat-row-wrapper play-wrap" data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/<?= h($store->sample_name); ?>"
                                               data-type="<?= h($store->lease_type); ?>" 
                                               data-name="<?= h(substr($store->name, 0, 10)); ?>"
                                               data-user="<?= h(substr($store->user->aka, 0, 10)); ?>">
                            <div class="beat-row item-row with-share">
                                <div class="name"><?php echo (strlen($store->name) > 8) ? substr($store->name, 0, 8) . ".." : $store->name; ?></div> 
                                <div class="genre"><?= (isset($store->_matchingData['Genres']->genre)) ? h($store->_matchingData['Genres']->genre) : h($store->genre->genre); ?></div>
                                <div class="row-buttons-right">
                                    <div class="add-button cartbuy" <?php if($store->lease_price == 0){echo "style='pointer-events: none; opacity: 1;'";} ?>><span class="add-button-text">+ADD</span> 
                                        <span class="add-button-icon"><i class="fa fa-shopping-cart"></i></span></div>
                                    <div class="prices"><?php if($store->lease_price > 0){ echo "₦".h(number_format($store->lease_price)); }else{ ?>
                                        <a onclick="window.open ('<?= $this->Url->build('/freebeats/download/lease_name/'. $store->lease_name) ?>', ''); return false" href="javascript:void(0);" store-id="<?php echo $store->id; ?>"  class="free-download" download target="_blank"  style="font-size:11px; color:white;" >
                                                Free Beat
                                            </a> <?php } ?></div>
                                </div>
                            </div>


                            <div class="license-drawer">
                                <div class="license-box-container">
                                    <?php if (empty($store->lease_price)) { ?>
                                        <div class="license-box-wrapper">
                                            <a href="<?php echo "https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/" . $store->sample_name; ?>" target="_blank">
                                                <div class="license-box">
                                                    <div class="info-wrapper">
                                                        <div class="license-box-tab"></div>
                                                        <div class="license-name">
                                                            <?= empty($store->lease_price) ? 'Free' : 'Lease' ?>
                                                        </div>
                                                        <div class="license-price"><?= empty($store->lease_price) ? '₦0' : ''; ?></div>
                                                    </div>
                                                    <!---->
                                                </div>
                                            </a>
                                        </div>
                                    <?php } else { ?>
                                        <div class="license-box-wrapper addtocart" id="<?php echo h($store->id) ?>" data="<?php echo $store->lease_price ?>" data1 = "lease">
                                            <div class="license-box">
                                                <div class="info-wrapper">
                                                    <div class="license-box-tab"></div>
                                                    <div class="license-name">
                                                        <?= empty($store->lease_price) ? 'Free' : 'Lease' ?>
                                                    </div>
                                                    <div class="license-price"><?= empty($store->lease_price) ? '₦0' : '₦' . $store->lease_price; ?></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>

                                    <?php } ?>
                                    <?php
                                    if (!empty($store->premium_price)) {
                                        ?>
                                        <div class="license-box-wrapper addtocart" id="<?php echo h($store->id) ?>" data="<?php echo $store->premium_price ?>" data1 = "premium">
                                            <div class="license-box">
                                                <div class="info-wrapper">
                                                    <div class="license-box-tab"></div>
                                                    <div class="license-name">
                                                        Premium
                                                    </div>
                                                    <div class="license-price"><?= !empty($store->premium_price) ? '₦' . h($store->premium_price) : ''; ?></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    if (!empty($store->exclusive_price)) {
                                        ?>
                                        <div class="license-box-wrapper addtocart" id="<?php echo h($store->id) ?>" data="<?php echo $store->exclusive_price ?>" data1 = "exclusive">
                                            <div class="license-box">
                                                <div class="info-wrapper">
                                                    <div class="license-box-tab"></div>
                                                    <div class="license-name">
                                                        Exclusive
                                                    </div>
                                                    <div class="license-price"><?= !empty($store->exclusive_price) ? '₦' . h($store->exclusive_price) : ''; ?></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->Html->css('embeds/html5/shadow3.css') ?>
<?= $this->Html->css('embeds/html5/shadow2.css') ?>
