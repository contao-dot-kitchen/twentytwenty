<?php

namespace Contao;

class ContentTwentyTwenty extends \ContentElement
{
	protected $strTemplate = 'ce_twentytwenty';

	public function generate()
	{

		if (TL_MODE == 'BE')
		{
			return 'TwentyTwenty';
		}

		return parent::generate();
	}

	protected function compile()
	{
		if($this->singleSRC_before && $this->singleSRC_after)
		{
			$objBefore = \FilesModel::findByUuid($this->singleSRC_before);
			$objImage = new \FrontendTemplate();

			$this->addImageToTemplate($objImage, array (
				'addImage'    => 1,
				'singleSRC'   => $objBefore->path,
				'alt'         => $this->alt,
				'size'        => $this->size,
				'imagemargin' => $this->imagemargin,
				'imageUrl'    => $this->imageUrl,
				'caption'     => $this->caption,
				'floating'    => $this->floating,
				'fullsize'    => $this->fullsize
			), null,'id' . $objBefore->id);

			$this->Template->Before = $objImage;

			$objAfter  = \FilesModel::findByUuid($this->singleSRC_after);
			$objImage = new \FrontendTemplate();

			$this->addImageToTemplate($objImage, array (
				'addImage'    => 1,
				'singleSRC'   => $objAfter->path,
				'alt'         => $this->alt,
				'size'        => $this->size,
				'imagemargin' => $this->imagemargin,
				'imageUrl'    => $this->imageUrl,
				'caption'     => $this->caption,
				'floating'    => $this->floating,
				'fullsize'    => $this->fullsize
			), null,'id' . $objAfer->id);

			$this->Template->After = $objImage;

			$GLOBALS['TL_JQUERY']['eventmove']          = '<script src="system/modules/twentytwenty/assets/js/jquery.event.move.js"></script>';
			$GLOBALS['TL_JQUERY']['twentytwenty']       = '<script src="system/modules/twentytwenty/assets/js/jquery.twentytwenty.js"></script>';
			$GLOBALS['TL_JQUERY']['twentytwenty_load']  = '<script>$(window).load(function(){$(".twentytwenty-container[data-orientation!=\'vertical\']").twentytwenty({default_offset_pct: 0.7});$(".twentytwenty-container[data-orientation=\'vertical\']").twentytwenty({default_offset_pct: 0.3, orientation: \'vertical\'});});</script>';
			$GLOBALS['TL_CSS']['twentytwenty']          = 'system/modules/twentytwenty/assets/css/twentytwenty.css';
		}
	}
}