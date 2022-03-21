<?php 

namespace Casautomotive\endpoints;

use WP_Error;
use WP_REST_Response;

class ContactEndpoint{
    public function __construct()
    {
      add_action('rest_api_init', array($this, 'registerRoute'));
    }

    public function registerRoute(){
		register_rest_route('send-message/v1','/sent',array(
			'methods'=> 'POST',
			 'callback'=> array($this,'sendMsg')
		));
	}
    public function sendMsg($request){
        if (!check_ajax_referer('wp_rest', '_wpnonce', false)) {
            $response = [
                "ok" => false,

                "msg" => "Missing nonce"
            ];
            $res = new WP_REST_Response($response);
            $res->set_status(406);
            return $res;
        }
        $email = '';
        $phoneNumber= '';
        $department = '';
        $subject = '';
        $msg = '';
        $params = $request->get_params();
        if(empty($params)){
            $response = [
                "ok" => false,

                "msg" => "Missing Data"
            ];
            $res = new WP_REST_Response($response);
            $res->set_status(406);
            return $res;
        }
        $email = $params['data']['email'];
        $userName = $params['data']['userName'];
        $phoneNumber = $params['data']['phoneNumber'];
        $department = $params['data']['department'];
        $subject = $params['data']['subject'];
        $msg = $params['data']['msg'];
        if(empty($email) ||
            empty($userName)||
            empty($phoneNumber)||
            empty($department)||
            empty($subject)||
            empty($msg)            
            ){
                $response = [
                    "ok" => false,
    
                    "msg" => "Missing Data"
                ];
                $res = new WP_REST_Response($response);
                $res->set_status(406);
                return $res;
            }

         $emailAdmin =   get_option('admin_email');
        
        try{

            wp_mail($emailAdmin, $subject, $msg);
            wp_mail($email, $subject, "We will be in touch very soon");
        }catch(WP_Error $e){
            $response = [
                "ok" => false,

                "msg" => $e->get_error_message(),

            ];
            $res = new WP_REST_Response($response);
            $res->set_status(406);
            return $res;
        }
        
        try{

            $id = wp_insert_post(array(
                'post_title'=>$userName, 
                'post_type'=>'contact', 
                'post_status'=>'publish'
               
              ));
            
              update_field('name',$userName,$id);
              update_field('email',$email,$id);
              update_field('phone',$phoneNumber,$id);
              update_field('department',$department,$id);
              update_field('subject',$subject,$id);
              update_field('msg',$msg,$id);
        }catch(WP_Error $e){
            $response = [
                "ok" => false,

                "msg" => $e->get_error_message(),

            ];
            $res = new WP_REST_Response($response);
            $res->set_status(406);
            return $res;
        }
      
        $response = [
            "ok" => true,

            "msg" => "success",

        ];
        $res = new WP_REST_Response($response);
        $res->set_status(200);
        return $res;

    }
}