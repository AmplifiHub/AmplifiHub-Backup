<?php
/**
 * @var \App\View\AppView $this
 */
 $this->assign('title', 'Checkout Page');
?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart $cart
 */

$user = $this->request->session()->read('Auth.User');
?> 

<style>
    b, strong {
    font-weight: unset;
    }
    
    #confirm {
            display: none;
            background-color: #91FF00;
            border: 1px solid #aaa;
            position: fixed;
            width: 250px;
            left: 50%;
            margin-left: -100px;
            padding: 6px 8px 8px;
            box-sizing: border-box;
            text-align: center;
         }
         #confirm button {
            background-color: #48E5DA;
            display: inline-block;
            border-radius: 5px;
            border: 1px solid #aaa;
            padding: 5px;
            text-align: center;
            width: 80px;
            cursor: pointer;
         }
         #confirm .message {
            text-align: left;
         }
</style>
<div id="preloder">
        <div class="loader"></div>
    </div>
<script src="https://js.paystack.co/v1/inline.js"></script>
<h3 class="white"><?= __('Beat Cart Summary') ?></h3>
<div class="african-beat-block container-fluid">
    <?= $this->Flash->render(); ?>
    <div class="right-content">
        <div class="table-responsive no-padding" style="border: 1px solid #333;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    background: #222;
    padding: 10px !important; border-radius: 10px;">
            <table cellpadding="0" cellspacing="0" class="table table-striped" style="margin-bottom:0;">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>License</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0; ?>
                    <?php
                    $productData = array();
                   
                    foreach ($products as $product):
                        //print_r($product);exit;
                        $productName[] = $product['name'];
                        $sellerIds[] = $product['user_id'];
                        ?>
                        <tr style="background-color:transparent;">
                            <?php if($product['license'] == "lease" || $product['license'] == "exclusive"){ ?>
                            <td><?php echo $product['name']; ?></td>
                            <?php }else{ ?>
                            <td><?php echo $product['sample_name']; ?></td>
                            <?php } ?>
                            <td><?php echo $product['license']; ?></td>
                            <td>&#8358; <?php echo @number_format($product['price']); ?></td>
                            <td><div class="col-xs-3">

                                    <?= $this->Form->postLink(__('Remove'), ['action' => 'update', $product['id'], $product['license']], ['confirm' => __('Are you sure you want to delete # {0}?', $product['name'])]) ?>
                                </div></td>

                        </tr>
                        <?php $total += $product['price']; ?>
                    <?php endforeach;  ?>

                    <tr class="holder" style="background-color:transparent;"><strong>
                        
                    <td colspan=3 class=" text-right"><strong>Total payment due</strong></td>
                    <td><strong>&#8358; <?php echo number_format($total); ?></strong>
                    </td>
                    </tr>
                    </tbody>
            </table>
            <div class="checkbox" style="color:#e30d40;margin-left:25px;">
                    <input type="checkbox" name="checkbox" id="checkbox"> <a style="color:#e30d40;" href="https://amplifihub.freshdesk.com/support/solutions/articles/48000772471-understanding-the-beat-instrumental-license-types">I Accept The License Terms To Buy Beats, Samples & Loops</a> 
                </div>
            <p class="pull-right">
                <a type="button" href="/beat-hub" value="" id = "subscribe" class="btn green"> More Beats </a>
                <?php
                $paypal_link = 'https://www.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
                ?>
                
            <form action="<?php echo $paypal_link; ?>" method="post">

                 <!--Identify your business so that you can collect the payments.--> 
                <input type="hidden" name="business" value="louis@amplifihub.com">

                 <!--Specify a Buy Now button.--> 
                <input type="hidden" name="cmd" value="_xclick">
                <?php  if(!empty($productName)){ ?>
                 <!--Specify details about the item that buyers will purchase.--> 
                <input type="hidden" name="item_name" value="<?php echo implode(',', $productName); ?>">
                <input type="hidden" name="custom" value="<?php echo $user['id'];?>">
                <input type="hidden" name="item_number" value="<?php echo $products[0]['count']['trans_ref']; ?>">
                <input type="hidden" name="amount" value="<?php echo $total / 400; ?>">
                <input type="hidden" name="currency_code" value="USD">
                <?php } ?>
                 <!--Specify URLs--> 
                <input type='hidden' name='cancel_return' value='https://amplifihub.com/carts/view'>
                <input type='hidden' name='return' value='https://amplifihub.com/carts/paymentconfirm'>
                
                
                 <!--Display the payment button.--> 
                <button type="submit" name="submit" id="subscribe" class="btn btn-success success-btn pull-right usd"> Pay In USD </button>
            </form>
            <!--<button type="button" value="" onclick="payWithPaypal()" id = "subscribe" class="btn btn-success pull-right"> CheckOut With Paypal </button>-->
            <button type="button" value=""  onclick="payWithPaystack()" id = "subscribe" class="btn btn-success success-btn pull-right ngn"> Pay In NGN </button><?= $this->Html->image('credit-cards-accepted.png', ['class' => 'pull-right'])
                ?>
            
            </p>
            

        </div>
    </div>
</div>

<?php
$user = $this->request->session()->read('Auth.User');
$username = $user['firstname'] . ' ' . $user['lastname'];

echo "<script>
function payWithPaystack()
  {
    var handler = PaystackPop.setup({
      key: 'pk_live_a6549831a5a97d351686d954540d754493973461',
      email:'" . $user['email'] . "',
      amount: '" . $total * 100 . "',
      ref: '" . @$products[0]['count']['trans_ref'] . "',
      callback: function(response){
          window.location = '/carts/paymentconfirm/'+response.reference;
      },
      onClose: function(){
          //alert('window closed');
      }
    });
    handler.openIframe();
  }
  
function payWithPaypal()
  {
    var data = {amount:'" . $total . "',buyerEmail:'" . $user['email'] . "',username:'" . $username . "'};
    var request = $.ajax({
      url: '/carts/paypal',
      type: 'POST',
      data: {data},
    });

    request.done(function(msg) {

        if(typeof(msg)!= 'object'){
            var links = JSON.parse(msg);
        }else{
            var links =  msg;
        }
        (links.links).forEach( function(item,index){
            if(item.method=='REDIRECT'){
            console.log(item.href);
                window.location.href = item.href;
            }
        });
    });
  }
</script>";

echo "<script type='text/javascript'>
    $(document).ready(function(){
    $('.usd').hide();
    $('.ngn').hide();
    $('#checkbox').change(function(){
        if(this.checked)
            $('.usd, .ngn').fadeIn('slow');
        else
            $('.usd, .ngn').fadeOut('slow');

    });
    
     
    });
</script>";
?>
