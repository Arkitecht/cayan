<?php


 function autoload_fc1a355f966216f7c19a47c1bbb2fdf9($class)
{
    $classes = array(
        'Arkitecht\Cayan\Giftcard' => __DIR__ .'/Giftcard.php',
        'Arkitecht\Cayan\ActivateCard' => __DIR__ .'/ActivateCard.php',
        'Arkitecht\Cayan\ActivateCardResponse' => __DIR__ .'/ActivateCardResponse.php',
        'Arkitecht\Cayan\GiftResponse4' => __DIR__ .'/GiftResponse4.php',
        'Arkitecht\Cayan\AddPoints' => __DIR__ .'/AddPoints.php',
        'Arkitecht\Cayan\AddPointsResponse' => __DIR__ .'/AddPointsResponse.php',
        'Arkitecht\Cayan\GiftLoyaltyResponse4' => __DIR__ .'/GiftLoyaltyResponse4.php',
        'Arkitecht\Cayan\AddValue' => __DIR__ .'/AddValue.php',
        'Arkitecht\Cayan\AddValueResponse' => __DIR__ .'/AddValueResponse.php',
        'Arkitecht\Cayan\BalanceInquiry' => __DIR__ .'/BalanceInquiry.php',
        'Arkitecht\Cayan\BalanceInquiryResponse' => __DIR__ .'/BalanceInquiryResponse.php',
        'Arkitecht\Cayan\ForceSaleCustom' => __DIR__ .'/ForceSaleCustom.php',
        'Arkitecht\Cayan\ForceSaleResponseCustom' => __DIR__ .'/ForceSaleResponseCustom.php',
        'Arkitecht\Cayan\RedeemPoints' => __DIR__ .'/RedeemPoints.php',
        'Arkitecht\Cayan\RedeemPointsResponse' => __DIR__ .'/RedeemPointsResponse.php',
        'Arkitecht\Cayan\SaleCustom' => __DIR__ .'/SaleCustom.php',
        'Arkitecht\Cayan\SaleResponseCustom' => __DIR__ .'/SaleResponseCustom.php',
        'Arkitecht\Cayan\ActivateCardKeyed' => __DIR__ .'/ActivateCardKeyed.php',
        'Arkitecht\Cayan\ActivateCardKeyedResponse' => __DIR__ .'/ActivateCardKeyedResponse.php',
        'Arkitecht\Cayan\AddPointsKeyed' => __DIR__ .'/AddPointsKeyed.php',
        'Arkitecht\Cayan\AddPointsKeyedResponse' => __DIR__ .'/AddPointsKeyedResponse.php',
        'Arkitecht\Cayan\AddValueKeyed' => __DIR__ .'/AddValueKeyed.php',
        'Arkitecht\Cayan\AddValueKeyedResponse' => __DIR__ .'/AddValueKeyedResponse.php',
        'Arkitecht\Cayan\ApplyTipCustom' => __DIR__ .'/ApplyTipCustom.php',
        'Arkitecht\Cayan\ApplyTipResponseCustom' => __DIR__ .'/ApplyTipResponseCustom.php',
        'Arkitecht\Cayan\BalanceInquiryKeyed' => __DIR__ .'/BalanceInquiryKeyed.php',
        'Arkitecht\Cayan\BalanceInquiryKeyedResponse' => __DIR__ .'/BalanceInquiryKeyedResponse.php',
        'Arkitecht\Cayan\ForceSaleKeyed' => __DIR__ .'/ForceSaleKeyed.php',
        'Arkitecht\Cayan\ForceSaleKeyedResponse' => __DIR__ .'/ForceSaleKeyedResponse.php',
        'Arkitecht\Cayan\RedeemPointsKeyed' => __DIR__ .'/RedeemPointsKeyed.php',
        'Arkitecht\Cayan\RedeemPointsKeyedResponse' => __DIR__ .'/RedeemPointsKeyedResponse.php',
        'Arkitecht\Cayan\RetrieveTransactions' => __DIR__ .'/RetrieveTransactions.php',
        'Arkitecht\Cayan\RetrieveTransactionsResponse' => __DIR__ .'/RetrieveTransactionsResponse.php',
        'Arkitecht\Cayan\GiftSummary4' => __DIR__ .'/GiftSummary4.php',
        'Arkitecht\Cayan\SaleKeyedCustom' => __DIR__ .'/SaleKeyedCustom.php',
        'Arkitecht\Cayan\SaleKeyedResponseCustom' => __DIR__ .'/SaleKeyedResponseCustom.php',
        'Arkitecht\Cayan\TransferBalance' => __DIR__ .'/TransferBalance.php',
        'Arkitecht\Cayan\TransferBalanceResponse' => __DIR__ .'/TransferBalanceResponse.php',
        'Arkitecht\Cayan\VoidSale' => __DIR__ .'/VoidSale.php',
        'Arkitecht\Cayan\VoidSaleResponse' => __DIR__ .'/VoidSaleResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_fc1a355f966216f7c19a47c1bbb2fdf9');

// Do nothing. The rest is just leftovers from the code generation.
{
}
