<?php
include("modules/trm.php");
include("modules/help.php");
include("modules/trip.php");

function logo() {
  system("clear");
  echo <<<EOL
\033[01;33m


\033[01;31m      _\033[01;33m ____    _
     \033[01;31m(_)\033[01;33m  _ \  | |_ _ __ __ _  ___ ___ _ __
     | | |_) | | __| '__/ _` |/ __/ _ \ '__|
     | |  __/  | |_| | | (_| | (_|  __/ |
     |_|_|      \__|_|  \__,_|\___\___|_|


   \033[01;37m}\033[01;31m----------------------------------------\033[01;37m{
}\033[01;31m-------------- \033[01;32mTrack IPLocation\033[01;31m --------------\033[01;37m{
   }\033[01;31m----------------------------------------\033[01;37m{

\033[00m
EOL;
}

function About() {
  logo();
  echo <<<EOL

         \033[01;33mTool Name \033[01;37m:- \033[01;36mIP-Tracer
         \033[01;33mDeveloped By \033[01;37m:- \033[01;36mRajkumar Dusad
         \033[01;33mPowered By \033[01;37m:- \033[01;36mAex Software's

 \033[01;33mIP-Tracer\033[01;32m is use \033[01;36mip-api \033[01;32mto retrive any ip address information. Our system will automatically ban any IP addresses doing over 150 requests per minute.\033[00m


EOL;
  $prompt=" \033[0;32m\033[04mIP-Tracer\033[00m >>\033[01;37m ";
  echo $prompt;
  $getact = readline('');
  menu();
}

function menu() {
  logo();
  echo "   \033[01;32m[ \033[01;37m1 \033[01;32m] \033[01;33mTrack IP Address.\n";
  echo "   \033[01;32m[ \033[01;37m2 \033[01;32m] \033[01;33mTrack Your IP Address.\n";
  echo "   \033[01;32m[ \033[01;37m3 \033[01;32m] \033[01;33mAbout us.\n";
  echo "   \033[01;32m[ \033[01;37m4 \033[01;32m] \033[01;33mHelp.\n";
  echo "   \033[01;32m[ \033[01;37mx \033[01;32m] \033[01;33mExit \n\n";
  $prompt="  \033[0;32m\033[04mIP-Tracer\033[00m >>\033[01;37m ";
  echo $prompt;
  $inp = readline('');
  if ($inp=="x"){
    echo "\n\033[01;31m  Exiting .......\033[00m\n";
    sleep(1);
    echo "\033[01;32m  By ....... :)\n\n\033[00m";
    exit();
  } else if ($inp=="1") {
    trac();
  } else if ($inp=="2") {
    tracm();
  } else if ($inp=="3") {
    About();
  } else if ($inp=="4") {
    help();
  } else {
    echo "\n  \033[01;31mErr : Invalid Command \033[01;32m'$inp'\033[00m";
    sleep(2);
    menu();
  }
}
menu();
?>
