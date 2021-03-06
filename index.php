<?php

error_reporting(-1);
ini_set('display_errors', 'On');

// ALL THE SERVERS
//
//
//


class computer
{

    public $name = "";
    public $type = "";
    public $usage = "";
    public $cpu = "";
    public $ram = "";
    public $storage = "";
    public $os = "";
    public $bandwidth = "";

    public function __construct($_name,$_type,$_usage,$_cpu,$_ram,$_gpu,$_storage,$_os)
    {
        $this->name = $_name;
        $this->type = $_type;
        $this->usage =$_usage;
        $this->cpu = $_cpu;
        $this->ram = $_ram;
        $this->gpu = $_gpu;
        $this->storage = $_storage;
        $this->os = $_os;
   
    }
}


class server 
{
    public $name = "";
    public $type = "";
    public $usage = "";
    public $cpu = "";
    public $ram = "";
    public $storage = "";
    public $os = "";
    public $bandwidth = "";

    public function __construct($_name,$_type,$_usage,$_cpu,$_ram,$_storage,$_os,$_bandwidth)
    {
        $this->name = $_name;
        $this->type = $_type;
        $this->usage =$_usage;
        $this->cpu = $_cpu;
        $this->ram = $_ram;
        $this->storage = $_storage;
        $this->os = $_os;
        $this->bandwidth = $_bandwidth;
   
    }
}


class mobile_device 
{
    public $name = "";
    public $type = "";
    public $usage = "";
    public $ram = "";
    public $os = "";
    public $storage = "";


    public function __construct($_name,$_type,$_usage,$_ram,$_os,$_storage)
    {
        $this->name = $_name;
        $this->type = $_type;
        $this->usage =$_usage;
        $this->ram = $_ram;
        $this->os = $_os;
        $this->storage = $_storage;
   
    }
}

class console
{
    public $name = "";
    public $type = "";
    public $storage = "";

    public function __construct($_name,$_type,$_storage)
    {
        $this->name = $_name;
        $this->type = $_type;
        $this->storage = $_storage;
   
    }
}

class other
{

    public $name = "";
    public $comment = "";
    public function __construct($_name, $_comment)
    {
        $this->name = $_name;
        $this->comment = $_comment;
    }
}


//ALL THE SERVERS

$servers = array(); //Define the list



array_push($servers, new server("QuadFile", "Virtual machine (RamNode)", "Main web server (Not actually QuadFile anymore)", "2 vCores","256MB", "120 GB", "Ubuntu 14.04", "Pay-as-you-go"));
array_push($servers, new server("lolicon", "Virtual Machine (RamNode)", "Development environment", "1 vCore", "128MB","80 GB", "Ubuntu 14.04", "1 TB"));
array_push($servers, new server( "install", "Virtual Machine (Vultr)", "Virtual Machine (Vultr)", "Seedbox / Bittorrent Sync", "1 vCore","1 GB", "320 GB", "Ubuntu 12.04 LTS", "2 TB"));
array_push($servers, new server( $name = "LB-us1",$type = "Virtual Machine (DigitalOcean)",	$usage = "Load balancer for openings.moe",$cpu = "1 vCore",	$ram = "512 MB",	$storage = "20 GB SSD", $os = "Ubuntu 14.04 LTS", $bandwidth = "1 TB"));
array_push($servers, new server( $name = "LB-us1",$type = "Virtual Machine (DigitalOcean)",	$usage = "Load balancer for openings.moe",$cpu = "1 vCore",	$ram = "512 MB", $storage = "20 GB SSD", $os = "Ubuntu 14.04 LTS", $bandwidth = "1 TB"));
array_push($servers, new server( $name = "LB-eu1",$type = "Virtual Machine (DigitalOcean)",	$usage = "Load balancer for openings.moe",$cpu = "1 vCore",	$ram = "512 MB",	$storage = "20 GB SSD",  $os = "Ubuntu 14.04 LTS",	$bandwidth = "1 TB"));
array_push($servers, new server( $name = "AO-main",	$type = "Virtual Machine (DigitalOcean)",	$usage = "openings.moe",	$cpu = "1 vCore",	$ram = "1 GB",$storage = "30 GB SSD", $os = "Ubuntu 14.04 LTS",	$bandwidth = "2 TB"));
array_push($servers, new server( $name = "spice",	$type = "Physical machine",$usage = "Unused, former test server",	$cpu = "1 Core (Hyperthreaded)",	$ram = "2 GB",$storage = "16 GB SSD + 80 GB HDD", $os = "Arch Linux",	$bandwidth = "No cap"));
array_push($servers, new server( $name = "win2k",	$type = "Physical machine",$usage = "Unused, former storage server",$cpu = "1 Core",$ram = "128 MB",$storage = "80 GB HDD", $os = "None",$bandwidth = "No cap"));




// ALL THE MOBILE DEVICES

