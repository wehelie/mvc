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
