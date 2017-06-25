<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/danielgindi-jquery-backstretch/2.1.15/jquery.backstretch.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style type="text/css">
    :root {
    --hellblau: #c6d1e7;
    --blau: #365085;
    --dunkelblau: #202c47;
    }
		html{
		/*    min-height:100%;
		    position:relative;*/
		}

		.container {
			max-width: 1600px;
			width:90%;
			border-left: solid black 1px;
			border-right: solid black 1px;
		}


		body {
			padding-top: 50px;
			height: 100%;
		/*	background-image: url(SingleButt.png);
			background-size: 25%, 100%;
			background-repeat: no-repeat;
			background-position: right -80px bottom -100px;*/
			background-image: url(http://oxx.rocks/dl/ButtPattern.png);
			background-repeat: repeat-y repeat-x;
			background-size: 5%;
			background-color: var(--dunkelblau);
		}

		#content {
			background-color: var(--blau);
		/*	min-height: 100%;
			position:absolute;
		    top:50px;
		    bottom:0;
		    left:0;
		    right:0;
		    overflow:hidden;
		    z-index:-1;*/
		}

		.jumbotron {
			font-family: acme, sans-serif;
			text-align: center;
			color: white;
			text-shadow: 0px 2px 2px rgba(0,0,0,1);
			text-shadow: 0px 4px 5px rgba(0,0,0,0.5);
			text-shadow: 0px 4px 10px rgba(0,0,0,0.3);
			text-shadow: 0 0 5px #000;
			background-image: url(http://oxx.rocks/dl/Butt.png);
			/* background-image: url('<?=$selectedBg; ?>'); */
			background-size: cover;
			background-position: 25%;
      margin-top: 15px;
      border-radius: 15px;
		}

		.jumbotron > h1 {
			letter-spacing: 4px;
		}

		.jumbotron > p {
			letter-spacing: 1px;
		}

		hr {
			width: 400px;
			max-width:100%;
			border-bottom: solid 1px rgba(0,0,0,0.1);
		}

		.navbar-inverse {
			color: var(--hellblau);
			background-color: #17223a;
		}

		.navbar-inverse .navbar-nav>li>a {
			color: var(--hellblau);
		}

		.navbar-inverse .navbar-nav>.active>a {
			color: #e0e7f6;
			background-color: #2f3b57;
		}

		.navbar-inverse .navbar-brand {
			color: var(--hellblau);
		}

		.row p {
			color: white;
			font-family: acme;
			font-size: 1.3em;
      text-align: justify;
      max-width: 85%;
		}

		.row h2 {
			color: white;
			font-family: acme;
			text-align: center;
		}

		.row hr {
			width: 400px;
		}

		.episode {
			background: var(--dunkelblau);
			border: 5px solid var(--blau);
			border-radius: 10px;
			padding-bottom: 20px;
			padding-top: 5px;
		}
    .backstretch {
      border-radius: 5px;
    }
	</style>


    <title>OxxTV</title>
</head>

 <?php header('Content-Type: text/html; charset=UTF-8');?>

<body>
<?php
    // Page generation time part 1
    $time = microtime();
    $time = explode(' ', $time);
    $time = $time[1] + $time[0];
    $start = $time;
?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
<!--         <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#my-navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><i class="fa fa-camera-retro" aria-hidden="true"></i> OxxTV</a>
            </div>
            <div class="collapse navbar-collapse" id="my-navbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i> About</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="fa fa-sticky-note" aria-hidden="true"></i> Sign Up</a></li>
                    <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                </ul>
            </div>
        </div> -->
    </nav>

    <div class="container" id="content">
        <div class="jumbotron">
            <h1><i class="fa fa-tv" aria-hidden="true"></i> OxxTV</h1>
            <p>Providing scantily clad anime babes since 2017</p>
            <hr>
        </div>
    <div class="wrap">
      <div class="row">

<?php
    $urlrep = array('video', '/', 'anime');
    $url = str_replace($urlrep, '', $_SERVER['REQUEST_URI']);

    print "<div class=\"row\"><div class=\"col-xs-12\"><h2>$url</h2><hr></div></div>"
?>
        <div class="container-fluid">

<?php
    //header('Content-Type: text/html; charset=UTF-8');
    // ffmpeg path
    $ffmpeg = 'C:\ffmpeg\bin\ffmpeg.exe';
    //Poster/Thumbnail size
    //$size = '1280x720';
    //after how many seconds of video the thumb is created
    $second = 30;

    $preposter = '<video class="embed-responsive-item" id="video" controls preload="none" poster="';
    $prefilename = '"><source src="';
    $afterfilename = '" type="video/mp4">';
    $presub = '<track label="Deutsch" kind="subtitles" srclang="de" src="';
    $aftersub = '">';

  $repl = array('_', '.', 'Ger-Dub');

    // search for mp4 and vtt files in folder
    $filename = glob("*.mp4") ;
    //$filename = utf8_encode($file);
    $subfilename = glob("*.vtt") ;
    //$subfilename = utf8_encode($sub);

    $a1 = new ArrayIterator($filename);
    $a2 = new ArrayIterator($subfilename);
    $it = new MultipleIterator;
    $it->attachIterator($a1);
    $it->attachIterator($a2);

    if ($subfilename) {
        //will be used if a subtitle is found
        foreach ($it as $e) {
            $image[0] = str_replace(".mp4", ".jpg", $e[0]);
            $poster[0] = $image[0];
            $cutend1 = chop($e[0], ".mp4");
            $replunerline1 = str_replace($repl, " ", $cutend1);
            $utf8poster[0] =  utf8_encode($poster[0]);
            print "<div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12 episode\"><p>$replunerline1</p><div class=\"embed-responsive embed-responsive-16by9\">";
            print "$preposter$poster[0]$prefilename$e[0]$afterfilename";
            print "$presub$e[1]$aftersub";
            print "</video></div></div>";



            if (!file_exists($image[0])) {
                //will generate thumbnails if none found
                    $filename3 = escapeshellarg($e[0]);
                $image2 = escapeshellarg($image[0]);
                    //$cmd = "$ffmpeg  -ss 00:00:$second  -i $filename3 -s $size -vframes 1 $image2 2>&1";  // use if you want a specific thumb resolution
                    $cmd = "$ffmpeg -ss 00:00:$second -i $filename3 -q:v 1 -vframes 1 $image2 2>&1";
                exec($cmd);
            }
        }
    } else {
        //will be uses if no subtitle is found
        foreach (glob("*.mp4") as $filename[0]) {
            //$filename = utf8_encode($file);
                $image[0] = str_replace(".mp4", ".jpg", $filename[0]);
            $poster[0] = $image[0];
            $cutend2 = chop($filename[0], ".mp4");
            $replunerline2 = str_replace($repl, " ", $cutend2);
            $utf8poster[0] =  utf8_encode($poster[0]);
            print "<div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12 episode\"><p>$replunerline2</p><div class=\"embed-responsive embed-responsive-16by9\">";
            print "$preposter$poster[0]$prefilename$filename[0]$afterfilename";
            print "</video></div></div>";


            if (!file_exists($image[0])) {
                //will generate thumbnails if none found
                    $filename2 = escapeshellarg($filename[0]);
                $image2 = escapeshellarg($image[0]);
                    //$cmd = "$ffmpeg  -ss 00:00:$second  -i $filename2 -q:v 1 -s $size -vframes 1 $image2 2>&1";  // use if you want a specific thumb resolution
                    $cmd = "$ffmpeg -ss 00:00:$second -i $filename2 -q:v 1 -vframes 1 $image2 2>&1";
                exec($cmd);
            }
        }
    }
?>


</div></div></div></div>
<?php
// rnd bg image
//$imglist = str_replace(".mp4", ".jpg", $filename);
$arraylistafiles = glob('*.jpg');
$i = rand(0, count($arraylistafiles)-1);
$selectedBg = "$arraylistafiles[$i]";


function utf8_encode_deep(&$input)
{
    if (is_string($input)) {
        $input = utf8_encode($input);
    } elseif (is_array($input)) {
        foreach ($input as &$value) {
            utf8_encode_deep($value);
        }
        unset($value);
    } elseif (is_object($input)) {
        $vars = array_keys(get_object_vars($input));

        foreach ($vars as $var) {
            utf8_encode_deep($input->$var);
        }
    }
}

function to_utf8($in)
{
    if (is_array($in)) {
        foreach ($in as $key => $value) {
            $out[to_utf8($key)] = to_utf8($value);
        }
    } elseif (is_string($in)) {
        if (mb_detect_encoding($in) != "UTF-8") {
            return utf8_encode($in);
        } else {
            return $in;
        }
    } else {
        return $in;
    }
    return $out;
}



$utf8 = to_utf8($arraylistafiles);
$utf8_array = json_encode($utf8, JSON_UNESCAPED_UNICODE);
$json = htmlspecialchars($arraylistafiles, ENT_IGNORE, 'UTF-8');
$js_array = json_encode($arraylistafiles, JSON_UNESCAPED_UNICODE, JSON_PARTIAL_OUTPUT_ON_ERROR); // JSON_PARTIAL_OUTPUT_ON_ERROR
$js_test = json_encode($bs_list);
$bs_list = implode(' , ', $arraylistafiles);
$bs_list = '['.$bs_list.']';
$bs_list2 = json_encode($bs_list);
$imgurl = rawurlencode($js_array);

$utf8_array2 = str_replace("Â", "", $utf8_array);

    // Page generation time part 2
    $time = microtime();
    $time = explode(' ', $time);
    $time = $time[1] + $time[0];
    $finish = $time;
    $total_time = round(($finish - $start), 4);
    echo '<font color="white"><center>Page generated in '.$total_time.' seconds.</center></font>';
    //echo $selectedBg;
    //echo '<pre>'; print_r($imglist); echo '</pre>';
?>

<style type="text/css">
		.jumbotron {

			background-image: url("<?=$selectedBg; ?>");

		}
</style>
<script type="text/javascript">
$(".jumbotron").backstretch(

<?=$utf8_array2;  ?>
,
{ duration: 3000, fade: 750 }
);
</script>
<?php
// echo '<pre>'; print_r($arraylistafiles); echo '</pre>';
// echo '<pre>'; print_r($js_array); echo '</pre>';
// echo '<pre>'; print_r($utf8); echo '</pre>';
// echo '<pre>'; print_r($utf8_array); echo '</pre>';
// echo '<pre>'; print_r($imglist); echo '</pre>';
// echo '<pre>'; print_r($js_test); echo '</pre>';
// echo '<pre>'; print_r($imgurl); echo '</pre>';
// echo '<pre>'; print_r($json); echo '</pre>';
?>
<!--
 _              ____              ___                         _   _____                             _
| |            / __ \            / _ \                       | | |_   _|                           (_)
| |__  _   _  | |  | |_  ____  _| | | |_ __    __ _ _ __   __| |   | |  _ __   ___ ___   __ _ _ __  _ _ __ ___   ___  _   _ ___
| '_ \| | | | | |  | \ \/ /\ \/ / | | | '__|  / _` | '_ \ / _` |   | | | '_ \ / __/ _ \ / _` | '_ \| | '_ ` _ \ / _ \| | | / __|
| |_) | |_| | | |__| |>  <  >  <| |_| | |    | (_| | | | | (_| |  _| |_| | | | (_| (_) | (_| | | | | | | | | | | (_) | |_| \__ \
|_.__/ \__, |  \____//_/\_\/_/\_\\___/|_|     \__,_|_| |_|\__,_| |_____|_| |_|\___\___/ \__, |_| |_|_|_| |_| |_|\___/ \__,_|___/
        __/ |                                                                            __/ |
       |___/                                                                            |___/
//-->
</body>
</html>
