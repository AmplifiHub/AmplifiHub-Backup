<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

    echo 'Great work! People love your beats already. Give your beats even more exposure by sharing your beat links and beat store on social media.';
    //echo '<p> ".$beatName." ' . $this->html->link($token,['action'=>'beat-hub-detail/'.$beatId, '_full'=>true]) . " was just uploaded by '.$producerName.' " . $this->html->link($token,['action'=>'mystore/'.$producerName, '_full'=>true]) ." you should definitely check it out. </p>\n";
    echo '<div class="social" style="margin-bottom: 10px; margin-top:-20px;">
                   <table >
                       <thead></thead>
                       <tbody>
                           <tr style="background-color:#262626; border:none;">
                               <td style="padding-bottom:5px;"><a class="a2a_default_style" style="font-size:13px; background-color:#25d366; color:white; border-radius:4px; margin-right:10px; margin-bottom:10px;"  href="whatsapp://send?text=" title="Hey checkout my beats on AmplifiHub" onclick="window.open("whatsapp://send?text=%20Hey%20checkout%20my%20beats%20on%20AmplifiHub%20at%20" + encodeURIComponent(document.URL)); return false;"> <i class="fa fa-whatsapp" style="margin-left:4px;"></i>
  <span style="font-size: 12px;  margin-right:4px; margin-top:-2px; "><b> Whatsapp </b></span></a></td>
                               <td><a class="twitter-share-button a2a_kit a2a_default_style" id="twitterlink" href="https://twitter.com/share" data-size="small" style="float:left;">Tweet</a>

                <script type="text/javascript">// <![CDATA[
                
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document, "script", "twitter-wjs");
                
                // ]]>
                document.getElementById("twitterlink").setAttribute("data-text" , "Hey checkout my beats on AmplifiHub and follow @amplifihub for more #afrobeat instrumentals" );
                
                </script></td>
                               <td><iframe id="url" src="" width="80" height="20" style="border:none;overflow:hidden; font-size:10px; margin-left:10px;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                  
                  </td>
                           </tr>
                       </tbody>
                   </table>
                   
  
                   
                
              
                   
                </div>';