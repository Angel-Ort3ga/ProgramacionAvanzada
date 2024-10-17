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


class AuthControlller
{


	public function login($email=null,$password=null)
	{  

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => 'https://crud.jonathansoto.mx/api/login',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'POST',
		  CURLOPT_POSTFIELDS => array(
		  	'email' => $email,
		  	'password' => $password
			),
		  CURLOPT_HTTPHEADER => array( ),
		));

		$response = curl_exec($curl); 
		curl_close($curl); 
		$response = json_decode($response);

		if (isset($response->data->name)) {


			$_SESSION['user_data'] = $response->data;
			$_SESSION['user_id'] = $response->data->id;

			header('Location: ../home.php');

		}else{

			header('Location: ' . $_SERVER['HTTP_REFERER']);

		}



	}


}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container my-5">
      <div class="row">
        <!-- Columna , borde -->
        <div class="col-10 mx-auto border border-dark rounded shadow p-10">
          <div class="row">
            <div class="col p-5 d-none d-md-block">
              <img src="Login_image.webp" class="img-fluid" />
            </div>

            <div class="col p-5 text-center">
              <img src="icono.png" class="img-fluid" />
              <form class="mt-5" method="POST" action="app/AutoController.php">
                <legend>Disabled fieldset example</legend>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label"
                    >Email address</label
                  >
                  <input
                    type="email"
                    class="form-control"
                    id="exampleInputEmail1"
                    placeholder="write here"
                    aria-describedby="emailHelp"
                    required
                    name="correo"
                  />
                  <div id="emailHelp" class="form-text">
                    Ingrese su correo electronico
                  </div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label"
                    >Password</label
                  >
                  <input
                    type="password"
                    placeholder="* * * * * *"
                    class="form-control"
                    id="exampleInputPassword1"
                    required
                    name="contrasenna"
                  />
                </div>
                <div class="mb-3 form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="exampleCheck1"
                  />
                  <label class="form-check-label" for="exampleCheck1"
                    >Check me out</label
                  >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              <input type="hidden" name="action" value="access" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
