<?php
/**
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*  
 *                                    Webspell-RM      /                        /   /                                                 *
 *                                    -----------__---/__---__------__----__---/---/-----__---- _  _ -                                *
 *                                     | /| /  /___) /   ) (_ `   /   ) /___) /   / __  /     /  /  /                                 *
 *                                    _|/_|/__(___ _(___/_(__)___/___/_(___ _/___/_____/_____/__/__/_                                 *
 *                                                 Free Content / Management System                                                   *
 *                                                             /                                                                      *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 * @version         Webspell-RM                                                                                                       *
 *                                                                                                                                    *
 * @copyright       2018-2022 by webspell-rm.de <https://www.webspell-rm.de>                                                          *
 * @support         For Support, Plugins, Templates and the Full Script visit webspell-rm.de <https://www.webspell-rm.de/forum.html>  *
 * @WIKI            webspell-rm.de <https://www.webspell-rm.de/wiki.html>                                                             *
 *                                                                                                                                    *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 * @license         Script runs under the GNU GENERAL PUBLIC LICENCE                                                                  *
 *                  It's NOT allowed to remove this copyright-tag <http://www.fsf.org/licensing/licenses/gpl.html>                    *
 *                                                                                                                                    *
 * @author          Code based on WebSPELL Clanpackage (Michael Gruber - webspell.at)                                                 *
 * @copyright       2005-2018 by webspell.org / webspell.info                                                                         *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 *                                                                                                                                    *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 */

$_language->readModule('index');

$index_language = $_language->module;

$cookievalue = 'false'; 
if(isset($_COOKIE['cookie'])) { 
    $cookievalue = 'accepted';  
}
header('X-UA-Compatible: IE=edge,chrome=1');
?>
<!DOCTYPE html>
<html class="h-100" lang="<?php echo $_language->language ?>">
<head>

    <meta name="description" content="Kostenlose Homepage erstellen mit webSPELL-RM CMS: Einfach, schnell &amp; kostenlos! Vorlage und Plugins wählen und in wenigen Minuten mit der eigenen Website online gehen.">
    <meta name="keywords" content="Clandesign, Webspell, Webspell-RM, Wespellanpassungen, Webdesign, Tutorials, Downloads, Webspell-rm, rm, addon, plugin, Templates Webspell Addons, plungin, mods, Webspellanpassungen, Modifikationen und Anpassungen und mehr!">
    <meta name="robots" content="all">
    <meta name="abstract" content="Anpasser an Webspell | RM">
    <meta name="copyright" content="Copyright &copy; 2018-2024 by webspell-rm.de">
    <meta name="author" content="webspell-rm.de">
    <meta name="revisit-After" content="1days">
    <meta name="distribution" content="global">
    <link rel="SHORTCUT ICON" href="./includes/themes/<?php echo $theme_name; ?>/templates/favicon.ico">
 
    <!-- Head & Title include -->
    <title><?= get_sitetitle(); ?></title>

    <base href="<?php echo $rewriteBase; ?>">

    <link href="tmp/rss.xml" rel="alternate" type="application/rss+xml" title="<?php echo $myclanname; ?> - RSS Feed">
    <link rel="stylesheet" href="../components/cookies/css/cookieconsent.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="../components/cookies/css/iframemanager.css" media="print" onload="this.media='all'">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php
         $lang = $_language->language; // Language Variable setzen 
        /* Components & themes css */
        echo $components_css;
        echo $theme_css;
        /* Components & themes css END*/

        /* Plugin-Manager  css */
        echo ($_pluginmanager->plugin_loadheadfile_css());
        /* Plugin-Manager  css END*/

         /*  Components & themes js */ 
        echo $components_js;
        echo $theme_js;
        /*  Components & themes css / js  END */
    
        /* Plugin-Manager  js */
        echo ($_pluginmanager->plugin_loadheadfile_js());
        /* Plugin-Manager  js END */

        /* Module DB Abfrage */
        echo get_hide();
        /* Module DB Abfrage END */

        /* ckeditor */
        echo get_editor();
        /* ckeditor END*

      /* Module DB Abfrage END */
      global $site,$title;
      $ergebnis=safe_query("SELECT * FROM ".PREFIX."settings_themes");
        $ds=mysqli_fetch_array($ergebnis);
    ?>

  </head>
  
   <body>
    <div class="d-flex flex-column sticky-footer-wrapper"> <!-- flex -->
      <div class="container text-center">
           <img class="img-fluid" style="width: 470px; padding: 15px;border-color: #000;border: 1px" src="/includes/themes/verdux/images/logo_verdux.png" alt="">
          </div>
     <!-- navigation & slider -->
    <div class="container">
      <div class="card header">
        <?php echo get_lock_modul();?>
        <?php if (!in_array($site, $hide9)) {echo get_via_navigation_modul();}?> 
        <!-- Navigation Modul --> 
        <?php echo get_navigation_modul();?>    
        
        <?php echo get_head_modul();?>
        <?php echo get_headelements();?>
     </div>
  </div>
    <!-- navigation & slider end -->
