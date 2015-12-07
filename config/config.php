<?php
///*
//| Dit is het configuratiebestand van het loginsysteem. Hier worden
//| bepaalde dingen ingesteld die door het gehele loginsysteem gebruikt
//| worden.
//|
//*/
//
//# Een beveiliging om te voorkomen dat men
//# probeert je config.php te openen
//if(basename($_SERVER['PHP_SELF']) == "config.php")
//{
//    # De bezoeker terug verwijzen naar de index
//    header("Location: ../index.php");
//
//    # En stoppen met PHP uitvoeren, voor de zekerheid
//    exit;
//}
//
//# Een config array aanmaken
//$cfg = array();
//
//# De mysql host, waar je database op draait. Is meestal localhost
//define("mysql_host", 'localhost');
//
//# De mysql gebruikersnaam. Is meestal niet root
//define("mysql_user", 'root');
//
//# Het mysql wachtwoord, is eigenlijk nooit leeg
//define("mysql_password", 'root');
//
//# De tabel waar het systeem op draait. Als je de SQL niet hebt uitgevoerd moet je deze aanpassen
//define("mysql_database", 'afstudeer_project');
//
//# De login sessie tijd, het aantal uren dat je bent ingelogd dus.
//define("login_session_time", 24);
//
//# MD5 gebruiken om wachtwoorden te coderen? Staat standaard uit
//define("login_password_md5", false);
//
//# Fouten weergeven ? Alleen handig als je aan het testen bent!
//define("show_errors", true);