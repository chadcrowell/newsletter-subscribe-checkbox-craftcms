<?php
/**
 * Newsletter Subscribe Checkbox plugin for Craft CMS
 *
 * NewsletterSubscribeCheckbox_Newslettersubscribe FieldType
 *
 * --snip--
 * Whenever someone creates a new field in Craft, they must specify what type of field it is. The system comes with
 * a handful of field types baked in, and we’ve made it extremely easy for plugins to add new ones.
 *
 * https://craftcms.com/docs/plugins/field-types
 * --snip--
 *
 * @author    Chad Crowell
 * @copyright Copyright (c) 2016 Chad Crowell
 * @link      http://clearfirestudios.com
 * @package   NewsletterSubscribeCheckbox
 * @since     0.1
 */

namespace Craft;

class NewsletterSubscribeCheckbox_NewslettersubscribeFieldType extends BaseFieldType
{
    /**
     * Returns the name of the fieldtype.
     *
     * @return mixed
     */
    public function getName()
    {
        return Craft::t('Newsletter Subscribe Checkbox');
    }

    /**
     * @return string
     */
    public function getType()
    {
        return 'NewsletterSubscribeCheckbox';
    }

    /**
     * Returns the content attribute config.
     *
     * @return mixed
     */
    public function defineContentAttribute()
    {
        return AttributeType::Bool;
    }

    public function getInputHtml($name, $value)
    {
        return craft()->templates->render('newslettersubscribecheckbox/fieldtype_input', array(
            'name'  => $name,
            'value' => $value
        ));
    }

    public function getTemplatesPath()
    {
        return dirname(__FILE__).'/newslettersubscribecheckbox/templates/';
    }

    protected function defineSettings()
    {
        return array(
            'subscriberListId' => array(AttributeType::String, 'required' => true),
            'fieldLabelText' => array(AttributeType::String, 'required' => true),
        );
    }

    public function getSettingsHtml()
    {
        return craft()->templates->render('newslettersubscribecheckbox/fieldtype_settings', array(
            'settings' => $this->getSettings()
        ));
    }

    /**
     * Returns the input value as it should be saved to the database.
     *
     * @param mixed $value
     * @return mixed
     */
    public function prepValueFromPost($value)
    {
        return $value;
    }

    /**
     * Prepares the field's value for use.
     *
     * @param mixed $value
     * @return mixed
     */
    public function prepValue($value)
    {
        return $value;
    }

}