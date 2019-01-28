<?php
        $q = "";					//Tehdään muuttuja
        $syotto = $_GET["q"];		//Lisätään js:stä tuleva tieto muuttujaan
        $pinni = (string)$syotto;	//Muutetaan stringiksi
        system("gpio -g mode $pinni out");
        system("gpio -g write $pinni 1");   
        sleep(1);							//Jos haluaa pienemmän tauon, voi käyttää usleep(500000); mikrosekunteina, siis.
        system("gpio -g write $pinni 0");
?>

