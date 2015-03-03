<?php $optionname = 'main_theme_options'; $mainoptions = get_option($optionname); ?>
<div class="column fourth">
            <ul class="contact-info">
              <li>
                 <button class="orange">
                    <i class="fa fa-building"></i>
                    <p><?php echo $mainoptions['placeaddress']; ?></p>
                </button>
            </li>
            <li>
                <button class="blue">
                    <i class="fa fa-phone-square"></i>
                    <p><?php echo $mainoptions['phonenumber']; ?></p>
                </button>
            </li>
            <li>
                <button class="green">
                    <i class="fa fa-bullhorn"></i>
                    <p>PUT ANOTHER CALL TO ACTION HERE</p>
                </button>
            </li>
        </ul>
    </div>