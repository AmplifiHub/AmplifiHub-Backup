<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> Referrals
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999;">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">referrals</li>
  </ol>
</nav>


    <div class="messages index large-9 medium-8 columns content table-responsive">
      
        <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id',['label'=>'#No']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id',['label'=>'Full Name/Email']) ?></th>
                <th scope="col">Subscribed</th>
                <th scope="col"><?= $this->Paginator->sort('referral_id',['label'=>'Referred By/Email']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('created',['label'=>'Date Registered']) ?></th>
            </tr>
        </thead>
        
        <tbody>
            <?php foreach ($referrals as $key => $referral): ?>
            <tr class="">

                <td style="text-align: left;"><?= h($key + 1) ?></td>
                <td style="text-align: left;"><?= h($referral->user->firstname." ". $referral->user->lastname);?>(<?= h($referral->user->email);?>)</td>
                <td style="text-align: left;"> 
                
                <?php
                    if(isset($referral->user->subscriptions)){
                    
                    echo count($referral->user->subscriptions) ? "YES" : "NO";
                    
                    
                    }
                    ?>
                
                
                </td>
                <td style="text-align: left;"><?= h($referral->fullname($referral->referral_id)) ?></td>
                <td style="text-align: left;"><?= h($referral->created) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

