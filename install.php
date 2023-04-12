<?php
while(true){
  echo "Installing server...";
  $pebe = readline("Select version game >>> ");
  if($pebe == "1"){ //Install 1.1.x
    file_get_contents("https://github.com/dixsin/php-install-server/server1.1.x.zip", true);
    echo "Unzipping files...";
    system('unzip server1.1.x.zip');
    echo "Giving shmod from ./start.sh";
    system('shmod +x ./st*');
    echo "Giving shmod from binaries";
    system('shmod +x /bin/php7/bin/php');
    echo "DONE! To start the server software, use the command: ./st* or ./start.sh";
    exit(-1);
    echo "Installing...";
  } elseif($pebe == "2") { //Install 1.1x
    echo "Installing...";
    file_get_contents("https://github.com/dixsin/php-install-server/server1.1x.zip", true);
    echo "Unzipping files...";
    system('unzip server1.1x.zip');
    echo "Giving shmod from ./start.sh";
    system('shmod +x ./st*');
    echo "Giving shmod from binaries";
    system('shmod +x /bin/php7/bin/php');
    echo "DONE! To start the server software, use the command: ./st* or ./start.sh";
    exit(-1);
  } else {
    echo "Please select an option from the options! 1 or 2!";
    exit(-1);
  }
}
?>
