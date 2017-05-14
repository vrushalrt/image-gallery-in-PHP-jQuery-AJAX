# Image Gallery In PHP jQuery AJAX

## Introduction
The Image gallery developed in basic php and more detail in jQuery AJAX for learning purpose.

And here's some code! :+1:

#### To interact with file directory
```php
$dir = "images/";
$files = preg_grep('/^([^.])/', scandir($dir));
$i=1;
<?php foreach ($files as $file) { ?>
	<li>
    	<img id="<?php echo $i; ?>" src="<?php echo $dir."".$file; ?>" alt="img">
    </li>
<?php $i++; } ?>
```

#### Image description logic
```javascript
function setImg(src,id){
                $("#main").attr("src",src);
                var path = "text/" +id+".txt";
                $.get(path,function(data){
                //console.log(data);
               $("#description p").html(data);
     });
    }
 ```

### Stuff used to make this:

 * [jQuery](http://jquery.com/) for Image Viewer
 * [PHP](http://php.net/docs.php/) for file interaction and dynamic web
 * [HTML CSS](https://www.w3schools.com) for Image viewer UI
 * [XAMPP](https://www.apachefriends.org/index.html) for Web Server

#### Contact : vrushalrt@gmail.com
