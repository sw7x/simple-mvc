<?phpclass User extends Controller{    function __construct(){        parent::__construct();    }    function index()    {        $this->view->render('user');    }    function executelogin()    {        if (isset($_POST["login"]))        {            $uname= $_POST["uname"];            $pass=$_POST["pass"];            if(($uname=="admin") && ($pass=="123"))            {                $this->view->render('success');            }            else            {                $this->view->render('error');            }        }    }    function executeusers($id){    	echo "This is Users Function and this is ID : ".$id;;    }}