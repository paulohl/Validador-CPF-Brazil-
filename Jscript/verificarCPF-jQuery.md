Include both scripts in the HTML, immediately  before closing the head tag, as per the example below:

```javascript
<head>
<script type="text/javascript" src="js/jquery-1.2.6.pack.js">
        </script>
<script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"/>	
        </script>
</head>
```

  Next, in the followinb line after the inclusion, initialize the JQuery mask as per the example below:

```javascript
<script type="text/javascript"
        $(document).ready(function(){
        $("#cpf").mask("999.999.999-99");
        });
        </script>
```
  Next, create the form utilizing the attribute id='cpf' in the CPF field:

```javascript
<form name="form" method="post" action="">
        <input name="cpf" type="text" id="cpf"/>
      	</form
```
  The CPF mask should be working at this point. Note that the script prevents typing chatacters other then numbers.
  Test this feature by typing letters or any special character in the field to see the script behavior.

  If the user interrupts typing all the 11 numbers and jumps to other field, the script will automatically clears whatever was entered and returns an error.
