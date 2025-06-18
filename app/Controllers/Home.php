<?php

namespace App\Controllers;

use App\Models\OperationModel;
use App\Models\ServiceModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Home extends BaseController
{
    protected $operationModel;
    protected $serviceModel;
    protected $session;
    protected $validation;

    public function __construct()
    {

        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        helper(['url', 'form', 'session']);
        $this->operationModel = new OperationModel();
        $this->serviceModel = new ServiceModel();
        $this->session = session();
        $this->validation = \Config\Services::validation();
    }

    public function index($page = '')
    {
        if ($page === 'about-us') {
            $data = [
                'blogs' => $this->operationModel->get_all_blogs(),
                'service' => $this->serviceModel->get_all(),
                'testimonials' => $this->operationModel->get_all_testimonials(),
            ];
            return view('about_us', $data);
        } 
        elseif ($page === 'contact-us') {
            $original_string = implode("", range(0, 9));
            $captcha = substr(str_shuffle($original_string), 0, 4);

            $this->session->set('valuecaptchaCode', $captcha);

            return view('contact_us', ['captcha' => $captcha]);
        } 
        elseif ($page === 'send-email') {
            return $this->sendEmail();
        } 
        else {
            $data = [
                'blogs' => $this->operationModel->get_all_blogs(),
                'service' => $this->serviceModel->get_all(),
                'testimonials' => $this->operationModel->get_all_testimonials(),
            ];
            return view('index', $data);
        }
    }

    public function refresh()
    {
        $original_string = implode("", range(0, 9));
        $captcha = substr(str_shuffle($original_string), 0, 4);
        $this->session->set('valuecaptchaCode', $captcha);
        echo $captcha;
    }

    public function sendEmail()
    {
        $post = $this->request->getPost();

        $captcha = $post['captcha'] ?? '';
        $captcha_session = $this->session->get('valuecaptchaCode');

        if ($captcha !== $captcha_session) {
            echo "incorrect_captcha";
            return;
        }

        // Set validation rules
        $this->validation->setRules([
            'first_name' => 'required',
            'email'      => 'required|valid_email',
            'phone'      => 'required',
            'message'    => 'required',
            'captcha'    => ['label' => 'Captcha', 'rules' => 'required|validateCaptcha']
        ]);

        // Add custom validation rule for captcha
        $this->validation->setRule('captcha', 'Captcha', function ($value) {
            return $value === $this->session->get('valuecaptchaCode');
        }, 'Captcha is incorrect.');

        if (!$this->validation->withRequest($this->request)->run()) {
            echo "Please fill all required fields correctly, including the CAPTCHA.";
            return;
        }

        // Collect form data
        $first_name = $post['first_name'];
        $last_name = $post['last_name'] ?? '';
        $email = $post['email'];
        $phone = $post['phone'];
        $message = $post['message'];

        // Load PHPMailer
        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'info@ivagaminfotech.com';
            $mail->Password = 'oubo zcsy bwpq imtq'; // Be sure to secure your password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->SMTPOptions = [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true,
                ]
            ];

            // Recipients
            $mail->setFrom('info@ivagaminfotech.com', 'Client Enquire');
            $mail->addAddress('info@ivagaminfotech.com');

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Client Enquires';
            $body = "<html><head><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'></head><body>";
            $body .= "<div class='container' style='background-color: #f9f9f9; padding: 20px; border-radius: 8px; border: 1px solid #ddd;'>";
            $body .= "<h3 class='text-center text-primary'>New Client Request</h3>";
            $body .= "<div class='row'><div class='col-12'>";
            $body .= "<p><strong>Name:</strong> <span class='text-success'>" . esc($first_name) . " " . esc($last_name) . "</span></p>";
            $body .= "<p><strong>Email:</strong> <span class='text-info'>" . esc($email) . "</span></p>";
            $body .= "<p><strong>Phone:</strong> <span class='text-warning'>" . esc($phone) . "</span></p>";
            $body .= "<p><strong>Message:</strong></p>";
            $body .= "<div class='bg-light p-3 border rounded'>" . nl2br(esc($message)) . "</div>";
            $body .= "</div></div></div></body></html>";

            $mail->Body = $body;

            if ($mail->send()) {
                echo "success";
            } else {
                echo "An error occurred while sending the email. Please try again.";
            }
        } catch (Exception $e) {
            echo "An error occurred while sending the email. Please try again. Error: " . $mail->ErrorInfo;
        }

        $mail->clearAllRecipients();
    }
}
