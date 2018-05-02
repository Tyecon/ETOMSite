<?php include('../../includes/meta.php') ?>
<body>
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <?php include('../../includes/navbar.php') ?>
                <ul class="breadcrumb">
                    <li><a href="../../index.php">Home</a><span class="divider">></span></li>
                    <li class="active">Learn<span class="divider">></span></li>
                    <li class="active">Counter Stike</li>
                </ul>
                <h2> Counter Strike: GO Launch Options and Autoexec </h2>
                <h3> Launch Options </h3>
                <a id="launch"></a>
                <p>
                    Open your steam library, right click CS:GO, click properties, and then click SET LAUNCH OPTIONS.
                    Copy and paste this into it.
                <pre class="quote">-novid -noforcemaccel -noforcemspd -useforcedmparms -high +exec autoexec.cfg</pre>
                <d1>
                    <dt>-novid</dt>
                    <dd>This will disable the Valve intro logo.</dd>
                    <dt>-noforcemaccel -noforcemspd -useforcedmparms</dt>
                    <dd>This will disable source engine based <a href="/Learn/Gaming/mouseaccel.php">mouse acceleration</a>.</dd>
                    <dt>-high</dt>
                    <dd>This will set the program's CPU priority to high, making it faster.</dd>
                    <dt>+exec autoexec.cfg</dt>
                    <dd>This will execute the startup script at startup</dd>
                    <dt><BR />OPTIONAL</dt>
                    <dt>-windowed -w 1920 -h 1080 -noborder</dt>
                    <dd>This will put the game in a borderless 1080p windowed mode. This is no longer necessary as you can do this from in game.</dd>
                    <dt>-console</dt>
                    <dd>This will enable the console. It is better to use autoexec.cfg to do this instead however.</dd>
                </d1>
                </p>
                <h3> Startup Script </h3>
                <a id="autoexec"></a>
                <p>
                    Navigate to your csgo cfg folder. For me it's: <BR />
                    <i>C:\Program Files (x86)\Steam\SteamApps\common\Counter-Strike Global Offensive\csgo\cfg</i><BR />
                    Now create a new file "autoexec.cfg". <BR />
                    Open it with a text editor (Notepad will do, <a href="http://www.sublimetext.com/" target="_blank">Sublime Text</a> if you need something better) and paste this.<BR />
                </p>
                <pre class="quote" style="display:block;">
// Crosshair
cl_crosshairalpha "255"
cl_crosshaircolor "5"
cl_crosshaircolor_b "255"
cl_crosshaircolor_r "255"
cl_crosshaircolor_g "0"
cl_crosshairdot "1"
cl_crosshairgap "0"
cl_crosshairsize "6"
cl_crosshairstyle "3"
cl_crosshairusealpha "0"
cl_crosshairthickness "1.5"
cl_fixedcrosshairgap "0"
cl_crosshair_outline "1"
cl_crosshair_outline_draw "0"

// Viewmodel
viewmodel_fov "62.5"
viewmodel_offset_x "2"
viewmodel_offset_y "2"
viewmodel_offset_z "-2"

// Bobbing and movement shifting
cl_viewmodel_shift_left_amt "0"
cl_viewmodel_shift_right_amt "0"
cl_bob_lower_amt "0"
cl_bobamt_lat "0"
cl_bobamt_vert "0"
cl_bobcycle "2"

// Audio
snd_mixahead "0.05"
snd_headphone_pan_exponent "2"
snd_musicvolume "0"

// Rates and Interpolation
cl_cmdrate "128"
cl_updaterate "128"
cl_interp "0"
cl_interp_ratio "1"
rate "128000"

// Mouse commands
m_rawinput "1"
m_mouseaccel1 "0"
m_mouseaccel2 "0"


// Miscellaneous
cl_autowepswitch "0"
cl_autohelp "0"
cl_showhelp "0"
cl_righthand "1"
cl_forcepreload "1"
hud_showtargetid "0"
net_graph "1"
mm_dedicated_search_maxping "110"
mm_session_search_ping_limit "110"
fps_max "200"
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