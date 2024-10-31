<!-- ============================================= Admin page of the plugin ======================= -->
<section id="aats1c_scroll_top">
    <div id="aats1c_scroll_top_left">
        <h1>Scroll top by 1 Click</h1>
        <p>You can change all the settings of the scroll top button from here.</p>

        <div class="aats1c_btn_preview">
            <h3>Preview</h3>

            <div id="aats1c_btn_preview_main">
                <img src="<?php 
                $aats_icon = get_option( 'aats1c_btn_icon' );
                echo  plugins_url("img/$aats_icon" , __FILE__) 
                ?>" >
            </div>

        </div>


        <form action="options.php" method="post">
            <?php wp_nonce_field( 'update-options' ); ?>
            
            <div class="item">
                <h4>Position</h4>
                <label for="aats1c_btn_position">left</label>
                <input type="radio" name="aats1c_btn_position" value="left" checked>
                <label for="aats1c_btn_position">right</label>
                <input type="radio" name="aats1c_btn_position" value="right" <?php if( get_option( 'aats1c_btn_position' ) == 'right'){echo 'checked' ;} ?>>
            </div>

            <div class="item">
                <h4>Background Color</h4>
                <input type="color" class="aats1c_input_style" name="aats1c_btn_bgc" value="<?php echo get_option( 'aats1c_btn_bgc' ); ?>">
            </div>

            <div class="item">
                <h4>Icon</h4>
                <select name="aats1c_btn_icon" class="aats1c_input_style">
                    <option value="up_black1.png" <?php if(get_option( 'aats1c_btn_icon' ) == 'up_black1.png'){ echo 'selected' ;} ?>>Black 1</option>
                    <option value="up_black2.png" <?php if(get_option( 'aats1c_btn_icon' ) == 'up_black2.png'){ echo 'selected' ;} ?>>Black 2</option>
                    <option value="up_black3.png" <?php if(get_option( 'aats1c_btn_icon' ) == 'up_black3.png'){ echo 'selected' ;} ?>>Black 3</option>
                    <option value="up_black4.png" <?php if(get_option( 'aats1c_btn_icon' ) == 'up_black4.png'){ echo 'selected' ;} ?>>Black 4</option>
                    <option value="up_black5.png" <?php if(get_option( 'aats1c_btn_icon' ) == 'up_black5.png'){ echo 'selected' ;} ?>>Black 5</option>
                    <option value="up_black6.png" <?php if(get_option( 'aats1c_btn_icon' ) == 'up_black6.png'){ echo 'selected' ;} ?>>Black 6</option>
                    
                    <option value="up_green1.png" <?php if(get_option( 'aats1c_btn_icon' ) == 'up_green1.png'){ echo 'selected' ;} ?>>Green 1</option>
                    <option value="up_green2.png" <?php if(get_option( 'aats1c_btn_icon' ) == 'up_green2.png'){ echo 'selected' ;} ?>>Green 2</option>
                    <option value="up_green_lite.png" <?php if(get_option( 'aats1c_btn_icon' ) == 'up_green_lite.png'){ echo 'selected' ;} ?>>Green Lite</option>
                    <option value="up_green_3d.png" <?php if(get_option( 'aats1c_btn_icon' ) == 'up_green_3d.png'){ echo 'selected' ;} ?>>Green 3D</option>
                    
                    <option value="up_red1.png" <?php if(get_option( 'aats1c_btn_icon' ) == 'up_red1.png'){ echo 'selected' ;} ?>>Red 1</option>
                    <option value="up_red2.png" <?php if(get_option( 'aats1c_btn_icon' ) == 'up_red2.png'){ echo 'selected' ;} ?>>Red 2</option>
                    <option value="up_red3.png" <?php if(get_option( 'aats1c_btn_icon' ) == 'up_red3.png'){ echo 'selected' ;} ?>>Red 3</option>
                    <option value="up_red4curved.png" <?php if(get_option( 'aats1c_btn_icon' ) == 'up_red4curved.png'){ echo 'selected' ;} ?>>Red Curved</option>
                    <option value="up_red_orange.png" <?php if(get_option( 'aats1c_btn_icon' ) == 'up_red_orange.png'){ echo 'selected' ;} ?>>Red Orange</option>
                    
                    <option value="up_blue.png" <?php if(get_option( 'aats1c_btn_icon' ) == 'up_blue.png'){ echo 'selected' ;} ?>>Blue</option>
                    <option value="up_purple.png" <?php if(get_option( 'aats1c_btn_icon' ) == 'up_purple.png'){ echo 'selected' ;} ?>>Purple</option>
                
                </select>
            </div>

            <div class="item">
                <h4>Corner Round</h4>
                <input type="text" class="aats1c_input_style" name="aats1c_btn_round" value="<?php echo esc_attr( get_option( 'aats1c_btn_round') ) ; ?>" id="aats1c_btn_round">
            </div>

            <div class="item">
                <h4>Distance from side</h4>
                <input type="text" class="aats1c_input_style" name="aats1c_btn_side" value="<?php echo esc_attr( get_option( 'aats1c_btn_side') ) ; ?>">
            </div>

            <div class="item">
                <h4>Distance from bottom</h4>
                <input type="text" class="aats1c_input_style" name="aats1c_btn_bottom" value="<?php echo esc_attr( get_option( 'aats1c_btn_bottom') ) ; ?>" placeholder="30px">
            </div>

            <div class="item">
                <h4>Button Height</h4>
                <input type="text" class="aats1c_input_style" name="aats1c_btn_height" value="<?php echo esc_attr( get_option( 'aats1c_btn_height') ) ; ?>" placeholder="30px">
            </div>

            <div class="item">
                <h4>Button Width</h4>
                <input type="text" class="aats1c_input_style" name="aats1c_btn_width" value="<?php echo esc_attr( get_option( 'aats1c_btn_width') ) ; ?>" placeholder="30px">
            </div>

            <!-- ====================== WP Default ========================== -->
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="page_options" value="aats1c_btn_bgc, aats1c_btn_icon , aats1c_btn_position , aats1c_btn_round , aats1c_btn_side ,aats1c_btn_bottom , aats1c_btn_height , aats1c_btn_width">
            <input type="submit" value="<?php _e( 'Save information', 'aats1c' ); ?>">
        </form>

        <p>
            <strong> N. B. You have to save once for the plugin activation. You should give the value in 'Distance from side' if you select the 'Position' is right. </strong>
        </p>
    </div>

    <div id="aats1c_scroll_top_right">
        <h1>About Author</h1>
        <img class="author" src="https://i.ibb.co/qnwVVDD/myphoto.jpg" alt="Abdullah Almamun" border="0">   
        <p>
        I am <a href="https://almamun.life" target="_blank">Abdullah Almamun</a> from Jashore, Banglades. I have been working on web design and development since 2020 for helping people to build their websites, manage and development functionalities. 
        </p> 
        <a href="https://www.buymeacoffee.com/almamun2s" target="_blank">
            <img class="coffee" src="<?php echo  plugins_url("img/coffee.png" , __FILE__) ?>" alt="" srcset="">
        </a>
        <p>
            Any problem? Need help? <a href="https://almamun.life" target="_blank">contact me</a>.
        </p>
    </div>
</section>