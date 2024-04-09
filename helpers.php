<?php 

/**
 * Get the base path
 * @param string $path
 * @return string
 */

 function basePath($path=''){
    return __DIR__ . '/'.$path;
 }
 /**
  * Load a view 
  *@param string $name
  *@return void
  */
  function loadView($name){

    $viewPath= basePath("views/{$name}.view.php");

    if(file_exists($viewPath)){
        require $viewPath;
    }else{
        return "View '{$name} not found!'";
    }
  }
  
  /**
  * Load a Partial 
  *@param string $name
  *@return void
  */
  function loadPartial($name){

    $patialPath=require basePath("views/partials/{$name}.php");
    if(file_exists($patialPath)){
        require $patialPath;
    }else{
        return "View '{$name} not found!'";
    }
  }


  /**
   * Inspect a value(s)
   * @param mixed $value
   * @return void

   */
  function inspect($value){
    echo '<prev>';
    var_dump($value);
    echo '<prev>';

  }
  /**
   * Inspect a value(s) and die
   * @param mixed $value
   * @return void

   */
  function inspectAndDie($value){
    echo '<prev>';
    die(var_dump($value));
    echo '<prev>';

  }
?>