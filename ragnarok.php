<?php
system("clear");
require_once("lang/en.php");
require_once("tools/sdata-modules.php");
require_once("tools/function.php");

function color($color = "default" , $text){
	$arrayColor = array(
		'grey' 		=> '1;30',
		'red' 		=> '1;31',
		'green' 	=> '1;32',
		'yellow' 	=> '1;33',
		'blue' 		=> '1;34',
		'purple' 	=> '1;35',
		'nevy' 		=> '1;36',
		'white' 	=> '1;0',
	);	
	return "\033[".$arrayColor[$color]."m".$text."\033[0m";
}
$time_start = microtime(true); 
function secondsToTime($seconds) {
  $hours = floor($seconds / (60 * 60));
  $divisor_for_minutes = $seconds % (60 * 60);
  $minutes = floor($divisor_for_minutes / 60);
  $divisor_for_seconds = $divisor_for_minutes % 60;
  $seconds = ceil($divisor_for_seconds);
  $obj = array(
      "h" => (int) $hours,
      "m" => (int) $minutes,
      "s" => (int) $seconds,
   );
  return $obj;
}
echo color("green",$lang['16']." ".date("d/m/Y h:i:m")."\r\n");
echo "\n                                            _________-----_____ ";
echo "\n                                 _____------           __      ----_ ";
echo "\n                         ___----             ___------              \ ";
echo "\n                               ----________        ----              \ ";
echo "\n                                        -----__    |             _____) ";
echo "\n                     \e[1;37m                       __-    \e[91m             /#####\ ";
echo "\n                     \e[1;37m           _______-----    ___--\e[91m           \####/)\ ";
echo "\n                     \e[1;37m     ------_______      ---____  \e[91m           \##/  / ";
echo "\n                               \e[1;37m          -----__    \ --    _    --   /\   ";
echo "\n                                               --__--__     \_____/   \_/\ ";
echo "\n                                                      ----|   /          | ";
echo "\n ▒█▀▀█ ░█▀▀█ ▒█▀▀█ ▒█▄░▒█ ░█▀▀█ ▒█▀▀█ ▒█▀▀▀█ ▒█░▄▀        |  |___________| ";
echo "\n ▒█▄▄▀ ▒█▄▄█ ▒█░▄▄ ▒█▒█▒█ ▒█▄▄█ ▒█▄▄▀ ▒█░░▒█ ▒█▀▄░        |  | ((_(_)| )_) ";
echo "\n ▒█░▒█ ▒█░▒█ ▒█▄▄█ ▒█░░▀█ ▒█░▒█ ▒█░▒█ ▒█▄▄▄█ ▒█░▒█        |  \_((_(_)|/(_) ";
echo "\n                                                          \             ( ";
echo "\n   RAGNAROK v0.1                                           \_____________) ";
echo "\n                                                                    /";
echo "\n   | \e[96mRagnarok Created By  : \e[91mAryaSec                /";
echo "\n   | \e[96mVersion              : \e[91m0.1                   /";
echo "\n   | \e[96mCodename             : \e[91mArya Alfahrezy       /";
echo "\n   | \e[96mFollow me on Github  : \e[91m@Aryaalfahrezi010   /";
echo "\n   | \e[96mTeam                 : \e[91mdarkclowsecurity.id/";
echo "\n   ------------------------------------------------";
echo "\n";
echo "\e[91m[1] Domain Email Finder\n"; 
echo "\e[92m[2] Reverse IP\n"; 
echo "\e[96m[3] Phone Information\n" ;
echo "\e[91m[4] IP Information\n"; 
echo "\e[92m[5] Web Information\n";
echo "\e[90m[6] Parameter Scanner ( SQLI , XSS , LFI ,XST )\n";
echo "\e[96m[7] SQLI Scanner with dork\n";
echo "\e[91m[8] -\n";  
echo "\e[91m[9] Sql Injection Scanner\n"; 
echo "\e[96m[10] Clickjacking Scanner\n"; 
echo "\e[93m[11] Instagram OSINT\n"; 
echo "\e[96m[12] Twitter OSINT\n"; 
echo "\e[97m[13] Facebook OSINT\n"; 
echo "\e[91m[14] Hack Camera\n"; 
echo "\e[95m[15] RouterXploit\n"; 
echo "\e[95m[16] XSStrike\n"; 
echo "\n";
echo "\e[92mAryaSec@tools > \e[0m";
$input_nama = fopen("php://stdin","r");
$nama = trim(fgets($input_nama));
switch ($nama) {
    case '1':
        system("clear");
        echo EmailFinder();
        break;
    case '2':
        system("clear");
        echo ReverseIp();
        break;
    case '3':
        system("clear");
        echo PhoneValidation();
        break;
    case '4';
        system("clear");
        echo IpGeolocation();
        break;
    case '5':
        system("clear");
        echo WebScanner();
        break;
    case '6':
        system("clear");
        echo WebVuln();
        break;
    case '7':
        system("clear");
        echo AutoDork();
        break;
    case '8':
        //
        break;
    case '9':
        //
        break;
    case '10':
        system("clear");
        echo clickjacking();
        break;
    case '11':
        echo "Sedang Dalam Perbaikan";
        break;
    case '12':
        echo "Sedang Dalam Perbaikan";
        break;
    case '13':
        echo "Sedang Dalam Perbaikan";
        break;
    case '14':
        echo "Sedang Dalam Perbaikan";
        break;
    case '15':
        system("clear");
        echo RouterXploit();
        break;
    case '16':
        system("clear");
        echo XSStrike();
        break;
    default:
    system("clear");
        echo color("green", "MUKE GILE, EMANGNYA ADA DI MENU PILIHAN??");
        break;
}
?>