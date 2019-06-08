## About Jquery Validate

* This package works with Modx Revolution 2.3 and above.  
* It acts as a wrapper for jquery validate (https://jqueryvalidation.org/) and is used to perform frontend validation on
forms
* The Jquery JS library is required to run this pakage


## Quick start

* Download the transport file from the _packages directory

* Upload to your Modx core/packages directory

* Search locally for package from Modx Package Manager and Install.


## Usage

```
[[!jqueryValidate?
    &htmlElement=`#contactForm`
    &tpl=`tpl.jqueryValidate.jsOptions`
    &version=`1.16.0`
]]
```

 #### SNIPPET PARAMETERS
* htmlElement - the html element to attach Jquery Validate - (default) #contactForm.  You can use a dot before the element to target classes
 * inputOptionsTpl - is a tpl chunk used to build a json object of all Jquery Validate properties example, rules, messages etc.
      * See all jquery validate  Options here https://jqueryvalidation.org/validate/
      * (default) tpl chunk is tpl.jqueryValidate.jsOptions
 * version - Jquery Validate Version to use - (default) 1.16.0