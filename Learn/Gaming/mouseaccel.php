<?php include('../../includes/meta.php') ?>
<body>
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <?php include('../../includes/navbar.php') ?>
                <ul class="breadcrumb">
                    <li><a href="/index.php">Home</a><span class="divider">></span></li>
                    <li class="active">Learn<span class="divider">></span></li>
                    <li class="active">Mouse Acceleration</li>
                </ul>
                <h2> Mouse Acceleration </h2>
                <h3>What is mouse acceleration?</h3>
                <p>
                    Say if I slowly moved my mouse a inch. It rotated my character 90 degrees.
                    Now say if I moved my mouse an inch quickly. My character now rotated 180 degrees.
                    This is with mouse acceleration on.
                    With it disabled if I move my mouse an inch faster or slow it will always move/rotate the same amount.
                    Mouse acceleration can throw off your aim. It's mostly important when applied to first person shooters.
                    Acceleration is not necessarily bad, some people preform better with acceleration.
                    I would recommend that you don't use it to make your aim more consistent.
                </p>
                <h3>How do I disable or reduce mouse acceleration?</h3>
                <p>
                <h4>Windows Based Acceleration</h4>
                <img src="accel.png" /><BR />
                To disable Windows based acceleration navigate into the mouse control panel then into pointer options.<BR />
                Uncheck 'Enhance pointer precision'. Set the pointer speed to 6/11, this will keep the ratio 1:1.<BR />
                If the pointer speed is full it will skip some of the info the mouse is giving, while it's it's too slow it will interpolate the mouse info.
                <img src="mousetest.png" />
                <h4>Game Based Acceleration</h4>
                Within games you should have mouse acceleration or mouse smoothing off.<BR />
                If there is a option to enable raw input TURN IT ON.
                <h4>Markc's Fix</h4>
                <a href="https://docs.google.com/uc?id=0B_PnkMGDlD5naG10WW55Zjc2N1U&export=download">This</a>
                has plenty of utilities, programs, registry edits, etc to help with mouse acceleration.
                <h4>Hardware Based Acceleration</h4>
                Some mice have a built in acceleration. <BR />
                There is nothing you can do about this, the best way to avoid this is to google specs and reviews on the mouse.
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