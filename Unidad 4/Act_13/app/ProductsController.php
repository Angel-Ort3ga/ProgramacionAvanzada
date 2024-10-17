<?php
session_start();

if (isset($_POST['action'])) {
	switch ($_POST['action']) {

		case 'access':

			$authController = new AuthControlller();

			$email = $_POST['correo'];
			$password = $_POST['contrasenna'];

			$authController->login($email,$password);

		break;

		default:
			// code...
			break;
	}
}
class ProductsController{

    public function products(){

    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer 516|WEKd8o3JmLGp3IfDSoTODfi1f0uzfuVx5j5tgrmL'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;
}
}

?>