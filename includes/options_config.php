<?
// SELECTED
$ss_mode = "dummy";

// EXPRESSION
$expression = "host 10.0.0.10";

// ---------------------------
// TCPDUMP OPTIONS
// ---------------------------

// ACTIVE
$mode_options["F"][0] = 0;
$mode_options["v"][0] = 0;
$mode_options["vv"][0] = 1;

// SORT?
$mode_options["F"][1] = 1;
$mode_options["v"][1] = 1;
$mode_options["vv"][1] = 2;

// VALUES
$mode_options["F"][2] = "not_10_0_0_1";
$mode_options["v"][2] = ""; 
$mode_options["vv"][2] = "";

// INFO
$mode_options["F"][3] = ": Use file as input for the filter expression.";
$mode_options["v"][3] = ": When  parsing  and printing, produce (slightly more) verbose output.";
$mode_options["vv"][3] = ": Even more verbose output.";

?>