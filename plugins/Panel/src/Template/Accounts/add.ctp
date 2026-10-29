<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> Add Bank Account
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item" aria-current="page">manage payout</li>
    <li class="breadcrumb-item active" aria-current="page">add bank account</li>
  </ol>
</nav>

<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="row">
    <div class="col-xs-12">
        <div class="add-bank-acc right-content">
           <!-- <h2>Add Bank Account</h2>-->
            <div class="bank-left" style="border: 1px solid #ccc;
    background: #fff;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
                <h3>Enter Bank Details</h3>
                <div class="bank-datails-form">
                    <?= $this->Form->create($account) ?>
                    <p>
                        <?php
                        echo $this->Form->control('bank_name', ['placeholder' => 'Name of Bank', 'label' => false,]);
                        ?>
                    </p>
                    <p>
                         <?php
                        echo $this->Form->control('bank_code', ['placeholder' => 'Bank Swift Code', 'label' => false, 'class' => '', 'type' => 'text']);
                        ?>
                       
                    </p>
                    <p>
                        <?php
                        echo $this->Form->control('account_name', ['placeholder' => 'Account Name', 'label' => false, 'class' => '']);
                        ?>
                    </p>
                    <p>
                        <?php
                        echo $this->Form->control('account_number', ['placeholder' => 'Account Number', 'label' => false, 'class' => '']);
                        ?>
                    </p>
                    <?php if(empty($row)){ ?>
                    <p>
                        <?= $this->Form->button(__('Add'), ['class' => 'btn btn-default', 'style'=> "color: #333;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"]) ?>
                    </p>
                    <?php  }else{  ?>
                    <p>
                       <button type="button" class="btn btn-default disabled" style="color: #333;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">Add</button>
                    </p>
                    <?php } ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
            <div class="bank-right">
                <h3>Registered Bank Details</h3>
                <div class="bank-details-text" id="listaccount">

                </div>
            </div>
        </div>
    </div>
</div>


