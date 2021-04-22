<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ControladorUsuario;
use App\Models\User;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailerController extends Controller {

    // =============== [ Email ] ===================
    public function email() {
        return view("Usuario/recuperar");
    }


    // ========== [ Compose Email ] ================
    public function composeEmail(Request $request) {
        $dt = "";
        $email = $request->emailBcc;
        $busquedaEmail=User::where('email','=',$request->emailBcc)->value('email');
        $contra = User::where('password','=',$busquedaEmail)->value('password');
        require base_path("vendor/autoload.php");
            $mail = new PHPMailer(true);     // Passing `true` enables exceptions
            // Email server settings
            if($email == $busquedaEmail){
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';            //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = env('EMAIL_USERNAME');   //  sender username
            $mail->Password = env('EMAIL_PASSWORD');   // sender password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;                          // port - 587/465
            $mail->setFrom($email, 'Tienda Axes');
            $mail->addAddress($email);
            $mail->isHTML(true);                // Set email content format to HTML

            $mail->Subject = 'Recuperar Clave';
            $mail->Body    = '<p;
            color:#000000;
            font-size:18px;
            padding:50px;">
            ¡Hola!<br><br>
            Gracias por comunicarte con Tienda Axes.<br><br>
            Usted solicitó recuperar su contraseña <br><br>
            --------------------------------------------------------------------------------------
            Este es un correo generado automáticamente. Si desea más información
            conteste a esta dirección de correo. O si desea información
            sobre nuestros productos se puede comunicar
            con nosotros mediante el chat de la Aplicación o a nuestro WhatsApp. ¡Siempre a la orden, Tienda Axes!.
            ---------------------------------------------------------------------
            <br><br>
             Por favor, haga click en el botón para recuperar su contraseña</p>
             <br><br>
             <a href="http://127.0.0.1:8000/CambiarContrase%C3%B1a">

            <button class="btn btn-success" type="submit" style="
            text-decoration: none;
            padding: 10px;
            font-weight: 150;
            font-size: 15px;
            color: #ffffff;
            margin-left: 450px;
            margin-bottom: -5px;
            background-color: #1883ba;
            border-radius: 6px;
            border: 2px solid #0016b0;">Recuperar Contraseña</button></a>';
            
            $dt = $mail->send();

            }

            // $mail->AltBody = plain text version of email body;

            if(!$dt ) {
                return back()->with("failed", "Ocurrio un error en el envio, no encontramos el correo $email favor ingrese de nuevo el correo.")->withErrors($mail->ErrorInfo);
            }
            
            else {
                return back()->with("success", "Hemos enviado un correo a $email por favor revise su correo para confirmar.");
            }

        
             return back()->with('error','No se pudo enviar el mensaje.');
        
    }
}