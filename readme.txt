**********************************************
* Browser Detection (Mobile/MSIE)  v1.3      *
* by Cédric CLAERHOUT                        *
**********************************************

**********************************
*      Addon Presentation        *
**********************************
This Addon will allow you to check if a the browser is Internet Explorer or is on a mobile device.

XenForo has its own function to check if the browser is on a mobile device or not but its coding is not finished yet. This addon will add some detection features thanks to the following script:
Php-mobile-detect: http://mobiledetect.net/

This addon will also check if the browser is our beloved Internet Explorer and which is version (very useful for theme developers)

**********************************
*         Installation           *
**********************************
1) Upload the files in your forum directory
2) Import the addon xml file


**********************************
*         How to use?            *
**********************************
#######
#        IN TEMPLATES
###

	#Examples:
	<xen:if is="{$visitor.getBrowser.isIE}">
		{xen:if "{$visitor.getBrowser.IEis} == 9", "You're using Internet Explorer 9", "You're using Internet Explorer {$visitor.getBrowser.IEis}"}
	<xen:elseif is="{$visitor.getBrowser.isMobile}" />
		You're using a mobile device.{xen:if "{$visitor.getBrowser.isTablet}", "This Mobile device is a tablet"}
	<xen:else />
		Hello world !
	</xen:if>
	
	
	#Variables (if you want to check: {xen:helper dump, $visitor.getBrowser}):

				$visitor.getBrowser.isIE
				$visitor.getBrowser.IEis
				$visitor.getBrowser.isMobile
				$visitor.getBrowser.isTablet
	
					//Phones			
					$visitor.getBrowser.mobile.phones.isiPhone
					$visitor.getBrowser.mobile.phones.isBlackBerry
					$visitor.getBrowser.mobile.phones.isHTC
					$visitor.getBrowser.mobile.phones.isNexus
					$visitor.getBrowser.mobile.phones.isDellStreak
					$visitor.getBrowser.mobile.phones.isMotorola
					$visitor.getBrowser.mobile.phones.isSamsung
					$visitor.getBrowser.mobile.phones.isSony
					$visitor.getBrowser.mobile.phones.isAsus
					$visitor.getBrowser.mobile.phones.isPalm
					$visitor.getBrowser.mobile.phones.isFly
					$visitor.getBrowser.mobile.phones.isLG
					$visitor.getBrowser.mobile.phones.isMicromax
					$visitor.getBrowser.mobile.phones.isiMobile
					$visitor.getBrowser.mobile.phones.isSimValley
					$visitor.getBrowser.mobile.phones.isGenericPhone
		
					//Tablets
					$visitor.getBrowser.mobile.tablets.isBlackBerryTablet
					$visitor.getBrowser.mobile.tablets.isiPad
					$visitor.getBrowser.mobile.tablets.isKindle
					$visitor.getBrowser.mobile.tablets.isSamsungTablet
					$visitor.getBrowser.mobile.tablets.isHTCtablet
					$visitor.getBrowser.mobile.tablets.isMotorolaTablet
					$visitor.getBrowser.mobile.tablets.isAsusTablet
					$visitor.getBrowser.mobile.tablets.isNookTablet
					$visitor.getBrowser.mobile.tablets.isAcerTablet
					$visitor.getBrowser.mobile.tablets.isYarvikTablet
					$visitor.getBrowser.mobile.tablets.isToshibaTablet
					$visitor.getBrowser.mobile.tablets.isCubeTablet
					$visitor.getBrowser.mobile.tablets.isCobyTablet
					$visitor.getBrowser.mobile.tablets.isSMiTTablet
					$visitor.getBrowser.mobile.tablets.isRockChipTablet
					$visitor.getBrowser.mobile.tablets.isTelstraTablet
					$visitor.getBrowser.mobile.tablets.isPlaystationTablet
					$visitor.getBrowser.mobile.tablets.isNabiTablet
					$visitor.getBrowser.mobile.tablets.isNecTablet
					$visitor.getBrowser.mobile.tablets.isHuaweiTablet
					$visitor.getBrowser.mobile.tablets.isbqTablet
					$visitor.getBrowser.mobile.tablets.isFlyTablet
					$visitor.getBrowser.mobile.tablets.isLGTablet
      					$visitor.getBrowser.mobile.tablets.isSurfaceTablet
      					$visitor.getBrowser.mobile.tablets.isHPTablet
      					$visitor.getBrowser.mobile.tablets.isFujitsuTablet
      					$visitor.getBrowser.mobile.tablets.isPrestigioTablet
      					$visitor.getBrowser.mobile.tablets.isLenovoTablet
      					$visitor.getBrowser.mobile.tablets.isIntensoTablet
      					$visitor.getBrowser.mobile.tablets.isIRUTablet
      					$visitor.getBrowser.mobile.tablets.isMegafonTablet
      					$visitor.getBrowser.mobile.tablets.isEbodaTablet
      					$visitor.getBrowser.mobile.tablets.isAllViewTablet
      					$visitor.getBrowser.mobile.tablets.isSonyTablet
      					$visitor.getBrowser.mobile.tablets.isMIDTablet
      					$visitor.getBrowser.mobile.tablets.isPantechTablet
      					$visitor.getBrowser.mobile.tablets.isBronchoTablet
      					$visitor.getBrowser.mobile.tablets.isVersusTablet
      					$visitor.getBrowser.mobile.tablets.isZyncTablet
      					$visitor.getBrowser.mobile.tablets.isPositivoTablet
      					$visitor.getBrowser.mobile.tablets.isKoboTablet
      					$visitor.getBrowser.mobile.tablets.isDanewTablet
      					$visitor.getBrowser.mobile.tablets.isTexetTablet
      					$visitor.getBrowser.mobile.tablets.isTrekstorTablet
      					$visitor.getBrowser.mobile.tablets.isPyleAudioTablet
      					$visitor.getBrowser.mobile.tablets.isAdvanTablet
      					$visitor.getBrowser.mobile.tablets.isDanyTechTablet
      					$visitor.getBrowser.mobile.tablets.isGalapadTablet
      					$visitor.getBrowser.mobile.tablets.isMicromaxTablet
      					$visitor.getBrowser.mobile.tablets.isKarbonnTablet
      					$visitor.getBrowser.mobile.tablets.isAllFineTablet
      					$visitor.getBrowser.mobile.tablets.isPROSCANTablet
      					$visitor.getBrowser.mobile.tablets.isYONESTablet
      					$visitor.getBrowser.mobile.tablets.isChangJiaTablet
      					$visitor.getBrowser.mobile.tablets.isGUTablet
      					$visitor.getBrowser.mobile.tablets.isPointOfViewTablet
      					$visitor.getBrowser.mobile.tablets.isOvermaxTablet
      					$visitor.getBrowser.mobile.tablets.isHCLTablet
      					$visitor.getBrowser.mobile.tablets.isDPSTablet
      					$visitor.getBrowser.mobile.tablets.isVistureTablet
      					$visitor.getBrowser.mobile.tablets.isCrestaTablet
      					$visitor.getBrowser.mobile.tablets.isMediatekTablet
      					$visitor.getBrowser.mobile.tablets.isConcordeTablet
      					$visitor.getBrowser.mobile.tablets.isGoCleverTablet
      					$visitor.getBrowser.mobile.tablets.isModecomTablet
      					$visitor.getBrowser.mobile.tablets.isVoninoTablet
      					$visitor.getBrowser.mobile.tablets.isECSTablet
      					$visitor.getBrowser.mobile.tablets.isStorexTablet
      					$visitor.getBrowser.mobile.tablets.isVodafoneTablet
      					$visitor.getBrowser.mobile.tablets.isEssentielBTablet
      					$visitor.getBrowser.mobile.tablets.isRossMoorTablet
      					$visitor.getBrowser.mobile.tablets.isiMobileTablet
      					$visitor.getBrowser.mobile.tablets.isTolinoTablet
      					$visitor.getBrowser.mobile.tablets.isHudl
					$visitor.getBrowser.mobile.tablets.isGenericTablet

					//Os
					$visitor.getBrowser.mobile.os.isAndroidOS
					$visitor.getBrowser.mobile.os.isBlackBerryOS
					$visitor.getBrowser.mobile.os.isPalmOS
					$visitor.getBrowser.mobile.os.isSymbianOS
					$visitor.getBrowser.mobile.os.isWindowsMobileOS
					$visitor.getBrowser.mobile.os.isiOS
					$visitor.getBrowser.mobile.os.isJavaOS
					$visitor.getBrowser.mobile.os.isNokiaOS
					$visitor.getBrowser.mobile.os.iswebOS
					$visitor.getBrowser.mobile.os.isbadaOS
					$visitor.getBrowser.mobile.os.isBREWOS
								
					//Browsers
					//Doesn't work well because broswers let users select which useragent they want to use; ie: Dolfin (Dolphin)
					$visitor.getBrowser.mobile.browser.isChrome
					$visitor.getBrowser.mobile.browser.isDolfin
					$visitor.getBrowser.mobile.browser.isOpera
					$visitor.getBrowser.mobile.browser.isSkyfire
					$visitor.getBrowser.mobile.browser.isIE
					$visitor.getBrowser.mobile.browser.isFirefox
					$visitor.getBrowser.mobile.browser.isBolt
					$visitor.getBrowser.mobile.browser.isTeaShark
					$visitor.getBrowser.mobile.browser.isBlazer
					$visitor.getBrowser.mobile.browser.isSafari
      					$visitor.getBrowser.mobile.browser.isDiigoBrowser
      					$visitor.getBrowser.mobile.browser.isPuffin
      					$visitor.getBrowser.mobile.browser.isMercury
					$visitor.getBrowser.mobile.browser.isGenericBrowser


