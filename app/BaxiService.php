<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// class BaxiService extends Model
// {
//     //
// }
use Exception;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;

class BaxiService
{
    /**
     * @var BaxiClient
     */
    private $baxiClient;

    /**
     * BaxiService constructor.
     * @param BaxiClient $baxiClient
     */
    public function __construct(BaxiClient $baxiClient)
    {
        $this->baxiClient = $baxiClient;
    }

    public function checkAccountBalance() : String
    {
        try {
            $response = $this->baxiClient->call("GET", "/superagent/account/balance", null);
            return $response->getBody()->getContents();
        } catch (RequestException $e) {
            return ($e->getResponse()->getBody()->getContents());
        } catch (GuzzleException $e) {
            return $e->getMessage();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @param string $serviceType
     * @return string
     * @throws Exception
     */
    public function retrieveProviderBouquets(string $serviceType) : string
    {
        $validServiceTypes = ["dstv", "gotv", "startimes"];

        if (!in_array($serviceType, $validServiceTypes))
            throw new Exception("Invalid Service Type");

        try {
            $response = $this->baxiClient->call("POST", "/services/multichoice/list", [
                "service_type" => $serviceType
            ]);
            return $response->getBody()->getContents();
        } catch (RequestException $e) {
            return ($e->getResponse()->getBody()->getContents());
        } catch (GuzzleException $e) {
            return $e->getMessage();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
     /**
     * @param string $serviceType
     * @param string $productCode
     * @return string
     * @throws Exception
     */
    public function retrieveProviderAddons(string $serviceType,$productCode) : string
    {
        $validServiceTypes = ["dstv", "gotv", "startimes"];

        if (!in_array($serviceType, $validServiceTypes))
            throw new Exception("Invalid Service Type");

        try {
            $response = $this->baxiClient->call("POST", "/services/multichoice/addons", [
                "service_type" => $serviceType,"product_code"=>$productCode]);
            return $response->getBody()->getContents();
        } catch (RequestException $e) {
            return ($e->getResponse()->getBody()->getContents());
        } catch (GuzzleException $e) {
            return $e->getMessage();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


}