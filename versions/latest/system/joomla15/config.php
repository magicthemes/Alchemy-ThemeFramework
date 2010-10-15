<?php
/**
* 
*/
class Alchemy_System_Joomla15_Config
{
	public function get($key)
	{
	    // Custom keys based on Joomla's config
        switch ($key) {
            case 'template_path':
                return JURI::base().'templates/'.Alchemy::context()->template;
            break;
            case 'media_path':
                return JURI::base().'media';
            break;
            case 'base_url':
                return JURI::base();
            break;
        }
	    
	    // Keys based on the Template's configuration
        return Alchemy::context()->params->get($key);
	}
}