<!-- breadcrumb -->
    <div class="container sec-marg" style="padding: 16px">
     <div class="mainsec card">
      <section class="breadcrumbb">
       <nav aria-label="breadcrumb">
         <ol class="breadcrumb bg-primary breadcrumb-divider">
           <li class="breadcrumb-item"><a class="py-2 px-3" href="#"><i class="bi bi-house"></i></a></li>
           <li class="breadcrumb-item"><a class="py-2 px-2" href="#">Main</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a class="py-2 px-2" href="#"><?php echo $site; ?></a></li>
         </ol>
       </nav>
      </section>
      <!-- breadcrumb end -->
<section class="content">
<!-- content Center Head -->
        <div id="head_section">	
        <?php if (!in_array($site, $hide6)) {echo get_head_section();}?>
        </div>
        <!-- content Center Head End-->


<main class="flex-fill">  <!-- flex -->
        
            <div class="container content_style"> <!-- container -->
              
                <div class="row"> <!-- row --> 
              <div class="row"> <!-- row -->

                <!-- left column linke Spalte -->
               <?php if (!in_array($site, $hide3)) { ?>
               <?php if (!in_array($site, $hide1)) { ?>
                
                <div id="leftcol" class="col-md-3"> 
                    <?php echo get_left_side ();?>
                </div>

                <?php } ?>
                <?php } ?>
                <!-- left column linke Spalte END -->

        <!-- main content area -->
                <div id="maincol" class="<?php echo get_mainhide(); ?>">
                
                <!-- content Center Head -->  
                <?php if (!in_array($site, $hide4)) {echo get_center_head();}?>
                <!-- content Center Head End-->
                
                
                <!-- Main Content -->
                <?php echo get_mainContent(); ?>
                <!-- Main Content End-->
