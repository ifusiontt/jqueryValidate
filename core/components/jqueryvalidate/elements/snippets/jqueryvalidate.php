<?php
/**
* Purpose: Attaches the proper css and js files required for Jquery Validate to work.

* Example Snippet Call
[[!jqueryValidate?
&htmlElement=`#contactForm`
&tpl=`tpl.jqueryValidate.jsOptions`
&install_jquery=`0`
&jquery_version=`2.2.4`
&jvalidate_version=`1.16.0`
]]

 *SNIPPET PARAMETERS
    * htmlElement - the html element to attache Jquery Validate - (default) #contactForm
    * inputOptionsTpl - is a tpl chunk used to take a json string of all Jquery Validate properties example, rules, messages etc.
        * See all jquery validate  Options here https://jqueryvalidation.org/validate/
        * (default) tpl.jqueryValidate.jsOptions
    * version - Jquery Validate Version to use - (default) 1.16.0
 **/

/*
 * Html element in which to bind jval too.
 */
$htmlElement = $modx->getOption('htmlElement',$scriptProperties, '#contactForm');
$install_jquery = $modx->getOption('install_jquery',$scriptProperties, 0);
$jquery_js_version = $modx->getOption('jquery_version',$scriptProperties, '2.2.4');
$jval_js_version = $modx->getOption('jvalidate_version',$scriptProperties, '1.16.0');

/*
 * Obtain all jval options provided by user in JSON format
 */
$inputOptionsTpl = $modx->getOption('tpl',$scriptProperties);

$jvalInputOptions = $modx->getChunk($inputOptionsTpl);

if($install_jquery == 1){
    $modx->regClientScript("https://code.jquery.com/jquery-$jquery_js_version.min.js");
}
$modx->regClientScript("https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/$jval_js_version/jquery.validate.min.js");

$modx->regClientHTMLBlock(
    '<script type="text/javascript">$("' . $htmlElement . '").validate(' . $jvalInputOptions . '); </script>'
);