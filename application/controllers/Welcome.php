<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {


        $this->load->view('home');
    }

    public function submit_request()
    {
        if (empty($this->input->post())) {
            redirect(site_url());
        } else {
            $name    = $this->input->post('name');
            $email   = $this->input->post('email');
            $gender  = $this->input->post('gender');
            $age     = $this->input->post('age');
            $contact = $this->input->post('contact');

            $this->load->library('email');
            $this->email->clear();
            $config['protocol']    = 'mail';
            $config['mailtype']    = 'text';
            $config['smtp_host']   = 'p3plcpnl0203.prod.phx3.secureserver.net';
            $config['smtp_crypto'] = 'ssl';
            $config['smtp_user']   = 'hello@prakharsrivastav.com';
            $config['smtp_pass']   = 'Hafslund12';
            $config['smtp_port']   = 465;
            $config['charset']     = 'utf-8';
            $config['wordwrap']    = false;


            $message = $name . " has won a hamper\n" .
                "Email : $email \n" .
                "Gender : $gender \n" .
                "Name : $name \n" .
                "Age : $age \n" .
                "Mobile : $contact";

            $this->email->initialize($config);
            $this->email->subject($name . " has won a hamper");
            $this->email->message($message);
            $this->email->to('ay.khaitan@gmail.com', 'srivprakhar@gmail.com');
            $this->email->from($email, $name);
            // $this->email->reply_to($this->input->post("email"), $this->input->post("name"));
            file_put_contents('../ayush.txt', $message,FILE_APPEND);
            if ($this->email->send()) {
                $questions = [
                    'Sleeplessness'       => 'Sleepeasy',
                    'Stomach Trouble'     => 'Sleepeasy',
                    'Chest Congestion'    => 'Peppermint Tea',
                    'Excess Hunger'       => 'Peppermint Tea',
                    'High Blood Pressure' => 'Red Nectar',
                    'Anxiety'             => 'Lemon Tea',
                    'Tension'             => 'Lemon Tea',
                    'Common Cold'         => 'Lemon Tea',
                    'Respiraroty Problem' => 'Lemon Tea',
                    'Headache'            => 'Lemon Tea',
                    'Toothache'           => 'Lemon Tea',
                    'High Cholesterol'    => 'Immunity',
                    'Arthiritis Symptoms' => 'Immunity',
                    'Fights Virus'        => 'Immunity',
                    'Over Weight'         => 'Detox',
                    'Dull Skin'           => 'Detox',
                    'Inflammation'        => 'Ginger Tea',
                    'Motion Sickness'     => 'Ginger'
                ];

                $options                              = [
                    'Sleepeasy', 'Peppermint Tea', 'Red Nectar', 'Lemon Tea', 'Immunity', 'Detox', 'Ginger Tea', 'Ginger'
                ];
                // pick a random question
                $random_question                      = array_rand($questions);
                $answer[$questions[$random_question]] = 1;

                // remove the correct answer
                foreach ($options as $key => $value) {
                    if ($questions[$random_question] == $value) {
                        unset($options[$key]);
                    }
                }

                // pick 3 elements
                $elements = array_rand($options, 3);
                foreach ($elements as $element) {
                    $temp[$options[$element]] = 0;
                }

                // merge answers and shuffle
                $answerlist = array_merge($answer, $temp);
                uasort($answerlist, function ($a, $b) {
                    return rand(-1, 1);
                });
                $this->load->view('game', compact('answerlist', 'random_question'));
            }
            else
                show_error($this->email->print_debugger());
        }
    }

}
