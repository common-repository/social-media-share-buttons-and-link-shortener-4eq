<?php
/*
Plugin Name:Social Media Share Buttons and Link Shortener 4eq
Description: Social media plugin which let’s you add share icons and is a powerful, extremely scalable and light weight url shortener tool introduced by 4eq.ir.
Author: saeed mohammadi
Version: 1.0*/ 

/**** Sample PHP Function ***/
function shorten_smsbals4($url) {
$response = wp_remote_get("http://4eq.ir/updaterkhodam.php?url=".$url );
if ( is_array( $response ) ) {
  $header = $response['headers']; // array of http header lines
  $body = $response['body']; // use the content
}
return $body;
}

add_action('admin_menu', 'test_plugin_setup_menu_smsbals4');

function test_plugin_setup_menu_smsbals4(){
add_menu_page( 'smsbals4 Plugin Page', 'Social Media Share Buttons 4eq', 'manage_options', 'smsbals4-plugin', 'test_init_smsbals4' );
}

function test_init_smsbals4(){
echo '    <div class="part-lead">
        <h1>Social Media Share Buttons and Link Shortener 4eq</h1>
        <p class="lead"> for use Place [smsbals4] in your pages
Social media plugin which let’s you add share icons and is a powerful, extremely scalable and light weight url shortener tool introduced by 4eq.ir.        <br><br>
            Supports:
            <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>LinkedIn</li>
            <li>Google+</li>
            <li>Telegram</li>
            <li>WhatsApp</li>
        </ul>
        </p>
    </div>';
}
 function joomir_addform_smsbals4( $atts ) {
// code
$actual_link =get_permalink();
$ur=shorten_smsbals4("$actual_link");
$ur=json_encode($ur);
$ur=explode('_',$ur);
$ur=explode('\\\/',$ur[1]);
$ur=implode('/',$ur);
$ur=explode('\/',$ur);
$ur=implode('/',$ur);
$ur=explode('\/',$ur);
$ur=implode('/',$ur);
$ur=urlencode($ur);
$ur=explode('%5C',$ur);
$ur=implode('',$ur);
$actual_link=urldecode($ur);	
wp_enqueue_script( 'mytheme-typekit_smsbals4',plugins_url('/css1.js', __FILE__));
wp_add_inline_script( 'mytheme-typekit_smsbals4', 'try{Typekit.load({ async: true });}catch(e){}' );
wp_enqueue_style('style-name_smsbals4', plugins_url('/css1.css', __FILE__));
wp_enqueue_style( 'style-name_smsbals41', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

echo'
<meta name="viewport" content="width=device-width, initial-scale=1">
<div id="shareiconsaeedolesh">
<!-- Add font awesome icons -->
<a href="#" class="fa fa-share-alt smsbals4"  onclick="myFunction_smsbals4()"></a>
<div id="shareiconsaeed" style="display:none;">
<a href="https://www.facebook.com/sharer.php?u='.$actual_link .'" class="fa fa-facebook smsbals4"></a>
<a href="http://twitter.com/share?text=JS-Share&url='.$actual_link .'&counturl='.$actual_link .'" class="fa fa-twitter smsbals4"></a>
<a href="https://plus.google.com/share?url='.$actual_link .'" class="fa fa-google smsbals4"></a>
<a href="https://www.linkedin.com/shareArticle?mini=true&url='.$actual_link .'&title=JS-Share&summary=" class="fa fa-linkedin smsbals4"></a>
<a href="https://telegram.me/share/url?url='.$actual_link .'&text=JS-Share" class="fa fa-telegram smsbals4"></a>
<a href="https://api.whatsapp.com/send?phone=&text='.$actual_link .'&source=&data=" class="fa fa-whatsapp smsbals4"></a> 
</div>  

</div> 
';

}
add_shortcode( 'smsbals4', 'joomir_addform_smsbals4' );
?>