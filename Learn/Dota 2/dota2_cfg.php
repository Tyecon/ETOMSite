<?php include('../../includes/meta.php') ?>
<body>
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <?php include('../../includes/navbar.php') ?>
                <ul class="breadcrumb">
                    <li><a href="../../index.php">Home</a><span class="divider">></span></li>
                    <li class="active">Learn<span class="divider">></span></li>
                    <li class="active">Dota 2</li>
                </ul>
                <h2> Dota 2 Launch Options and Autoexec </h2>
                <h3> Launch Options </h3>
                <a id="launch"></a>
                <img src="launchdotacfg.png" />
                <p>
                    Open your steam library, right click Dota 2, click properties, and then click SET LAUNCH OPTIONS.
                    Copy and paste this into it.
                <pre class="quote">-novid -noforcemaccel -noforcemspd -useforcedmparms -high -international -override_vpk</pre>
                <d1>
                    <dt>-novid</dt>
                    <dd>This will disable the Valve intro logo.</dd>
                    <dt>-noforcemaccel -noforcemspd -useforcedmparms</dt>
                    <dd>This will disable source engine based <a href="/Learn/Gaming/mouseaccel.php">mouse acceleration</a>.</dd>
                    <dt>-high</dt>
                    <dd>This will set the program's CPU priority to high, making it faster.</dd>
                    <dt>-international</dt>
                    <dd>This will change the main menu background and loading screen to be the Dota 2 International screens.</dd>
                    <dt>-override_vpk</dt>
                    <dd>This will allow you to customize your Dota. More info found <a href="http://steamcommunity.com/sharedfiles/filedetails/?id=150826626">here</a>.</dd>
                    <dt><BR />OPTIONAL</dt>
                    <dt>-windowed -w 1920 -h 1080 -noborder</dt>
                    <dd>This puts the game in a borderless 1080p windowed mode. This is no longer necessary as you can do this from in game.</dd>
                    <dt>-console</dt>
                    <dd>This will enable the console. It is better to use autoexec.cfg to do this instead however.</dd>
                </d1><BR />
                </p>
                <h3> Startup Script </h3>
                <a id="autoexec"></a>
                <img src="exampledotacfg.png" />
                <p>
                    Navigate to your dota cfg folder. For me it's: <BR />
                    <i>C:\Program Files (x86)\Steam\SteamApps\common\dota 2 beta\dota\cfg</i><BR />
                    While your in here go into the layouts folder (Create one if you don't have) and put <a href="http://www.dota2layout.com/gallery/pikurl3079">this</a> in it.
                    Now create a new file "autoexec.cfg". <BR />
                    Open it with a text editor (Notepad will do, <a href="http://www.sublimetext.com/" target="_blank">Sublime Text</a> if you need something better) and paste this.<BR />
                <pre class="quote">
//Launch Options: -novid -noforcemaccel -noforcemspd -useforcedmparms -international -override_vpk -high
//I leave out stuff that can be set in the game

//Console
con_enable "1" 							//Enables Console
developer "1"							//Developer Mode
con_notifytime "6"						// Sets the on-screen output messages to 6 seconds until fade-away
contimes "14"							// Enables up to 14 lines of on-screen output messages
con_filter_text "##@@"					// Filters out other console output (the string must be a character sequence which is unlikely to appear in the console)
con_filter_enable "1"					// Enables filtering of console on-screen output

//Netgraph (1920x1080, google if your screen is different size)
net_graph 1
net_graphproportionalfont 0
net_graphinsetbottom 415
net_graphinsetright -192
net_graphinsetleft 0
net_graphheight 64

//Performance
mat_vsync "0"							//VSync off
fps_max 120 							//Max framerate for client
mat_triplebuffered "0"					//Triple Buffering
mat_queue_mode "-1"						//Multicore Rendering
snd_mix_async "1"						//Multicore Sound
engine_no_focus_sleep "0"				//Less resource used when alt tabbed out
in_usekeyboardsampletime "0"            //Use keyboard sample time smoothing.

//Dota Settings
dota_hero_tooltip "1"					//Style of Hero Tooltip (0:Corner; 1:Overhead; 2:InlineOverhead;)
dota_force_right_click_attack "1"		//Allows you to right click attack/deny ally creeps under %50 hp
dota_disable_range_finder "0"			//Enables a rangefinder/arrows for spell distance
dota_range_display "1200"				//(Bot matches only) Shows a circle around the hero with the specified range, E.g 1200 is the blink dagger and exp range
dota_unit_fly_bonus_height "300"		//Additional Height on flying units (Default 150)
dota_sf_hud_error_msg "0"				//Disables displaying error msgs on hud
dota_sf_hud_header_display_time "3"		//Display time of first blood, killstreaks, etc
dota_killcam_show "1" 					//Shows a window to the top left of who killed you, along with the option to see from who and what damage you took

//HP bars
dota_hud_healthbars "3"                 //HP bars (Disables "0";No dividing blocks "1";Normal "3").
dota_health_per_vertical_marker "500"   //Health segmenting in the lifebar.
dota_health_marker_major_alpha "255"    //Opacity major healthbar divider.
dota_health_marker_minor_alpha "128"    //Opacity minor healthbar divider.
dota_health_hurt_threshold "99999"      //Damage threshold to be achieved for fade to acutally apply.
dota_hud_healthbar_hoveroutline_alpha "255"  //Glowing of creeps HP bar.
dota_health_hurt_decay_time_max "0"     //Fade time on hp bars MAX.
dota_health_hurt_decay_time_min "0"     //Fade time on hp bars MIN.    
dota_health_hurt_delay "0"              //Fade time on hp bars DELAY.
dota_pain_decay "0"                     //Fade time on hp bars DECAY.
dota_pain_factor "0"                    //Fade time on hp bars FACTOR.
dota_pain_fade_rate "0"                 //Fade time on hp bars RATE.    
dota_pain_multiplier "0"                //Fade time on hp bars MULTIPLIER.

//Minimap
dota_minimap_hero_size "1000"            //Hero icons on minimap.
dota_minimap_misclick_time "0"          //Removes delay before allowing input on minimap.e             
dota_minimap_tower_defend_distance "400"//Distance from tower to iniate ping tower instead of ping map.                
dota_minimap_ping_duration "4"          //Duration of pings.
dota_minimap_ping_tag_duration "4"      //Duration of shield pings on towers.
dota_minimap_hero_name_shadowsize "4"   //Shadow size

//Netcode
cl_cmdrate "30"                          //Amount of updates sent to server per second.
cl_interp "0"                            //Sets the interpolation amount (bounded on low side by server interp ratio settings).
cl_interp_ratio "1"                      //Multiplies final result of cl_interp.
cl_lagcompensation "1"                   //Perform server side lag compensation of weapon firing events.
cl_pred_optimize "2"                     //Optimize for not copying data if didn't receive a network update (1), and also for not repredicting if there were no errors (2)
cl_smooth "0"                            //Smooth view/eye origin after prediction errors.
cl_smoothtime "0.01"                     //When errors occur smooth display over X time.
cl_updaterate "30"                       //Amount of updates received from server per second.
rate "80000"                             //Total amount of bandwidth Dota 2 may use.
cl_resend "1.5"                          //Delay in seconds before the client will resend the 'connect' attempt
sv_forcepreload "1"                      //Force server side preloading.
 
cl_spectator_cmdrate_factor "0.5"        //Multiplier for CMD rate while spectating.
cl_spectator_interp_ratio "2"            //Multiplier for interp while spectating.

//Rune checker
bind "F3" "r_c"                          //Rune checker.
alias "r_c" "r_t"
alias "r_t" "dota_camera_setpos -2250 1235 980;alias r_c r_b"
alias "r_b" "dota_camera_setpos 3035 -2970 965;alias r_c b_t_h"
alias "b_t_h" "+dota_camera_follow; -dota_camera_follow;+dota_camera_follow; -dota_camera_follow;alias r_c r_t"
                </pre>
                </p>
                <a href="#top">Go to top</a>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <?php include('../../includes/footer.php') ?>
            </div>
        </div>
    </div>
</body>