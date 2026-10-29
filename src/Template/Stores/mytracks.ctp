<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> My Uploaded Tracks
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">mytracks</li>
  </ol>
</nav>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<div class="users index large-9 medium-8 columns content table-responsive" style="border:none;padding:0; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2); border-radius: 10px;">
    <?= $this->Flash->render() ?>

    <table cellpadding="0" cellspacing="0" class="table table-striped" style="margin-bottom:0;">
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
                    <th scope="col"><?= $this->Paginator->sort('links', 'Links') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('booking', 'Status') ?></th>
                    <th scope="col" class="actions"<?= __('Actions') ?></th>
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
                    <td>
                        <?php 
                        $remarks=$store->remarks;
                        $links=explode(',',$store->links);
                        $uploaded_to=explode(',',$store->uploaded_to);
                        for($i=0;$i<sizeof($uploaded_to);$i++) { ?>
                        <button class="btn btn-primary" target="_blank" style="background-color:#3bb75e;border-color:#3bb75e;" onClick="downloadFile('<?=$links[$i]?>')" href=<?=$links[$i]?>> <?=$uploaded_to[$i]?></button>
                         <?php } ?>
                    </td>
                    <td><span disabled type="label" class="label label-<?=$status?>"><?=$text?></span></td>
                    <td class="actions" style="padding:13px;">
                    <?= $this->Html->link(__('View'), ['action' => 'viewTrack', $store->id], ['style'=>'box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);','class'=>'btn btn-info','target'=>'']) ?>
                    <!--<?= $this->Html->link(__('Edit'), ['action' => 'edit', $store->id], ['style'=>'font-size:16px']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $store->id], ['style'=>'font-size:16px'], ['confirm' => __('Are you sure you want to delete # {0}?', $store->id)]) ?>-->
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
  <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
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

