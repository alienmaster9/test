<?php
ini_set('display_errors', 1);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://jionews.com/livetv/apis/v1.1/stream",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\"channelId\":\"492\",\"streamType\":\"live\",\"uuid\":\"7b909be5-0c69-405e-b07e-8fda500f6352\"}",
  CURLOPT_HTTPHEADER => array(
    "authority: jionews.com",
    "accesstoken: JN:ms:user:a7d3653c-f7c0-441c-b4f5-a7c9f6aaca4d",
    "webtype: safari",
    "user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36",
    "content-type: application/json",
    "accept: application/json, text/plain, */*",
    "os: web",
    "devicetype: pc",
    "origin: https://jionews.com",
    "sec-fetch-site: same-origin",
    "sec-fetch-mode: cors",
    "referer: https://jionews.com/liveTv/CNN-NEWS-18/492",
    "accept-encoding: gzip, deflate, br",
    "accept-language: en-US,en;q=0.9",
    //"cookie: G_ENABLED_IDPS=google; _ga=GA1.2.1771672205.1581679386; WZRK_G=efefa03f2dbf4442bb0a22cb83d4009a; AMCVS_5DA635DC5A8590790A495C35%40AdobeOrg=1; s_tp=2256; s_cc=true; aam_test=seg%3Dtest3_off; s_ptc=%5B%5BB%5D%5D; s_sq=%5B%5BB%5D%5D; _gid=GA1.2.1358128405.1583574599; s_ppv=https%253A%2F%2Fjionews.com%2FliveTv%2FCNN-NEWS-18%2F492%2C19%2C19%2C420; s_nr=1583718880108-Repeat; AMCV_5DA635DC5A8590790A495C35%40AdobeOrg=1585540135%7CMCIDTS%7C18331%7CMCMID%7C79442948642874490574501241760049762800%7CMCAAMLH-1584042010%7C3%7CMCAAMB-1583718875%7C6G1ynYcLPuiQxYZrsz_pkqfLG9yMXBpb2zX5dvJdYQJzPXImdj0y%7CMCOPTOUT-1583726080s%7CNONE%7CMCAID%7CNONE%7CMCCIDH%7C1741117041%7CvVersion%7C4.4.0; WZRK_S_RKW-WWZ-Z55Z=%7B%22s%22%3A1583718852%2C%22t%22%3A1583719320%2C%22p%22%3A1%7D"
  ),
));


$response = curl_exec($curl);

curl_close($curl);
$results = json_decode($response, true);
echo "?jct=".$results['result']['metadata']['jct'];
echo "&pxe=".$results['result']['metadata']['pxe'];
echo "&st=".$results['result']['metadata']['st'];
