<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<div>
  <div class="sc-2829e1d5-0 islOmW">Players</div>
  <div class="sc-a1617277-0 GsEnK">
    <div class="sc-3db02b55-0 QobHR"><a class="sc-f739ec58-0 jluRps" style="color: rgb(0, 87, 163); text-transform: uppercase; font-weight: 500; font-size: 12px; white-space: nowrap;"><svg width="16" height="16" viewBox="0 0 1024 1024" fill="#0057a3" style="margin-right: 10px;">
          <path d="M128 128h320v320h-320v-320z"></path>
          <path d="M576 128h320v320h-320v-320z"></path>
          <path d="M128 576h320v320h-320v-320z"></path>
          <path d="M576 576h320v320h-320v-320z"></path>
        </svg>Box View</a><a class="sc-f739ec58-0 jluRps" style="color: rgb(128, 128, 128); text-transform: uppercase; font-weight: 500; font-size: 12px; white-space: nowrap;"><svg width="16" height="16" viewBox="0 0 1024 1024" fill="#808080" style="margin-right: 10px;">
          <path d="M64 192h896v128h-896v-128z"></path>
          <path d="M64 448h896v128h-896v-128z"></path>
          <path d="M64 704h896v128h-896v-128z"></path>
        </svg>List view</a>
      <div width="104.80555725097656" fill="#0057a3" class="sc-94e3615d-0 kFiNEn"></div>
    </div>
    <div class="sc-3db02b55-1 eXovkq">
      <div class="sc-f27b68e5-0 ia-djTk">
        <div class="sc-2829e1d5-1 kEOano"><a class="sc-8cd91851-0 fFQYvZ" href="/player/karim-benzema/3306">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Karim Benzema" src="https://api.sofascore.app/api/v1/player/3306/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">9</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Karim Benzema</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="F" class="sc-8cd91851-13 hSFyrg">F</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="FR" src="https://www.sofascore.com/static/images/flags/fr.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">FRA</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/eden-hazard/27583">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Eden Hazard" src="https://api.sofascore.app/api/v1/player/27583/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">7</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Eden Hazard</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="F" class="sc-8cd91851-13 hSFyrg">F</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="BE" src="https://www.sofascore.com/static/images/flags/be.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">BEL</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/vinicius-junior/868812">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Vinícius Júnior" src="https://api.sofascore.app/api/v1/player/868812/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">20</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Vinícius Júnior</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="F" class="sc-8cd91851-13 hSFyrg">F</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="BR" src="https://www.sofascore.com/static/images/flags/br.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">BRA</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/gareth-bale/15354">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Gareth Bale" src="https://api.sofascore.app/api/v1/player/15354/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">18</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Gareth Bale</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="F" class="sc-8cd91851-13 hSFyrg">F</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="WA" src="https://www.sofascore.com/static/images/flags/wa.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">WAL</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/rodrygo/910536">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Rodrygo" src="https://api.sofascore.app/api/v1/player/910536/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">21</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Rodrygo</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="F" class="sc-8cd91851-13 hSFyrg">F</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="BR" src="https://www.sofascore.com/static/images/flags/br.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">BRA</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/luka-jovic/319129">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Luka Jović" src="https://api.sofascore.app/api/v1/player/319129/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">16</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Luka Jović</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="F" class="sc-8cd91851-13 hSFyrg">F</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="RS" src="https://www.sofascore.com/static/images/flags/rs.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">SRB</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/marco-asensio/361004">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Marco Asensio" src="https://api.sofascore.app/api/v1/player/361004/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">11</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Marco Asensio</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="F" class="sc-8cd91851-13 hSFyrg">F</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="ES" src="https://www.sofascore.com/static/images/flags/es.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">ESP</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/mariano-diaz/175753">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Mariano Díaz" src="https://api.sofascore.app/api/v1/player/175753/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">24</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Mariano Díaz</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="F" class="sc-8cd91851-13 hSFyrg">F</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="DO" src="https://www.sofascore.com/static/images/flags/do.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">DOM</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/luka-modric/15466">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Luka Modrić" src="https://api.sofascore.app/api/v1/player/15466/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">10</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Luka Modrić</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="M" class="sc-8cd91851-13 iymGnP">M</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="HR" src="https://www.sofascore.com/static/images/flags/hr.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">CRO</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/toni-kroos/26502">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Toni Kroos" src="https://api.sofascore.app/api/v1/player/26502/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">8</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Toni Kroos</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="M" class="sc-8cd91851-13 iymGnP">M</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="DE" src="https://www.sofascore.com/static/images/flags/de.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">GER</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/casemiro/122951">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Casemiro" src="https://api.sofascore.app/api/v1/player/122951/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">14</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Casemiro</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="M" class="sc-8cd91851-13 iymGnP">M</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="BR" src="https://www.sofascore.com/static/images/flags/br.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">BRA</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/camavinga-eduardo/973887">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Eduardo Camavinga" src="https://api.sofascore.app/api/v1/player/973887/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">25</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Eduardo Camavinga</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="M" class="sc-8cd91851-13 iymGnP">M</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="FR" src="https://www.sofascore.com/static/images/flags/fr.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">FRA</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/isco/103417">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Isco" src="https://api.sofascore.app/api/v1/player/103417/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">22</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Isco</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="M" class="sc-8cd91851-13 iymGnP">M</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="ES" src="https://www.sofascore.com/static/images/flags/es.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">ESP</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/federico-valverde/831808">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Federico Valverde" src="https://api.sofascore.app/api/v1/player/831808/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">15</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Federico Valverde</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="M" class="sc-8cd91851-13 iymGnP">M</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="UY" src="https://www.sofascore.com/static/images/flags/uy.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">URU</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/dani-ceballos/547838">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Dani Ceballos" src="https://api.sofascore.app/api/v1/player/547838/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">19</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Dani Ceballos</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="M" class="sc-8cd91851-13 iymGnP">M</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="ES" src="https://www.sofascore.com/static/images/flags/es.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">ESP</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/marcelo/17787">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Marcelo" src="https://api.sofascore.app/api/v1/player/17787/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">12</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Marcelo</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="D" class="sc-8cd91851-13 ctWGZL">D</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="BR" src="https://www.sofascore.com/static/images/flags/br.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">BRA</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/david-alaba/66492">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="David Alaba" src="https://api.sofascore.app/api/v1/player/66492/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">4</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">David Alaba</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="D" class="sc-8cd91851-13 ctWGZL">D</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="AT" src="https://www.sofascore.com/static/images/flags/at.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">AUT</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/eder-militao/822519">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Éder Militão" src="https://api.sofascore.app/api/v1/player/822519/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">3</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Éder Militão</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="D" class="sc-8cd91851-13 ctWGZL">D</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="BR" src="https://www.sofascore.com/static/images/flags/br.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">BRA</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/daniel-carvajal/138572">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Daniel Carvajal" src="https://api.sofascore.app/api/v1/player/138572/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">2</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Daniel Carvajal</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="D" class="sc-8cd91851-13 ctWGZL">D</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="ES" src="https://www.sofascore.com/static/images/flags/es.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">ESP</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/ferland-mendy/792073">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Ferland Mendy" src="https://api.sofascore.app/api/v1/player/792073/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">23</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Ferland Mendy</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="D" class="sc-8cd91851-13 ctWGZL">D</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="FR" src="https://www.sofascore.com/static/images/flags/fr.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">FRA</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/lucas-vazquez/255239">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Lucas Vázquez" src="https://api.sofascore.app/api/v1/player/255239/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">17</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Lucas Vázquez</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="D" class="sc-8cd91851-13 ctWGZL">D</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="ES" src="https://www.sofascore.com/static/images/flags/es.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">ESP</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/nacho-fernandez/69404">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Nacho Fernández" src="https://api.sofascore.app/api/v1/player/69404/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">6</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Nacho Fernández</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="D" class="sc-8cd91851-13 ctWGZL">D</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="ES" src="https://www.sofascore.com/static/images/flags/es.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">ESP</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/jesus-vallejo/355048">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Jesús Vallejo" src="https://api.sofascore.app/api/v1/player/355048/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">5</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Jesús Vallejo</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="D" class="sc-8cd91851-13 ctWGZL">D</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="ES" src="https://www.sofascore.com/static/images/flags/es.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">ESP</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/miguel-gutierrez/908716">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Miguel Gutiérrez" src="https://api.sofascore.app/api/v1/player/908716/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">35</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Miguel Gutiérrez</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="D" class="sc-8cd91851-13 ctWGZL">D</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="ES" src="https://www.sofascore.com/static/images/flags/es.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">ESP</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/vinicius-tobias/1067639">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Vinícius Tobías" src="https://api.sofascore.app/api/v1/player/1067639/image" class="sc-a7ad0435-0 gluUez"></div>
            <div class="sc-8cd91851-3 cmzgnH">Vinícius Tobías</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="D" class="sc-8cd91851-13 ctWGZL">D</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="BR" src="https://www.sofascore.com/static/images/flags/br.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">BRA</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/rafa-marin/984623">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Rafa Marín" src="https://api.sofascore.app/api/v1/player/984623/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">41</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Rafa Marín</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="D" class="sc-8cd91851-13 ctWGZL">D</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="ES" src="https://www.sofascore.com/static/images/flags/es.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">ESP</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/thibaut-courtois/70988">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Thibaut Courtois" src="https://api.sofascore.app/api/v1/player/70988/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">1</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Thibaut Courtois</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="G" class="sc-8cd91851-13 kZpnlv">G</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="BE" src="https://www.sofascore.com/static/images/flags/be.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">BEL</span></div>
            </div>
          </a><a class="sc-8cd91851-0 fFQYvZ" href="/player/andriy-lunin/857574">
            <div class="sc-8cd91851-1 ipGgrS" style="width: 75px;"><img width="75" height="75" alt="Andriy Lunin" src="https://api.sofascore.app/api/v1/player/857574/image" class="sc-a7ad0435-0 gluUez">
              <div class="sc-8cd91851-2 iKKRor">
                <div class="sc-8cd91851-6 dKEjkb">13</div>
              </div>
            </div>
            <div class="sc-8cd91851-3 cmzgnH">Andriy Lunin</div>
            <div class="sc-8cd91851-4 dKGIlX">
              <div class="sc-8cd91851-5 eIszhL">
                <div title="G" class="sc-8cd91851-13 kZpnlv">G</div>
              </div>
              <div class="sc-8cd91851-14 clDCDf"><img width="18" height="18" alt="UA" src="https://www.sofascore.com/static/images/flags/ua.png" class="sc-a7ad0435-0 gluUez sc-8cd91851-8 cHySUE"><span class="sc-8cd91851-9 jbHIoF">UKR</span></div>
            </div>
          </a>
          <div class="sc-2829e1d5-3 kcWixl"></div>
          <div class="sc-2829e1d5-3 kcWixl"></div>
        </div>
      </div>
    </div>
  </div>
</div>