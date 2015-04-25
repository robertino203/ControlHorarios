<?php //Controlador principal!
 class Home extends CI_Controller
 {
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Articulos_Model');//cargamos nuestro modelo_Model
 	}
 	
 	//PáginaPrincipal!
 	function index()//método para ser llamado por defecto!
 	{
 		//Llamamos al método lista_articulos() y almacenamos el resultado en una variable.
 		$datosArt['articulos'] = $this->Articulos_Model->lista_articulos();
 		$datos['titulo'] = 'PHPblog';
 		$this->load->view('index.php',$datosArt);//Llamamos a la vista index.
 		
 	}
 	
 	function detalle_articulo($id_articulo)
 	{
 		$id_limpio = $this->security->xss_clean($id_articulo);//previene ataques de Cross-site scripting
 		$datos['detalle'] = $this->Articulos_Model->detalle_articulo($id_limpio);
 		$this->load->view('index.php',$datosArt);//Llamamos a la vista index.
 	}
 	
 }
 ?>