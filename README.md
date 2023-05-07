
# HyperPay Package With Laravel

sample package for laravel applications to integrate with HyperPay

# Hi, I'm Gouda! 👋


## 🚀 About Me
I'm a Tecnical team lead...


## Installation

Install with composer

```bash
composer require gouda/jt_express_laravel
```

Add service Providor in config/app.php

```bash
\Gouda\JtExpressLaravel\JtExpressServiceProvider::class,
```





    
## Environment Variables

To run this package, you will need to add the following environment variables to your .env file

`API_ACCOUNT`

`JT_EXPRESS_URL`

`sender`

run command:
```bash
 php artisan vendor:publish --tag=JtExpress-package-config
```
## How to use ?

### payment without user:
- this function to make transaction without Model User , just pass following params:

```bash
    $shipping = new JtExpress();
    $shipping->createOrder($data);
    $data = [
        'customerCode'=> 'test102',
        'digest'=> 'sdsd499',
        'length'=> '20',
        'sendStartTime'=> '2021-12-03 10:02:50',
        'weight'=> '20',
        'billCode'=> '9ui8',
        'txlogisticId'=> '243n3k409j',
        'totalQuantity'=> '10',
        'receiver'=> [
            'area'=> 'sdfdsafdsfdsafdsa1',
            'address'=> 'sdfsacdscdscds2a',
            'town'=> '',
            'street'=> '',
            'city'=> 'Abu Ajram',
            'mobile'=> '1441234567843543543554311143',
            'mailBox'=> 'ant_li123@qq.com',
            'phone'=> '1441234567843543543554311143',
            'countryCode'=> 'KSA',
            'name'=> 'test_receiver',
            'company'=> 'guangdongshengshenzhenshizhuantayigeyidia nzishiyeyouxianggongsi',
            'postCode'=> '518000',
            'prov'=> 'Al Jawf'
        ],
        'itemsValue'=> '100',
        'width'=> '23',
        'items'=> [
            ['number'=> 1, 'itemType'=> 'ITN1', 'itemName'=> '服饰123456test', 'priceCurrency'=> 'DHS', 'itemValue'=> '12.36', 'itemUrl'=> 'http://www.baidu.com/shangpinlianjiedizhi', 'desc'=> 'test_ordermiaoshu'],
            ['number'=> 1, 'itemType'=> 'ITN1', 'itemName'=> '服饰123456test', 'priceCurrency'=> 'DHS', 'itemValue'=> '12.36', 'itemUrl'=> 'http://www.baidu.com/shangpinlianjiedizhi', 'desc'=> 'test_ordermiaoshu'],
            ['number'=> 1, 'itemType'=> 'ITN1', 'itemName'=> '服饰123456test', 'priceCurrency'=> 'DHS', 'itemValue'=> '12.36', 'itemUrl'=> 'http://www.baidu.com/shangpinlianjiedizhi', 'desc'=> 'test_ordermiaoshu'],
            ['number'=> 1, 'itemType'=> 'ITN1', 'itemName'=> '服饰123456test', 'priceCurrency'=> 'DHS', 'itemValue'=> '12.36', 'itemUrl'=> 'http://www.baidu.com/shangpinlianjiedizhi', 'desc'=> 'test_ordermiaoshu'],
        ],
        'sendEndTime'=> '2021-12-05 10:02:50',
        'height'=> '10',
    ];

```

This function will return shipping object.

## Support

For support, email dev.mohamedgouda@gmail.com 

