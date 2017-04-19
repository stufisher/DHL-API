<?php
/**
 * Created by PhpStorm.
 * User: MoroAlberto
 * Date: 13/04/17
 * Time: 10.09
 *
 * File:        PickUpRequest.php
 * Project:     DHL API
 *
 * @author      MoroAlberto
 * @version
 *
 * take Toolkit/documents/UnitTestPlan/PickUp/Request/Global/BookPickup/BookPickupRequest_GlobalEU_Valid2.xml
 * and create php code
 */
use DHL\Datatype\GB\Pickup;
use DHL\Datatype\GB\PickupContact;
use DHL\Datatype\GB\PUPlace;
use DHL\Datatype\GB\PUShipmentDetails;
use DHL\Datatype\GB\Requestor;
use DHL\Datatype\GB\RequestorContact;
use DHL\Datatype\GB\ShipmentDetails;
use DHL\Entity\GB\BookPURequest;
use DHL\Client\Web as WebserviceClient;
use DHL\Entity\GB\BookPUResponse;

require(__DIR__ . '/../../init.php');
// DHL Settings
$dhl = $config['dhl'];

$bookPickUp = new BookPURequest();
$bookPickUp->MessageTime = date("Y-m-d\TH:m:sP"); //Time this message is sent
$bookPickUp->MessageReference = '1234567890123456789012345678901'; // A string, preferably number, to uniquely identify individual messages. Minimum length must be 28 and maximum length is 32
$bookPickUp->SiteID = $dhl['id'];
$bookPickUp->Password = $dhl['pass'];// Site ID used for verifying the sender

$bookPickUp->RegionCode = 'EU';

$requestor = new Requestor();
$requestor->AccountType = 'D';
$requestor->AccountNumber = '130000279';

$requestorContact = new RequestorContact();
$requestorContact->PersonName = 'Rikhil';
$requestorContact->Phone = '23162';
$requestor->RequestorContact = $requestorContact;

$requestor->CompanyName = '130000279';//Required if Contact Name and Contact Phone No.is given
$bookPickUp->Requestor = $requestor;

$place = new PUPlace();
$place->LocationType = 'B';
$place->CompanyName = 'Test and Co';
$place->Address1 = '123 Test Ave';
$place->Address2 = 'Test Bus Park';//optional
$place->PackageLocation = 'Reception';
$place->City = 'Hounslow';
$place->CountryCode = 'GB';
$place->PostalCode = 'TW4 6JS';
$bookPickUp->Place = $place;

$pickup = new Pickup();
$pickup->PickupDate = '2017-04-19';
$pickup->ReadyByTime = '10:20';
$pickup->CloseTime = '14:20';
$pickup->Pieces = '';
$bookPickUp->Pickup = $pickup;

$pickupContact = new PickupContact();
$pickupContact->PersonName = 'Subhayu';
$pickupContact->Phone = '4801313131';
$bookPickUp->PickupContact = $pickupContact;

$shipmentDetails = new PUShipmentDetails();
$shipmentDetails->AccountType = 'D';
$shipmentDetails->AccountNumber = $dhl['billingAccountNumber'];//optional
//changedCard not support after 30 may 2016
$shipmentDetails->BillToAccountNumber = $dhl['billingAccountNumber'];//optional
$shipmentDetails->AWBNumber = '7520067111';//optional
$shipmentDetails->NumberOfPieces = '2';
$shipmentDetails->Weight = '999.999';
$shipmentDetails->WeightUnit = 'K';
$shipmentDetails->GlobalProductCode = 'D';//optional
$shipmentDetails->DoorTo = 'DD';
$shipmentDetails->DimensionUnit = 'C';//optional
$shipmentDetails->InsuredAmount = '99.99';//optional
$shipmentDetails->InsuredCurrencyCode = 'Str';//optional

/*$piece = new Piece();
$piece->Weight='20';//optional
$shipmentDetails->addPiece($piece);//optional

$specialService = new SpecialService();
$specialService->SpecialServiceType = 'I';
$shipmentDetails->SpecialService = $specialService;//optional*/
$bookPickUp->ShipmentDetails = $shipmentDetails; //optional

// Call DHL XML API
header('Content-Type: text/plain');
//echo $bookPickUp->toXML();
$client = new WebserviceClient('staging');
$xml = $client->call($bookPickUp);
//echo $xml;
$response = new BookPUResponse();
$response->initFromXML($xml);
//echo $response->toXML();
echo $response->Note->ActionNote;
