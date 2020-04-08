## Contao SimpleAjaxRouting

Basis for Ajax tasks.  
Simple extend with your own code.  

## Install

1) Use composer or contao manager to install!


## Information

This module provides the basis for your Ajax applications.
1) Add your new route in /src/Resources/config/routing.yml
2) Add your code in /src/Controller/SimpleAjaxRouting.php 
3) Create an ajax call in your html/js File

## Example

```html
<input type="text" name="ajaxQuicksearch" id="ajaxQuicksearch" value="">

<script>
$("#ajaxQuicksearch").on("change", function(event){  
	$.ajax({  
		url:        '/articlesearch', // value from your routing.yml
		type:       'POST',   
		dataType:   'json',  
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