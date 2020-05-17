<?php
$addresses = array(
  'https://www.binance.com/en/register?ref=35734418',
  'https://btcpop.co/Home/292995/webroulette.online.fr',
  'http://btcvic.com/r/e586ec3ed59ffe13c499',
  'https://coinfaucet.io/?ref=360310',
  'http://cointiply.com/r/ojv0',
  'https://expresscrypto.io/signup?referral=17269',
  'https://freebitcoin.io/?ref=645',
  'https://freenem.com/?ref=73124',
  'https://freecardano.com/?ref=15342',
  'https://freetether.com/?ref=4830',
  'https://free-ethereum.io/?referer=362372',
  'https://faucetpay.io/?r=5046',
  'http://jeveuxaider.gouv.fr',
  'https://minergate.com/a/a089af144ef3649f26755948',
  'https://satoshihero.com/en/register?r=j9dg9b36',
  'https://satoshilabs.net/?r=6291',
  'http://satoshis.for.free.fr',
  'https://skl.sh/2CyNcKJ',
  'https://spectrocoin.com/en/signup?referralId=2255439024',
  'https://www.udemy.com/share/100F3uBUQSdFZWQ3Q=/?xref=E0cceFtaQXoJSWUuAAcqP1kSWSRM',
  'http://xbit.co.in/faucet/?r=1PXLWE2q5mpJ9weouVMCnXq3CAgDZs9hiD'
);

$size = count($addresses);
$randomIndex = rand(0, $size - 1);
$randomUrl = $addresses[$randomIndex];
header('Location: ' . $randomUrl, true, 303);
die();
?>
