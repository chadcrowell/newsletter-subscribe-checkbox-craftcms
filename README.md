Newsletter Subscribe Checkbox for Craft CMS
===========================

Add a checkbox to Sprout Forms in Craft CMS that, when checked, subscribes the form submitter to your Mailchimp subscriber list.
===========================

We needed to integrate Mailchimp with Sprout Forms for a client, and with a hat tip to Ben Parizek @ Sprout/Barrel Strength, we got it done.

### Coming Soon
- A&M Forms Integration
- Campaign Monitor Integration

### Requirements
- Sprout Forms (http://sprout.barrelstrengthdesign.com/craft-plugins/forms)
- A Mailchimp account (http://mailchimp.com/)

### Installation & Configuration
1. Download the package
2. Unzip the package
3. Place the newslettersubscribecheckbox folder in your Craft plugins folder (/craft/app/plugins)
4. Navigate to the Plugins section of the Craft Control Panel
5. Click Install to install the plugin
6. Click the settings gear icon
7. Paste in your Mailchimp API key (http://kb.mailchimp.com/accounts/management/about-api-keys) and save the settings form
8. Navigate to the Sprout Forms plugin and click into the Forms section
9. Choose the existing form you'd like to add a newsletter subscribe checkbox to
10. On the Design Your Form page, click the New Field button
11. Input the field name and handle exactly like this: 
  * Name: Newsletter Subscribe
  * Handle: newsletterSubscribe
12. Choose Newsletter Subscribe Checkbox as the Field Type
13. Paste in your Mailchimp subscriber list ID (http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id)
14. Enter your Field Label Text - the text that will be shown on the form next to your checkbox
15. Save the field and form

### Notes
- Sorry about #11 above, I am still learning Craft plugin development and for now, we're detecting for that specific field handle to trigger the API event.
- You can add a newsletter subscribe checkbox field to any or all forms on your site, but can only add 1 to each form (due to the field handle limitation) at this time (why you'd need more than 1 on a form is beyond me).
- Even though this field type will show up in your main Channel Fields list of available field types, it doesn't work there. Do not attempt to add a newsletter subscribe checkbox field to a section/channel.
