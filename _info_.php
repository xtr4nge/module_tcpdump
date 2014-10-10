<?
$mod_name="tcpdump";
$mod_version="1.0";
$mod_logs="/usr/share/FruityWifi/logs/$mod_name.log"; 
$mod_logs_history="/usr/share/FruityWifi/www/modules/$mod_name/includes/logs/";
$mod_path="/usr/share/FruityWifi/www/modules/$mod_name";
$mod_panel="show";
$mod_isup="ps auxww | grep $mod_name | grep -v -e 'grep $mod_name'";
$mod_alias="Tcpdump";

# EXEC
$bin_danger = "/usr/share/FruityWifi/bin/danger";
$bin_sudo = "/usr/bin/sudo";
$bin_sh = "/bin/sh";
$bin_echo = "/bin_echo";
$bin_tcpdump = "/usr/sbin/tcpdump";
$bin_killall = "/usr/bin/killall";
$bin_cp = "/bin/cp";
$bin_chmod = "/bin/chmod";
$bin_sed = "/bin/sed";
$bin_rm = "/bin/rm";
?>
