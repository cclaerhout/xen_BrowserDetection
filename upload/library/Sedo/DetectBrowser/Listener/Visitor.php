<?php
class Sedo_DetectBrowser_Listener_Visitor
{
    private static $IE;

    public static function BrowserDetect(XenForo_Visitor &$visitor)
    {
        if (!isset($visitor['getBrowser']))
        {
            //Ini values to avoid 'Undefined index' errors
            // This structure is also used to to detect which phones/tables/browsers to detect.
            $wip = array(
                'isIE' => false,
                'IEis' => false,
                'isMobile' => false,
                'isTablet' => false,
                'mobile' => array(
                    'phones' => array(
                        'isiPhone' => false,
                        'isBlackBerry' => false,
                        'isHTC' => false,
                        'isNexus' => false,
                        'isDellStreak' => false,
                        'isMotorola' => false,
                        'isSamsung' => false,
                        'isSony' => false,
                        'isAsus' => false,
                        'isPalm' => false,
                        //Version 2.5.5
                        'isFly' => false,
                        //Version 2.7.9
                        'isLG' => false,
                        'isMicromax' => false,
                        'isiMobile' => false,
                        'isSimValley' => false,
                        //Version 2.8.11
                        'isWolfgang' => false,
                        'isAlcatel' => false,
                        'isNintendo' => false,
                        'isAmoi' => false,
                        'isINQ' => false,
                        //Version 2.8.19
                        'isWiko' => false,
                        //Version 2.8.26
                        'isNokiaLumia' => false,
                        //Generic
                        'isGenericPhone' => false,
                    ),
                    'tablets' => array(
                        'isBlackBerryTablet' => false,
                        'isiPad' => false,
                        'isKindle' => false,
                        'isSamsungTablet' => false,
                        'isHTCtablet' => false,
                        'isMotorolaTablet' => false,
                        'isAsusTablet' => false,
                        'isNookTablet' => false,
                        'isAcerTablet' => false,
                        'isYarvikTablet' => false,
                        //Version 2.5.3
                        'isToshibaTablet' => false,
                        'isCubeTablet' => false,
                        'isCobyTablet' => false,
                        'isSMiTTablet' => false,
                        'isRockChipTablet' => false,
                        'isTelstraTablet' => false,
                        //Version 2.5.5
                        'isPlaystationTablet' => false,
                        'isNabiTablet' => false,
                        'isNecTablet' => false,
                        'isHuaweiTablet' => false,
                        'isbqTablet' => false,
                        'isFlyTablet' => false,
                        'isLGTablet' => false,
                        //Version 2.7.9
                        'isSurfaceTablet' => false,
                        'isHPTablet' => false,
                        'isFujitsuTablet' => false,
                        'isPrestigioTablet' => false,
                        'isLenovoTablet' => false,
                        'isIntensoTablet' => false,
                        'isIRUTablet' => false,
                        'isMegafonTablet' => false,
                        'isEbodaTablet' => false,
                        'isAllViewTablet' => false,
                        'isSonyTablet' => false,
                        'isMIDTablet' => false,
                        'isPantechTablet' => false,
                        'isBronchoTablet' => false,
                        'isVersusTablet' => false,
                        'isZyncTablet' => false,
                        'isPositivoTablet' => false,
                        'isKoboTablet' => false,
                        'isDanewTablet' => false,
                        'isTexetTablet' => false,
                        'isTrekstorTablet' => false,
                        'isPyleAudioTablet' => false,
                        'isAdvanTablet' => false,
                        'isDanyTechTablet' => false,
                        'isGalapadTablet' => false,
                        'isMicromaxTablet' => false,
                        'isKarbonnTablet' => false,
                        'isAllFineTablet' => false,
                        'isPROSCANTablet' => false,
                        'isYONESTablet' => false,
                        'isChangJiaTablet' => false,
                        'isGUTablet' => false,
                        'isPointOfViewTablet' => false,
                        'isOvermaxTablet' => false,
                        'isHCLTablet' => false,
                        'isDPSTablet' => false,
                        'isVistureTablet' => false,
                        'isCrestaTablet' => false,
                        'isMediatekTablet' => false,
                        'isConcordeTablet' => false,
                        'isGoCleverTablet' => false,
                        'isModecomTablet' => false,
                        'isVoninoTablet' => false,
                        'isECSTablet' => false,
                        'isStorexTablet' => false,
                        'isVodafoneTablet' => false,
                        'isEssentielBTablet' => false,
                        'isRossMoorTablet' => false,
                        'isiMobileTablet' => false,
                        'isTolinoTablet' => false,
                        'isHudl' => false,
                        //Version 2.8.11
                        'isAudioSonicTablet' => false,
                        'isAMPETablet' => false,
                        'isSkkTablet' => false,
                        'isTecnoTablet' => false,
                        'isJXDTablet' => false,
                        'isiJoyTablet' => false,
                        'isFX2Tablet' => false,
                        'isXoroTablet' => false,
                        'isViewsonicTablet' => false,
                        'isOdysTablet' => false,
                        'isCaptivaTablet' => false,
                        'isIconbitTablet' => false,
                        'isTeclastTablet' => false,
                        'isJaytechTablet' => false,
                        'isBlaupunktTablet' => false,
                        'isDigmaTablet' => false,
                        'isEvolioTablet' => false,
                        'isLavaTablet' => false,
                        'isCelkonTablet' => false,
                        'isMiTablet' => false,
                        'isNibiruTablet' => false,
                        'isNexoTablet' => false,
                        'isUbislateTablet' => false,
                        'isPocketBookTablet' => false,
                        //Version 2.8.19
                        'isOndaTablet' => false,
                        'isAocTablet' => false,
                        'isWolderTablet' => false,
                        'isLeaderTablet' => false,
                        'isHudl' => false,
                        //Version 2.8.26
                        'isMpmanTablet' => false,
                        'isNokiaLumiaTablet' => false,
                        'isKocasoTablet' => false,
                        'isHisenseTablet' => false,
                        //Generic
                        'isGenericTablet' => false
                    ),
                    'os' => array(
                        'isAndroidOS' => false,
                        'isBlackBerryOS' => false,
                        'isPalmOS' => false,
                        'isSymbianOS' => false,
                        'isWindowsMobileOS' => false,
                        'isiOS' => false,
                        'isJavaOS' => false,
                        'isNokiaOS' => false,
                        'iswebOS' => false,
                        'isbadaOS' => false,
                        'isBREWOS' => false
                    ),
                    'browser' => array(
                        //Doesn't work well because broswers let users select which useragent they want to use; ie: Dolfin (Dolphin)
                        'isChrome' => false,
                        'isDolfin' => false,
                        'isOpera' => false,
                        'isSkyfire' => false,
                        'isIE' => false,
                        'isFirefox' => false,
                        'isBolt' => false,
                        'isTeaShark' => false,
                        'isBlazer' => false,
                        'isSafari' => false,
                        //Version 2.5.3
                        'isMidori' => false,
                        'isDiigoBrowser' => false,
                        'isPuffin' => false,
                        //Version 2.7.9
                        'isMercury' => false,
                        //Version 2.8.11
                        'isbaiduboxapp' => false,
                        'isbaidubrowser' => false,
                        'isObigoBrowser' => false,
                        'isNetFront' => false,
                        //Generic
                        'isGenericBrowser' => false
                    )
                )
            );

            if (isset($_SERVER['HTTP_USER_AGENT']))
            {
                $useragent = strtolower($_SERVER['HTTP_USER_AGENT']);

                $detectionLevel = XenForo_Application::get('options')->BrowserDetectMobileModel;

                //Check if mobile
                $Mobiledetect = new Sedo_DetectBrowser_Helper_MobileDetect();
                if ($Mobiledetect->isMobile())
                {
                    $wip['isMobile'] = true;

                    if ($detectionLevel >= 2)
                    {
                        foreach($wip['mobile']['phones'] as $key => &$value)
                        {
                            $value = $Mobiledetect->{$key}();
                        }

                        foreach($wip['mobile']['os'] as $key => &$value)
                        {
                            $value = $Mobiledetect->{$key}();
                        }

                        foreach($wip['mobile']['browser'] as $key => &$value)
                        {
                            $value = $Mobiledetect->{$key}();
                        }
                    }

                    //TABLETS
                    if ($detectionLevel >= 1 && $Mobiledetect->isTablet())
                    {
                        $wip['isTablet'] = true;
                        if ($detectionLevel >= 2)
                        {
                            foreach($wip['mobile']['tablets'] as $key => &$value)
                            {
                                $value = $Mobiledetect->{$key}();
                            }
                        }
                    }
                }

                //Check if IE
                if (self::isIE($useragent) == true)
                {
                    $wip['isIE'] = true;
                    $wip['IEis'] = self::$IE['version'];
                }
            }

            //Insert into visitor object
            $visitor['getBrowser'] = $wip;
            //Zend_Debug::dump($wip);
        }
    }

    public static function isIE($useragent)
    {
        /***
         *  Home made function - tested without IE and IEtester
         **/
        if (preg_match('/msie/', $useragent))
        {
            if (preg_match('/trident\/(\d{1,2})/', $useragent, $match))
            {
                $IE['version'] = $match[1] + 4;
            }
            else
            {
                preg_match('/msie (\d{1,2})/', $useragent, $match);
                if (!isset($match[1]) || empty($match[1]))
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
        else if (strpos($useragent, 'like gecko') !== false && preg_match('#trident/(\d{1,2})\.(\d{1,2})#', $useragent, $match))
        {
            if (intval($match[1]) == 7)
            {
                //Mozilla/5.0 (Windows NT 6.3; Trident/7.0; rv 11.0) like Gecko
                $IE['version'] = 11;
                self::$IE = $IE;

                return true;
            }
        }

        return false;
    }
}
//Zend_Debug::dump($abc);
