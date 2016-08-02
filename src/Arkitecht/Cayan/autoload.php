<?php


 function autoload_ea2c4ed8f247ef0ccafc2b34d386a30a($class)
{
    $classes = array(
        'Arkitecht\Cayan\TransportServiceCustom' => __DIR__ .'/TransportServiceCustom.php',
        'Arkitecht\Cayan\CreateTransactionCustom' => __DIR__ .'/CreateTransactionCustom.php',
        'Arkitecht\Cayan\TransportRequestCustom' => __DIR__ .'/TransportRequestCustom.php',
        'Arkitecht\Cayan\DisplayColorsCustom' => __DIR__ .'/DisplayColorsCustom.php',
        'Arkitecht\Cayan\DisplayOptionsCustom' => __DIR__ .'/DisplayOptionsCustom.php',
        'Arkitecht\Cayan\EntryModeCustom' => __DIR__ .'/EntryModeCustom.php',
        'Arkitecht\Cayan\HealthCareAmountDetailsCustom' => __DIR__ .'/HealthCareAmountDetailsCustom.php',
        'Arkitecht\Cayan\CreateTransactionResponseCustom' => __DIR__ .'/CreateTransactionResponseCustom.php',
        'Arkitecht\Cayan\TransportResponseCustom' => __DIR__ .'/TransportResponseCustom.php',
        'Arkitecht\Cayan\ArrayOfMessageCustom' => __DIR__ .'/ArrayOfMessageCustom.php',
        'Arkitecht\Cayan\MessageCustom' => __DIR__ .'/MessageCustom.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_ea2c4ed8f247ef0ccafc2b34d386a30a');

// Do nothing. The rest is just leftovers from the code generation.
{
}
