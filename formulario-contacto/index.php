<?php

require("server.php");

function validate($name, $lastname, $email, $city, $state, $zip_code, $subject, $message, $form) {
  return !empty($name) && !empty($lastname) && !empty($email) && !empty($city) && !empty($state) && !empty($zip_code) && !empty($subject) && !empty($message);
}

$status = "";

if(isset($_POST["form"])) {

  if ( validate(...$_POST) ) {

    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $zip_code = $_POST["zip_code"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Sanitizando datos
    $name = htmlentities($name);
    $lastname = htmlentities($lastname);
    $city = htmlentities($city);
    $subject = htmlentities($subject);
    $message = htmlentities($message);

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $zip_code = filter_var($zip_code, FILTER_VALIDATE_INT);

    $body = "$name <$email> te envia el siguiente mensaje: <br><br> $message";

    // Mandar el correo
    sendMail($subject, $body, $email, $name, true);

    $status = "success";

  }else {
    
    $status = "danger";

  }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./icons8-componer-correo-32.png">
    <link rel="stylesheet" href="./css/tailwind.css">
    <title>Formulario de Contacto</title>
</head>
<body>
    <main class="w-full min-h-screen bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 flex flex-col justify-center items-center space-y-16 pb-24">
        <div class="w-full h-1/4 flex flex-col justify-center items-center space-y-4 px-6 mt-20">
            <h1 class="text-2xl font-extrabold text-white">Bienvenido! 🙂 </h1>
            <p class="text-base font-semibold text-center text-white">Por favor ingresa tus datos a continuacion...</p>
        </div>
        <div class="w-full h-3/4 bg-white p-6 rounded-2xl shadow-2xl max-w-sm md:max-w-lg lg:max-w-3xl">
            
            <?php if($status === "danger"): ?>
              <div class="w-full h-12 bg-red-500 mb-8 pt-3">
                <p class="text-white font-bold text-center">Surgio un problema 🗙 </p>
              </div>
            <?php endif; ?>

            <?php if($status === "success"): ?>
              <div class="w-full h-12 bg-green-500 mb-8 pt-3">
                <p class="text-white font-bold text-center">Mensaje enviado con exito ✔</p>
              </div>
            <?php endif; ?>


            <form class="w-full" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                      Nombre
                    </label>
                    <input name="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Alexis">
                  </div>
                  <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                      Apellidos
                    </label>
                    <input name="lastname" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Hernandez">
                  </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                      Correo Electronico
                    </label>
                    <input name="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-email" type="email" placeholder="alexis@gmail.com">
                  </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2">
                  <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                      Ciudad
                    </label>
                    <input name="city" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Ciudad de Mexico">
                  </div>
                  <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                      Estado
                    </label>
                    <div class="relative">
                      <select name="state" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option>Tlaxcala</option>
                        <option>Puebla</option>
                        <option>Monterrey</option>
                      </select>
                      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                      </div>
                    </div>
                  </div>
                  <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                      Codigo Postal
                    </label>
                    <input name="zip_code" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
                  </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6 space-y-6 mt-6">

                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-asunto">
                            Asunto
                        </label>
                        <input name="subject" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" id="grid-asunto" placeholder="Solicitud de empleo">
                    </div>

                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-mensaje">
                            Mensaje
                        </label>
                        <textarea name="message" class="appearance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="message" id="grid-mensaje"></textarea>
                    </div>
                </div>

                <p class="text-gray-600 text-xs italic">Rellena todos los campos</p>

                <div class="w-full h-20 flex justify-end items-end">
                    <button type="submit" name="form" class="w-36 h-12 bg-gray-800 rounded-lg text-white transition-all duration-300 ease-in-out hover:scale-110 hover:bg-purple-600 hover:text-white">Enviar</button>
                </div>

            </form>
        </div>
    </main>

    <footer class="w-full h-20 bg-white flex justify-end items-center pr-6">
        <p class="text-gray-700">Hecho con Tailwind V3 💙 </p>
    </footer>

</body>
</html>