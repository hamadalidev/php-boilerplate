<?php
/**
 * Login
 *
 * @package       CENTER
 * @subpackage    actions
 *
 * @copyright     HAMAD ALI (ali sher)
 */

/**
 * Include configuration
 */
include_once('configs/config.inc.php');

if($_SESSION['user_data']['logged_in']) {
    network_redirect('dashboard.php');
    die();
}

/**
 * BEGIN - Include CSS
 */
include_once($GLOBALS['config']['cms']['design_path'].'base/header_login.inc.php');
/**
 * END - Include CSS
 */

/**
 * BEGIN - Include JS
 */
//$GLOBALS['cms']['includeJS'][] = $GLOBALS['config']['cms']['design_path'].'js/login.js';

/**
 * END - Include JS
 */
$GLOBALS['cms']['includeJS'][] = $GLOBALS['config']['cms']['design_path'].'js/register.js';
/**
 * BEGIN - Business Logic
 */

/**
 * END - Business Logic
 */

/**
 * BEGIN - HTML Output
 */
?>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                Sher FrameWork
            </div>

            <!-- Login Form -->
            <form action="javascript:void(0);" method="post" id="login">
                <input type="text" id="email" class="fadeIn second" name="email" placeholder="email">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
                <input type="submit" id="login_submit" class="fadeIn fourth" value="Log In"><br>
                <label id="error" class="error"></label>
            </form>

            <div id="formFooter">
                <a class="underlineHover" href="register.php">Register</a>
            </div>

        </div>
    </div>
<?php
/**
 * END - HTML Output
 */
include_once($GLOBALS['config']['cms']['design_path'].'base/footer_login.inc.php');
?>