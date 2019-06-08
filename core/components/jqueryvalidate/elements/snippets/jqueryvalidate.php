<?php
/**
* Purpose: Attaches the proper css and js files required for Jquery Validate to work.

* Example Snippet Call
[[!jqueryValidate?
&htmlElement=`#contactForm`
&inputOptionsTpl=`jqvInputOptions`
&version=`1.16.0`
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
$jval_js_version = $modx->getOption('version',$scriptProperties, '1.16.0');

/*
 * Obtain all jval options provided by user in JSON format
 */
$inputOptionsTpl = $modx->getOption('inputOptionsTpl',$scriptProperties, "tpl.jqueryValidate.jsOptions");

$jvalInputOptions = $modx->getChunk($inputOptionsTpl);

$modx->regClientScript("https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/$jval_js_version/jquery.validate.min.js");

$modx->regClientHTMLBlock(
    '<script type="text/javascript">$("' . $htmlElement . '").validate(' . $jvalInputOptions . '); </script>'
);