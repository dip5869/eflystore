<?php

  defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Invoice extends CI_Controller {
      
      function __construct()
      {
          parent::__construct();				
          $this->load->library('session');
          $this->load->model('InvoiceModel');
          $this->config->load('config', true);
      }

      public function index()
      {
           $title['title'] = "Create Invoice"; 
           $this->load->view('layouts/head',$title);
           $this->load->view('layouts/navbar');
           $this->load->view('layouts/side-menu');
           $this->load->view('index');
           $this->load->view('layouts/footer');
       }

       public function send(){

        error_reporting(0);
        // print_r($_POST);die;
       $i_invno =  $this->input->post('i_invno');
       $i_regid =  $this->input->post('i_regid');
       $i_billname =  $this->input->post('i_billname');
       $i_billaddress =  $this->input->post('i_billaddress');
       $i_phno =  $this->input->post('i_phno');
       $i_email =  $this->input->post('i_email');
       $i_shopname =  $this->input->post('i_shopname');
       $i_shopaddress =  $this->input->post('i_shopaddress');
       $i_issuedate =  $this->input->post('i_issuedate');
       $i_expiredate =  $this->input->post('i_expiredate');
       $i_desc =  $this->input->post('i_desc');
       $i_custnote =  $this->input->post('i_custnote');
        
        $result = $this->InvoiceModel->add( $i_invno,$i_regid,$i_billname,$i_billaddress,$i_phno,$i_email,$i_shopname,$i_shopaddress,$i_issuedate,$i_expiredate,$i_desc, $i_custnote);
		if ($result != "") {

      $this->load->library('Pdf');
      $html_content = $this->InvoiceModel->fetch_invoice_details($result);
      $this->pdf->loadHtml($html_content);
      $this->pdf->render();
      $output = $this->pdf->output();
      $random = rand(10,100);
      $name = 'Invoice'.$random.'.pdf';
      file_put_contents('assets/invoices/'.$name.'', $output);
      // unlink("assets/invoices/".$name."");


            $config = Array(
              'protocol' => 'smtp',
              'smtp_host' => 'ssl://smtp.googlemail.com',
              'smtp_port' => 465,
              'smtp_user' => 'abc@gmail.com', 
              'smtp_pass' => 'passwrd', 
              'mailtype' => 'html',
              'charset' => 'iso-8859-1',
              'wordwrap' => TRUE
            );
        
        //send mail starts here

            $config = Array(
              'protocol'  => 'smtp',
              'smtp_host' => 'smtpout.secureserver.net',
              'smtp_port' => 80,
              'smtp_user' => 'dipakaher000@gmail.com', 
              'smtp_pass' => '', 
              'mailtype'  => 'html',
              'charset'  => 'iso-8859-1',
              'wordwrap'  => TRUE
          );
          $file_path = 'assets/invoices/'.$name;
          // echo $file_path;die;
          $this->load->library('email');
          $this->email->set_newline("\r\n");
          $this->email->from('dipak@qset.in');
          $this->email->to($i_email);
          $this->email->subject("invoice pdf");
              $this->email->message("Invoice testing");
              $this->email->attach($file_path);
              if($this->email->send())
              {
                unlink("assets/invoices/".$name."");
              }
              // else
              // {
              //   show_error($this->email->print_debugger());
              // }

			echo "<script>alert('Invoice Added Successfully');
				window.location.href = 'list';
				</script>";
			}else{
				 redirect("Invoice");
				}

      }

      public function list()
      {
           $title['title'] = "Invoice List"; 
           $this->load->view('layouts/head',$title);
           $this->load->view('layouts/navbar');
           $this->load->view('layouts/side-menu');
           $data['list'] = $this->InvoiceModel->list();
           $this->load->view('invoice-list',$data);
           $this->load->view('layouts/footer');
       }
 
       public function viewpdf(){
        $i_id = $this->uri->segment(3);
        $this->load->library('Pdf');
        $html_content = $this->InvoiceModel->fetch_invoice_details($i_id);
        $this->pdf->loadHtml($html_content);
        // $output = $this->pdf->output();
        $random = rand(10,100);
        $name = 'Invoice'.$random.'';
        $this->pdf->render();
        $this->pdf->stream("".$name.".pdf", array("Attachment"=>0));
       }
    }