#######
#        IN PHP
###

	#Get $visitor object: 
	$visitor = XenForo_Visitor::getInstance();
	
	#Examples:
	if($visitor->getBrowser['isIE'])
	{
		if($visitor->getBrowser['IEis'] == 9)
		{
			echo "You're using Internet Explorer 9";
		}
		else
		{
			echo "You're using Internet Explorer " . $visitor->getBrowser['IEis'];
		}
	}
	elseif ($visitor->getBrowser['isMobile'])
	{
		$builder = "You're using a mobile device. ";
			
		if($visitor->getBrowser['isTablet'])
		{
			$builder .= "This Mobile device is a tablet";
		}
		
		echo $builder;
	}
	else 
	{
		echo "Hello World !";
	}
	
	#Variables:
				$visitor->getBrowser['isIE']
				$visitor->getBrowser['IEis']
				$visitor->getBrowser['isMobile']
				$visitor->getBrowser['isTablet']
	
					//Phones			
					$visitor->getBrowser['mobile']['phones']['isiPhone']
					$visitor->getBrowser['mobile']['phones']['isBlackBerry']
					$visitor->getBrowser['mobile']['phones']['isHTC']
					$visitor->getBrowser['mobile']['phones']['isNexus']
					$visitor->getBrowser['mobile']['phones']['isDellStreak']
					$visitor->getBrowser['mobile']['phones']['isMotorola']
					$visitor->getBrowser['mobile']['phones']['isSamsung']
					$visitor->getBrowser['mobile']['phones']['isSony']
					$visitor->getBrowser['mobile']['phones']['isAsus']
					$visitor->getBrowser['mobile']['phones']['isPalm']
					$visitor->getBrowser['mobile']['phones']['isFly']
					$visitor->getBrowser['mobile']['phones']['isLG']
					$visitor->getBrowser['mobile']['phones']['isMicromax']
					$visitor->getBrowser['mobile']['phones']['isiMobile']
					$visitor->getBrowser['mobile']['phones']['isSimValley']
					$visitor->getBrowser['mobile']['phones']['isGenericPhone']
		
					//Tablets
					$visitor->getBrowser['mobile']['tablets']['isBlackBerryTablet']
					$visitor->getBrowser['mobile']['tablets']['isiPad']
					$visitor->getBrowser['mobile']['tablets']['isKindle']
					$visitor->getBrowser['mobile']['tablets']['isSamsungTablet']
					$visitor->getBrowser['mobile']['tablets']['isHTCtablet']
					$visitor->getBrowser['mobile']['tablets']['isMotorolaTablet']
					$visitor->getBrowser['mobile']['tablets']['isAsusTablet']
					$visitor->getBrowser['mobile']['tablets']['isNookTablet']
					$visitor->getBrowser['mobile']['tablets']['isAcerTablet']
					$visitor->getBrowser['mobile']['tablets']['isYarvikTablet']
					$visitor->getBrowser['mobile']['tablets']['isToshibaTablet']
					$visitor->getBrowser['mobile']['tablets']['isCubeTablet']
					$visitor->getBrowser['mobile']['tablets']['isCobyTablet']
					$visitor->getBrowser['mobile']['tablets']['isSMiTTablet']
					$visitor->getBrowser['mobile']['tablets']['isRockChipTablet']
					$visitor->getBrowser['mobile']['tablets']['isTelstraTablet']
					$visitor->getBrowser['mobile']['tablets']['isPlaystationTablet']
					$visitor->getBrowser['mobile']['tablets']['isNabiTablet']
					$visitor->getBrowser['mobile']['tablets']['isNecTablet']
					$visitor->getBrowser['mobile']['tablets']['isHuaweiTablet']
					$visitor->getBrowser['mobile']['tablets']['isbqTablet']
					$visitor->getBrowser['mobile']['tablets']['isFlyTablet']
					$visitor->getBrowser['mobile']['tablets']['isLGTablet']
      					$visitor->getBrowser['mobile']['tablets']['isSurfaceTablet']
      					$visitor->getBrowser['mobile']['tablets']['isHPTablet']
      					$visitor->getBrowser['mobile']['tablets']['isFujitsuTablet']
      					$visitor->getBrowser['mobile']['tablets']['isPrestigioTablet']
      					$visitor->getBrowser['mobile']['tablets']['isLenovoTablet']
      					$visitor->getBrowser['mobile']['tablets']['isIntensoTablet']
      					$visitor->getBrowser['mobile']['tablets']['isIRUTablet']
      					$visitor->getBrowser['mobile']['tablets']['isMegafonTablet']
      					$visitor->getBrowser['mobile']['tablets']['isEbodaTablet']
      					$visitor->getBrowser['mobile']['tablets']['isAllViewTablet']
      					$visitor->getBrowser['mobile']['tablets']['isSonyTablet']
      					$visitor->getBrowser['mobile']['tablets']['isMIDTablet']
      					$visitor->getBrowser['mobile']['tablets']['isPantechTablet']
      					$visitor->getBrowser['mobile']['tablets']['isBronchoTablet']
      					$visitor->getBrowser['mobile']['tablets']['isVersusTablet']
      					$visitor->getBrowser['mobile']['tablets']['isZyncTablet']
      					$visitor->getBrowser['mobile']['tablets']['isPositivoTablet']
      					$visitor->getBrowser['mobile']['tablets']['isKoboTablet']
      					$visitor->getBrowser['mobile']['tablets']['isDanewTablet']
      					$visitor->getBrowser['mobile']['tablets']['isTexetTablet']
      					$visitor->getBrowser['mobile']['tablets']['isTrekstorTablet']
      					$visitor->getBrowser['mobile']['tablets']['isPyleAudioTablet']
      					$visitor->getBrowser['mobile']['tablets']['isAdvanTablet']
      					$visitor->getBrowser['mobile']['tablets']['isDanyTechTablet']
      					$visitor->getBrowser['mobile']['tablets']['isGalapadTablet']
      					$visitor->getBrowser['mobile']['tablets']['isMicromaxTablet']
      					$visitor->getBrowser['mobile']['tablets']['isKarbonnTablet']
      					$visitor->getBrowser['mobile']['tablets']['isAllFineTablet']
      					$visitor->getBrowser['mobile']['tablets']['isPROSCANTablet']
      					$visitor->getBrowser['mobile']['tablets']['isYONESTablet']
      					$visitor->getBrowser['mobile']['tablets']['isChangJiaTablet']
      					$visitor->getBrowser['mobile']['tablets']['isGUTablet']
      					$visitor->getBrowser['mobile']['tablets']['isPointOfViewTablet']
      					$visitor->getBrowser['mobile']['tablets']['isOvermaxTablet']
      					$visitor->getBrowser['mobile']['tablets']['isHCLTablet']
      					$visitor->getBrowser['mobile']['tablets']['isDPSTablet']
      					$visitor->getBrowser['mobile']['tablets']['isVistureTablet']
      					$visitor->getBrowser['mobile']['tablets']['isCrestaTablet']
      					$visitor->getBrowser['mobile']['tablets']['isMediatekTablet']
      					$visitor->getBrowser['mobile']['tablets']['isConcordeTablet']
      					$visitor->getBrowser['mobile']['tablets']['isGoCleverTablet']
      					$visitor->getBrowser['mobile']['tablets']['isModecomTablet']
      					$visitor->getBrowser['mobile']['tablets']['isVoninoTablet']
      					$visitor->getBrowser['mobile']['tablets']['isECSTablet']
      					$visitor->getBrowser['mobile']['tablets']['isStorexTablet']
      					$visitor->getBrowser['mobile']['tablets']['isVodafoneTablet']
      					$visitor->getBrowser['mobile']['tablets']['isEssentielBTablet']
      					$visitor->getBrowser['mobile']['tablets']['isRossMoorTablet']
      					$visitor->getBrowser['mobile']['tablets']['isiMobileTablet']
      					$visitor->getBrowser['mobile']['tablets']['isTolinoTablet']
      					$visitor->getBrowser['mobile']['tablets']['isHudl']
					$visitor->getBrowser['mobile']['tablets']['isGenericTablet']
		 
					//Os
					$visitor->getBrowser['mobile']['os']['isAndroidOS']
					$visitor->getBrowser['mobile']['os']['isBlackBerryOS']
					$visitor->getBrowser['mobile']['os']['isPalmOS']
					$visitor->getBrowser['mobile']['os']['isSymbianOS']
					$visitor->getBrowser['mobile']['os']['isWindowsMobileOS']
					$visitor->getBrowser['mobile']['os']['isiOS']
					$visitor->getBrowser['mobile']['os']['isJavaOS']
					$visitor->getBrowser['mobile']['os']['isNokiaOS']
					$visitor->getBrowser['mobile']['os']['iswebOS']
					$visitor->getBrowser['mobile']['os']['isbadaOS']
					$visitor->getBrowser['mobile']['os']['isBREWOS']
								
					//Browsers
					//Doesn't work well because broswers let users select which useragent they want to use; ie: Dolfin (Dolphin)
					$visitor->getBrowser['mobile']['browser']['isChrome']
					$visitor->getBrowser['mobile']['browser']['isDolfin']
					$visitor->getBrowser['mobile']['browser']['isOpera']
					$visitor->getBrowser['mobile']['browser']['isSkyfire']
					$visitor->getBrowser['mobile']['browser']['isIE']
					$visitor->getBrowser['mobile']['browser']['isFirefox']
					$visitor->getBrowser['mobile']['browser']['isBolt']
					$visitor->getBrowser['mobile']['browser']['isTeaShark']
					$visitor->getBrowser['mobile']['browser']['isBlazer']
					$visitor->getBrowser['mobile']['browser']['isSafari']
      					$visitor->getBrowser['mobile']['browser']['isDiigoBrowser']
      					$visitor->getBrowser['mobile']['browser']['isPuffin']
      					$visitor->getBrowser['mobile']['browser']['isMercury']
					$visitor->getBrowser['mobile']['browser']['isGenericBrowser']


**********************************
*        For developers         *
**********************************
If you don't want to force your user to install this addon, just use the visitor_setup listener and copy the structure of this addon. You will need no more than 2 minutes to integrate inside your own addon.