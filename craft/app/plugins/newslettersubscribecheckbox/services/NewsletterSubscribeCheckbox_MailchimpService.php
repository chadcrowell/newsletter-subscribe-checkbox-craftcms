<?php
namespace Craft;

use \DrewM\MailChimp\MailChimp;

class NewsletterSubscribeCheckbox_MailchimpService extends BaseApplicationComponent
{
    public function subscribe($email, $listId)
    {

        //get Newsletter Subscribe Checkbox plugin settings
    	$pluginSettings = craft()->plugins->getPlugin("newsletterSubscribeCheckbox")->getSettings();

        //get api key from Newsletter Subscribe Checkbox plugin settings
		$apiKey = $pluginSettings->mailchimpApiKey;

        if($apiKey == '' || 
        	$listId == '' || 
        	$email == '') return FALSE;

        require_once CRAFT_PLUGINS_PATH . 'newslettersubscribecheckbox/vendor/mcapi_v3/Mailchimp.php';

        $MailChimp = new MailChimp($apiKey);

        $result = $MailChimp->post("lists/$listId/members", [
                'email_address' => $email,
                'status'        => 'subscribed',
            ]);

    }

}