<?php
class Sedo_DetectBrowser_Listener_Visitor
{
	private static $IE;

	public static function BrowserDetect(XenForo_Visitor &$visitor)
	{
		if(!isset($visitor['getBrowser']))
		{
			//Ini values to avoid 'Undefined index' errors
			$wip['isIE'] = false;
			$wip['IEis'] = false;
			$wip['isMobile'] = false;
			$wip['isTablet'] = false;

				//Phones			
				$wip['mobile']['phones']['isiPhone'] = false;
				$wip['mobile']['phones']['isBlackBerry'] = false;
				$wip['mobile']['phones']['isHTC'] = false;
				$wip['mobile']['phones']['isNexus'] = false;
				$wip['mobile']['phones']['isDellStreak'] = false;
				$wip['mobile']['phones']['isMotorola'] = false;
				$wip['mobile']['phones']['isSamsung'] = false;
				$wip['mobile']['phones']['isSony'] = false;
				$wip['mobile']['phones']['isAsus'] = false;
				$wip['mobile']['phones']['isPalm'] = false;
				$wip['mobile']['phones']['isGenericPhone'] = false;

    					//Version 2.5.5
    					$wip['mobile']['tablets']['isFly'] = false;				
	
				//Tablets
				$wip['mobile']['tablets']['isBlackBerryTablet'] =  false;
				$wip['mobile']['tablets']['isiPad'] =  false;
				$wip['mobile']['tablets']['isKindle'] =  false;
				$wip['mobile']['tablets']['isSamsungTablet'] =  false;
				$wip['mobile']['tablets']['isHTCtablet'] =  false;
				$wip['mobile']['tablets']['isMotorolaTablet'] =  false;
				$wip['mobile']['tablets']['isAsusTablet'] =  false;
				$wip['mobile']['tablets']['isNookTablet'] =  false;
				$wip['mobile']['tablets']['isAcerTablet'] =  false;
				$wip['mobile']['tablets']['isYarvikTablet'] =  false;
				
    					//Version 2.5.3
    					$wip['mobile']['tablets']['isToshibaTablet'] = false;
    					$wip['mobile']['tablets']['isCubeTablet'] = false;
    					$wip['mobile']['tablets']['isCobyTablet'] = false;
    					$wip['mobile']['tablets']['isSMiTTablet'] = false;
    					$wip['mobile']['tablets']['isRockChipTablet'] = false;
    					$wip['mobile']['tablets']['isTelstraTablet'] = false;
    					//Version 2.5.5
    					$wip['mobile']['tablets']['isPlaystationTablet'] = false;
    					$wip['mobile']['tablets']['isNabiTablet'] = false;
    					$wip['mobile']['tablets']['isNecTablet'] = false;
    					$wip['mobile']['tablets']['isHuaweiTablet'] = false;
    					$wip['mobile']['tablets']['isbqTablet'] = false;
    					$wip['mobile']['tablets']['isFlyTablet'] = false;
    					$wip['mobile']['tablets']['isLGTablet'] = false;

				$wip['mobile']['tablets']['isGenericTablet'] =  false;	
										
	 
				//Os
				$wip['mobile']['os']['isAndroidOS'] = false;
				$wip['mobile']['os']['isBlackBerryOS'] = false;
				$wip['mobile']['os']['isPalmOS'] = false;
				$wip['mobile']['os']['isSymbianOS'] = false;
				$wip['mobile']['os']['isWindowsMobileOS'] = false;
				$wip['mobile']['os']['isiOS'] = false;
				$wip['mobile']['os']['isJavaOS'] = false;
				$wip['mobile']['os']['isNokiaOS'] = false;
				$wip['mobile']['os']['iswebOS'] = false;
				$wip['mobile']['os']['isbadaOS'] = false;
				$wip['mobile']['os']['isBREWOS'] = false;
							
				//Browsers
				//Doesn't work well because broswers let users select which useragent they want to use; ie: Dolfin (Dolphin)
				$wip['mobile']['browser']['isChrome'] = false;
				$wip['mobile']['browser']['isDolfin'] = false;
				$wip['mobile']['browser']['isOpera'] = false;
				$wip['mobile']['browser']['isSkyfire'] = false;
				$wip['mobile']['browser']['isIE'] = false;
				$wip['mobile']['browser']['isFirefox'] = false;
				$wip['mobile']['browser']['isBolt'] = false;
				$wip['mobile']['browser']['isTeaShark'] = false;
				$wip['mobile']['browser']['isBlazer'] = false;
				$wip['mobile']['browser']['isSafari'] = false;
				$wip['mobile']['browser']['isMidori'] = false;

    					//Version 2.5.3
      					$wip['mobile']['browser']['isDiigoBrowser'] =  false;
      					$wip['mobile']['browser']['isPuffin'] =  false;

				$wip['mobile']['browser']['isGenericBrowser'] = false;


      			if( isset($_SERVER['HTTP_USER_AGENT']) )
      			{
      				$useragent = strtolower($_SERVER['HTTP_USER_AGENT']);

      				//Check if mobile
      				$Mobiledetect = new Sedo_DetectBrowser_Helper_MobileDetect();
      				if( $Mobiledetect->isMobile() )
      				{
      					$wip['isMobile'] = true;

      					//PHONES
      					$wip['mobile']['phones']['isiPhone'] =  $Mobiledetect->isiPhone();
      					$wip['mobile']['phones']['isBlackBerry'] =  $Mobiledetect->isBlackBerry();
      					$wip['mobile']['phones']['isHTC'] =  $Mobiledetect->isHTC();
      					$wip['mobile']['phones']['isNexus'] =  $Mobiledetect->isNexus();
      					$wip['mobile']['phones']['isDellStreak'] =  $Mobiledetect->isDellStreak();
      					$wip['mobile']['phones']['isMotorola'] =  $Mobiledetect->isMotorola();
      					$wip['mobile']['phones']['isSamsung'] =  $Mobiledetect->isSamsung();
      					$wip['mobile']['phones']['isSony'] =  $Mobiledetect->isSony();
      					$wip['mobile']['phones']['isAsus'] =  $Mobiledetect->isAsus();
      					$wip['mobile']['phones']['isPalm'] =  $Mobiledetect->isPalm();

      						//Version 2.5.5
      						$wip['mobile']['phones']['isFly'] =  $Mobiledetect->isFly();

      					$wip['mobile']['phones']['isGenericPhone'] =  $Mobiledetect->isGenericPhone();

      					//TABLETS
      					if( $Mobiledetect->isTablet() )
      					{
	      					$wip['isTablet'] = true;
      						$wip['mobile']['tablets']['isBlackBerryTablet'] = $Mobiledetect->isBlackBerryTablet();
      						$wip['mobile']['tablets']['isiPad'] = $Mobiledetect->isiPad();
      						$wip['mobile']['tablets']['isKindle'] = $Mobiledetect->isKindle();
      						$wip['mobile']['tablets']['isSamsungTablet'] = $Mobiledetect->isSamsungTablet();
      						$wip['mobile']['tablets']['isHTCtablet'] = $Mobiledetect->isHTCtablet();
      						$wip['mobile']['tablets']['isMotorolaTablet'] = $Mobiledetect->isMotorolaTablet();
      						$wip['mobile']['tablets']['isAsusTablet'] = $Mobiledetect->isAsusTablet();
      						$wip['mobile']['tablets']['isNookTablet'] = $Mobiledetect->isNookTablet();
      						$wip['mobile']['tablets']['isAcerTablet'] = $Mobiledetect->isAcerTablet();
      						$wip['mobile']['tablets']['isYarvikTablet'] = $Mobiledetect->isYarvikTablet();
      						
      						//Version 2.5.3
      						$wip['mobile']['tablets']['isToshibaTablet'] = $Mobiledetect->isToshibaTablet();
      						$wip['mobile']['tablets']['isCubeTablet'] = $Mobiledetect->isCubeTablet();
      						$wip['mobile']['tablets']['isCobyTablet'] = $Mobiledetect->isCobyTablet();
      						$wip['mobile']['tablets']['isSMiTTablet'] = $Mobiledetect->isSMiTTablet();
      						$wip['mobile']['tablets']['isRockChipTablet'] = $Mobiledetect->isRockChipTablet();
      						$wip['mobile']['tablets']['isTelstraTablet'] = $Mobiledetect->isTelstraTablet();

      						//Version 2.5.5
    						$wip['mobile']['tablets']['isPlaystationTablet'] = $Mobiledetect->isPlaystationTablet();
    						$wip['mobile']['tablets']['isNabiTablet'] = $Mobiledetect->isNabiTablet();
    						$wip['mobile']['tablets']['isNecTablet'] = $Mobiledetect->isNecTablet();
    						$wip['mobile']['tablets']['isHuaweiTablet'] = $Mobiledetect->isHuaweiTablet();
    						$wip['mobile']['tablets']['isbqTablet'] = $Mobiledetect->isbqTablet();
	    					$wip['mobile']['tablets']['isFlyTablet'] = $Mobiledetect->isFlyTablet();
	    					$wip['mobile']['tablets']['isLGTablet'] = $Mobiledetect->isLGTablet();

						//Generic
      						$wip['mobile']['tablets']['isGenericTablet'] = $Mobiledetect->isGenericTablet();
      					}

      					//OS
      					$wip['mobile']['os']['isAndroidOS'] = $Mobiledetect->isAndroidOS();
      					$wip['mobile']['os']['isBlackBerryOS'] = $Mobiledetect->isBlackBerryOS();
      					$wip['mobile']['os']['isPalmOS'] = $Mobiledetect->isPalmOS();
      					$wip['mobile']['os']['isSymbianOS'] = $Mobiledetect->isSymbianOS();
      					$wip['mobile']['os']['isWindowsMobileOS'] = $Mobiledetect->isWindowsMobileOS();
      					$wip['mobile']['os']['isiOS'] = $Mobiledetect->isiOS();
      					$wip['mobile']['os']['isJavaOS'] = $Mobiledetect->isJavaOS();
      					$wip['mobile']['os']['isNokiaOS'] = $Mobiledetect->isNokiaOS();
      					$wip['mobile']['os']['iswebOS'] = $Mobiledetect->iswebOS();
      					$wip['mobile']['os']['isbadaOS'] = $Mobiledetect->isbadaOS();
      					$wip['mobile']['os']['isBREWOS'] = $Mobiledetect->isBREWOS();
  						
      					//BROWSERS
					//Doesn't work well because broswers let users select which useragent they want to use; ie: Dolfin (Dolphin)
      					$wip['mobile']['browser']['isChrome'] =  $Mobiledetect->isChrome();
      					$wip['mobile']['browser']['isDolfin'] =  $Mobiledetect->isDolfin();
      					$wip['mobile']['browser']['isOpera'] =  $Mobiledetect->isOpera();
      					$wip['mobile']['browser']['isSkyfire'] =  $Mobiledetect->isSkyfire();
      					$wip['mobile']['browser']['isIE'] =  $Mobiledetect->isIE();
      					$wip['mobile']['browser']['isFirefox'] =  $Mobiledetect->isFirefox();
      					$wip['mobile']['browser']['isBolt'] =  $Mobiledetect->isBolt();
      					$wip['mobile']['browser']['isTeaShark'] =  $Mobiledetect->isTeaShark();
      					$wip['mobile']['browser']['isBlazer'] =  $Mobiledetect->isBlazer();
      					$wip['mobile']['browser']['isSafari'] =  $Mobiledetect->isSafari();
      					
					//Version 2.5.3
      					$wip['mobile']['browser']['isMidori'] =  false; //had been taken back
      					$wip['mobile']['browser']['isDiigoBrowser'] =  $Mobiledetect->isDiigoBrowser();
      					$wip['mobile']['browser']['isPuffin'] =  $Mobiledetect->isPuffin();

					//Generic
      					$wip['mobile']['browser']['isGenericBrowser'] =  $Mobiledetect->isGenericBrowser();
      				}							

      				//Check if IE
      				if(self::isIE($useragent) == true)
      				{
      					$wip['isIE'] = true;
      					$wip['IEis'] = self::$IE['version'];
      				}
			}

			//Insert into visitor object
			$visitor['getBrowser'] = $wip;	
		}
	}

	public static function isIE($useragent)
	{
		/*
			Home made function - tested without IE and IEtester
		*/
		if(preg_match('/msie/', $useragent))
       		{
      			if (preg_match('/trident\/(\d{1,2})/', $useragent, $match))
       			{
      				$IE['version'] = $match[1] + 4;
	       		}
       			else
       			{
      				preg_match('/msie (\d{1,2})/', $useragent, $match);
				if(!isset($match[1]) || empty($match[1]))
				{
					$IE['version'] = 'unknown';
				}
				else
				{
	     				$IE['version'] = $match[1];
	     			}
	       		}
	       		
			self::$IE = $IE;
			
	       		return true;
	       	}
		
		return false;
	}
}	

//Zend_Debug::dump($abc);