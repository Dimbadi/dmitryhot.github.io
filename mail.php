<?php

$recepient = "moralexvlad@gmail.com";
$sitename = "";

$name = trim($_GET["name"]);
$phone = trim($_GET["tel"]);
$email = trim($_GET["email"]);
$text = trim($_GET["mess"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";

$message = '
        <div align="left"><table width="100%">
                <tr width="100%">
                        <td width="40%" style="padding: 5px 0;" valign="top"><b>Имя</b></td>
                        <td width="60%" style="padding: 5px 0;" valign="top">' . $name . '</td>
                </tr>
                <tr width="100%">
                        <td width="40%" style="padding: 5px 0;" valign="top"><b>E-mail</b></td>
                        <td width="60%" style="padding: 5px 0;" valign="top">' . $email . '</td>
                </tr>';



        $message .= '

        <tr width="100%">
                <td width="40%" style="padding: 5px 0;" valign="top"><b>Телефон</b></td>
                <td width="60%" style="padding: 5px 0;" valign="top">' . $phone . '</td>
        </tr>';

        $message .= '<tr width="100%">
                        <td width="40%" style="padding: 5px 0;" valign="top"><b>Сообщение</b></td>
                        <td width="60%" style="padding: 5px 0;" valign="top">' . $text. '</td>
                </tr>
        </table></div>';


mail($recepient, $pagetitle, $message, "Content-type: text/html; charset=\"utf-8\"\n From: $recepient");