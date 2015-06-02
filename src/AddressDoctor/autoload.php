<?php


 function autoload_69bd404b4584fd65defabbc878284e13($class)
{
    $classes = array(
        'AddressDoctor\AddressValidation' => __DIR__ .'/AddressValidation.php',
        'AddressDoctor\Process' => __DIR__ .'/Process.php',
        'AddressDoctor\Parameters' => __DIR__ .'/Parameters.php',
        'AddressDoctor\ServiceParameters' => __DIR__ .'/ServiceParameters.php',
        'AddressDoctor\ValidationParameters' => __DIR__ .'/ValidationParameters.php',
        'AddressDoctor\Standardize' => __DIR__ .'/Standardize.php',
        'AddressDoctor\AdditionalInformation' => __DIR__ .'/AdditionalInformation.php',
        'AddressDoctor\AddressOptions' => __DIR__ .'/AddressOptions.php',
        'AddressDoctor\ArrayOfAddress' => __DIR__ .'/ArrayOfAddress.php',
        'AddressDoctor\Address' => __DIR__ .'/Address.php',
        'AddressDoctor\ArrayOfString' => __DIR__ .'/ArrayOfString.php',
        'AddressDoctor\AddressCode' => __DIR__ .'/AddressCode.php',
        'AddressDoctor\AddressDetailed' => __DIR__ .'/AddressDetailed.php',
        'AddressDoctor\ArrayOfStreetDetailed' => __DIR__ .'/ArrayOfStreetDetailed.php',
        'AddressDoctor\StreetDetailed' => __DIR__ .'/StreetDetailed.php',
        'AddressDoctor\ArrayOfSubBuildingDetailed' => __DIR__ .'/ArrayOfSubBuildingDetailed.php',
        'AddressDoctor\SubBuildingDetailed' => __DIR__ .'/SubBuildingDetailed.php',
        'AddressDoctor\ArrayOfResidueDetailed' => __DIR__ .'/ArrayOfResidueDetailed.php',
        'AddressDoctor\ResidueDetailed' => __DIR__ .'/ResidueDetailed.php',
        'AddressDoctor\ArrayOfEnrichment' => __DIR__ .'/ArrayOfEnrichment.php',
        'AddressDoctor\Enrichment' => __DIR__ .'/Enrichment.php',
        'AddressDoctor\ProcessResponse' => __DIR__ .'/ProcessResponse.php',
        'AddressDoctor\Response' => __DIR__ .'/Response.php',
        'AddressDoctor\ArrayOfAdditionalInformation' => __DIR__ .'/ArrayOfAdditionalInformation.php',
        'AddressDoctor\ArrayOfResult' => __DIR__ .'/ArrayOfResult.php',
        'AddressDoctor\Result' => __DIR__ .'/Result.php',
        'AddressDoctor\ArrayOfResultData' => __DIR__ .'/ArrayOfResultData.php',
        'AddressDoctor\ResultData' => __DIR__ .'/ResultData.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_69bd404b4584fd65defabbc878284e13');

// Do nothing. The rest is just leftovers from the code generation.
{
}
