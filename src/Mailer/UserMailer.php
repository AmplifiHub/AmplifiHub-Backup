<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

class UserMailer extends Mailer
{
    public function welcome($user)
    {
        $this
            ->to($user->email)
            ->subject(sprintf('Welcome %s', $user->name))
            ->template('welcome_mail', 'custom'); // By default template with same name as method name is used.
    }

    public function resetPassword($query,$emailtoken)
    {
        $this
            ->to($query->email)
            ->template('Panel.resetpassword','Panel.resetpassword')
            ->viewVars(['token'=>$emailtoken->token])
            ->emailFormat('html')
            ->sender('noreply@amplifihub.com','AmplifiHub')
            ->from('noreply@amplifihub.com','AmplifiHub')
            ->subject('Reset Password Confirmation');
    }


        public function confirmresetPassword($user)
        {
            $this
                ->to($user->email)
                ->template('Panel.confirmresetpassword','Panel.confirmresetpassword')
                ->emailFormat('html')
                ->sender('support@amplifihub.com','AmplifiHub Support')
                ->from('support@amplifihub.com','AmplifiHub Support')
                ->subject('Password Reset Successful');
        }

        public function withdrawal($user)
                  {
                      $this
                          ->to($user['email'])
                          ->template('Panel.withdrawal','Panel.withdrawal')
                          ->emailFormat('html')
                          ->viewVars(['amount'=>$user['amount'],'fullname'=>$user['firstname']. " " .$user['lastname']])
                          ->sender('noreply@amplifihub.com','AmplifiHub Support')
                          ->from('noreply@amplifihub.com','AmplifiHub Support')
                          ->subject('Withdrawal Notifications');
                  }

      public function withdrawalapproved($withdrawal)
                {
                    $this
                        ->to($withdrawal->user->email)
                        ->template('Panel.withdrawalapproved','Panel.withdrawalapproved')
                        ->emailFormat('html')
                        ->viewVars(['amount'=>$withdrawal->amount,'fullname'=>$withdrawal->user->firstname . " " . $withdrawal->user->lastname,'bank'=>$withdrawal->user['accounts'][0]['bank_name'], 'accountname'=>$withdrawal->user['accounts'][0]['account_name'], 'accountnumber'=>$withdrawal->user['accounts'][0]['account_number']])
                        ->sender('noreply@amplifihub.com','AmplifiHub Support')
                        ->from('noreply@amplifihub.com','AmplifiHub Support')
                        ->subject('Withdrawal Approved');
                }

        public function withdrawalnotifyadmin()
                          {
                              $this
                                  ->to('notifications@amplifihub.com')
                                  ->template('Panel.withdrawalnotifyadmin','Panel.withdrawalnotifyadmin')
                                  ->emailFormat('html')
                                  ->sender('noreply@amplifihub.com','AmplifiHub Support')
                                  ->from('noreply@amplifihub.com','AmplifiHub Support')
                                  ->subject('Withdrawal Request');
                          }


            public function requests($user)
                  {
                      $this
                      ->to($user->email)
                      ->template('Panel.requests','Panel.requests')
                      ->emailFormat('html')
                      ->viewVars(['service'=>$user->service,'fullname'=>$user->firstname. " " .$user->lastname])
                      ->sender('noreply@amplifihub.com','AmplifiHub Support')
                      ->from('noreply@amplifihub.com','AmplifiHub Support')
                      ->subject('Your '.$user->service.' service has been requested');
                        }

            public function notify($emailnotification)
                      {
                          $this
                        ->to($emailnotification['useremail'])
                        ->template('Panel.notify','Panel.requests')
                        ->emailFormat('html')
                        ->viewVars(['orderid'=>$emailnotification['orderid'],'fullname'=>$emailnotification['fullname'],'messager'=>$emailnotification['messager']])
                        ->sender('noreply@amplifihub.com','AmplifiHub Support')
                        ->from('noreply@amplifihub.com','AmplifiHub Support')
                        ->subject('You have a reply for order '.$emailnotification['orderid']);
                            }

}
