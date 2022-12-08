<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class KirimEmail extends CI_Controller
{

          public function __construct()
          {
                    parent::__construct();

                    require APPPATH . 'libraries/phpmailer/src/Exception.php';
                    require APPPATH . 'libraries/phpmailer/src/PHPMailer.php';
                    require APPPATH . 'libraries/phpmailer/src/SMTP.php';
          }

          public function index()
          {
                    $this->load->view('home');
          }

          public function send()
          {
                    // PHPMailer object
                    $response = false;
                    $mail = new PHPMailer();

                    // SMTP configuration
                    $mail->isSMTP();
                    $mail->Host     = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'rihwanmunif@gmail.com'; // user email anda
                    $mail->Password = 'ceqfovijfxlrlamf'; // diisi dengan App Password yang sudah di generate
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port     = 465;

                    $mail->setFrom('rihwanmunif@gmail.com', 'BEECONS.COM'); // user email anda
                    $mail->addReplyTo('rihwanmunif@gmail.com', ''); //user email anda

                    // Email subject
                    $mail->Subject = 'PT BARACIPTA ESA ENGINEERING'; //subject email

                    // Add a recipient
                    $mail->addAddress('rihwanmunif@gmail.com'); //email tujuan pengiriman email

                    // Set email format to HTML
                    $mail->isHTML(true);

                    // Email body content
                    $mailContent = "<p>Hallo <b>" . $this->input->post('nama') . "</b> berikut ini adalah komentar Anda:</p>
   <table>
     <tr>
       <td>Nama Lengkap</td>
       <td>:</td>
       <td>" . $this->input->post('name') . "</td>
     </tr>
     <tr>
       <td>Email</td>
       <td>:</td>
       <td>" . $this->input->post('email') . "</td>
     </tr>
     <tr>
       <td>No Telepon</td>
       <td>:</td>
       <td>" . $this->input->post('telepon') . "</td>
     </tr>
     <tr>
       <td>Pesan</td>
       <td>:</td>
       <td>" . $this->input->post('pesan') . "</td>
     </tr>
   </table>
   <p>Terimakasih <b>" . $this->input->post('nama') . "</b> telah memberi komentar.</p>"; // isi email
                    $mail->Body = $mailContent;

                    // Send email
                    if (!$mail->send()) {
                              echo "<script>alert('Gagal di tambahkan!');history.go(-1); </script>";
                              echo 'Mailer Error: ' . $mail->ErrorInfo;
                    } else {
                              echo "<script>alert('Data berhasil di tambahkan!');history.go(-1);</script>";
                    }
          }
}
