## About Jquery Validate

* This package works with Modx Revolution 2.3 and above.  
* It acts as a wrapper for jquery validate (https://jqueryvalidation.org/) and is used to perform frontend validation on
forms
* The Jquery JavaScript library is required to run this pakage


## Quick start

* Download the latest version of the transport file from the _packages directory in this repository.

* Upload to your Modx core/packages directory

* Search locally for package from Modx Package Manager and Install.

* Alternatively you can download from packgage manager


## Usage

```
[[!jqueryValidate?
    &htmlElement=`#contactForm`
    &tpl=`tpl.jqueryValidate.jsOptions`
    &install_jquery=`0`
    &jquery_version=`2.2.4`
    &jvalidate_version=`1.16.0`
]]
```

 #### SNIPPET PARAMETERS
* htmlElement - the html element to attach Jquery Validate - (default) #contactForm.  You can use a dot before the element to target classes
* tpl - is a chunk used to build a javascript object of all Jquery Validate properties for example, rules, custom error messages etc.
     * See all jquery validate  Options here https://jqueryvalidation.org/validate/
     * (default) tpl chunk is tpl.jqueryValidate.jsOptions
     * You should duplicate the tpl.jqueryValidate.jsOptions chunk (see code below) and create your own validation rules.  The default Tpl has the following
     built in rules for first_name, last_name, email and message. as seen in rules below. These rules would apply to form elements with the correponding names
*  install_jquery - If you have not installed jquery in your project, you can set this option to 1 to install this dependency. (default) - 0
*  jquery_version - Specify the version of jQuery.  (default) - 2.2.4
*  jvalidate_version - Specify the version of Jquery Validate. (default) - 1.16.0 
     

##### tpl.jqueryValidate.jsOptions Tpl        
```javascript
    {
        errorPlacement: function(error, element) {
        error.insertBefore(element);
        },
        errorClass: "error",
        errorElement: "div",
        rules: {
            first_name: "required",
            last_name: "required",
            email: {
            required: true,
            email: true
            },
            message: "required"
        },
        messages: {
            first_name: "Please enter your First Name",
            last_name: "Please enter your Last Name",
            email: "Please enter a valid email",
            message: "The message is required"
        }
    }

```

##### Complete Example

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Title</title>
</head>
<body>


[[!jqueryValidate?
&htmlElement=`#contactForm`
&install_jquery=`1`
]]

<form id="contactForm">
    <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="emailHelp" placeholder="Enter first name">
    </div>
    <div class="form-group">
    <label for="first_name">Last Name</label>
    <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="emailHelp" placeholder="Enter last_name">
    </div>
    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
    <label for="message">Message</label>
        <textarea  class="form-control" id="message" name="message" aria-describedby="emailHelp" placeholder="Enter Message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
  
</body>
</html>

```


