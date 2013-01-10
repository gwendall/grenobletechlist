<?php

$app = require __DIR__ . '/bootstrap.php';

$app['debug'] = true;

$app->get('/api/{city}/startups', function () use ($app) {
          $startups = array(
            array(
                  'name' => 'Sogilis',
                  'address' => '1, place Firmin Gautier 38000 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/bw_aps0BtN/images/sogilis.png',
                  'lat' => '45.19079',
                  'lng' => '5.71206',
                  'email' => 'contact@sogilis.com',
                  'website' => 'http://sogilis.com/',
                  'twitter' => array()
              ),
            array(
                  'name' => 'Wizbii',
                  'address' => '6 rue Etienne Marcel, 38000 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/cBYu2aZcHl/images/wizbii.jpg',
                  'lat' => '45.18641',
                  'lng' => '5.71758',
                  'email' => '',
                  'website' => 'http://www.wizbii.com/',
                  'twitter' => array('wizbii')
              ),
            array(
                  'name' => 'Ethera',
                  'address' => '7, Parvis Louis Néel, BP 50, F-38040 Grenoble Cedex 9',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/utWe7pESAm/images/ethera.jpg',
                  'lat' => '45.19574',
                  'lng' => '5.71005',
                  'email' => 'info@ethera-labs.com',
                  'website' => 'http://www.ethera-labs.com/',
                  'twitter' => array('EtheraLabs')
              )
            );
          
          shuffle($startups);
          
          return $app->json($startups);
        });
        
$app->get('/api/{city}/investors', function () use ($app) {
          $investors = array(
              array(
                  'name' => 'Grenoble Angels',
                  'address' => 'CCI de Grenoble, 1 Place André Malraux BP 297, 38016, Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/bbZ8aG3qUS/images/grenoble-angels.jpg',
                  'lat' => '45.188529',
                  'lng' => '5.724524',
                  'email' => 'grenobleangels@grenoble.cci.fr',
                  'website' => 'http://www.grenoble-ecobiz.biz/ccig/gaacc.nsf/EXMHP?ReadForm',
                  'twitter' => array()
              ),
              array(
                  'name' => 'Réseau Entreprendre Isère',
                  'address' => 'ZAC Bouchayer-Viallet, Hôtel d\'entreprises de la petite halle, 31 rue Gustave Eiffel, 38000 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/BOM-RUNfsF/images/reseau-entreprendre-isere.jpg',
                  'lat' => '45.18440',
                  'lng' => '5.70342',
                  'email' => '',
                  'website' => 'http://www.isere-entreprendre.org',
                  'twitter' => array()
              ),
              array(
                  'name' => 'ADIE',
                  'address' => '17, rue Denfert Rochereau 38000 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/SlCTsejUGs/images/adie.png',
                  'lat' => '45.18920',
                  'lng' => '5.71727',
                  'email' => '',
                  'website' => 'http://www.adie.org/',
                  'twitter' => array('Adieorg')
              ),
              array(
                  'name' => 'MCAE',
                  'address' => '35, rue Casimir Brenier 38000 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/BsTSe0_waM/images/mcae.jpg',
                  'lat' => '45.19146',
                  'lng' => '5.71654',
                  'email' => '',
                  'website' => 'http://www.mcae.org/',
                  'twitter' => array()
              )
          );
          
          shuffle($investors);
          
          return $app->json($investors);
        });

$app->get('/api/{city}/incubators', function () use ($app) {
          $incubators = array(
            array(
                  'name' => 'GRAIN',
                  'address' => 'Petite Halle – Site Bouchayer-Viallet, 31 rue Gustave Eiffel, 38000 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/JJPVXasqkL/images/grain.png',
                  'lat' => '45.18440',
                  'lng' => '5.70342',
                  'email' => '',
                  'website' => 'http://www.grain-incubation.com/',
                  'twitter' => array('GrainIncubation')
              ),
              array(
                  'name' => 'IncubaGEM',
                  'address' => '4 place Robert Schuman, 38000 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/af9kDtNfVu/images/incubagem.png',
                  'lat' => '45.19162',
                  'lng' => '5.71298',
                  'email' => '',
                  'website' => 'http://www.gementreprendre.fr/accompagnement/incubagem/',
                  'twitter' => array()
              ),
              array(
                  'name' => 'ACEISP',
                  'address' => 'Espace Vaucanson, 82 rue Anatole France, 38100 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/AN4I7dpone/images/aceisp.jpg',
                  'lat' => '45.17285',
                  'lng' => '5.70370',
                  'email' => '',
                  'website' => 'http://www.aceisp.org/',
                  'twitter' => array()
              ),
              array(
                  'name' => 'Petale',
                  'address' => 'La Petite Halle, 31 Rue Gustave Eiffel, 38 000 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/0FO2gDbaYy/images/petale.jpg',
                  'lat' => '45.18440',
                  'lng' => '5.70342',
                  'email' => '',
                  'website' => 'http://www.petale-innovation.com/',
                  'twitter' => array()
              )  
          );
          
          shuffle($incubators);
          
          return $app->json($incubators);
        });
        
$app->get('/api/{city}/coworking-spaces', function () use ($app) {
          $coworkingSpaces = array(
            array(
                  'name' => "Col'inn",
                  'address' => '34, avenue Felix Viallet, 38000 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/yLaS8UOx0x/images/colinn.jpeg',
                  'lat' => '45.19084',
                  'lng' => '5.71874',
                  'website' => 'http://www.col-inn.net/',
                  'twitter' => array('Col_inn')
              )
          );
          
          shuffle($coworkingSpaces);
          
          return $app->json($coworkingSpaces);
        });
        
$app->get('/api/{city}/other-organizations', function () use ($app) {
          $otherOrganizations = array(
            array(
                  'name' => 'Apéro Entrepreneurs',
                  'address' => '4 Rue Montorge, 38000 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/imai264oBa/images/apero-entrepreneurs.png',
                  'lat' => '45.19139',
                  'lng' => '5.72712',
                  'website' => 'http://aperoentrepreneurs.com/grenoble/show/',
                  'twitter' => array('aperopreneurs')
              )
            );
          
          shuffle($otherOrganizations);
          
          return $app->json($otherOrganizations);
        });
        
$app->get('/', function () use ($app) {
          return $app['twig']->render('index.html');
        });

return $app;