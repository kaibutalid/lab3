<?php
    // Variables
    $name = "Kai";
    $email = "kabutalid@student.apc.edu.ph";
    $zodiacSign = "Leo";

    // Function to display details
    function displayDetails($label, $value) {
        echo "<div>
                <p class='h-deets1'>$label</p>
                <p class='h-deets2'>$value</p>
            </div>";
    }
    ?>

<section id="section1">
        <div class="bg-img-1">
            <img src="<?php echo base_url('images/ppink.png'); ?>" alt="Image">
            <h1 style="position: absolute; top: 26%; left: 50%; transform: translate(-50%, -50%); color: white;">Hello! I'm Kai!</h1>
            <div class="audio-player">
                <div class="icon-container">
                    <img src="<?php echo base_url('images/planet.png'); ?>" alt="Audio Image" class="audio-icon">
                </div>
                <audio src="<?php echo base_url('audio/magic.mp3'); ?>"></audio>
                <div class="controls">
                    <button class="player-button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#3D3132">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <input type="range" class="timeline" max="100" value="0">
                    <button class="sound-button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#3D3132">
                            <path fill-rule="evenodd" d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM14.657 2.929a1 1 0 011.414 0A9.972 9.972 0 0119 10a9.972 9.972 0 01-2.929 7.071 1 1 0 01-1.414-1.414A7.971 7.971 0 0017 10c0-2.21-.894-4.208-2.343-5.657a1 1 0 010-1.414zm-2.829 2.828a1 1 0 011.415 0A5.983 5.983 0 0115 10a5.984 5.984 0 01-1.757 4.243 1 1 0 01-1.415-1.415A3.984 3.984 0 0013 10a3.983 3.983 0 00-1.172-2.828 1 1 0 010-1.415z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="caption">Enjoy some music while browsing through my portfolio!</div>
            <div class="v-line"></div>
            <div class="circle"></div>
        </div>
    </section>

    <section id="section2">
        <div class="test">
            <h2 style="text-align: center;">About Me!</h2>
            <div class="txtbox-1">
                <div>  
                    <img src="<?php echo base_url('images/kai.jpg'); ?>" alt="Circle Image" class="circle-image2">
                    <div class="deets-container">
                    <?php
                        displayDetails("Name", $name);
                        displayDetails("Email", $email);
                        displayDetails("Zodiac Sign", $zodiacSign);
                        ?>
                    </div>
                </div>
            </div>
            <div class="txtbox-2">
                <p>
                    I'm a professional Netflix binger, napper, and yapper. My hobbies include never knowing what's going on and analyzing the astrology birth charts of all my friends!
                </p>
                <p>
                    On a more serious note, I am an enthusiastic and positive individual with a genuine love for living, seeking for a place where I can bring my optimistic mindset and passion.
                </p>
            </div>
            <div class="txtbox-3">
                <h3 style="text-align: center;">Favorites!</h3>
                <button onclick="sound(twinkle)">
                    <img  id="shop" src="<?php echo base_url('images/3.png'); ?>" class="circle-image">
                </button>
                <button onclick="sound(twinkle)">
                    <img  id="music" src="<?php echo base_url('images/4.png'); ?>" class="circle-image">
                </button>
                <button onclick="sound(twinkle)"">
                    <img  id="book" src="<?php echo base_url('images/5.png'); ?>" class="circle-image">
                </button>
                <button onclick="sound(twinkle)">
                    <img  id="makeup" src="<?php echo base_url('images/6.png'); ?>" class="circle-image">
                </button>
                <button onclick="sound(twinkle)">
                    <img  id="starfish" src="<?php echo base_url('images/7.png'); ?>" class="circle-image">
                </button>
            </div>
        </div>
    </section>

    <div id="section4" style="text-align:center; background-color: #d8a1c2; padding:10px; padding-bottom: 25px;">
        <div style="color:white;">
            <h2>Comments</h2>
            <button style="display: inline-block;padding: 10px 20px;background-color: #ffffff;color: #926a93;box-shadow: 0px 5px 4px rgba(0, 0, 0, 0.1);border-radius: 5px;text-decoration: none;font-size: 16px;cursor: pointer;" onmouseover="this.style.backgroundColor='#d8a1c2';" onmouseout="this.style.backgroundColor='#ffffff';">
                <a style="text-decoration:none;" onmousedown="this.style.color='#ffffff';" href="<?= base_url('comments') ?>" >View comments</a>
            </button>
        </div> 
</div>