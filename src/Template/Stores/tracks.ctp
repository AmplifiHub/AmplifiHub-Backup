<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> All Uploaded Tracks
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999;">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">All Tracks</li>
  </ol>
</nav>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<div class="users index large-9 medium-8 columns content table-responsive">
    <?= $this->Flash->render() ?>

    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
          <?php
          $user = $this->request->session()->read('Auth.User');
                ?>
                <tr>
                    <th scope="col">Sr.No</th>
                    <th scope="col"><?= $this->Paginator->sort('aka', 'Artist') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('song_title', 'Song Title') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('genre', 'Genre') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created', 'Created') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('song_path', 'Download') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('booking', 'Status') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
        </thead>
        <tbody>
            <?php
             $i = 1;
             foreach ($stores as $store): 
             if($store->booking==0)
                { $status='primary'; $text="Pending";}
            elseif($store->booking==2)
               { $status='danger'; $text="Rejected";}
             else
               { $status='success'; $text="Accepted";}
               ?>
                <tr>
                    <!-- <td><?= $this->Number->format($store->id) ?></td> -->
                    <td><?php echo $i++; ?></td>
                    <td><?= h($store->user->aka) ?></td>
                    <td><?= h($store->song_title) ?></td>
                    <td><?= h($store->genre) ?></td>
                    <td><?= h($store->created) ?></td>
                    <td><button href="#" onClick="downloadFile('<?='https://s3.us-east-2.amazonaws.com/amplifihub/'.$store->song_path.'/'.$store->song?>')">Download</button></td>
                    <td><span disabled type="label" class="label label-<?=$status?>"><?=$text?></span></td>
                    <td class="actions">
                    
                    <?= $this->Html->link(__('View'), ['action' => 'viewTrack', $store->id], ['class'=>'btn btn-info btn-sm','style'=>'font-size:16px','target'=>'_blank']) ?>
                    <?php if($store->booking==0) { ?>
                    <?= $this->Html->link(__('Accept'), ['action' => 'accept', $store->id], ['class'=>'btn btn-success btn-sm','style'=>'font-size:16px']) ?>
                   
                    <?= $this->Form->postLink(__('Reject'), ['action' => 'reject', $store->id], ['class'=>'btn btn-danger btn-sm','style'=>'font-size:16px'], ['confirm' => __('Are you sure you want to Reject # {0}?', $store->id)]) ?>
                 <?php } ?>
                </td>
                </tr>
            <?php
           endforeach;
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
  <span class="pull-right"><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></span>
</div>


<!-------SCRIPT TO PLAY AND PAUSE TRACK----->

<script>
            function playAudio(id) { 
                 document.getElementById("button_"+id).innerHTML="<button onclick='pauseAudio("+id+")' ><i class='fa fa-pause' aria-hidden='true'></i></button>";
              document.getElementById("audio_"+id).play(); 
            } 
            
            function pauseAudio(id) { 
                 document.getElementById("button_"+id).innerHTML="<button onclick='playAudio("+id+")' ><i class='fa fa-play' aria-hidden='true'></i></button>";
              document.getElementById("audio_"+id).pause(); 
            } 
            
             function downloadFile(path){
                var win = window.open(path, '_blank');
                    if (win) {
                        win.focus();
                    } else {
                        alert('Please allow popups for this website');
                    }
            }
 </script>

