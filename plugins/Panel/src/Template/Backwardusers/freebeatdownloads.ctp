<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<style>
.btnn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 15px;
}

/* Darker background on mouse-over */
.btnn:hover {
  background-color: RoyalBlue;
}
</style>
<h1 style="font-weight: unset; margin-right: 24px;">Customer Archive
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">Contact Customers</li>
  </ol>
</nav>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
    
    <style>
    .mbtnp {


    }

    .mbtn {
       font-weight: bolder;
        background-color: lightgreen;
        padding: 1%;
        color: white;
    }
</style>
<h2 ><!--Promote Beats--></h2>

    <p class="mbtnp" style="text-align:center;"><a class="btn btn-default" style="color: #333;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);" href="/downloadcsv"><i class="fa fa-download" style="margin-right:5px;"></i>  Download Email List</a></p>


    <div class="row">
        <div class="col-xs-12">
<div class="users index large-9 medium-8 columns content table-responsive" style="border:none;padding:0; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2); border-radius: 10px;">
    <?= $this->Flash->render() ?>

    <table cellpadding="0" cellspacing="0" class="table table-striped" style="margin-bottom:0;">
        <thead>
          <?php
          $user = $this->request->session()->read('Auth.User');
          if ($user['role'] == 'admin') {
              ?>
            <tr>
                <th scope="col">Sr.No</th>
                <th scope="col"><?= $this->Paginator->sort('uploader', 'Beat Uploader') ?></th>
                <th scope="col"><?= $this->Paginator->sort('downloader', 'Beat Downloader') ?></th>
                <th scope="col"><?= $this->Paginator->sort('downloader_mail', 'Email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('beat_name', 'Beat Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at', 'Date of Download') ?></th>
                <!-- <th scope="col" class="actions"><?= __('Actions') ?></th> -->
            </tr>
            <?php
          }else {
                ?>
                <tr>
                    <th scope="col">Sr.No</th>
                    <th scope="col"><?= $this->Paginator->sort('downloader', 'Beat Downloader') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('downloader_mail', 'Message User') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('beat_name', 'Beat Name') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created_at', 'Date of Download') ?></th>
                    <!-- <th scope="col" class="actions"><?= __('Actions') ?></th> -->
                </tr>
              <?php } ?>
        </thead>
        <tbody>
            <?php
             $i = 1;
             if ($user['role'] == 'admin') {
               foreach ($records as $user): ?>
                  <tr>
                      <!-- <td><?= $this->Number->format($user->user_id) ?></td> -->
                      <td><?php echo $i++; ?></td>
                      <td><?= h($user->uploader) ?></td>
                      <td><?= h($user->downloader) ?></td>
                      <td><?= h($user->downloader_mail) ?></td>
                      <td><?= h($user->beat_name) ?></td>
                      <td><?= $user->created_at ?></td>
                      <!-- <td></td> -->
                  </tr>
              <?php
             endforeach;
           }else{
             foreach ($records as $user): ?>
                <tr>
                    <!-- <td><?= $this->Number->format($user->user_id) ?></td> -->
                    <td><?php echo $i++; ?></td>
                    <td><?= h($user->downloader) ?></td>
                    <td><div class="col-md-12" style="padding: 0px; " id="hire"><a href="/hire?id=<?=$user->store_id; ?>&redirect=view&fid=<?=$user->id; ?>" class="btn btn-info" style="0,.2);"><i class ="fa fa-paper-plane-o"></i> Message Customer</a> </div></td>
                    <td><?= h($user->beat_name) ?></td>
                    <td><?= $user->created_at ?></td>
                    <!-- <td></td> -->
                </tr>
            <?php
           endforeach;
           }
            ?>
        </tbody>
    </table>
</div>
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
</div>