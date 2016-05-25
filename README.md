# Newsletter Subscribe Checkbox plugin for Craft CMS

Craft CMS Fieldtype that allows form submission to subscribe submitter to email newsletter list upon checking a box.

## Installation

To install Newsletter Subscribe Checkbox, follow these steps:

1. Download & unzip the file and place the `newslettersubscribecheckbox` directory into your `craft/plugins` directory
2.  -OR- do a `git clone ???` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3. Install plugin in the Craft Control Panel under Settings > Plugins
4. The plugin folder should be named `newslettersubscribecheckbox` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

Newsletter Subscribe Checkbox works on Craft 2.4.x and Craft 2.5.x.

## Newsletter Subscribe Checkbox Overview

We needed to integrate Mailchimp with Sprout Forms for a client, and with a hat tip to Ben Parizek @ Sprout/Barrel Strength, we got it done.

## Configuring Newsletter Subscribe Checkbox

1. Click the settings gear icon
2. Paste in your Mailchimp API key (http://kb.mailchimp.com/accounts/management/about-api-keys) and save the settings form
3. Navigate to the Sprout Forms plugin and click into the Forms section
4. Choose the existing form you'd like to add a newsletter subscribe checkbox to
5. On the Design Your Form page, click the New Field button
6. Input the field name and handle exactly like this: 
  * Name: Newsletter Subscribe
  * Handle: newsletterSubscribe
7. Choose Newsletter Subscribe Checkbox as the Field Type
8. Paste in your Mailchimp subscriber list ID (http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id)
9. Enter your Field Label Text - the text that will be shown on the form next to your checkbox
10. Save the field and form
11. View your form and verify the field shows up
12. Test your form and verify email addresses get added to your list

## Newsletter Subscribe Checkbox Roadmap

- A&M Forms Integration
- Campaign Monitor Integration

## Newsletter Subscribe Checkbox Notes

- Sorry about #11 above, I am still learning Craft plugin development and for now, we're detecting for that specific field handle to trigger the API event.
- You can add a newsletter subscribe checkbox field to any or all forms on your site, but can only add 1 to each form (due to the field handle limitation) at this time (why you'd need more than 1 on a form is beyond me).
- Even though this field type will show up in your main Channel Fields list of available field types, it doesn't work there. Do not attempt to add a newsletter subscribe checkbox field to a section/channel.

* Release it

## Newsletter Subscribe Checkbox Changelog

#### 0.1 -- 2016.05.14

* Initial release