$mobiledevices = array();

array_push($mobiledevices, new mobile_device($name = "holo",$type = "Laptop",$usage = "Development",$ram = "4 GB",$os = "Ubuntu 14.04",$storage = "500 GB HDD"));
array_push($mobiledevices, new mobile_device( $name = "wise-wolf",$type = "Laptop",$usage = "Backup laptop",$ram = "4 GB",$os = "Manjaro",$storage = "720 GB HDD"));
array_push($mobiledevices, new mobile_device( $name = "(nameless)",$type = "Laptop",$usage = "School",$ram = "4 GB", $os = "Windows 8",$storage = "1 TB HDD"));
array_push($mobiledevices, new mobile_device( $name = "Xperia Z2",$type = "Smartphone",$usage = "Main phone",$ram = "3 GB", $os = "Android 5.0.2",	$storage = "8 GB + 32 GB Micro SD"));
array_push($mobiledevices, new mobile_device( $name = "Lumia 520",	$type = "Smartphone",	$usage = "Backup phone",$ram = "512 MB", $os = "Windows Phone 8.1",$storage = "8 GB"));
array_push($mobiledevices, new mobile_device( $name = "(nameless)",$type = "Tablet",$usage = "Unused",$ram = "1 GB", $os = "Windows 8.1",$storage = "16 GB flash"));
array_push($mobiledevices, new mobile_device( $name = "(nameless)",$type = "Laptop",	$usage = "Unused, former MC server",$ram = "2 GB", $os = "None",	$storage = "180 GB HDD"));


//ALL THE CONSOLES

$consoles = array();

array_push($consoles, new console( $name = "PSP",$type = "1000 Original",	$storage = "32 GB"));
array_push($consoles, new console( 	$name = "PSP",	$type = "3000 Limited edition red",	$storage = "8 GB"));
array_push($consoles, new console( $name = "PS3",$type = "Slim",$storage = "160 GB"));
array_push($consoles, new console( $name = "PS Vita",$type = "1000 (Fat)",$storage = "64 GB"));
array_push($consoles, new console( $name = "DSi",$type = "XL",$storage = "No SD card"));
array_push($consoles, new console( $name = "3DS",$type = "Original",$storage = "No SD card"));
array_push($consoles, new console( $name = "PS2",$type = "Slim",$storage = "N/A"));
array_push($consoles, new console( $name = "Wii",$type = "Normal",$storage = "No SD card"));

// Muh comps <3


$computers = array();

array_push($computers, new computer( $name = "H3RO",$type = "Desktop",$usage = "Gaming / Heavy video editing",	$cpu = "i5 3570 @ 3.2 GHz",	$ram = "8 GB",	$gpu = "Radeon R9 270X",  $os = "Windows 8.1",$storage = "60 GB SSD + 2 TB HDD"));
array_push($computers, new computer( $name = "QU4D",$type = "Prebuilt Desktop",	$usage = "Web browsing / Video editing",$cpu = "i5 3550p @ 3.1 GHz",$ram = "8 GB",	$gpu = "Radeon HD 8570", $os = "Windows 8",	$storage = "1 TB HDD"));

// i was bored okay

$others = array();

