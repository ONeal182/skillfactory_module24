<?
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
include $_SERVER['DOCUMENT_ROOT'] . '/class/InterfaceTransport.php';
include $_SERVER['DOCUMENT_ROOT'] . '/class/Transport.php';
include $_SERVER['DOCUMENT_ROOT'] . '/class/Traktor.php';
include $_SERVER['DOCUMENT_ROOT'] . '/class/Tank.php';

function setInterface(InterfaceTransport $interfaceTransport)
{
    $interfaceTransport->specAction();
}
$traktor = new Traktor('Трактор', 'Коричневый', '50', '30', true);
// $transport = new Transport();
$traktor->getName();
$traktor->getColor();
$traktor->getHP();
$traktor->getMaxSpeed();
// $traktor->action();
$traktor->go();
// $traktor->setInterface($traktor);
// $traktor->specAction();
setInterface($traktor);
$tank = new Tank('Танк', 'Зелёный', '1000', '60', true);
// $transport = new Transport();
$tank->getName();
$tank->getColor();
$tank->getHP();
$tank->getMaxSpeed();
// $traktor->action();
$tank->go();
// $tank->setInterface($traktor);
// $tank->specAction();
setInterface($tank);
