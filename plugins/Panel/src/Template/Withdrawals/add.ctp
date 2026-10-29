<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> Withdraw Money
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999;">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item" aria-current="page">manage payout</li>
    <li class="breadcrumb-item active" aria-current="page">withdraw money</li>
  </ol>
</nav>

<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="row">
    <div class="col-xs-12">
        <div class="withdraw right-content">
            <!--<h2>Withdraw Money</h2>-->
            <div class="withdraw-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4" style="margin: 0;padding: 0">
                            <div class="withdraw-left" style="position: relative">
                                <div style="
                    position: absolute;
                    top: -16px;
                ">
                                    <h3>Enter Amount</h3>
                                </div>
                                <br>

                                <?= $this->Form->create($withdrawal) ?>
                                <input name="amount" type="Number" placeholder="10,000">
                                <input type="submit" value="Withdraw" style="border: 1px solid #ddd;border-radius: 3px;padding: 6px 12px;background-color: #f4f4f4;color: #262626;margin-left: 10px;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
                                <?= $this->Form->end() ?>
                            </div>
                        </div>
                        <div class="col-md-4" style="margin: 0;padding: 0">
                            <div class="withdraw-left" style="border: 1px solid #ccc;
    background: #fff;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
                                <div class="withdraw-mid-left">
                                    <p><?= h($account->bank_name);?></p>
                                    <p></p>
                                </div>
                                <div class="withdraw-mid-right">
                                    <p><?= h($account->account_name);?></p>
                                    <p><?= h($account->account_number);?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="margin: 0;padding: 0">
                            <div class="withdraw-left" style="position: relative">
                                <div style="
    position: absolute;
    top: -16px;
">
                                    <h3 style="padding: 10px">Acct. Balance</h3><br>
                                </div>

                                <h4 style="position: absolute;
    top: 48px;
    left: 29px;">&#8358;<?= @number_format(h($bankbal->balance)) ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="withdraw-table" id="listwithdrawal">

            </div>

        </div>
    </div>
</div>
