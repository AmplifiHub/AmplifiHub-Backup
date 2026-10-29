<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> Referrals Permission
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999;">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">referrals permission</li>
  </ol>
</nav>


    <div class="messages index large-9 medium-8 columns content table-responsive">
      
        <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id',['label'=>'#No']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id',['label'=>'Full Name']) ?></th>
                <th scope="col">Email</th>
                <th scope="col"><?= $this->Paginator->sort('referral',['label'=>'Referral Code']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('created',['label'=>'Date Registered']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('permission',['label'=>'Permission']) ?></th>
            </tr>
        </thead>
        
        <tbody>
            <?php foreach ($referrals as $key => $referral): ?>
            <tr class="">

                <td style="text-align: left;"><?= h($key + 1) ?></td>
                <td style="text-align: left;"><?= h($referral->firstname." ". $referral->lastname);?></td>
                <td style="text-align: left;"><?= h($referral->email);?> </td>
                <td style="text-align: left;"><?= h($referral->firstname.$referral->lastname);?><?= h($referral->id);?></td>
                <td style="text-align: left;"><?= h($referral->created) ?></td>
                <td style="text-align: left;">
                    <?php if($referral->refferal_permission == 0){ ?>
                    <a href = "/referrals/allow/<?=$referral->id ?>" class="btn btn-success btn-xs">Allow</a> 
                    <?php }elseif($referral->refferal_permission == 1){ ?>
                    <a href = "/referrals/disallow/<?=$referral->id ?>" class="btn btn-danger btn-xs">Disallow</a>
                    <?php } ?>
                </td>
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