<!-- sponsors -->
          <h5 style="margin-top: 20px;">
           <i class="bi bi-info-circle bg-primary"></i>
           Our supporters
           <span>hand in hand</span>
          </h5>
          <div class="card supp">
          <?php 
                $dx = mysqli_fetch_array(safe_query("SELECT * FROM " . PREFIX . "settings_plugins WHERE modulname='sponsors'"));
                    if (@$dx[ 'modulname' ] != 'sponsors') {
                    $test = '';
                    } else {
                      get_widget('sponsors','plugin_widget2');
                    };
              ?>
                <!-- content Center Head -->  
                <?php if (!in_array($site, $hide5)) {echo get_center_footer();}?>
                <!-- content Center Head End-->
            </div>    
                </div>
        <!-- main content area END -->
                <!-- right column rechte Spalte -->
                <?php if (!in_array($site, $hide3)) { ?>
                <?php if (!in_array($site, $hide2)) { ?>
                
                <div id="rightcol" class="col-md-3">
                    <?php echo get_right_side ();?>
                </div>

                <?php } ?>
                <?php } ?>
                <!-- right column rechte Spalte END -->
        </div> <!-- row End -->
            </div> <!-- container-content End -->
      </main>
      <!-- content Center Footer -->
        <?php if (!in_array($site, $hide7)) {echo get_foot_section();}?>
        <!-- content Center Footer END -->
     <!-- lower content -->
     <div id="lowerfooter" class="card lower">
       <div class="row">
         <div class="col-md-6 col-sm-12 col-xs-12">
           <h5 style="margin-top: 20px;">
             <i class="bi bi-play-circle bg-primary"></i>
             Video Area
             <span>in motion</span>
           </h5>
           <div class="gal1lery">
           <?php 
              $dx = mysqli_fetch_array(safe_query("SELECT * FROM " . PREFIX . "settings_plugins WHERE modulname='videos'"));
                if (@$dx[ 'modulname' ] != 'videos') {
                #$test = '';
                } else {
                  get_widget('videos','plugin_widget3');
                };
            ?>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12 ">
           <h5 style="margin-top: 20px;">
             <i class="bi bi-card-image bg-primary"></i>
             Gallery
             <span>our best pictures</span>
           </h5>
           <div class="gal1lery">
           <?php 
        $dx = mysqli_fetch_array(safe_query("SELECT * FROM " . PREFIX . "settings_plugins WHERE modulname='gallery'"));
                    if (@$dx[ 'modulname' ] != 'gallery') {
                    #$test = '';
                    } else {
                      get_widget('gallery','plugin_widget1');
                    };
                    ?>
                  </div>
         </div>
       </div>
     </div>
     <!-- lower content end -->
      
     <!-- upper footer -->
     <div class="card upfooter">
       <div class="row">
         <div class="col-md-4 col-sm-12 col-xs-12">
           <h5 style="margin-top: 20px;">
             <i class="bi bi-plus-circle-dotted bg-primary"></i>
             Social Media
             <span>stay connected</span>
           </h5>
           			<?php
              $dx = mysqli_fetch_array(safe_query("SELECT * FROM " . PREFIX . "settings_plugins WHERE modulname='facebook'"));
                    if (@$dx[ 'modulname' ] != 'facebook') {
                    $test = '';
                    } else {
                      get_widget('facebook','plugin_widget3');
                    };
                    ?>
         </div>
         <div class="col-md-4 col-sm-12 col-xs-12">
           <h5 style="margin-top: 20px;">
             <i class="bi bi-cup bg-primary"></i>
             Something
             <span>space for something</span>
           </h5>
           <p>Inhalt</p>
         </div>
         <div class="col-md-4 col-sm-12 col-xs-12">
           <h5 style="margin-top: 20px;">
             <i class="bi bi-book bg-primary"></i>
             About us
             <span>some special words</span>
           </h5>
           	<?php 
              $dx = mysqli_fetch_array(safe_query("SELECT * FROM " . PREFIX . "settings_plugins WHERE modulname='about_us'"));
                if (@$dx[ 'modulname' ] != 'about_us') {
                $test = '';
                } else {
                 get_widget('about_us','plugin_widget3');
                };  
            ?>
         </div>
       </div>
     </div>
     <!-- upper footer end -->
     </section>
      <footer id="footer">
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12">
           <img class="img-fluid" style="width: auto; height: 60px;" src="../includes/themes/<?php echo $theme_name; ?>/images/<?php echo $ds[ 'logo_pic' ];; ?>" alt="">
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <ul class="nav flex-column">
                  <li class="nav-item bg-primary px-2 py-1">
                    Quick Links
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?site=news_manager">News</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?site=about_us">About us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?site=squads">Teams</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?site=clanwars">Matches</a>
                  </li>
                 </ul>
               </div>
               <div class="col-md-6 col-sm-12 col-xs-12">
                <ul class="nav flex-column">
                  <li class="nav-item bg-primary px-2 py-1">
                    Contact us
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?site=contact">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?site=joinus">Join us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?site=privacy_policy">Privat policy</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?site=imprint">Imprint</a>
                  </li>
                 </ul>
               </div>
             </div>
          </div>
         </div>
       </footer>
    </div>
       <div class="col-12 text-end stuff">
        <a target="_blank" href="http://www.2one-designs.de">Template by 2one-designs.de</a>
       </div>
   </div>
</div>
</div>  <!-- flex END -->   
    <!-- scroll to top feature -->
    <div class="scroll-top-wrapper"> 
        <span class="scroll-top-inner">
            <i class="bi bi-arrow-up-circle" style="font-size: 2rem;"></i>
        </span>
    </div>
    <!-- scroll to top feature END --> 
    <div class="cookies-wrapper"> 
        <span class="cookies-top-inner">
            <i class="bi bi-gear" style="font-size: 2rem;" data-cc="c-settings" data-toggle="tooltip" data-bs-title="Cookie settings"></i>
        </span>
    </div>

    <!-- Link muss noch geändert werden-->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- Cookies Abfrage -->
    <script defer src="../components/cookies/js/iframemanager.js"></script>
    <script defer src="../components/cookies/js/cookieconsent.js"></script>
    <script defer src="../components/cookies/js/cookieconsent-init.js"></script>
    <script defer src="../components/cookies/js/app.js"></script>

    <!-- Language recognition for DataTables -->
    <? echo "<script>const LangDataTables = '$_language->language';</script>"; ?>
<script type="text/javascript">
        // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
</body>
</html>