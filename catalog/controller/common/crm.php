<?php  use OneCRM\APIClient\Authentication;
       use OneCRM\APIClient;
class ControllerCommonCrm extends Controller {
    var $token ='';
    public function auth(){
        $options = [
            'client_id' => '4b7f2ea5-87f1-fbeb-bf6a-5b604348c73a',
            'client_secret' => 'bargain2015',
            'redirect_uri' => 'https://www.bargain.pk/index.php?route=common/crm/authentication',
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
        'password' => 'BAR)(*gain',
    ];
    $flow = new APIClient\AuthorizationFlow('https://bargain.1crmcloud.com/api.php', $options);
    $access_token = $flow->init('password');
    $this->token = $access_token;

    $this->perform();
}




    public function token(){
        $options = [
            'client_id' => '4b7f2ea5-87f1-fbeb-bf6a-5b604348c73a',
            'client_secret' => 'bargain2015',
            'scope' => 'read write profile',
            'username' => 'admin',
            'password' => 'BAR)(*gain',
        ];
        $flow = new APIClient\AuthorizationFlow('https://bargain.1crmcloud.com/api.php', $options);
        $access_token = $flow->init('password');
        return $access_token;
    }



    public function perform(){
        $token = $this->token();
        $auth = new Authentication\OAuth($token);
        $client = new APIClient\Client('https://bargain.1crmcloud.com/api.php', $auth);
        /*$model = $client->model('Quote');
        $fields = ['position'];
        $data = [
           'full_number' => '110',
           'name' => 'Order No . 110',
           'quote_stage' => 'Draft',
           'shipping_address_countrycode' => 'PK',
           'billing_account_id' => 'c753c141-b1b5-e52e-f109-5b6eaf71b4d9',
           'shipping_account_id' => 'c753c141-b1b5-e52e-f109-5b6eaf71b4d9',
           'amount' => '350',
           'default_terms' => 'Jazz Cash',
           'industry' =>  'Retail'

        ];



        $result = $model->create($data);
        //fetch no more than 3 records, starting from the beginning
        //printf("There are %d leads in total\n", $result->totalResults());
        echo json_encode($result, JSON_PRETTY_PRINT), "\n";*/


        /* META


           $model = $client->model('Quote');
         $fields = ['position'];
         $result = $model->metadata(); // fetch no more than 3 records, starting from the beginning
         //printf("There are %d leads in total\n", $result->totalResults());
         echo json_encode($result, JSON_PRETTY_PRINT), "\n";*/

        /*LIST*/
        $model = $client->model('Account');
        $filters = ['last_name' => 'Raza'];
        $result = $model->getList(['filters' => $filters ], 0, 20); // fetch no more than 3 records, starting from the beginning
        printf("There are %d contacts in total\n", $result->totalResults());
        echo json_encode($result->getRecords(), JSON_PRETTY_PRINT), "\n";

    }



    public function order(){
        $token = $this->token();
        $auth = new Authentication\OAuth($token);
        $client = new APIClient\Client('https://bargain.1crmcloud.com/api.php', $auth);
        $model = $client->model('Quote');
        $fields = ['position'];
        $payment_code = 'COD';

        $data = [
            'full_number' => 148,
            'name' => 'INV-2018-00',
            'quote_stage' => 'Draft',
            'shipping_address_countrycode' => 'PK',
            'billing_account_id' => '26da6e2e-7ca7-d099-518b-5bb612c7bf7d',
            'shipping_account_id' => '26da6e2e-7ca7-d099-518b-5bb612c7bf7d',
            'amount' => ' 1099.0000',
            'default_terms' => $payment_code,
            'industry' =>  'Retail'

        ];
        $result = $model->create($data);
    }
    public function metaData(){
        $token = $this->token();
        $auth = new Authentication\OAuth($token);
        $client = new APIClient\Client('https://bargain.1crmcloud.com/api.php', $auth);
        $model = $client->model('Quote');
        $result = $model->metadata();
        echo json_encode($result, JSON_PRETTY_PRINT);


    }

    public function addAccount(){
        $token = $this->token;
        $auth = new Authentication\OAuth($token);
        $client = new APIClient\Client('https://bargain.1crmcloud.com/api.php', $auth);
        $account_data = [
            'name' => '1CRM Systems Corp.',
            'email1' => 'info@1crm.com',
            'is_supplier' => true,
            'industry' => 'Technology',
            'account_type' => 'Supplier',
            'phone_office' => '+1 999-888-7777',
            'billing_address_city' => 'Victoria',
            'billing_address_state' => 'BC',
            'billing_address_country' => 'Canada',
            'billing_address_street' => '688 Falkland Road',
            'billing_address_postalcode' => 'V8S 4L5',
            'website' => 'https://www.bargain.pk/'
        ];
        $model = $client->model('Account');
        $account_id = $model->create($account_data);
        echo $account_id, "\n";
    }

}
