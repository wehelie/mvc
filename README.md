### MVC
This mini app exercise demonstrates separation of concerns. Here is a tree structure of the folder directory.

- - -

```
.
├── includes
│   └── helpers.php
├── public
│   ├── friday.php
│   ├── index.php
│   ├── lectures.php

│   ├── style.css
│   ├── syllabus.php
│   ├── wednesday.php
│   ├── week0.php
│   └── week1.php
└── templates
    ├── footer.php
    └── header.php

```

- - -

In the above directory tree, the only files visible to the users is the `public` folder.

The hidden `includes` folder basically contains one helper function that like like this:



```php

<?php
/**
* Render template
*/
function render(string $template, array $data = [])
{
  $path = __DIR__."/../templates/" . $template . ".php";

  if (file_exists($path))
  {
    extract($data);
    require($path);
  }
}
?>

```
