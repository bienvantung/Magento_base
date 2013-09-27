<?php
class Smart_CMS_Model_Observer
{
	public function cmsField($observer)
	{
		//get CMS model with data
		$model = Mage::registry('cms_page');
		//get form instance
		$form = $observer->getForm();
		//create new custom fieldset 'smart_content_fieldset'
		$fieldset = $form->addFieldset('smart_content_fieldset', array('legend'=>Mage::helper('cms')->__('Custom'),'class'=>'fieldset-wide'));
		//add new field
		$fieldset->addField('content_custom','text',array(
			'name'		=> 'content_custom',
			'label'		=>Mage::helper('cms')->__('Content Custom'),
			'title'		=>Mage::helper('cms')->__('Content Custom'),
			'disable'	=>false,
			//set field value
			'value'		=> $model->getContentCustom()
		));
	}
}
