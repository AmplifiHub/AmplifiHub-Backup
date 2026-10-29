<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;

/**
 * CommonComponent component
 */
class CommonComponent extends Component {

    /**
     * Replaces the content text with the values
     *
     * @param string $content Content text
     * @param array $valueArr Replacement values array
     * @return string
     */
    public function replaceEmailContent($content = "", $valueArr = []) {
        if ($content != "" && count($valueArr) > 0) {
            foreach ($valueArr as $key => $value) {
                $content = str_replace('{' . $key . '}', $value, $content);
            }
            return $content;
        } else {
            return $content;
        }
    }

    public function sendBeatsBuyersEmail($buyerEmail, $buyerName, $sellerName) {
        $emailTemplate = TableRegistry::get('EmailTemplates');
        $emailTemplateData = $emailTemplate->find()
                ->where(['slug' => 'beat-buyer'])
                ->first();
        if (!empty($emailTemplateData)) {
            $replacementArr['PRODUCER_NAME'] = !empty($sellerName) ? $sellerName : '';
            $replacementArr['BUYER_NAME'] = !empty($buyerName) ? $buyerName : '';
            $emailSubject = $this->replaceEmailContent($emailTemplateData->subject, $replacementArr);
            $emailContent = $this->replaceEmailContent($emailTemplateData->template_text, $replacementArr);
            $email = new Email();
            $email->template('default', '')
                    ->from(['notifications@amplifihub.com' => 'AmplifiHub'])
                    ->emailFormat('html')
                    ->to($buyerEmail)
                    ->subject($emailSubject)
                    ->viewVars(['content' => $emailContent])
                    ->send();
        }
    }

    public function sendBeatsSellersEmail($sellerEmail, $buyerName, $sellerName) {
        $emailTemplate = TableRegistry::get('EmailTemplates');
        $emailTemplateData = $emailTemplate->find()
                ->where(['slug' => 'beat-seller'])
                ->first();
        if (!empty($emailTemplateData)) {
            $replacementArr['PRODUCER_NAME'] = !empty($sellerName) ? $sellerName : '';
            $replacementArr['BUYER_NAME'] = !empty($buyerName) ? $buyerName : '';
            $emailSubject = $this->replaceEmailContent($emailTemplateData->subject, $replacementArr);
            $emailContent = $this->replaceEmailContent($emailTemplateData->template_text, $replacementArr);
            $email = new Email();
            $email->template('default', '')
                    ->from(['notifications@amplifihub.com' => 'AmplifiHub'])
                    ->emailFormat('html')
                    ->to($sellerEmail)
                    ->subject($emailSubject)
                    ->viewVars(['content' => $emailContent])
                    ->send();
        }
    }

}
