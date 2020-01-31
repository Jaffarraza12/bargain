<?php  use OneCRM\APIClient\Authentication;
       use OneCRM\APIClient;
class ControllerApiCrm extends Controller {
    var $token ='';
    public function auth(){
        $options = [
            'client_id' => '4b7f2ea5-87f1-fbeb-bf6a-5b604348c73a',
            'client_secret' => 'bargain2015',
            'redirect_uri' => 'https://secure80057861109.bargain.pk/index.php?route=catalog/productcsv/step2&user_token=oJl7FOkhMa0Y1VBTBgYrLRtf55DPRAAC',
            'scope' => 'read write profile',
        ];


        $flow = new APIClient\AuthorizationFlow('https://bargain.1crmcloud.com/api.php', $options);
        $flow->init('authorization_code', true);
        $access_token = $flow->finalize();
        $auth = new Authentication\OAuth($access_token);
        $client = new APIClient\Client('https://bargain.1crmcloud.com/api.php', $auth);
    }


    public function authentication(){
        $options = [
            'client_id' => '4b7f2ea5-87f1-fbeb-bf6a-5b604348c73a',
            'client_secret' => 'bargain2015',
            'scope' => 'read write profile',
            'username' => 'admin',
            'password' => 'admin',
        ];
        $flow = new APIClient\AuthorizationFlow('https://bargain.1crmcloud.com/api.php', $options);
        $access_token = $flow->init('password');
        $this->token = $access_token;
    }




}