array_push($others, new other( $name = "Huion 580",	$comment = "Tablet used for osu! gaming and sometimes signing documents."));
array_push($others, new other( $name = "Dolce Gusto coffee machine",$comment = "because fuck sleep right in the caffeine"));
array_push($others, new other( $name = "Razer BlackWidow Ultimate",	$comment = "Keyboard for QU4D. Cherry MX Blue."));
array_push($others, new other( $name = "Razer BlackWidow Expert",$comment = "Unused, backup. Cherry MX Blue"));
array_push($others, new other( $name = "Corsair K65",$comment = "Keyboard for H3RO. Cherry MX Red"));
array_push($others, new other( $name = "Logitech Performance MX",$comment = "Decent mouse, for QU4D. Wireless"));
array_push($others, new other( $name = "Razer Naga 2014",	$comment = "Mouse for H3RO. Pretty nice sensor for osu!"));
array_push($others, new other( $name = "Steelseries H5v2",	$comment = "Headset for QU4D. High comfort."));
array_push($others, new other( $name = "Razer Kraken",$comment = "Headset for H3RO. Deep bass, can easily be balanced with an EQ"));
array_push($others, new other( $name = "Sades SA-903",$comment = "Headset for surround video editing. Just in case."));
array_push($others, new other( $name = "Sennheiser HD429",	$comment = "Reference headset for video editing."));

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Shitty device documentation</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>

				<!-- Animation style to avoid bugs due to loading the stylesheet -->
				<style>
				.unit {
				  animation: slide ease-out 1s;
					-webkit-animation: slide ease-out 1s;
					transition: transform 0.15s;
				}

				.unit:hover {
    			transform: scale(1.082, 1.082);
  			}

				@keyframes slide {
				  from {margin-top: 35px; opacity: 0;}
				  to {margin-top: 0px; opacity: 1;}
				}
				@-webkit-keyframes slide {
				  from {margin-top: 35px; opacity: 0;}
 					to {margin-top: 0px; opacity: 1;}
				}
				</style>

    </head>

    <body>

    	<div class="column">

        	<div class="legend">
                <div class="unit">
                    <p>Legend</p>
                </div>
                <div class="unit server">
                    <p>Server</p>
                </div>
                <div class="unit mobile">
                    <p>Mobile device</p>
                </div>
                <div class="unit computer">
                    <p>Desktop</p>
                </div>
                <div class="unit console">
                    <p>Console</p>
                </div>
                <div class="unit other">
                    <p>Other</p>
                </div>
            </div>

        	<?php

		 // Echo HTML for every device with their respective data

        	foreach ($servers as $unit) {
        		echo '<div class="unit server"><div class="title">
                    <p class="inline">
                    	' . $unit->name . '
                    </p>
                </div>
                <div class="details">
                	<div class="detail">
                        <p class="inline detail-type">
                        	Type:
                        </p>
                        <p class="inline">
                        	' . $unit->type . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	Usage:
                        </p>
                        <p class="inline">
                        	' . $unit->usage . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	CPU:
                        </p>
                        <p class="inline">
                        	' . $unit->cpu . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	RAM:
                        </p>
                        <p class="inline">
                        	' . $unit->ram . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	Storage:
                        </p>
                        <p class="inline">
                        	' . $unit->storage . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                            OS:
                        </p>
                        <p class="inline">
                            ' . $unit->os . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	Bandwidth (Monthly):
                        </p>
                        <p class="inline">
                        	' . $unit->bandwidth . '
                        </p>
                    </div>
                </div>
            </div>';
        	}

        	?>

        </div>

        <div class="column">

        	<?php

        	foreach ($mobiledevices as $unit) {
        		echo '<div class="unit mobile"><div class="title">
                    <p class="inline">
                    	' . $unit->name . '
                    </p>
                </div>
                <div class="details">
                    <div class="detail">
                        <p class="inline detail-type">
                        	Type:
                        </p>
                        <p class="inline">
                        	' . $unit->type . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	Usage:
                        </p>
                        <p class="inline">
                        	' . $unit->usage . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	RAM:
                        </p>
                        <p class="inline">
                        	' . $unit->ram . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	Storage:
                        </p>
                        <p class="inline">
                        	' . $unit->storage . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                            OS:
                        </p>
                        <p class="inline">
                            ' . $unit->os . '
                        </p>
                    </div>
                </div>
            </div>';
        	}

        	?>

        </div>

        <div class="column">

        	<?php

        	foreach ($consoles as $unit) {
        		echo '<div class="unit console"><div class="title">
                    <p class="inline">
                    	' . $unit->name . '
                    </p>
                </div>
                <div class="details">
                    <div class="detail">
                        <p class="inline detail-type">
                        	Type:
                        </p>
                        <p class="inline">
                        	' . $unit->type . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	Storage:
                        </p>
                        <p class="inline">
                        	' . $unit->storage . '
                        </p>
                    </div>
                </div>
            </div>';
        	}

        	?>

        </div>

        <div class="column">

        	<?php

        	foreach ($computers as $unit) {
        		echo '<div class="unit computer"><div class="title">
                    <p class="inline">
                    	' . $unit->name . '
                    </p>
                </div>
                <div class="details">
                    <div class="detail">
                        <p class="inline detail-type">
                        	Type:
                        </p>
                        <p class="inline">
                        	' . $unit->type . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	Usage:
                        </p>
                        <p class="inline">
                        	' . $unit->usage . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	CPU:
                        </p>
                        <p class="inline">
                        	' . $unit->cpu . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	RAM:
                        </p>
                        <p class="inline">
                        	' . $unit->ram . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	GPU:
                        </p>
                        <p class="inline">
                        	' . $unit->gpu . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                            OS:
                        </p>
                        <p class="inline">
                            ' . $unit->os . '
                        </p>
                    </div>
                    <div class="detail">
                        <p class="inline detail-type">
                        	Storage:
                        </p>
                        <p class="inline">
                        	' . $unit->storage . '
                        </p>
                    </div>
                </div>
            </div>';
        	}

        	?>

        </div>

        <div class="column">

        	<?php

        	foreach ($others as $unit) {
        		echo '<div class="unit other"><div class="title">
                    <p class="inline">
                    	' . $unit->name . '
                    </p>
                </div>
                <div class="details">
                    <div class="detail">
                        <p class="inline detail-type">
                        	Comment:
                        </p>
                        <p class="inline">
                        	' . $unit->comment . '
                        </p>
                    </div>
                </div>
            </div>';
        	}

        	?>

        </div>

    </body>
</html>
