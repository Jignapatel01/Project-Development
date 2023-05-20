<?php
class model
{   public $connection="";
    public function __construct()
    {
        try
        {
            // database connection
            $this->connection=new mysqli("localhost","root","","royalcatering");
            // echo "connection succesfully";
        }
        catch(Exception $e)
        {
            die(mysqli_error());
        }
    }
    // public function insertdata($data,$table)
    // {
    //     $column=array_key($data);
    //     $column1=array_key("",$column);

    //     $value=array_values("$data");
    //     $value1=array_values("','",$value);

    //     $insert="insert into $table($column1) values('$values1')";
    //     $exe=mysqli_query($this->connection,$insert);
    //     return $exe;

   // }
}

?>