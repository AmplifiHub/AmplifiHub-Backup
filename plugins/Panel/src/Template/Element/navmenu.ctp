            <li><?= $this->Html->link(__('Free Beats'),'/freebeats') ?></li>
            <li><?= $this->Html->link(__('Buy Beats'),'/beat-hub') ?></li>
            <li><?= $this->Html->link(__('Sell Beats'),'/pricing') ?></li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Services <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                  <li><?= $this->Html->link(__('Purchase Samples'),'/samples', ['style'=>'']) ?></li>
                  <li class="divider"></li>
                <li><?= $this->Html->link(__('Music Distribution'),'/music-distribution', ['style'=>'']) ?></li>
	          
	        <!--  <li><?= $this->Html->link(__('Music Management'),'/musicstorage-pricing', ['style'=>'']) ?></li>
                
                
               <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="/giveaway">Producer Giveaway</a></li>-->
              </ul>
            </li>