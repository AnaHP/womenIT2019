<div style="margin:0;padding:0;font-family:'Avenir', 'Roboto', sans-serif">
    <table align="center" cellpadding="0" cellspacing="0" width="600">
        <tbody>
            <tr>
                <td align="center" bgcolor="#283953" height="100" style="padding:30px; box-sizing:border-box; display:flex; justify-content: center; align-content: center; align-items: center;">
                    <img style='height: 80px;' src="logoconano.png" alt='logo'>
                </td>
            </tr>
        <tr>
            <td bgcolor="#ffffff" style="padding:0px 30px 30px 30px">
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                        <tr>
                            <td style="padding:5px;">
                                <h2 style="margin: 0px !important; font-weight: lighter; margin-top: 10px !important;">Hola, <?=$data['nombre']?>:</h2>
                            </td>
                        </tr>

                    <tr>
                        <td style="padding:30px 10px 30px 10px; text-align: center;">
                            <p>Gracias por registrarte, tu registro está casi listo solo debes dar clic en el siguiente enlace para confirmar tu correo.</p>
                            <a href="<?=URL.'Confirmacion/clave/'.$data['codigo']?>" style="color: #FB64C1">Confirmar mi correo</a>
                            <br><br>
                            <p style="margin: 0px !important">Una vez que hayas confirmado, se te enviará otro correo con tu código de acceso al evento.</p>
                            <br>
                            <p style="margin: 0px !important">El evento se llevará a cabo el día 13 de marzo de 2019 a partir de las <b style="color: #FB64C1">08:00 hrs.</b> en el Centro de Negocios de la U.A.Q. <br> ubicado en Av. de las Ciencias S/N Juriquilla, Querétaro.</p>
                            <p style="padding: 5px; color:rgba(0,0,0,0.5);margin-top:50px;"> IMPORTANTE: Cualquier duda, aclaración o inconveniente
                            <br>favor de comunicarse al teléfono 192 12 00 ext. 5911 o envíanos un correo de respuesta para darle solución de manera inmediata.</p>
                        </td>
                    </tr>
                </tbody></table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#283953" style="padding:10px;color:white;text-align:right">
                Facultad de Informática, UAQ | Women IT
            </td>
        </tr>
    </tbody></table>
  </div>
