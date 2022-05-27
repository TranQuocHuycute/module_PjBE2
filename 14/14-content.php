<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>


<div class="u-mB12">
  <h3 class="sc-8e930919-4 iqbqLr">Matches</h3>
  <div class="sc-8e930919-3 BtMle">
    <div class="sc-14105bc3-0 gjVNmc">
      <div class="sc-e5255230-0 hLaBJx">
        <div class="list-wrapper">
          <div class="sc-cd4cfbdc-0 sc-8e930919-0 kdhaCQ etHFso">
            <div class="sc-492bf320-0 crIwBV" style="min-width: 85px; text-align: center;">
              <div class="sc-18688171-0 sc-8e930919-1 fXAhuT bBZkJV"><svg width="20" height="20" viewBox="0 0 1024 1024" style="transform: rotate(90deg);">
                  <path d="M707.712 366.368l-195.712 195.68-195.712-195.712-60.288 60.32 256 256 256-256-60.288-60.288z"></path>
                </svg>Previous</div>
            </div>
            <div class="sc-492bf320-0 crIwBV" style="min-width: 85px; text-align: center;"></div>
          </div>
          <div class="sc-8e930919-2 hibAwd">
            <div class="sc-cd4cfbdc-0 sc-e8e9c8f8-0 hDkGff fnZAhi">
              <div class="sc-492bf320-0 crIwBV">
                <div class="sc-18688171-0 fXAhuT"><img width="28" height="28" alt="" src="https://api.sofascore.app/api/v1/unique-tournament/34/image" class="sc-a7ad0435-0 hDIIyr" style="margin: 0px 12px;"></div>
              </div>
              <div class="sc-492bf320-0 hoXqpI">
                <div class="sc-18688171-0 sc-e8e9c8f8-1 fXAhuT buFif"><a href="/tournament/football/france/ligue-1/34">Ligue 1</a></div>
                <div class="sc-18688171-0 sc-e8e9c8f8-1 fXAhuT buFif">
                  <div class="sc-492bf320-0 crIwBV">
                    <div style="color: rgb(2, 181, 68); font-size: 12px; font-weight: 500;">SofaScore ratings</div>
                  </div>
                </div>
              </div>
            </div><a data-id="9594730" class="sc-c2090177-0 dLUwVT" href="/as-monaco-paris-saint-germain/UHsdI">
              <div>
                <div class="sc-cd4cfbdc-0 sc-7d450bff-0 hDkGff gYMraj js-list-cell-target js-list-cell-target-9594730">
                  <div title="FT" class="sc-492bf320-0 sc-7d450bff-2 crIwBV jeUcCr">
                    <div class="sc-18688171-0 fXAhuT">20/03/22</div>
                    <div data-change-key="status" class="sc-18688171-0 sc-7d450bff-3 fXAhuT buhekp">FT</div>
                  </div>
                  <div class="sc-492bf320-1 kYeOMc"></div>
                  <div title="AS Monaco Paris Saint-Germain live score" class="sc-492bf320-0 hoXqpI">
                    <div class="sc-18688171-0 sc-7d450bff-4 fXAhuT djGAMk">AS Monaco </div>
                    <div class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">Paris Saint-Germain </div>
                  </div>
                  <div class="sc-492bf320-0 crIwBV u-minWidth20">
                    <div class="sc-cd4cfbdc-0 gHBCID"><svg viewBox="0 0 24 24" width="10" height="10" class="sc-abe75a67-0 sc-abe75a67-1 jjYmHi kTHity">
                        <path d="M12.9,18.9H18V5.1h-5.1V18.9z M6,18.9h5.1V12H6V18.9z M24,12c0,6.6-5.4,12-12,12S0,18.6,0,12 C0,5.4,5.4,0,12,0S24,5.4,24,12z M22.7,12c0-5.9-4.8-10.7-10.7-10.7S1.3,6.1,1.3,12c0,5.9,4.8,10.7,10.7,10.7S22.7,17.9,22.7,12z"></path>
                      </svg><svg viewBox="0 0 24 24" width="10" height="10" class="sc-abe75a67-0 sc-abe75a67-1 jjYmHi kTHity">
                        <path d="M8.2,17.7V6.2l10,5.8L8.2,17.7z M12,24C5.4,24,0,18.6,0,12C0,5.4,5.4,0,12,0s12,5.4,12,12C24,18.6,18.6,24,12,24z M12,1.3 C6.1,1.3,1.3,6.1,1.3,12c0,5.9,4.8,10.7,10.7,10.7S22.7,17.9,22.7,12C22.7,6.1,17.9,1.3,12,1.3z"></path>
                      </svg></div>
                  </div>
                  <div class="sc-492bf320-0 sc-7d450bff-9 crIwBV frdFp">
                    <div data-change-key="homeScore.display" class="sc-18688171-0 sc-7d450bff-4 fXAhuT djGAMk">3</div>
                    <div data-change-key="awayScore.display" class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">0</div>
                  </div>
                  <div class="sc-492bf320-1 kYeOMc"></div>
                  <div class="sc-492bf320-0 crIwBV">
                    <div class="sc-18688171-0 fXAhuT"><svg viewBox="0 0 24 24" width="20" height="20" fill="#c1272d" class="sc-abe75a67-4 eXPDKY">
                        <path d="M24,12c0,6.6-5.4,12-12,12C5.4,24,0,18.6,0,12S5.4,0,12,0C18.6,0,24,5.4,24,12z M15.9,17.5v-2.1h-4.7v-9H8.5v11.1L15.9,17.5 L15.9,17.5z"></path>
                      </svg></div>
                  </div>
                </div>
              </div>
            </a><a data-id="9594757" class="sc-c2090177-0 dLUwVT" href="/lorient-paris-saint-germain/UHsgI">
              <div>
                <div class="sc-cd4cfbdc-0 sc-7d450bff-0 hDkGff gYMraj js-list-cell-target js-list-cell-target-9594757">
                  <div title="FT" class="sc-492bf320-0 sc-7d450bff-2 crIwBV jeUcCr">
                    <div class="sc-18688171-0 fXAhuT">04/04/22</div>
                    <div data-change-key="status" class="sc-18688171-0 sc-7d450bff-3 fXAhuT buhekp">FT</div>
                  </div>
                  <div class="sc-492bf320-1 kYeOMc"></div>
                  <div title="Paris Saint-Germain Lorient live score" class="sc-492bf320-0 hoXqpI">
                    <div class="sc-18688171-0 sc-7d450bff-4 fXAhuT djGAMk">Paris Saint-Germain </div>
                    <div class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">Lorient </div>
                  </div>
                  <div class="sc-492bf320-0 crIwBV u-minWidth20">
                    <div class="sc-cd4cfbdc-0 gHBCID"><svg viewBox="0 0 24 24" width="10" height="10" class="sc-abe75a67-0 sc-abe75a67-1 jjYmHi kTHity">
                        <path d="M12.9,18.9H18V5.1h-5.1V18.9z M6,18.9h5.1V12H6V18.9z M24,12c0,6.6-5.4,12-12,12S0,18.6,0,12 C0,5.4,5.4,0,12,0S24,5.4,24,12z M22.7,12c0-5.9-4.8-10.7-10.7-10.7S1.3,6.1,1.3,12c0,5.9,4.8,10.7,10.7,10.7S22.7,17.9,22.7,12z"></path>
                      </svg><svg viewBox="0 0 24 24" width="10" height="10" class="sc-abe75a67-0 sc-abe75a67-1 jjYmHi kTHity">
                        <path d="M8.2,17.7V6.2l10,5.8L8.2,17.7z M12,24C5.4,24,0,18.6,0,12C0,5.4,5.4,0,12,0s12,5.4,12,12C24,18.6,18.6,24,12,24z M12,1.3 C6.1,1.3,1.3,6.1,1.3,12c0,5.9,4.8,10.7,10.7,10.7S22.7,17.9,22.7,12C22.7,6.1,17.9,1.3,12,1.3z"></path>
                      </svg></div>
                  </div>
                  <div class="sc-492bf320-0 sc-7d450bff-9 crIwBV frdFp">
                    <div data-change-key="homeScore.display" class="sc-18688171-0 sc-7d450bff-4 fXAhuT djGAMk">5</div>
                    <div data-change-key="awayScore.display" class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">1</div>
                  </div>
                  <div class="sc-492bf320-1 kYeOMc"></div>
                  <div class="sc-492bf320-0 crIwBV">
                    <div class="sc-18688171-0 fXAhuT"><svg viewBox="0 0 24 24" width="20" height="20" fill="#52b030" class="sc-abe75a67-4 eXPDKY">
                        <path d="M24,12c0,6.6-5.4,12-12,12C5.4,24,0,18.6,0,12S5.4,0,12,0C18.6,0,24,5.4,24,12z M15.7,16.9l2.1-9.8h-2.3 l-1.1,6.1L13,7.1h-2l-1.3,6.1L8.5,7.1H6.2l2.1,9.8h2.4l1.3-5.6l1.3,5.6H15.7L15.7,16.9z"></path>
                      </svg></div>
                  </div>
                </div>
              </div>
            </a><a data-id="9594870" class="sc-c2090177-0 dLUwVT" href="/clermont-foot-63-paris-saint-germain/UHsFI">
              <div>
                <div class="sc-cd4cfbdc-0 sc-7d450bff-0 hDkGff gYMraj js-list-cell-target js-list-cell-target-9594870">
                  <div title="FT" class="sc-492bf320-0 sc-7d450bff-2 crIwBV jeUcCr">
                    <div class="sc-18688171-0 fXAhuT">10/04/22</div>
                    <div data-change-key="status" class="sc-18688171-0 sc-7d450bff-3 fXAhuT buhekp">FT</div>
                  </div>
                  <div class="sc-492bf320-1 kYeOMc"></div>
                  <div title="Clermont Foot 63 Paris Saint-Germain live score" class="sc-492bf320-0 hoXqpI">
                    <div class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">Clermont Foot 63 </div>
                    <div class="sc-18688171-0 sc-7d450bff-4 fXAhuT djGAMk">Paris Saint-Germain </div>
                  </div>
                  <div class="sc-492bf320-0 crIwBV u-minWidth20">
                    <div class="sc-cd4cfbdc-0 gHBCID"><svg viewBox="0 0 24 24" width="10" height="10" class="sc-abe75a67-0 sc-abe75a67-1 jjYmHi kTHity">
                        <path d="M12.9,18.9H18V5.1h-5.1V18.9z M6,18.9h5.1V12H6V18.9z M24,12c0,6.6-5.4,12-12,12S0,18.6,0,12 C0,5.4,5.4,0,12,0S24,5.4,24,12z M22.7,12c0-5.9-4.8-10.7-10.7-10.7S1.3,6.1,1.3,12c0,5.9,4.8,10.7,10.7,10.7S22.7,17.9,22.7,12z"></path>
                      </svg><svg viewBox="0 0 24 24" width="10" height="10" class="sc-abe75a67-0 sc-abe75a67-1 jjYmHi kTHity">
                        <path d="M8.2,17.7V6.2l10,5.8L8.2,17.7z M12,24C5.4,24,0,18.6,0,12C0,5.4,5.4,0,12,0s12,5.4,12,12C24,18.6,18.6,24,12,24z M12,1.3 C6.1,1.3,1.3,6.1,1.3,12c0,5.9,4.8,10.7,10.7,10.7S22.7,17.9,22.7,12C22.7,6.1,17.9,1.3,12,1.3z"></path>
                      </svg></div>
                  </div>
                  <div class="sc-492bf320-0 sc-7d450bff-9 crIwBV frdFp">
                    <div data-change-key="homeScore.display" class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">1</div>
                    <div data-change-key="awayScore.display" class="sc-18688171-0 sc-7d450bff-4 fXAhuT djGAMk">6</div>
                  </div>
                  <div class="sc-492bf320-1 kYeOMc"></div>
                  <div class="sc-492bf320-0 crIwBV">
                    <div class="sc-18688171-0 fXAhuT"><svg viewBox="0 0 24 24" width="20" height="20" fill="#52b030" class="sc-abe75a67-4 eXPDKY">
                        <path d="M24,12c0,6.6-5.4,12-12,12C5.4,24,0,18.6,0,12S5.4,0,12,0C18.6,0,24,5.4,24,12z M15.7,16.9l2.1-9.8h-2.3 l-1.1,6.1L13,7.1h-2l-1.3,6.1L8.5,7.1H6.2l2.1,9.8h2.4l1.3-5.6l1.3,5.6H15.7L15.7,16.9z"></path>
                      </svg></div>
                  </div>
                </div>
              </div>
            </a><a data-id="9594862" class="sc-c2090177-0 dLUwVT" href="/paris-saint-germain-olympique-de-marseille/QHsUH">
              <div>
                <div class="sc-cd4cfbdc-0 sc-7d450bff-0 hDkGff gYMraj js-list-cell-target js-list-cell-target-9594862">
                  <div title="FT" class="sc-492bf320-0 sc-7d450bff-2 crIwBV jeUcCr">
                    <div class="sc-18688171-0 fXAhuT">18/04/22</div>
                    <div data-change-key="status" class="sc-18688171-0 sc-7d450bff-3 fXAhuT buhekp">FT</div>
                  </div>
                  <div class="sc-492bf320-1 kYeOMc"></div>
                  <div title="Paris Saint-Germain Olympique de Marseille live score" class="sc-492bf320-0 hoXqpI">
                    <div class="sc-18688171-0 sc-7d450bff-4 fXAhuT djGAMk">Paris Saint-Germain </div>
                    <div class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">Olympique de Marseille </div>
                  </div>
                  <div class="sc-492bf320-0 crIwBV u-minWidth20">
                    <div class="sc-cd4cfbdc-0 gHBCID"><svg viewBox="0 0 24 24" width="10" height="10" class="sc-abe75a67-0 sc-abe75a67-1 jjYmHi kTHity">
                        <path d="M12.9,18.9H18V5.1h-5.1V18.9z M6,18.9h5.1V12H6V18.9z M24,12c0,6.6-5.4,12-12,12S0,18.6,0,12 C0,5.4,5.4,0,12,0S24,5.4,24,12z M22.7,12c0-5.9-4.8-10.7-10.7-10.7S1.3,6.1,1.3,12c0,5.9,4.8,10.7,10.7,10.7S22.7,17.9,22.7,12z"></path>
                      </svg><svg viewBox="0 0 24 24" width="10" height="10" class="sc-abe75a67-0 sc-abe75a67-1 jjYmHi kTHity">
                        <path d="M8.2,17.7V6.2l10,5.8L8.2,17.7z M12,24C5.4,24,0,18.6,0,12C0,5.4,5.4,0,12,0s12,5.4,12,12C24,18.6,18.6,24,12,24z M12,1.3 C6.1,1.3,1.3,6.1,1.3,12c0,5.9,4.8,10.7,10.7,10.7S22.7,17.9,22.7,12C22.7,6.1,17.9,1.3,12,1.3z"></path>
                      </svg></div>
                  </div>
                  <div class="sc-492bf320-0 sc-7d450bff-9 crIwBV frdFp">
                    <div data-change-key="homeScore.display" class="sc-18688171-0 sc-7d450bff-4 fXAhuT djGAMk">2</div>
                    <div data-change-key="awayScore.display" class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">1</div>
                  </div>
                  <div class="sc-492bf320-1 kYeOMc"></div>
                  <div class="sc-492bf320-0 crIwBV">
                    <div class="sc-18688171-0 fXAhuT"><svg viewBox="0 0 24 24" width="20" height="20" fill="#52b030" class="sc-abe75a67-4 eXPDKY">
                        <path d="M24,12c0,6.6-5.4,12-12,12C5.4,24,0,18.6,0,12S5.4,0,12,0C18.6,0,24,5.4,24,12z M15.7,16.9l2.1-9.8h-2.3 l-1.1,6.1L13,7.1h-2l-1.3,6.1L8.5,7.1H6.2l2.1,9.8h2.4l1.3-5.6l1.3,5.6H15.7L15.7,16.9z"></path>
                      </svg></div>
                  </div>
                </div>
              </div>
            </a><a data-id="9594857" class="sc-c2090177-0 dLUwVT" href="/angers-paris-saint-germain/UHsJI">
              <div>
                <div class="sc-cd4cfbdc-0 sc-7d450bff-0 hDkGff gYMraj js-list-cell-target js-list-cell-target-9594857">
                  <div title="FT" class="sc-492bf320-0 sc-7d450bff-2 crIwBV jeUcCr">
                    <div class="sc-18688171-0 fXAhuT">21/04/22</div>
                    <div data-change-key="status" class="sc-18688171-0 sc-7d450bff-3 fXAhuT buhekp">FT</div>
                  </div>
                  <div class="sc-492bf320-1 kYeOMc"></div>
                  <div title="Angers Paris Saint-Germain live score" class="sc-492bf320-0 hoXqpI">
                    <div class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">Angers </div>
                    <div class="sc-18688171-0 sc-7d450bff-4 fXAhuT djGAMk">Paris Saint-Germain <span class="sc-7d450bff-12 iyXZha"><svg width="6" height="8" viewBox="0 0 6 8" fill="#c1272d">
                          <rect x="0" y="0" width="6" height="8" rx="1" ry="1"></rect>
                        </svg></span></div>
                  </div>
                  <div class="sc-492bf320-0 crIwBV u-minWidth20">
                    <div class="sc-cd4cfbdc-0 gHBCID"><svg viewBox="0 0 24 24" width="10" height="10" class="sc-abe75a67-0 sc-abe75a67-1 jjYmHi kTHity">
                        <path d="M12.9,18.9H18V5.1h-5.1V18.9z M6,18.9h5.1V12H6V18.9z M24,12c0,6.6-5.4,12-12,12S0,18.6,0,12 C0,5.4,5.4,0,12,0S24,5.4,24,12z M22.7,12c0-5.9-4.8-10.7-10.7-10.7S1.3,6.1,1.3,12c0,5.9,4.8,10.7,10.7,10.7S22.7,17.9,22.7,12z"></path>
                      </svg><svg viewBox="0 0 24 24" width="10" height="10" class="sc-abe75a67-0 sc-abe75a67-1 jjYmHi kTHity">
                        <path d="M8.2,17.7V6.2l10,5.8L8.2,17.7z M12,24C5.4,24,0,18.6,0,12C0,5.4,5.4,0,12,0s12,5.4,12,12C24,18.6,18.6,24,12,24z M12,1.3 C6.1,1.3,1.3,6.1,1.3,12c0,5.9,4.8,10.7,10.7,10.7S22.7,17.9,22.7,12C22.7,6.1,17.9,1.3,12,1.3z"></path>
                      </svg></div>
                  </div>
                  <div class="sc-492bf320-0 sc-7d450bff-9 crIwBV frdFp">
                    <div data-change-key="homeScore.display" class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">0</div>
                    <div data-change-key="awayScore.display" class="sc-18688171-0 sc-7d450bff-4 fXAhuT djGAMk">3</div>
                  </div>
                  <div class="sc-492bf320-1 kYeOMc"></div>
                  <div class="sc-492bf320-0 crIwBV">
                    <div class="sc-18688171-0 fXAhuT"><svg viewBox="0 0 24 24" width="20" height="20" fill="#52b030" class="sc-abe75a67-4 eXPDKY">
                        <path d="M24,12c0,6.6-5.4,12-12,12C5.4,24,0,18.6,0,12S5.4,0,12,0C18.6,0,24,5.4,24,12z M15.7,16.9l2.1-9.8h-2.3 l-1.1,6.1L13,7.1h-2l-1.3,6.1L8.5,7.1H6.2l2.1,9.8h2.4l1.3-5.6l1.3,5.6H15.7L15.7,16.9z"></path>
                      </svg></div>
                  </div>
                </div>
              </div>
            </a><a data-id="9594866" class="sc-c2090177-0 dLUwVT" href="/rc-lens-paris-saint-germain/UHsYH">
              <div>
                <div class="sc-cd4cfbdc-0 sc-7d450bff-0 hDkGff gYMraj js-list-cell-target js-list-cell-target-9594866">
                  <div title="FT" class="sc-492bf320-0 sc-7d450bff-2 crIwBV jeUcCr">
                    <div class="sc-18688171-0 fXAhuT">24/04/22</div>
                    <div data-change-key="status" class="sc-18688171-0 sc-7d450bff-3 fXAhuT buhekp">FT</div>
                  </div>
                  <div class="sc-492bf320-1 kYeOMc"></div>
                  <div title="Paris Saint-Germain RC Lens live score" class="sc-492bf320-0 hoXqpI">
                    <div class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">Paris Saint-Germain </div>
                    <div class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">RC Lens <span class="sc-7d450bff-12 iyXZha"><svg width="6" height="8" viewBox="0 0 6 8" fill="#c1272d">
                          <rect x="0" y="0" width="6" height="8" rx="1" ry="1"></rect>
                        </svg></span></div>
                  </div>
                  <div class="sc-492bf320-0 crIwBV u-minWidth20">
                    <div class="sc-cd4cfbdc-0 gHBCID"><svg viewBox="0 0 24 24" width="10" height="10" class="sc-abe75a67-0 sc-abe75a67-1 jjYmHi kTHity">
                        <path d="M12.9,18.9H18V5.1h-5.1V18.9z M6,18.9h5.1V12H6V18.9z M24,12c0,6.6-5.4,12-12,12S0,18.6,0,12 C0,5.4,5.4,0,12,0S24,5.4,24,12z M22.7,12c0-5.9-4.8-10.7-10.7-10.7S1.3,6.1,1.3,12c0,5.9,4.8,10.7,10.7,10.7S22.7,17.9,22.7,12z"></path>
                      </svg><svg viewBox="0 0 24 24" width="10" height="10" class="sc-abe75a67-0 sc-abe75a67-1 jjYmHi kTHity">
                        <path d="M8.2,17.7V6.2l10,5.8L8.2,17.7z M12,24C5.4,24,0,18.6,0,12C0,5.4,5.4,0,12,0s12,5.4,12,12C24,18.6,18.6,24,12,24z M12,1.3 C6.1,1.3,1.3,6.1,1.3,12c0,5.9,4.8,10.7,10.7,10.7S22.7,17.9,22.7,12C22.7,6.1,17.9,1.3,12,1.3z"></path>
                      </svg></div>
                  </div>
                  <div class="sc-492bf320-0 sc-7d450bff-9 crIwBV frdFp">
                    <div data-change-key="homeScore.display" class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">1</div>
                    <div data-change-key="awayScore.display" class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">1</div>
                  </div>
                  <div class="sc-492bf320-1 kYeOMc"></div>
                  <div class="sc-492bf320-0 crIwBV">
                    <div class="sc-18688171-0 fXAhuT"><svg viewBox="0 0 24 24" width="20" height="20" fill="#a4aab0" class="sc-abe75a67-4 eXPDKY">
                        <path d="M11.8,8.5c0.8,0,1.4,0.3,1.8,0.8c0.4,0.5,0.6,1.4,0.6,2.4v0.5c0,1.1-0.2,1.9-0.6,2.4c-0.4,0.5-1,0.8-1.8,0.8h-0.9v-7 L11.8,8.5L11.8,8.5z M24,12c0,6.6-5.4,12-12,12C5.4,24,0,18.6,0,12C0,5.4,5.4,0,12,0C18.6,0,24,5.4,24,12z M16.9,12.2v-0.5 c0-0.8-0.1-1.5-0.4-2.2c-0.3-0.7-0.6-1.2-1.1-1.7c-0.5-0.5-1-0.8-1.6-1.1c-0.6-0.3-1.3-0.4-2.1-0.4H8.2v11.1h3.6 c0.7,0,1.4-0.1,2-0.4c0.6-0.3,1.2-0.6,1.6-1.1c0.5-0.5,0.8-1,1.1-1.7C16.8,13.7,16.9,13,16.9,12.2L16.9,12.2z"></path>
                      </svg></div>
                  </div>
                </div>
              </div>
            </a><a data-id="9594907" class="sc-c2090177-0 dLUwVT" href="/rc-strasbourg-paris-saint-germain/UHsjI">
              <div>
                <div class="sc-cd4cfbdc-0 sc-7d450bff-0 hDkGff gYMraj js-list-cell-target js-list-cell-target-9594907">
                  <div title="FT" class="sc-492bf320-0 sc-7d450bff-2 crIwBV jeUcCr">
                    <div class="sc-18688171-0 fXAhuT">30/04/22</div>
                    <div data-change-key="status" class="sc-18688171-0 sc-7d450bff-3 fXAhuT buhekp">FT</div>
                  </div>
                  <div class="sc-492bf320-1 kYeOMc"></div>
                  <div title="RC Strasbourg Paris Saint-Germain live score" class="sc-492bf320-0 hoXqpI">
                    <div class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">RC Strasbourg </div>
                    <div class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">Paris Saint-Germain </div>
                  </div>
                  <div class="sc-492bf320-0 crIwBV u-minWidth20">
                    <div class="sc-cd4cfbdc-0 gHBCID"><svg viewBox="0 0 24 24" width="10" height="10" class="sc-abe75a67-0 sc-abe75a67-1 jjYmHi kTHity">
                        <path d="M12.9,18.9H18V5.1h-5.1V18.9z M6,18.9h5.1V12H6V18.9z M24,12c0,6.6-5.4,12-12,12S0,18.6,0,12 C0,5.4,5.4,0,12,0S24,5.4,24,12z M22.7,12c0-5.9-4.8-10.7-10.7-10.7S1.3,6.1,1.3,12c0,5.9,4.8,10.7,10.7,10.7S22.7,17.9,22.7,12z"></path>
                      </svg><svg viewBox="0 0 24 24" width="10" height="10" class="sc-abe75a67-0 sc-abe75a67-1 jjYmHi kTHity">
                        <path d="M8.2,17.7V6.2l10,5.8L8.2,17.7z M12,24C5.4,24,0,18.6,0,12C0,5.4,5.4,0,12,0s12,5.4,12,12C24,18.6,18.6,24,12,24z M12,1.3 C6.1,1.3,1.3,6.1,1.3,12c0,5.9,4.8,10.7,10.7,10.7S22.7,17.9,22.7,12C22.7,6.1,17.9,1.3,12,1.3z"></path>
                      </svg></div>
                  </div>
                  <div class="sc-492bf320-0 sc-7d450bff-9 crIwBV frdFp">
                    <div data-change-key="homeScore.display" class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">3</div>
                    <div data-change-key="awayScore.display" class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">3</div>
                  </div>
                  <div class="sc-492bf320-1 kYeOMc"></div>
                  <div class="sc-492bf320-0 crIwBV">
                    <div class="sc-18688171-0 fXAhuT"><svg viewBox="0 0 24 24" width="20" height="20" fill="#a4aab0" class="sc-abe75a67-4 eXPDKY">
                        <path d="M11.8,8.5c0.8,0,1.4,0.3,1.8,0.8c0.4,0.5,0.6,1.4,0.6,2.4v0.5c0,1.1-0.2,1.9-0.6,2.4c-0.4,0.5-1,0.8-1.8,0.8h-0.9v-7 L11.8,8.5L11.8,8.5z M24,12c0,6.6-5.4,12-12,12C5.4,24,0,18.6,0,12C0,5.4,5.4,0,12,0C18.6,0,24,5.4,24,12z M16.9,12.2v-0.5 c0-0.8-0.1-1.5-0.4-2.2c-0.3-0.7-0.6-1.2-1.1-1.7c-0.5-0.5-1-0.8-1.6-1.1c-0.6-0.3-1.3-0.4-2.1-0.4H8.2v11.1h3.6 c0.7,0,1.4-0.1,2-0.4c0.6-0.3,1.2-0.6,1.6-1.1c0.5-0.5,0.8-1,1.1-1.7C16.8,13.7,16.9,13,16.9,12.2L16.9,12.2z"></path>
                      </svg></div>
                  </div>
                </div>
              </div>
            </a><a data-id="9594913" class="sc-c2090177-0 dLUwVT" href="/troyes-paris-saint-germain/UHscI">
              <div>
                <div class="sc-cd4cfbdc-0 sc-7d450bff-0 hDkGff gYMraj js-list-cell-target js-list-cell-target-9594913">
                  <div title="FT" class="sc-492bf320-0 sc-7d450bff-2 crIwBV jeUcCr">
                    <div class="sc-18688171-0 fXAhuT">09/05/22</div>
                    <div data-change-key="status" class="sc-18688171-0 sc-7d450bff-3 fXAhuT buhekp">FT</div>
                  </div>
                  <div class="sc-492bf320-1 kYeOMc"></div>
                  <div title="Paris Saint-Germain Troyes live score" class="sc-492bf320-0 hoXqpI">
                    <div class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">Paris Saint-Germain </div>
                    <div class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">Troyes </div>
                  </div>
                  <div class="sc-492bf320-0 crIwBV u-minWidth20">
                    <div class="sc-cd4cfbdc-0 gHBCID"><svg viewBox="0 0 24 24" width="10" height="10" class="sc-abe75a67-0 sc-abe75a67-1 jjYmHi kTHity">
                        <path d="M12.9,18.9H18V5.1h-5.1V18.9z M6,18.9h5.1V12H6V18.9z M24,12c0,6.6-5.4,12-12,12S0,18.6,0,12 C0,5.4,5.4,0,12,0S24,5.4,24,12z M22.7,12c0-5.9-4.8-10.7-10.7-10.7S1.3,6.1,1.3,12c0,5.9,4.8,10.7,10.7,10.7S22.7,17.9,22.7,12z"></path>
                      </svg><svg viewBox="0 0 24 24" width="10" height="10" class="sc-abe75a67-0 sc-abe75a67-1 jjYmHi kTHity">
                        <path d="M8.2,17.7V6.2l10,5.8L8.2,17.7z M12,24C5.4,24,0,18.6,0,12C0,5.4,5.4,0,12,0s12,5.4,12,12C24,18.6,18.6,24,12,24z M12,1.3 C6.1,1.3,1.3,6.1,1.3,12c0,5.9,4.8,10.7,10.7,10.7S22.7,17.9,22.7,12C22.7,6.1,17.9,1.3,12,1.3z"></path>
                      </svg></div>
                  </div>
                  <div class="sc-492bf320-0 sc-7d450bff-9 crIwBV frdFp">
                    <div data-change-key="homeScore.display" class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">2</div>
                    <div data-change-key="awayScore.display" class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">2</div>
                  </div>
                  <div class="sc-492bf320-1 kYeOMc"></div>
                  <div class="sc-492bf320-0 crIwBV">
                    <div class="sc-18688171-0 fXAhuT"><svg viewBox="0 0 24 24" width="20" height="20" fill="#a4aab0" class="sc-abe75a67-4 eXPDKY">
                        <path d="M11.8,8.5c0.8,0,1.4,0.3,1.8,0.8c0.4,0.5,0.6,1.4,0.6,2.4v0.5c0,1.1-0.2,1.9-0.6,2.4c-0.4,0.5-1,0.8-1.8,0.8h-0.9v-7 L11.8,8.5L11.8,8.5z M24,12c0,6.6-5.4,12-12,12C5.4,24,0,18.6,0,12C0,5.4,5.4,0,12,0C18.6,0,24,5.4,24,12z M16.9,12.2v-0.5 c0-0.8-0.1-1.5-0.4-2.2c-0.3-0.7-0.6-1.2-1.1-1.7c-0.5-0.5-1-0.8-1.6-1.1c-0.6-0.3-1.3-0.4-2.1-0.4H8.2v11.1h3.6 c0.7,0,1.4-0.1,2-0.4c0.6-0.3,1.2-0.6,1.6-1.1c0.5-0.5,0.8-1,1.1-1.7C16.8,13.7,16.9,13,16.9,12.2L16.9,12.2z"></path>
                      </svg></div>
                  </div>
                </div>
              </div>
            </a><a data-id="9594880" class="sc-c2090177-0 dLUwVT" href="/paris-saint-germain-montpellier/RHUH">
              <div>
                <div class="sc-cd4cfbdc-0 sc-7d450bff-0 hDkGff gYMraj js-list-cell-target js-list-cell-target-9594880">
                  <div title="FT" class="sc-492bf320-0 sc-7d450bff-2 crIwBV jeUcCr">
                    <div class="sc-18688171-0 fXAhuT">15/05/22</div>
                    <div data-change-key="status" class="sc-18688171-0 sc-7d450bff-3 fXAhuT buhekp">FT</div>
                  </div>
                  <div class="sc-492bf320-1 kYeOMc"></div>
                  <div title="Montpellier Paris Saint-Germain live score" class="sc-492bf320-0 hoXqpI">
                    <div class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">Montpellier </div>
                    <div class="sc-18688171-0 sc-7d450bff-4 fXAhuT djGAMk">Paris Saint-Germain </div>
                  </div>
                  <div class="sc-492bf320-0 crIwBV u-minWidth20">
                    <div class="sc-cd4cfbdc-0 gHBCID"><svg viewBox="0 0 24 24" width="10" height="10" class="sc-abe75a67-0 sc-abe75a67-1 jjYmHi kTHity">
                        <path d="M12.9,18.9H18V5.1h-5.1V18.9z M6,18.9h5.1V12H6V18.9z M24,12c0,6.6-5.4,12-12,12S0,18.6,0,12 C0,5.4,5.4,0,12,0S24,5.4,24,12z M22.7,12c0-5.9-4.8-10.7-10.7-10.7S1.3,6.1,1.3,12c0,5.9,4.8,10.7,10.7,10.7S22.7,17.9,22.7,12z"></path>
                      </svg><svg viewBox="0 0 24 24" width="10" height="10" class="sc-abe75a67-0 sc-abe75a67-1 jjYmHi kTHity">
                        <path d="M8.2,17.7V6.2l10,5.8L8.2,17.7z M12,24C5.4,24,0,18.6,0,12C0,5.4,5.4,0,12,0s12,5.4,12,12C24,18.6,18.6,24,12,24z M12,1.3 C6.1,1.3,1.3,6.1,1.3,12c0,5.9,4.8,10.7,10.7,10.7S22.7,17.9,22.7,12C22.7,6.1,17.9,1.3,12,1.3z"></path>
                      </svg></div>
                  </div>
                  <div class="sc-492bf320-0 sc-7d450bff-9 crIwBV frdFp">
                    <div data-change-key="homeScore.display" class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">0</div>
                    <div data-change-key="awayScore.display" class="sc-18688171-0 sc-7d450bff-4 fXAhuT djGAMk">4</div>
                  </div>
                  <div class="sc-492bf320-1 kYeOMc"></div>
                  <div class="sc-492bf320-0 crIwBV">
                    <div class="sc-18688171-0 fXAhuT"><svg viewBox="0 0 24 24" width="20" height="20" fill="#52b030" class="sc-abe75a67-4 eXPDKY">
                        <path d="M24,12c0,6.6-5.4,12-12,12C5.4,24,0,18.6,0,12S5.4,0,12,0C18.6,0,24,5.4,24,12z M15.7,16.9l2.1-9.8h-2.3 l-1.1,6.1L13,7.1h-2l-1.3,6.1L8.5,7.1H6.2l2.1,9.8h2.4l1.3-5.6l1.3,5.6H15.7L15.7,16.9z"></path>
                      </svg></div>
                  </div>
                </div>
              </div>
            </a><a data-id="9594884" class="sc-c2090177-0 dLUwVT" href="/metz-paris-saint-germain/UHsbI">
              <div>
                <div class="sc-cd4cfbdc-0 sc-7d450bff-0 hDkGff gYMraj js-list-cell-target js-list-cell-target-9594884">
                  <div title="FT" class="sc-492bf320-0 sc-7d450bff-2 crIwBV jeUcCr">
                    <div class="sc-18688171-0 fXAhuT">22/05/22</div>
                    <div data-change-key="status" class="sc-18688171-0 sc-7d450bff-3 fXAhuT buhekp">FT</div>
                  </div>
                  <div class="sc-492bf320-1 kYeOMc"></div>
                  <div title="Paris Saint-Germain Metz live score" class="sc-492bf320-0 hoXqpI">
                    <div class="sc-18688171-0 sc-7d450bff-4 fXAhuT djGAMk">Paris Saint-Germain </div>
                    <div class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">Metz <span class="sc-7d450bff-12 iyXZha"><svg width="6" height="8" viewBox="0 0 6 8" fill="#c1272d">
                          <rect x="0" y="0" width="6" height="8" rx="1" ry="1"></rect>
                        </svg></span></div>
                  </div>
                  <div class="sc-492bf320-0 crIwBV u-minWidth20">
                    <div class="sc-cd4cfbdc-0 gHBCID"><svg viewBox="0 0 24 24" width="10" height="10" class="sc-abe75a67-0 sc-abe75a67-1 jjYmHi kTHity">
                        <path d="M12.9,18.9H18V5.1h-5.1V18.9z M6,18.9h5.1V12H6V18.9z M24,12c0,6.6-5.4,12-12,12S0,18.6,0,12 C0,5.4,5.4,0,12,0S24,5.4,24,12z M22.7,12c0-5.9-4.8-10.7-10.7-10.7S1.3,6.1,1.3,12c0,5.9,4.8,10.7,10.7,10.7S22.7,17.9,22.7,12z"></path>
                      </svg><svg viewBox="0 0 24 24" width="10" height="10" class="sc-abe75a67-0 sc-abe75a67-1 jjYmHi kTHity">
                        <path d="M8.2,17.7V6.2l10,5.8L8.2,17.7z M12,24C5.4,24,0,18.6,0,12C0,5.4,5.4,0,12,0s12,5.4,12,12C24,18.6,18.6,24,12,24z M12,1.3 C6.1,1.3,1.3,6.1,1.3,12c0,5.9,4.8,10.7,10.7,10.7S22.7,17.9,22.7,12C22.7,6.1,17.9,1.3,12,1.3z"></path>
                      </svg></div>
                  </div>
                  <div class="sc-492bf320-0 sc-7d450bff-9 crIwBV frdFp">
                    <div data-change-key="homeScore.display" class="sc-18688171-0 sc-7d450bff-4 fXAhuT djGAMk">5</div>
                    <div data-change-key="awayScore.display" class="sc-18688171-0 sc-7d450bff-4 fXAhuT fBSHnS">0</div>
                  </div>
                  <div class="sc-492bf320-1 kYeOMc"></div>
                  <div class="sc-492bf320-0 crIwBV">
                    <div class="sc-18688171-0 fXAhuT"><svg viewBox="0 0 24 24" width="20" height="20" fill="#52b030" class="sc-abe75a67-4 eXPDKY">
                        <path d="M24,12c0,6.6-5.4,12-12,12C5.4,24,0,18.6,0,12S5.4,0,12,0C18.6,0,24,5.4,24,12z M15.7,16.9l2.1-9.8h-2.3 l-1.1,6.1L13,7.1h-2l-1.3,6.1L8.5,7.1H6.2l2.1,9.8h2.4l1.3-5.6l1.3,5.6H15.7L15.7,16.9z"></path>
                      </svg></div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="sc-e5255230-0 hLaBJx widget-wrapper" style="height: 648px;"></div>
    </div>
  </div>
</div>