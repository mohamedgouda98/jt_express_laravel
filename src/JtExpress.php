<?php


namespace Gouda\JtExpressLaravel;


class JtExpress
{
    public $apiAccount;
    public $jtExpressUrl;
    public $sender;
    public $currency;
    public $platformName;
    public $isUnpackEnabled;
    public $expressType;

    public function __construct()
    {
        $this->apiAccount = config('JtExpress.apiAccount');
        $this->jtExpressUrl = config('JtExpress.jtExpressUrl');
        $this->sender = config('JtExpress.sender');
        $this->currency = config('JtExpress.currency');
        $this->platformName = config('JtExpress.platformName');
        $this->isUnpackEnabled = config('JtExpress.isUnpackEnabled');
        $this->expressType = config('JtExpress.expressType');
    }

    public function createOrder($data, $serviceType= '01', $orderType='2',$deliveryType='04')
    {
        $baseData = [
            'serviceType'=> $serviceType,
            'orderType'=> $orderType,
            'deliveryType'=> $deliveryType,
            'expressType'=> $this->expressType,
            'network'=> '',
            'batchNumber'=> '',
            'goodsType'=> 'ITN1',
            'sender'=> $this->sender,
            'priceCurrency'=> $this->currency,
            'payType'=> 'PP_PM',
            'operateType'=> 1,
            'platformName'=> $this->platformName,
            'isUnpackEnabled'=> $this->isUnpackEnabled
        ];

        $bizContent = json_encode(array_merge($data, $baseData));

        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->jtExpressUrl);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'apiAccount:'. $this->apiAccount,
                'digest:' . $data['digest'],
                'timestamp:1638428570653'
            ));
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, array(
                'bizContent' => $bizContent
            ));
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $responseData = curl_exec($ch);
            if (curl_errno($ch)) {
                return curl_error($ch);
            }
            curl_close($ch);

            return json_decode($responseData);
        }catch (\Exception $e)
        {
            return $e->getMessage();
        }

    }


}