<?php
  require_once "connectdb.php";

  /**
   * Model user object
   */
  class ModelUser
  {

    // function __construct(argument)
    // {
    //   // code...non contructed!
    // }
    static public function modViewUser($table, $item, $value)
    {
      // code...this will call the user data from the  database using SELECT;
      // NOTE: this method is static since it is called using ::
      //prepare the statement;
      $stmt = Connection::connect()->prepare();
    }
  }

?>