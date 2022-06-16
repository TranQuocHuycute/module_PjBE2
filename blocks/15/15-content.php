<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<div class="player">
  <div class="sc-2829e1d5-0 islOmW ">Players</div>
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
          </a>
          <div class="sc-2829e1d5-3 kcWixl"></div>
          <div class="sc-2829e1d5-3 kcWixl"></div>
        </div>
      </div>
    </div>
  </div>
</div>