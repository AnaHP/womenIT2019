<div style="margin:0;padding:0;font-family:'segoe-ui',sans-serif">
    <table align="center" cellpadding="0" cellspacing="0" width="600">
        <tbody><tr>
            <td align="center" bgcolor="#283953" height="100" style="padding:30px 0 30px 0;display:flex">
                <img style='margin-left:20%; margin-top:20px; width:60%;' src="./womenit/public/images/women.png" alt='logo'>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" style="padding:0px 30px 30px 30px">
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tbody><tr>
                        <td style="padding:10px;border-bottom:1px solid rgba(0,0,0,0.2)">
                            <h2>Hola, <?=$data['nombre']?>:</h2>
                        </td>
                    </tr>
                    <tr><td><br><br><br>
                    </td></tr><tr>
                        <td style="padding:30px 10px 30px 10px">
                            Gracias por registrarte, esta casi listo tu registro solo debes dar clic en el siguiente enlace para confirmar tu correo:
                            <br><br>
                            <a href="<?=URL.'Confirmacion/clave/'.$data['codigo']?>">Confirmar mi correo.</a>
                            <br><br>
                            Una vez confirmado se te enviará otro correo con tu código de acceso al evento.
                            <br><br>
                            El evento se llevará a cabo el día 13 de Marzo de 2019 a partir de las 8:30 a.m. en el centro de negocios de la UAQ
                            <br><br>
                            Av. de las Ciencias S/N Juriquilla, Qro.
                            <br><br>
                            <p style="color:rgba(0,0,0,0.5);margin-top:50px"> NOTA: Cualquier duda, aclaración o inconveniente,
                            <br> favor de comunicarte al teléfono 192 12 00 ext. 5911 o envíanos un correo de respuesta,
                            <br> para darle solución de manera inmediata.</p>
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
