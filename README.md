## Contao SimpleAjaxRouting

Basis for Ajax tasks.  
Simple extend with your own code.  

## Install

Copy to:
root
\- src 
\- - hh-com
\- - - contao-simpleajaxrouting

Update your contao installation composer.json
``` code
"repositories": [
    {
        "type": "path",
        "url": "./src/hh-com/contao-simpleajaxrouting",
        "options": {
                "symlink": true
        }
    }
],
"require": {
    ...
    "hh-com/contao-simpleajaxrouting": "@dev",
    ... 
}
```
Run composer: php -d memory_limit=-1 ./path/to/composer.phar update


## Information

This module provides the basis for your Ajax applications.
1) Add your new route in /src/Resources/config/routing.yml
2) Add your code in /src/Controller/SimpleAjaxRouting.php 
3) Create an ajax call in your html/js file

## Example (jQuery needed)

```html
<input type="text" name="ajaxQuicksearch" id="ajaxQuicksearch" value="">

<script>
$("#ajaxQuicksearch").on("keyup", function(event){  
	$.ajax({  
		url:        '/articlesearch/', // value from your routing.yml
		type:       'POST',   
		dataType:   'json',
		data: {
                    keyword: $(this).val(),
                    keyword2: "whotever2"
        },
		async:      true,  
		success: function(data, status) {  
			console.log(data);
			console.log(status);
		},  
		error : function(xhr, textStatus, errorThrown) {  
			console.log(xhr); 
			console.log(textStatus); 
			console.log(errorThrown); 
		}  
	});  
});
</script>
```