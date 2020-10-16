<?php 
 class InvoiceModel extends CI_Model{
     	public function __construct() {
         $this->load->database();
		}

     function add( $i_invno,$i_regid,$i_billname,$i_billaddress,$i_phno,$i_email,$i_shopname,$i_shopaddress,$i_issuedate,$i_expiredate,$i_desc, $i_custnote ){
            $sql = "INSERT INTO `tbl_invoice`(`i_invno`, `i_regid`, `i_billname`, `i_billaddress`, `i_phno`, `i_email`, `i_shopname`, `i_shopaddress`, `i_issuedate`, `i_expiredate`, `i_desc`, `i_custnote`) VALUES (".$this->db->escape($i_invno).",".$this->db->escape($i_regid).",".$this->db->escape($i_billname).",".$this->db->escape($i_billaddress).",".$this->db->escape($i_phno).",".$this->db->escape($i_email).",".$this->db->escape($i_shopname).",".$this->db->escape($i_shopaddress).",".$this->db->escape($i_issuedate).",".$this->db->escape($i_expiredate).",".$this->db->escape($i_desc).",".$this->db->escape($i_custnote).")";
            // echo $sql;die;
            $query=$this->db->query($sql);
            $insert_id = $this->db->insert_id();
               return $insert_id;
        }

        function list(){
           $sql = "SELECT * FROM `tbl_invoice`";
           $query=$this->db->query($sql);
           return $query->result();
        }

      

        function viewone($i_id){
           $sql = "SELECT * FROM `tbl_invoice` where i_id = '$i_id'";
           $query=$this->db->query($sql);
           return $query->result();
        }


        function fetch_invoice_details($i_id)
        {
            
            $sql = "SELECT * FROM `tbl_invoice` where i_id = '$i_id'";
            $query=$this->db->query($sql);
            $ras = $query->result();
            foreach($ras as $raw){}

            // print_r($raw->i_billname);die;
        
          $output = '';
    
           $output .= '<!doctype html>
           <html>
           <head>
           <meta charset="utf-8">
           <title>Invoice</title>
           </head>
           
           <body>
           <table width="550">
             <tbody>

               <tr>
                 <td><b>Invoice # </b>'.$raw->i_invno.'</td>
                 <td colspan="4">&nbsp;</td>
                 <td><b>&nbsp;</b></td>
               </tr>

               <tr>
                 <td><b>Sales Registration ID # </b>'.$raw->i_regid.'</td>
                 <td colspan="4">&nbsp;</td>
                 <td><b>&nbsp;</b></td>
               </tr>

               <tr>
                 <td><b>Billing Name: </b></td>
                 <td colspan="4"></td>
                 <td><b>Billing Address</b></td>
               </tr>
               <tr>
                 <td>'.$raw->i_billname.'</td>
                 <td colspan="4"></td>
                 <td>'.$raw->i_billaddress.'</td>
               </tr>

               <tr>
                 <td><b>Mobile No: </b></td>
                 <td colspan="4"></td>
                 <td><b>Email ID</b></td>
               </tr>
               <tr>
                 <td>'.$raw->i_phno.'</td>
                 <td colspan="4"></td>
                 <td>'.$raw->i_email.'</td>
               </tr>

               <tr>
                 <td><b>Shop Name: </b></td>
                 <td colspan="4"></td>
                 <td><b>Shop Address</b></td>
               </tr>
               <tr>
                 <td>'.$raw->i_shopname.'</td>
                 <td colspan="4"></td>
                 <td>'.$raw->i_shopaddress.'</td>
               </tr>


               <tr>
                 <td><b>Issue Date:: </b></td>
                 <td colspan="4"></td>
                 <td><b>Expire Date:</b></td>
               </tr>
               <tr>
                 <td>'.$raw->i_issuedate.'</td>
                 <td colspan="4"></td>
                 <td>'.$raw->i_expiredate.'</td>
               </tr>


               <tr>
                 <td><b>&nbsp;</b></td>
                 <td colspan="4"></td>
                 <td><b>&nbsp;</b></td>
               </tr>
               <tr>
                 <td>'.$raw->i_desc.'</td>
                 <td colspan="4"></td>
                 <td><b>&nbsp;</b></td>
               </tr>

               <tr style="width:550px;">
                  <td colspan="4" style="border:1px solid black; text-align: center;padding: 8px;"><b>Description</b></td>
                 <td style="border:1px solid black; text-align: center;padding: 8px;"><b>Rate/Item</b></td>
                 <td style="border:1px solid black; text-align: center;padding: 8px;"><b>Qty</b></td>
                 <td style="border:1px solid black; text-align: center;padding: 8px;"><b>Total</b></td>
               </tr>

               <tr>
                  <td colspan="4" style="border:1px solid black; text-align: center;padding: 8px;">ABC</td>
                  <td style="border:1px solid black; text-align: center;padding: 8px;">Rs. 499.00</td>
                  <td style="border:1px solid black; text-align: center;padding: 8px;">1</td>
                  <td  style="border:1px solid black; text-align: center;padding: 8px;">RS. 499.00</td>
               </tr>

                <tr>
                 <td colspan="5">&nbsp;</td>
                 <td><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subtotal</strong></td>
                 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs 499.00</td>
               </tr>
                <tr>
                 <td colspan="5">&nbsp;</td>
                 <td><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Tax</strong></td>
                 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.00</td>
               </tr>
                <tr>
                 <td colspan="5">&nbsp;</td>
                 <td><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total</strong></td>
                 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs 499.00</td>
               </tr>
                <tr>
                 <td colspan="5">&nbsp;</td>
                 <td><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amount Paid</strong></td>
                 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs 499.00</td>
               </tr>
                <tr>
                 <td colspan="5">&nbsp;</td>
                 <td><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amount Due</strong></td>
                 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs 0.00</td>
               </tr>
                <tr>
                 <td colspan="8">
                 <p><b>Terms and conditions</b><br>
  
                 1.   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore odio nihil aut veniam. Laborum magnam mollitia sequi incidunt, nemo quibusdam iste cum deleniti in corrupti molestiae minima, vitae ullam blanditiis.<br>
                 2.   perperljjdwg;iBFGPIUBSF;JGBAUIFGINDFper<br>
                 3.   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore odio nihil aut veniam. Laborum magnam mollitia sequi incidunt, nemo quibusdam iste cum deleniti in corrupti molestiae minima, vitae ullam blanditiis<br>
                 4.   perperljjdwg;iBFGPIUBSF;JGBAUIFGINDFper</p></td>
                
               </tr>
             </tbody>
           </table>
           </body>
           </html>
           ';
          
          $output .= '';
          return $output;
         }
    

    }