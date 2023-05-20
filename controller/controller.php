<?php
require_once("model/model.php");

class controller extends model
{
    public function __construct()
    {
        //logic
        parent::__construct();

    //insert data in contact logic
    // if(isset($_POST["addcontact"]))
    // {
    //     $nm=$_POST["name"];
    //     $em=$_POST["email"];
    //     $phn=$_POST["phone"];
    //     $msg=$_POST["message"];

    //     $data=array("Name"=>$nm,"Email"=>$em,"Phone"=>$phn,"Message"=>$msg);
    //     $chk=$this->insertdata($data,'tbl_contact');
    //     if($chk)
    //     {
    //         echo "<script>
    //             alert('Thank you for contact with me')
    //             window.location='contact-us';
            
    //         </script>";
    //     }
    // }

  
     // // load template routing
     if($_SERVER["PATH_INFO"])
     {
        switch($_SERVER["PATH_INFO"])
        {
             case '/':
                 require_once("index.php");
                 require_once("header.php");
                 require_once("navigation.php");
                 require_once("slider.php");
                 require_once("content.php");
                 require_once("aboutus.php");
                 require_once("menu.php");
                 require_once("specialmenu.php");
                 require_once("event.php");
                 require_once("gallery.php");
                 require_once("chefs.php");
                 require_once("contactus.php");
                 require_once("footer.php");
                //  require_once("login.php");
                //  require_once("register.php");
                 break;
            case '/aboutus':
                require_once("index.php");
                require_once("header.php");
                require_once("navigation.php");
                require_once("aboutus.php");
                require_once("footer.php");
            break;
            case '/menu':
                require_once("index.php");
                require_once("header.php");
                require_once("navigation.php");
                require_once("menu.php");
                require_once("specialmenu.php");
                require_once("footer.php");
            break;

             case '/gujarati':
                require_once("index.php");
                require_once("header.php");
                require_once("navigation.php");
                require_once("gujarati.php");
                require_once("footer.php");
                break;

            case '/panjabi':
                require_once("index.php");
                require_once("header.php");
                require_once("navigation.php");
                require_once("panjabi.php");
                require_once("footer.php");
                break;

            case '/chinese':
                require_once("index.php");
                require_once("header.php");
                require_once("navigation.php");
                require_once("chinese.php");
                require_once("footer.php");
                break;  

            case '/italian':
                require_once("index.php");
                require_once("header.php");
                require_once("navigation.php");
                require_once("italian.php");
                require_once("footer.php");
                break;  

            case '/event':
                require_once("index.php");
                require_once("header.php");
                require_once("navigation.php");
                require_once("event.php");
                require_once("footer.php");
                break;
                
            case '/gallery':
                require_once("index.php");
                require_once("header.php");
                require_once("navigation.php");
                require_once("gallery.php");
                require_once("footer.php");
                break;
                
            
            case '/chefs':
                require_once("index.php");
                require_once("header.php");
                require_once("navigation.php");
                require_once("chefs.php");
                require_once("footer.php");
                break;    
            case 'contact-us':
                require_once("header.php");
                require_once("navbar.php");
                require_once("contactus.php");
                require_once("footer.php");
                break;

            case 'login':
                require_once("header.php");
                require_once("navbar.php");
                require_once("login.php");
                require_once("footer.php");
                break;
                // case 'contact-us':
                //     require_once("header.php");
                //     require_once("navbar.php");
                //     require_once("contactus.php");
                //     require_once("footer.php");
                //     break;

            default:
                require_once("header.php");
                require_once("navigation.php");
                require_once("404.php");
                require_once("footer.php");
         }
    }
  }
}
$obj=new controller();

?>
