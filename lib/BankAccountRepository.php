<?php
namespace PromisePay;

use PromisePay\Exception;
use PromisePay\Log;

class BankAccountRepository {
    
    public static function get($id) {
        $response = PromisePay::RestClient('get', 'bank_accounts/' . $id);
        $jsonDecodedResponse = json_decode($response->raw_body, true);
        
        return $jsonDecodedResponse['bank_accounts'];
    }

    public static function create($params) {
        $response = PromisePay::RestClient('post', 'bank_accounts/', $params);
        $jsonDecodedResponse = json_decode($response->raw_body, true);
        
        return $jsonDecodedResponse['bank_accounts'];
    }

    public static function delete($id) {
        $response = PromisePay::RestClient('delete', 'bank_accounts/' . $id);
        $jsonDecodedResponse = json_decode($response->raw_body, true);
        
        return $jsonDecodedResponse['bank_account'];
    }

    public static function getUser($id) {
        $response = PromisePay::RestClient('get','bank_accounts/' . $id . '/users');
        $jsonDecodedResponse = json_decode($response->raw_body, true);
        
        return $jsonDecodedResponse['users'];
    }
}