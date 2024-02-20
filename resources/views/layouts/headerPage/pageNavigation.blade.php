{{-- <x-app-layout> --}}
    <nav class="nav">
        <!--=================nav header top  start===================-->
          <div class="nav__header">
            <div class="nav__header-sociaux">
                <a href="" class="nav__header-sociaux-link"><i class="ri-facebook-line"></i></a>
                <a href="" class="nav__header-sociaux-link"><i class="ri-instagram-line"></i></a>
                <a href="" class="nav__header-sociaux-link"><i class="ri-linkedin-line"></i></a>
            </div>
            <div class="header__ex-tem">
            <div class="nav__header-exchange_rate">
                <div class="exchange-rate__container">
                    <label class="exchange-rate__icon" for="fromC"> <img src="{{url('assets/images/profit.png')}}" alt="currency" /></i> </label>
                    <select name="fromCurrency" id="exchange-rate-from" class="exchange-rate__to"></select>
                    <span class="exchange-rate__is">Is</span>
                    <span class="tocurrency" id="exchange-rate__">0.0</span>
                    <span class="exchange-rate__fc">FC</span>
                </div>
            </div>
            <div class="header__nav-temperature">
                <div class="weather__panel-1">
                <span class="header-nav__weather-city">Kinshasa</span>
                <img src="" alt="" class="header-nav_weather header-nav__weather-image">
                <span class="header-nav__weather-temperature" id="weather__temperature">temp</span>
                </div>
                <ul class="weather__panel-2">
                    <li class="weather__kinshasa weather__li">
                        <span class="weather-1" id="weather-1" >kinshasa</span>
                        <div class="weather-dynamic__1 buggy">
                       <div class="weather-panel__title">
                        <i class="ri-heart-line weather-panel__title-heart"></i>
                         <p>Kinshasa</p>
                       </div>
                       <div class="weather-panel__desc">
                         <p class="weather-panel__desc-title">
                            Partialy Foggy
                         </p>
                         <div class="weather-panel__desc-main">
                              <div class="weather-panel__desc-main-1">
                                 <p class="weather__humidity">18p</p>
                              </div>
                              <div class="weather-panel__desc-main-2">
                                <p class="weather__wind">189 km/s</p>
                              </div>
                         </div>
                       </div>
                       <div class="weather-panel__bottom">
                           <div class="weather__img">
                              <img src="{{url('assets/images/cloud.png')}}" alt="weather image" class="weather__img-image">
                           </div>
                           <div class="weather__temp">
                            <p class="temperature">
                                17 C
                            </p>
                           </div>
                       </div>
                    </div>
                    </li>
                    <li class="weather__lubumbashi weather__li">
                        <span class="weather-1" id="weather-2">lubumbashi</span>

                        <div class="weather-dynamic__1">
                        <div class="weather-panel__title">
                            <i class="ri-heart-line weather-panel__title-heart"></i>
                             <p>lubumbashi</p>
                           </div>
                           <div class="weather-panel__desc">
                             <p class="weather-panel__desc-title">
                                Partialy Foggy
                             </p>
                             <div class="weather-panel__desc-main">
                                  <div class="weather-panel__desc-main-1">
                                     <p class="weather__humidity">18p</p>
                                  </div>
                                  <div class="weather-panel__desc-main-2">
                                    <p class="weather__wind">189 km/s</p>
                                  </div>
                             </div>
                           </div>
                           <div class="weather-panel__bottom">
                               <div class="weather__img">
                                  <img src="{{url('assets/images/cloud.png')}}" alt="weather image" class="weather__img-image">
                               </div>
                               <div class="weather__temp">
                                <p class="temperature">
                                    17 C
                                </p>
                               </div>
                           </div>
                        </div>
                    </li>
                    <li class="weather__kongo-central weather__li">
                        <span class="weather-1" id="weather-3">kongo Ctl</span>
                        <div class="weather-dynamic__1">
                        <div class="weather-panel__title">
                            <i class="ri-heart-line weather-panel__title-heart"></i>
                             <p>Kongo Centr</p>
                           </div>
                           <div class="weather-panel__desc">
                             <p class="weather-panel__desc-title">
                                Partialy Foggy
                             </p>
                             <div class="weather-panel__desc-main">
                                  <div class="weather-panel__desc-main-1">
                                     <p class="weather__humidity">18p</p>
                                  </div>
                                  <div class="weather-panel__desc-main-2">
                                    <p class="weather__wind">189 km/s</p>
                                  </div>
                             </div>
                           </div>
                           <div class="weather-panel__bottom">
                               <div class="weather__img">
                                  <img src="{{url('assets/images/cloud.png')}}" alt="weather image" class="weather__img-image">
                               </div>
                               <div class="weather__temp">
                                <p class="temperature">
                                    17 C
                                </p>
                               </div>
                           </div>
                        </div>
                    </li>
                </ul>
            </div>
         <!--ici-->
        </div>
          </div>
          <!--===================nav body end=======================-->

         
       </nav>
       <div class="nav__main-container">
        <div class="nav__container">
            <div class="nav__logo">
              
              <a  href="{{url('/')}}" class="nav__logo-link">
                  <!--company logo-->  
                  <img src="{{url('assets/images/logo-paysage.png')}}" alt="ont" class="logo__image">
              </a>
            </div>
  
            <div class="menu-reveal">
              <i class="ri-menu-fill"></i>
            </div>
  
            <div class="nav__main">
              <ul class="nav-menu__container">
                  <li class="menu__link menu-principal__1">
                      <div class="menu-link__container">
                          <span >Destinations</span>
                      </div>                    
                      <div class="dropdown-menu">
                          <div class="dropdown-menu-deco"></div>
                        <ul class="dropdown-menu__links">
                          <li class="dropdown-menu__link">
                              <span class="dropdown-menu-link__title">
                                <span class="dropdown-menu-link__titl">
                               Par Provinces<!-- Menu secondaire 1.1 -->
                               </span>
                              </span>
                              <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                              <div class="submenu-dopdown .par-province">
                                <!-- ici le code que tu as enlévé -->
                              @foreach ($provinceLien as $item)

                              
                                  
                              <div class="submenu-dropdown__group">
                                <div class="submenu-dropdown__group-title">
                                    <div>
                                        <span class="group-icon"></span>
                                    </div>
                                        <span class="group-title"></span>
                                       
                                    <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                </div>
                                <div class="group-container">
                                   <ul class="group-links">
                                    <li class="group-list">
                                        <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
                                        <div class="destination-province_content">
                                         
                                          <div class="province-map kongo-central">
                                              @include('layouts.mapfile.mapDestinationProvince')
                                          </div>
                                          <div class="province-desc">
                                            <a href="{{route('province.article',['province'=>$item->province_name,'id'=>$item->province_article_id,'name'=>$item->province_article_name])}}" class="province-link">{{$item->province_name}}</a>
                                            <div class="province-district">
                                              <a href="" class="province-district_link">{{$item->province_article_path}}</a>
                                              <a href="" class="province-district_link">Matadi</a>
                                              <a href="" class="province-district_link">Cataracte</a>
                                            </div>
                                          </div>
                                        </div>
                                    </li>
                                    <!-- <li class="group-list">
                                        <a href="" class="group-link">lien 1.1.1.2</a>
                                    </li>
                                     -->
                                   </ul>
                                </div>
                            </div>

                          
                              @endforeach
                              </div>
                             
                          </li>
  
                          <li class="dropdown-menu__link">
                              <span class="dropdown-menu-link__title">
                                <span class="dropdown-menu-link__titl">
                                Par Villes <!-- Menu secondaire 1.2 -->
                                </span>
                              </span>
                              <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                              <div class="submenu-dopdown .par-ville">
                                <div class="submenu-dropdown__group">
                                  <div class="submenu-dropdown__group-title">
                                      <div>
                                          <span class="group-icon"></span>
                                      </div>
                                          <span class="group-title"></span>
                                         
                                      <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                  </div>
                                  <div class="group-container">
                                     <ul class="group-links">
                                      <li class="group-list">
                                          <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
                                          <div class="destination-province_content">
                                           
                                            <div class="province-map kongo-central">
                                                @include('layouts.mapfile.mapDestinationProvince')
                                            </div>
                                            <div class="province-desc">
                                              <a href="#" class="province-link">Kongo Central</a>
                                              <div class="province-district">
                                                <a href="" class="province-district_link">Boma</a>
                                                <a href="" class="province-district_link">Matadi</a>
                                                <a href="" class="province-district_link">Cataracte</a>
                                              </div>
                                            </div>
                                          </div>
                                      </li>
                                      <!-- <li class="group-list">
                                          <a href="" class="group-link">lien 1.1.1.2</a>
                                      </li>
                                       -->
                                     </ul>
                                  </div>
                              </div>

                            <div class="submenu-dropdown__group">
                                <div class="submenu-dropdown__group-title">
                                    <div>
                                        <span class="group-icon"></span>
                                    </div>
                                        <span class="group-title"></span>
                                       
                                    <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                </div>
                                <div class="group-container">
                                   <ul class="group-links">
                                    <li class="group-list">
                                        <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
                                        <div class="destination-province_content">
                                          <div class="province-map kinshasa">
                                            @include('layouts.mapfile.mapDestinationProvince')
                                          </div>
                                          <div class="province-desc">
                                            <a href="#" class="province-link">Kinshasa</a>
                                            <div class="province-district">
                                              <a href="" class="province-district_link">Boma</a>
                                              <a href="" class="province-district_link">Matadi</a>
                                              <a href="" class="province-district_link">Cataracte</a>
                                            </div>
                                          </div>
                                        </div>
                                    </li>
                                    <!-- <li class="group-list">
                                        <a href="" class="group-link">lien 1.1.1.2</a>
                                    </li>
                                     -->
                                   </ul>
                                </div>
                            </div>

                            <div class="submenu-dropdown__group">
                              <div class="submenu-dropdown__group-title">
                                  <div>
                                      <span class="group-icon"></span>
                                  </div>
                                      <span class="group-title"></span>
                                     
                                  <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                              </div>
                              <div class="group-container">
                                 <ul class="group-links">
                                  <li class="group-list">
                                      <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
                                      <div class="destination-province_content">
                                        <div class="province-map bas-uele">
                                          @include('layouts.mapfile.mapDestinationProvince')
                                        </div>
                                        <div class="province-desc">
                                          <a href="#" class="province-link">Bas-Uélé</a>
                                          <div class="province-district">
                                            <a href="" class="province-district_link">Boma</a>
                                            <a href="" class="province-district_link">Matadi</a>
                                            <a href="" class="province-district_link">Cataracte</a>
                                          </div>
                                        </div>
                                      </div>
                                  </li>
                                  <!-- <li class="group-list">
                                      <a href="" class="group-link">lien 1.1.1.2</a>
                                  </li>
                                   -->
                                 </ul>
                              </div>
                          </div>

                          <div class="submenu-dropdown__group">
                            <div class="submenu-dropdown__group-title">
                                <div>
                                    <span class="group-icon"></span>
                                </div>
                                    <span class="group-title"></span>
                                   
                                <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                            </div>
                            <div class="group-container">
                               <ul class="group-links">
                                <li class="group-list">
                                    <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
                                    <div class="destination-province_content">
                                      <div class="province-map equateur">
                                        @include('layouts.mapfile.mapDestinationProvince')
                                      </div>
                                      <div class="province-desc">
                                        <a href="#" class="province-link">Equateur</a>
                                        <div class="province-district">
                                          <a href="" class="province-district_link">Boma</a>
                                          <a href="" class="province-district_link">Matadi</a>
                                          <a href="" class="province-district_link">Cataracte</a>
                                        </div>
                                      </div>
                                    </div>
                                </li>
                                <!-- <li class="group-list">
                                    <a href="" class="group-link">lien 1.1.1.2</a>
                                </li>
                                 -->
                               </ul>
                            </div>
                        </div>

                        <div class="submenu-dropdown__group">
                          <div class="submenu-dropdown__group-title">
                              <div>
                                  <span class="group-icon"></span>
                              </div>
                                  <span class="group-title"></span>
                                 
                              <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                          </div>
                          <div class="group-container">
                             <ul class="group-links">
                              <li class="group-list">
                                  <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
                                  <div class="destination-province_content">
                                    <div class="province-map haut-katanga">
                                      @include('layouts.mapfile.mapDestinationProvince')
                                    </div>
                                    <div class="province-desc">
                                      <a href="#" class="province-link">Kinshasa</a>
                                      <div class="province-district">
                                        <a href="" class="province-district_link">Boma</a>
                                        <a href="" class="province-district_link">Matadi</a>
                                        <a href="" class="province-district_link">Cataracte</a>
                                      </div>
                                    </div>
                                  </div>
                              </li>
                              <!-- <li class="group-list">
                                  <a href="" class="group-link">lien 1.1.1.2</a>
                              </li>
                               -->
                             </ul>
                          </div>
                      </div>

                      <div class="submenu-dropdown__group">
                        <div class="submenu-dropdown__group-title">
                            <div>
                                <span class="group-icon"></span>
                            </div>
                                <span class="group-title"></span>
                               
                            <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                        </div>
                        <div class="group-container">
                           <ul class="group-links">
                            <li class="group-list">
                                <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
                                <div class="destination-province_content">
                                  <div class="province-map haut-lomamie">
                                    @include('layouts.mapfile.mapDestinationProvince')
                                  </div>
                                  <div class="province-desc">
                                    <a href="#" class="province-link">Haut Lomamie</a>
                                    <div class="province-district">
                                      <a href="" class="province-district_link">Boma</a>
                                      <a href="" class="province-district_link">Matadi</a>
                                      <a href="" class="province-district_link">Cataracte</a>
                                    </div>
                                  </div>
                                </div>
                            </li>
                            <!-- <li class="group-list">
                                <a href="" class="group-link">lien 1.1.1.2</a>
                            </li>
                             -->
                           </ul>
                        </div>
                    </div>

                    <div class="submenu-dropdown__group">
                      <div class="submenu-dropdown__group-title">
                          <div>
                              <span class="group-icon"></span>
                          </div>
                              <span class="group-title"></span>
                             
                          <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                      </div>
                      <div class="group-container">
                         <ul class="group-links">
                          <li class="group-list">
                              <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
                              <div class="destination-province_content">
                                <div class="province-map haut-uele">
                                  @include('layouts.mapfile.mapDestinationProvince')
                                </div>
                                <div class="province-desc">
                                  <a href="#" class="province-link">Haut Uele</a>
                                  <div class="province-district">
                                    <a href="" class="province-district_link">Boma</a>
                                    <a href="" class="province-district_link">Matadi</a>
                                    <a href="" class="province-district_link">Cataracte</a>
                                  </div>
                                </div>
                              </div>
                          </li>
                          <!-- <li class="group-list">
                              <a href="" class="group-link">lien 1.1.1.2</a>
                          </li>
                           -->
                         </ul>
                      </div>
                  </div>

                  <div class="submenu-dropdown__group">
                    <div class="submenu-dropdown__group-title">
                        <div>
                            <span class="group-icon"></span>
                        </div>
                            <span class="group-title"></span>
                           
                        <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                    </div>
                    <div class="group-container">
                       <ul class="group-links">
                        <li class="group-list">
                            <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
                            <div class="destination-province_content">
                              <div class="province-map iturie">
                                @include('layouts.mapfile.mapDestinationProvince')
                              </div>
                              <div class="province-desc">
                                <a href="#" class="province-link">Iturie</a>
                                <div class="province-district">
                                  <a href="" class="province-district_link">Boma</a>
                                  <a href="" class="province-district_link">Matadi</a>
                                  <a href="" class="province-district_link">Cataracte</a>
                                </div>
                              </div>
                            </div>
                        </li>
                        <!-- <li class="group-list">
                            <a href="" class="group-link">lien 1.1.1.2</a>
                        </li>
                         -->
                       </ul>
                    </div>
                </div>

                <div class="submenu-dropdown__group">
                  <div class="submenu-dropdown__group-title">
                      <div>
                          <span class="group-icon"></span>
                      </div>
                          <span class="group-title"></span>
                         
                      <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                  </div>
                  <div class="group-container">
                     <ul class="group-links">
                      <li class="group-list">
                          <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
                          <div class="destination-province_content">
                            <div class="province-map kwango">
                              @include('layouts.mapfile.mapDestinationProvince')
                            </div>
                            <div class="province-desc">
                              <a href="#" class="province-link">Kwango</a>
                              <div class="province-district">
                                <a href="" class="province-district_link">Boma</a>
                                <a href="" class="province-district_link">Matadi</a>
                                <a href="" class="province-district_link">Cataracte</a>
                              </div>
                            </div>
                          </div>
                      </li>
                      <!-- <li class="group-list">
                          <a href="" class="group-link">lien 1.1.1.2</a>
                      </li>
                       -->
                     </ul>
                  </div>
              </div>

              <div class="submenu-dropdown__group">
                <div class="submenu-dropdown__group-title">
                    <div>
                        <span class="group-icon"></span>
                    </div>
                        <span class="group-title"></span>
                       
                    <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                </div>
                <div class="group-container">
                   <ul class="group-links">
                    <li class="group-list">
                        <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
                        <div class="destination-province_content">
                          <div class="province-map kasai-oriental">
                            @include('layouts.mapfile.mapDestinationProvince')
                          </div>
                          <div class="province-desc">
                            <a href="#" class="province-link">Kasai Oriental</a>
                            <div class="province-district">
                              <a href="" class="province-district_link">Boma</a>
                              <a href="" class="province-district_link">Matadi</a>
                              <a href="" class="province-district_link">Cataracte</a>
                            </div>
                          </div>
                        </div>
                    </li>
                    <!-- <li class="group-list">
                        <a href="" class="group-link">lien 1.1.1.2</a>
                    </li>
                     -->
                   </ul>
                </div>
            </div>

            <div class="submenu-dropdown__group">
              <div class="submenu-dropdown__group-title">
                  <div>
                      <span class="group-icon"></span>
                  </div>
                      <span class="group-title"></span>
                     
                  <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
              </div>
              <div class="group-container">
                 <ul class="group-links">
                  <li class="group-list">
                      <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
                      <div class="destination-province_content">
                        <div class="province-map kasai">
                          @include('layouts.mapfile.mapDestinationProvince')
                        </div>
                        <div class="province-desc">
                          <a href="#" class="province-link">Kasai</a>
                          <div class="province-district">
                            <a href="" class="province-district_link">Boma</a>
                            <a href="" class="province-district_link">Matadi</a>
                            <a href="" class="province-district_link">Cataracte</a>
                          </div>
                        </div>
                      </div>
                  </li>
                  <!-- <li class="group-list">
                      <a href="" class="group-link">lien 1.1.1.2</a>
                  </li>
                   -->
                 </ul>
              </div>
          </div>

          <div class="submenu-dropdown__group">
            <div class="submenu-dropdown__group-title">
                <div>
                    <span class="group-icon"></span>
                </div>
                    <span class="group-title"></span>
                   
                <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
            </div>
            <div class="group-container">
               <ul class="group-links">
                <li class="group-list">
                    <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
                    <div class="destination-province_content">
                      <div class="province-map kwilu">
                        @include('layouts.mapfile.mapDestinationProvince')
                      </div>
                      <div class="province-desc">
                        <a href="#" class="province-link">Kwilu</a>
                        <div class="province-district">
                          <a href="" class="province-district_link">Boma</a>
                          <a href="" class="province-district_link">Matadi</a>
                          <a href="" class="province-district_link">Cataracte</a>
                        </div>
                      </div>
                    </div>
                </li>
                <!-- <li class="group-list">
                    <a href="" class="group-link">lien 1.1.1.2</a>
                </li>
                 -->
               </ul>
            </div>
        </div>

        <div class="submenu-dropdown__group">
          <div class="submenu-dropdown__group-title">
              <div>
                  <span class="group-icon"></span>
              </div>
                  <span class="group-title"></span>
                 
              <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
          </div>
          <div class="group-container">
             <ul class="group-links">
              <li class="group-list">
                  <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
                  <div class="destination-province_content">
                    <div class="province-map lualaba">
                      @include('layouts.mapfile.mapDestinationProvince')
                    </div>
                    <div class="province-desc">
                      <a href="#" class="province-link">Lualaba</a>
                      <div class="province-district">
                        <a href="" class="province-district_link">Boma</a>
                        <a href="" class="province-district_link">Matadi</a>
                        <a href="" class="province-district_link">Cataracte</a>
                      </div>
                    </div>
                  </div>
              </li>
              <!-- <li class="group-list">
                  <a href="" class="group-link">lien 1.1.1.2</a>
              </li>
               -->
             </ul>
          </div>
      </div>

      <div class="submenu-dropdown__group">
        <div class="submenu-dropdown__group-title">
            <div>
                <span class="group-icon"></span>
            </div>
                <span class="group-title"></span>
               
            <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
        </div>
        <div class="group-container">
           <ul class="group-links">
            <li class="group-list">
                <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
                <div class="destination-province_content">
                  <div class="province-map kasai-central">
                    @include('layouts.mapfile.mapDestinationProvince')
                  </div>
                  <div class="province-desc">
                    <a href="#" class="province-link">Kasai Central</a>
                    <div class="province-district">
                      <a href="" class="province-district_link">Boma</a>
                      <a href="" class="province-district_link">Matadi</a>
                      <a href="" class="province-district_link">Cataracte</a>
                    </div>
                  </div>
                </div>
            </li>
            <!-- <li class="group-list">
                <a href="" class="group-link">lien 1.1.1.2</a>
            </li>
             -->
           </ul>
        </div>
    </div>

    <div class="submenu-dropdown__group">
      <div class="submenu-dropdown__group-title">
          <div>
              <span class="group-icon"></span>
          </div>
              <span class="group-title"></span>
             
          <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
      </div>
      <div class="group-container">
         <ul class="group-links">
          <li class="group-list">
              <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
              <div class="destination-province_content">
                <div class="province-map lomami">
                  @include('layouts.mapfile.mapDestinationProvince')
                </div>
                <div class="province-desc">
                  <a href="#" class="province-link">Lomami</a>
                  <div class="province-district">
                    <a href="" class="province-district_link">Boma</a>
                    <a href="" class="province-district_link">Matadi</a>
                    <a href="" class="province-district_link">Cataracte</a>
                  </div>
                </div>
              </div>
          </li>
          <!-- <li class="group-list">
              <a href="" class="group-link">lien 1.1.1.2</a>
          </li>
           -->
         </ul>
      </div>
  </div>

  <div class="submenu-dropdown__group">
    <div class="submenu-dropdown__group-title">
        <div>
            <span class="group-icon"></span>
        </div>
            <span class="group-title"></span>
           
        <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
    </div>
    <div class="group-container">
       <ul class="group-links">
        <li class="group-list">
            <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
            <div class="destination-province_content">
              <div class="province-map mai-dombe">
                @include('layouts.mapfile.mapDestinationProvince')
              </div>
              <div class="province-desc">
                <a href="#" class="province-link">Mai Dombe</a>
                <div class="province-district">
                  <a href="" class="province-district_link">Boma</a>
                  <a href="" class="province-district_link">Matadi</a>
                  <a href="" class="province-district_link">Cataracte</a>
                </div>
              </div>
            </div>
        </li>
        <!-- <li class="group-list">
            <a href="" class="group-link">lien 1.1.1.2</a>
        </li>
         -->
       </ul>
    </div>
</div>

<div class="submenu-dropdown__group">
  <div class="submenu-dropdown__group-title">
      <div>
          <span class="group-icon"></span>
      </div>
          <span class="group-title"></span>
         
      <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
  </div>
  <div class="group-container">
     <ul class="group-links">
      <li class="group-list">
          <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
          <div class="destination-province_content">
            <div class="province-map maniema">
              @include('layouts.mapfile.mapDestinationProvince')
            </div>
            <div class="province-desc">
              <a href="#" class="province-link">Maniema</a>
              <div class="province-district">
                <a href="" class="province-district_link">Boma</a>
                <a href="" class="province-district_link">Matadi</a>
                <a href="" class="province-district_link">Cataracte</a>
              </div>
            </div>
          </div>
      </li>
      <!-- <li class="group-list">
          <a href="" class="group-link">lien 1.1.1.2</a>
      </li>
       -->
     </ul>
  </div>
</div>
<div class="submenu-dropdown__group">
<div class="submenu-dropdown__group-title">
    <div>
        <span class="group-icon"></span>
    </div>
        <span class="group-title"></span>
       
    <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
</div>
<div class="group-container">
   <ul class="group-links">
    <li class="group-list">
        <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
        <div class="destination-province_content">
          <div class="province-map mongala">
            @include('layouts.mapfile.mapDestinationProvince')
          </div>
          <div class="province-desc">
            <a href="#" class="province-link">Mongala</a>
            <div class="province-district">
              <a href="" class="province-district_link">Boma</a>
              <a href="" class="province-district_link">Matadi</a>
              <a href="" class="province-district_link">Cataracte</a>
            </div>
          </div>
        </div>
    </li>
    <!-- <li class="group-list">
        <a href="" class="group-link">lien 1.1.1.2</a>
    </li>
     -->
   </ul>
</div>
</div>
<div class="submenu-dropdown__group">
<div class="submenu-dropdown__group-title">
  <div>
      <span class="group-icon"></span>
  </div>
      <span class="group-title"></span>
     
  <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
</div>
<div class="group-container">
 <ul class="group-links">
  <li class="group-list">
      <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
      <div class="destination-province_content">
        <div class="province-map nord-kivu">
          @include('layouts.mapfile.mapDestinationProvince')
        </div>
        <div class="province-desc">
          <a href="#" class="province-link">Nord Kivu</a>
          <div class="province-district">
            <a href="" class="province-district_link">Boma</a>
            <a href="" class="province-district_link">Matadi</a>
            <a href="" class="province-district_link">Cataracte</a>
          </div>
        </div>
      </div>
  </li>
  <!-- <li class="group-list">
      <a href="" class="group-link">lien 1.1.1.2</a>
  </li>
   -->
 </ul>
</div>
</div>
<div class="submenu-dropdown__group">
<div class="submenu-dropdown__group-title">
  <div>
      <span class="group-icon"></span>
  </div>
      <span class="group-title"></span>
     
  <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
</div>
<div class="group-container">
 <ul class="group-links">
  <li class="group-list">
      <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
      <div class="destination-province_content">
        <div class="province-map nord-ubangi">
          @include('layouts.mapfile.mapDestinationProvince')
        </div>
        <div class="province-desc">
          <a href="#" class="province-link">Nord Ubangi</a>
          <div class="province-district">
            <a href="" class="province-district_link">Boma</a>
            <a href="" class="province-district_link">Matadi</a>
            <a href="" class="province-district_link">Cataracte</a>
          </div>
        </div>
      </div>
  </li>
  <!-- <li class="group-list">
      <a href="" class="group-link">lien 1.1.1.2</a>
  </li>
   -->
 </ul>
</div>
</div>
<div class="submenu-dropdown__group">
<div class="submenu-dropdown__group-title">
  <div>
      <span class="group-icon"></span>
  </div>
      <span class="group-title"></span>
     
  <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
</div>
<div class="group-container">
 <ul class="group-links">
  <li class="group-list">
      <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
      <div class="destination-province_content">
        <div class="province-map sud-kivu">
          @include('layouts.mapfile.mapDestinationProvince')
        </div>
        <div class="province-desc">
          <a href="#" class="province-link">Sud Kivu</a>
          <div class="province-district">
            <a href="" class="province-district_link">Boma</a>
            <a href="" class="province-district_link">Matadi</a>
            <a href="" class="province-district_link">Cataracte</a>
          </div>
        </div>
      </div>
  </li>
  <!-- <li class="group-list">
      <a href="" class="group-link">lien 1.1.1.2</a>
  </li>
   -->
 </ul>
</div>
</div>
<div class="submenu-dropdown__group">
<div class="submenu-dropdown__group-title">
  <div>
      <span class="group-icon"></span>
  </div>
      <span class="group-title"></span>
     
  <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
</div>
<div class="group-container">
 <ul class="group-links">
  <li class="group-list">
      <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
      <div class="destination-province_content">
        <div class="province-map sankuru">
          @include('layouts.mapfile.mapDestinationProvince')
        </div>
        <div class="province-desc">
          <a href="#" class="province-link">Sankuru</a>
          <div class="province-district">
            <a href="" class="province-district_link">Boma</a>
            <a href="" class="province-district_link">Matadi</a>
            <a href="" class="province-district_link">Cataracte</a>
          </div>
        </div>
      </div>
  </li>
  <!-- <li class="group-list">
      <a href="" class="group-link">lien 1.1.1.2</a>
  </li>
   -->
 </ul>
</div>
</div>
<div class="submenu-dropdown__group">
<div class="submenu-dropdown__group-title">
  <div>
      <span class="group-icon"></span>
  </div>
      <span class="group-title"></span>
     
  <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
</div>
<div class="group-container">
 <ul class="group-links">
  <li class="group-list">
      <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
      <div class="destination-province_content">
        <div class="province-map sud-ubangi">
          @include('layouts.mapfile.mapDestinationProvince')
        </div>
        <div class="province-desc">
          <a href="#" class="province-link">Sud Ubangi</a>
          <div class="province-district">
            <a href="" class="province-district_link">Boma</a>
            <a href="" class="province-district_link">Matadi</a>
            <a href="" class="province-district_link">Cataracte</a>
          </div>
        </div>
      </div>
  </li>
  <!-- <li class="group-list">
      <a href="" class="group-link">lien 1.1.1.2</a>
  </li>
   -->
 </ul>
</div>
</div>
<div class="submenu-dropdown__group">
<div class="submenu-dropdown__group-title">
  <div>
      <span class="group-icon"></span>
  </div>
      <span class="group-title"></span>
     
  <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
</div>
<div class="group-container">
 <ul class="group-links">
  <li class="group-list">
      <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
      <div class="destination-province_content">
        <div class="province-map tanganyika">
          @include('layouts.mapfile.mapDestinationProvince')
        </div>
        <div class="province-desc">
          <a href="#" class="province-link">Tanganyika</a>
          <div class="province-district">
            <a href="" class="province-district_link">Boma</a>
            <a href="" class="province-district_link">Matadi</a>
            <a href="" class="province-district_link">Cataracte</a>
          </div>
        </div>
      </div>
  </li>
  <!-- <li class="group-list">
      <a href="" class="group-link">lien 1.1.1.2</a>
  </li>
   -->
 </ul>
</div>
</div>
<div class="submenu-dropdown__group">
<div class="submenu-dropdown__group-title">
  <div>
      <span class="group-icon"></span>
  </div>
      <span class="group-title"></span>
     
  <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
</div>
<div class="group-container">
 <ul class="group-links">
  <li class="group-list">
      <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
      <div class="destination-province_content">
        <div class="province-map tshopo">
          @include('layouts.mapfile.mapDestinationProvince')
        </div>
        <div class="province-desc">
          <a href="#" class="province-link">Tshopo</a>
          <div class="province-district">
            <a href="" class="province-district_link">Boma</a>
            <a href="" class="province-district_link">Matadi</a>
            <a href="" class="province-district_link">Cataracte</a>
          </div>
        </div>
      </div>
  </li>
  <!-- <li class="group-list">
      <a href="" class="group-link">lien 1.1.1.2</a>
  </li>
   -->
 </ul>
</div>
</div>
<div class="submenu-dropdown__group">
<div class="submenu-dropdown__group-title">
  <div>
      <span class="group-icon"></span>
  </div>
      <span class="group-title"></span>
     
  <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
</div>
<div class="group-container">
 <ul class="group-links">
  <li class="group-list">
      <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
      <div class="destination-province_content">
        <div class="province-map tshuapa">
          @include('layouts.mapfile.mapDestinationProvince')
        </div>
        <div class="province-desc">
          <a href="#" class="province-link">Tshuapa</a>
          <div class="province-district">
            <a href="" class="province-district_link">Boma</a>
            <a href="" class="province-district_link">Matadi</a>
            <a href="" class="province-district_link">Cataracte</a>
          </div>
        </div>
      </div>
  </li>
  <!-- <li class="group-list">
      <a href="" class="group-link">lien 1.1.1.2</a>
  </li>
   -->
 </ul>
</div>
</div>
                            <div class="menu-partenaires__marquee-container" >
                              <div class="marquee">
                                <ul class="marquee-elmts">
                                    <li>
                                      <div class="menu-marquee__image">
                                         <img src="{{url('assets/images/menu_marquee/lola-ya-bonobo.webp')}}" alt="" class="menu-marquee__img">
                                      </div>
                                    </li>
                                    <li>
                                      <div class="menu-marquee__image">
                                        <img src="{{url('assets/images/menu_marquee/aqua-splash.jpg')}}" alt="" class="menu-marquee__img">
                                     </div>
                                    </li>
                                    <li>
                                      <div class="menu-marquee__image">
                                      <img src="{{url('assets/images/menu_marquee/virunga.webp')}}" alt="" class="menu-marquee__img">
                                   </div>
                                  </li>
                                    <li>
                                      <div class="menu-marquee__image">
                                        <img src="{{url('assets/images/menu_marquee/lola-ya-bonobo.webp')}}" alt="" class="menu-marquee__img">
                                     </div>
                                    </li>
                                    <li>
                                      <div class="menu-marquee__image">
                                        <img src="{{url('assets/images/menu_marquee/aqua-splash.jpg')}}" alt="" class="menu-marquee__img">
                                     </div>
                                    </li>
                                    <li>
                                      <div class="menu-marquee__image">
                                        <img src="{{url('assets/images/menu_marquee/virunga.webp')}}" alt="" class="menu-marquee__img">
                                     </div>
                                    </li>
                                    <li>
                                      <div class="menu-marquee__image">
                                        <img src="{{url('assets/images/menu_marquee/lola-ya-bonobo.webp')}}" alt="" class="menu-marquee__img">
                                     </div>
                                    </li>
                                    
                                </ul>
                            </div>
                            </div>
                              </div>
                          </li>

                          <li class="dropdown-menu__link">
                            <span class="dropdown-menu-link__title">
                              <span class="dropdown-menu-link__titl">
                              Themes de voyage <!-- Menu secondaire 1.2 -->
                              </span>
                            </span>
                            <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                            <div class="submenu-dopdown theme-voyage">
                                <div class="submenu-dropdown__group">
                                    <div class="submenu-dropdown__group-title">
                                        <div>
                                            {{-- <span class="group-icon"><i class="ri-home-gear-line"></i></span> --}}
                                        </div>

                                        <span class="group-title"></span>
                                        <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                        <span class="group-icon"></span>
                                    </div>
                                    <div class="group-container">
                                       <ul class="group-links">
                                        <li class="group-list">
                                           <div class="theme-voyage__lists">
                                               <span class="theme-voyage-title">Nature</span>
                                              <div class='theme-voyage__content'>
                                              <a class="theme-voyage__link">link 1</a>
                                              <a class="theme-voyage__link">link 2</a>
                                              <a class="theme-voyage__link">link 3</a>
                                              <a class="theme-voyage__link">link 4</a>
                                              <a class="theme-voyage__link">link 5</a>
                                              {{-- <> --}}
                                              </div>
                                              
                                          
                                           </div>

                                           <div class="theme-voyage__lists">
                                            <span class="theme-voyage-title">Plein air</span>
                                           <div class='theme-voyage__content'>
                                           <a class="theme-voyage__link">link 1</a>
                                           <a class="theme-voyage__link">link 2</a>
                                           <a class="theme-voyage__link">link 3</a>
                                           <a class="theme-voyage__link">link 4</a>
                                           <a class="theme-voyage__link">link 5</a>
                                           {{-- <> --}}
                                           </div>
                                           
                                       
                                        </div>

                                        <div class="theme-voyage__lists">
                                          <span class="theme-voyage-title">Tradition</span>
                                         <div class='theme-voyage__content'>
                                         <a class="theme-voyage__link">link 1</a>
                                         <a class="theme-voyage__link">link 2</a>
                                         <a class="theme-voyage__link">link 3</a>
                                         <a class="theme-voyage__link">link 4</a>
                                         <a class="theme-voyage__link">link 5</a>
                                         {{-- <> --}}
                                         </div>
                                         
                                     
                                      </div>

                                      <div class="theme-voyage__lists">
                                        <span class="theme-voyage-title">Cuisine</span>
                                       <div class='theme-voyage__content'>
                                       <a class="theme-voyage__link">link 1</a>
                                       <a class="theme-voyage__link">link 2</a>
                                       <a class="theme-voyage__link">link 3</a>
                                       <a class="theme-voyage__link">link 4</a>
                                       <a class="theme-voyage__link">link 5</a>
                                       {{-- <> --}}
                                       </div>
                                    </div>

                                    <div class="theme-voyage__lists">
                                      <span class="theme-voyage-title">Art</span>
                                     <div class='theme-voyage__content'>
                                     <a class="theme-voyage__link">link 1</a>
                                     <a class="theme-voyage__link">link 2</a>
                                     <a class="theme-voyage__link">link 3</a>
                                     <a class="theme-voyage__link">link 4</a>
                                     <a class="theme-voyage__link">link 5</a>
                                     {{-- <> --}}
                                     </div>
                                  </div>

                                  <div class="theme-voyage__lists">
                                    <span class="theme-voyage-title">Relaxation</span>
                                   <div class='theme-voyage__content'>
                                   <a class="theme-voyage__link">link 1</a>
                                   <a class="theme-voyage__link">link 2</a>
                                   <a class="theme-voyage__link">link 3</a>
                                   <a class="theme-voyage__link">link 4</a>
                                   <a class="theme-voyage__link">link 5</a>
                                   {{-- <> --}}
                                   </div>
                                </div>

                                <div class="theme-voyage__lists">
                                  <span class="theme-voyage-title">Ville</span>
                                 <div class='theme-voyage__content'>
                                 <a class="theme-voyage__link">link 1</a>
                                 <a class="theme-voyage__link">link 2</a>
                                 <a class="theme-voyage__link">link 3</a>
                                 <a class="theme-voyage__link">link 4</a>
                                 <a class="theme-voyage__link">link 5</a>
                                 {{-- <> --}}
                                 </div>
                              </div>

                                        </li>
                                       </ul>
                                    </div>
                                </div>

                                <div class="submenu-dropdown__group">
                                    <div class="submenu-dropdown__group-title">
                                        <div>
                                            {{-- <span class="group-icon"><i class="ri-home-gear-line"></i></span> --}}
                                        </div>

                                        <span class="group-title"></span>
                                        <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                        <span class="group-icon"></span>
                                    </div>
                                    <div class="group-container">
                                       <ul class="group-links">
                                        <li class="group-list">
                                           <div class="voyage-theme__img">
                                             <img src="{{url('assets/images/destination/parVille/okapi.jpg')}}" alt="" class="voyage-theme__image">
                                           </div>
                                           <div class="voyage-theme__img">
                                            <img src="{{url('assets/images/destination/parVille/pullman2.jpg')}}" alt="" class="voyage-theme__image">
                                          </div>
                                          <div class="voyage-theme__img">
                                            <img src="{{url('assets/images/destination/parVille/ruwenzori-3.jpg')}}" alt="" class="voyage-theme__image">
                                          </div>
                                          <div class="voyage-theme__img">
                                            <img src="{{url('assets/images/destination/parVille/okapi.jpg')}}" alt="" class="voyage-theme__image">
                                          </div>
                                        </li>
                                       </ul>
                                    </div>
                                </div>

                                
                            </div>
                        </li>

                        <li class="dropdown-menu__link">
                          <span class="dropdown-menu-link__title">
                            <span class="dropdown-menu-link__titl">
                            Types de Séjour <!-- Menu secondaire 1.2 -->
                            </span>
                          </span>
                          <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                          <div class="submenu-dopdown type-sejour">
                              
                            <div class="submenu-dropdown__group">
                              <div class="submenu-dropdown__group-title">
                                  <div>
                                      {{-- <span class="group-icon"><i class="ri-home-gear-line"></i></span> --}}
                                  </div>

                                  <span class="group-title"></span>
                                  <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                  <span class="group-icon"></span>
                              </div>
                              <div class="group-container">
                                 <ul class="group-links">
                                  <li class="group-list">
                                     <div class="type-sejour__lists">
                                         <span class="theme-voyage-title">Nature</span>
                                        <div class='type-sejour__content'>
                                        <a class="theme-voyage__link">link 1</a>
                                        <a class="theme-voyage__link">link 2</a>
                                        <a class="theme-voyage__link">link 3</a>
                                        <a class="theme-voyage__link">link 4</a>
                                        <a class="theme-voyage__link">link 5</a>
                                        {{-- <> --}}
                                        </div>
                                        
                                    
                                     </div>

                                     <div class="type-sejour__lists">
                                      <span class="theme-voyage-title">Plein air</span>
                                     <div class='type-sejour__content'>
                                     <a class="theme-voyage__link">link 1</a>
                                     <a class="theme-voyage__link">link 2</a>
                                     <a class="theme-voyage__link">link 3</a>
                                     <a class="theme-voyage__link">link 4</a>
                                     <a class="theme-voyage__link">link 5</a>
                                     {{-- <> --}}
                                     </div>
                                     
                                 
                                  </div>

                                  <div class="type-sejour__lists">
                                    <span class="theme-voyage-title">Tradition</span>
                                   <div class='type-sejour__content'>
                                   <a class="theme-voyage__link">link 1</a>
                                   <a class="theme-voyage__link">link 2</a>
                                   <a class="theme-voyage__link">link 3</a>
                                   <a class="theme-voyage__link">link 4</a>
                                   <a class="theme-voyage__link">link 5</a>
                                   {{-- <> --}}
                                   </div>
                                   
                               
                                </div>

                                <div class="type-sejour__lists">
                                  <span class="theme-voyage-title">Cuisine</span>
                                 <div class='type-sejour__content'>
                                 <a class="theme-voyage__link">link 1</a>
                                 <a class="theme-voyage__link">link 2</a>
                                 <a class="theme-voyage__link">link 3</a>
                                 <a class="theme-voyage__link">link 4</a>
                                 <a class="theme-voyage__link">link 5</a>
                                 {{-- <> --}}
                                 </div>
                              </div>

                              <div class="type-sejour__lists">
                                <span class="theme-voyage-title">Art</span>
                               <div class='type-sejour__content'>
                               <a class="theme-voyage__link">link 1</a>
                               <a class="theme-voyage__link">link 2</a>
                               <a class="theme-voyage__link">link 3</a>
                               <a class="theme-voyage__link">link 4</a>
                               <a class="theme-voyage__link">link 5</a>
                               {{-- <> --}}
                               </div>
                            </div>

                            <div class="type-sejour__lists">
                              <span class="theme-voyage-title">Relaxation</span>
                             <div class='type-sejour__content'>
                             <a class="theme-voyage__link">link 1</a>
                             <a class="theme-voyage__link">link 2</a>
                             <a class="theme-voyage__link">link 3</a>
                             <a class="theme-voyage__link">link 4</a>
                             <a class="theme-voyage__link">link 5</a>
                             {{-- <> --}}
                             </div>
                          </div>

                          <div class="type-sejour__lists">
                            <span class="theme-voyage-title">Ville</span>
                           <div class='type-sejour__content'>
                           <a class="theme-voyage__link">link 1</a>
                           <a class="theme-voyage__link">link 2</a>
                           <a class="theme-voyage__link">link 3</a>
                           <a class="theme-voyage__link">link 4</a>
                           <a class="theme-voyage__link">link 5</a>
                           {{-- <> --}}
                           </div>
                        </div>

                                  </li>
                                 </ul>
                              </div>
                          </div>

                          <div class="submenu-dropdown__group">
                              <div class="submenu-dropdown__group-title">
                                  <div>
                                      {{-- <span class="group-icon"><i class="ri-home-gear-line"></i></span> --}}
                                  </div>

                                  <span class="group-title"></span>
                                  <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                  <span class="group-icon"></span>
                              </div>
                              <div class="group-container">
                                 <ul class="group-links">
                                  <li class="group-list">
                                     <div class="type-sejour__img">
                                       <img src="{{url('assets/images/destination/parVille/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                     </div>
                                     <div class="type-sejour__img">
                                      <img src="{{url('assets/images/destination/parVille/okapi.jpg')}}" alt="" class="type-sejour__image">
                                    </div>
                                  
                                  </li>
                                 </ul>
                              </div>
                          </div>

   

                          </div>
                      </li>
                        </ul>
                      </div>
                  </li>
                 
                  <li class="menu__link menu-principal__3">
                      <div class="menu-link__container">
                          <span >Se préparer </span>   
                      </div>

                      <div class="dropdown-menu">
                        <div class="dropdown-menu-deco"></div>
                      <ul class="dropdown-menu__links">
                        <li class="dropdown-menu__link">
                            <span class="dropdown-menu-link__title">
                              <span class="dropdown-menu-link__titl">
                             A propos de la RDC<!-- Menu secondaire 1.1 -->
                             </span>
                            </span>
                            <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                            <div class="submenu-dopdown">
                                <div class="submenu-dropdown__group">
                                    <div class="submenu-dropdown__group-title">
                                        <div>
                                            <span class="group-icon"></span>
                                        </div>
                                            <span class="group-title"></span>
                                           
                                        <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                    </div>
                                    <div class="group-container">
                                       <ul class="group-links">
                                        <li class="group-list">
                                           
                                          {{-- ici sera  --}}

                                          <div class="se-preparer_link-content">
                                          <span class="se-preparer_title">title 1</span>
                                          <div class="se-preparer__links-container">
                                            <a class="se-preparer_link" href="" >link1</a>
                                            <a class="se-preparer_link" href="" >link1</a>
                                            <a class="se-preparer_link" href="" >link1</a>
                                            <a class="se-preparer_link" href="" >link1</a>
                                            <a class="se-preparer_link" href="" >link1</a>
                                            <a class="se-preparer_link" href="" >link1</a>
                                          </div>
                                          </div>

                                          <div class="se-preparer_link-content">
                                            <span class="se-preparer_title">title 1</span>
                                            <div class="se-preparer__links-container">
                                              <a class="se-preparer_link" href="" >link1</a>
                                              <a class="se-preparer_link" href="" >link1</a>
                                              <a class="se-preparer_link" href="" >link1</a>
                                              <a class="se-preparer_link" href="" >link1</a>
                                              <a class="se-preparer_link" href="" >link1</a>
                                              <a class="se-preparer_link" href="" >link1</a>
                                            </div>
                                            </div>

                                            <div class="se-preparer_link-content">
                                              <span class="se-preparer_title">title 1</span>
                                              <div class="se-preparer__links-container">
                                                <a class="se-preparer_link" href="" >link1</a>
                                                <a class="se-preparer_link" href="" >link1</a>
                                                <a class="se-preparer_link" href="" >link1</a>
                                                <a class="se-preparer_link" href="" >link1</a>
                                                <a class="se-preparer_link" href="" >link1</a>
                                                <a class="se-preparer_link" href="" >link1</a>
                                              </div>
                                              </div>

                                              <div class="se-preparer_link-content">
                                                <span class="se-preparer_title">title 1</span>
                                                <div class="se-preparer__links-container">
                                                  <a class="se-preparer_link" href="" >link1</a>
                                                  <a class="se-preparer_link" href="" >link1</a>
                                                  <a class="se-preparer_link" href="" >link1</a>
                                                  <a class="se-preparer_link" href="" >link1</a>
                                                  <a class="se-preparer_link" href="" >link1</a>
                                                  <a class="se-preparer_link" href="" >link1</a>
                                                </div>
                                                </div>

                                                <div class="se-preparer_link-content">
                                                  <span class="se-preparer_title">title 1</span>
                                                  <div class="se-preparer__links-container">
                                                    <a class="se-preparer_link" href="" >link1</a>
                                                    <a class="se-preparer_link" href="" >link1</a>
                                                    <a class="se-preparer_link" href="" >link1</a>
                                                    <a class="se-preparer_link" href="" >link1</a>
                                                    <a class="se-preparer_link" href="" >link1</a>
                                                    <a class="se-preparer_link" href="" >link1</a>
                                                  </div>
                                                  </div>
                                        </li>
                                       </ul>
                                    </div>
                                </div>

                                <div class="submenu-dropdown__group">
                                    <div class="submenu-dropdown__group-title">
                                        <div>
                                        <span class="group-icon"></span>
                                        </div>
                                        <span class="group-title"></span>
                                        <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                        
                                    </div>
                                    <div class="group-container">
                                       <ul class="group-links">
                                        <li class="group-list">
                                         {{-- ici sera --}}
                                         <div class="se-preparer_images">
                                          <img src="{{url('assets/images/sePreparer/aProposRdc/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                        <span class="se-preparer-img-desc">lien descr </span>
                                         </div>
                                         <div class="se-preparer_images">
                                          <img src="{{url('assets/images/sePreparer/aProposRdc/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                          <span class="se-preparer-img-desc">lien descr </span>
                                         </div>
                                         <div class="se-preparer_images">
                                          <img src="{{url('assets/images/sePreparer/aProposRdc/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                          <span class="se-preparer-img-desc">lien descr </span>
                                         </div>
                                         <div class="se-preparer_images">
                                          <img src="{{url('assets/images/sePreparer/aProposRdc/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                          <span class="se-preparer-img-desc">lien descr </span>
                                         </div>

                                        </li>
                                       </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="dropdown-menu__link">
                            <span class="dropdown-menu-link__title">
                              <span class="dropdown-menu-link__titl">
                              Planifier <!-- Menu secondaire 1.2 -->
                              </span>
                            </span>
                            <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                            <div class="submenu-dopdown">
                              <div class="submenu-dropdown__group">
                                  <div class="submenu-dropdown__group-title">
                                      <div>
                                          <span class="group-icon"></span>
                                      </div>
                                          <span class="group-title"></span>
                                         
                                      <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                  </div>
                                  <div class="group-container">
                                     <ul class="group-links">
                                      <li class="group-list">
                                         
                                        {{-- ici sera  --}}

                                        <div class="se-preparer_link-content">
                                        <span class="se-preparer_title">title 1</span>
                                        <div class="se-preparer__links-container">
                                          <a class="se-preparer_link" href="" >link1</a>
                                          <a class="se-preparer_link" href="" >link1</a>
                                          <a class="se-preparer_link" href="" >link1</a>
                                          <a class="se-preparer_link" href="" >link1</a>
                                          <a class="se-preparer_link" href="" >link1</a>
                                          <a class="se-preparer_link" href="" >link1</a>
                                        </div>
                                        </div>

                                        <div class="se-preparer_link-content">
                                          <span class="se-preparer_title">title 1</span>
                                          <div class="se-preparer__links-container">
                                            <a class="se-preparer_link" href="" >link1</a>
                                            <a class="se-preparer_link" href="" >link1</a>
                                            <a class="se-preparer_link" href="" >link1</a>
                                            <a class="se-preparer_link" href="" >link1</a>
                                            <a class="se-preparer_link" href="" >link1</a>
                                            <a class="se-preparer_link" href="" >link1</a>
                                          </div>
                                          </div>

                                          <div class="se-preparer_link-content">
                                            <span class="se-preparer_title">title 1</span>
                                            <div class="se-preparer__links-container">
                                              <a class="se-preparer_link" href="" >link1</a>
                                              <a class="se-preparer_link" href="" >link1</a>
                                              <a class="se-preparer_link" href="" >link1</a>
                                              <a class="se-preparer_link" href="" >link1</a>
                                              <a class="se-preparer_link" href="" >link1</a>
                                              <a class="se-preparer_link" href="" >link1</a>
                                            </div>
                                            </div>

                                            <div class="se-preparer_link-content">
                                              <span class="se-preparer_title">title 1</span>
                                              <div class="se-preparer__links-container">
                                                <a class="se-preparer_link" href="" >link1</a>
                                                <a class="se-preparer_link" href="" >link1</a>
                                                <a class="se-preparer_link" href="" >link1</a>
                                                <a class="se-preparer_link" href="" >link1</a>
                                                <a class="se-preparer_link" href="" >link1</a>
                                                <a class="se-preparer_link" href="" >link1</a>
                                              </div>
                                              </div>
                                      </li>
                                     </ul>
                                  </div>
                              </div>

                              <div class="submenu-dropdown__group">
                                  <div class="submenu-dropdown__group-title">
                                      <div>
                                      <span class="group-icon"></span>
                                      </div>
                                      <span class="group-title"></span>
                                      <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                      
                                  </div>
                                  <div class="group-container">
                                     <ul class="group-links">
                                      <li class="group-list">
                                       {{-- ici sera --}}
                                       <div class="se-preparer_images">
                                        <img src="{{url('assets/images/sePreparer/planifier/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                      <span class="se-preparer-img-desc">lien descr </span>
                                       </div>
                                       <div class="se-preparer_images">
                                        <img src="{{url('assets/images/sePreparer/planifier/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                        <span class="se-preparer-img-desc">lien descr </span>
                                       </div>
                                       <div class="se-preparer_images">
                                        <img src="{{url('assets/images/sePreparer/planifier/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                        <span class="se-preparer-img-desc">lien descr </span>
                                       </div>
                                       <div class="se-preparer_images">
                                        <img src="{{url('assets/images/sePreparer/planifier/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                        <span class="se-preparer-img-desc">lien descr </span>
                                       </div>

                                      </li>
                                     </ul>
                                  </div>
                              </div>
                          </div>
                        </li>

                        <li class="dropdown-menu__link">
                          <span class="dropdown-menu-link__title">
                            <span class="dropdown-menu-link__titl">
                            Itinéraires <!-- Menu secondaire 1.2 -->
                            </span>
                          </span>
                          <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                          <div class="submenu-dopdown">
                            <div class="submenu-dropdown__group">
                                <div class="submenu-dropdown__group-title">
                                    <div>
                                        <span class="group-icon"></span>
                                    </div>
                                        <span class="group-title"></span>
                                       
                                    <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                </div>
                                <div class="group-container">
                                   <ul class="group-links">
                                    <li class="group-list">
                                       
                                      {{-- ici sera  --}}

                                      <div class="se-preparer_link-content">
                                      <span class="se-preparer_title">title 1</span>
                                      <div class="se-preparer__links-container">
                                        <a class="se-preparer_link" href="" >link1</a>
                                        <a class="se-preparer_link" href="" >link1</a>
                                        <a class="se-preparer_link" href="" >link1</a>
                                        <a class="se-preparer_link" href="" >link1</a>
                                        <a class="se-preparer_link" href="" >link1</a>
                                        <a class="se-preparer_link" href="" >link1</a>
                                      </div>
                                      </div>
                                      <div class="se-preparer_link-content">
                                        <span class="se-preparer_title">title 1</span>
                                        <div class="se-preparer__links-container">
                                          <a class="se-preparer_link" href="" >link1</a>
                                          <a class="se-preparer_link" href="" >link1</a>
                                          <a class="se-preparer_link" href="" >link1</a>
                                          <a class="se-preparer_link" href="" >link1</a>
                                          <a class="se-preparer_link" href="" >link1</a>
                                          <a class="se-preparer_link" href="" >link1</a>
                                        </div>
                                        </div>
                                        <div class="se-preparer_link-content">
                                          <span class="se-preparer_title">title 1</span>
                                          <div class="se-preparer__links-container">
                                            <a class="se-preparer_link" href="" >link1</a>
                                            <a class="se-preparer_link" href="" >link1</a>
                                            <a class="se-preparer_link" href="" >link1</a>
                                            <a class="se-preparer_link" href="" >link1</a>
                                            <a class="se-preparer_link" href="" >link1</a>
                                            <a class="se-preparer_link" href="" >link1</a>
                                          </div>
                                          </div>
                                          <div class="se-preparer_link-content">
                                            <span class="se-preparer_title">title 1</span>
                                            <div class="se-preparer__links-container">
                                              <a class="se-preparer_link" href="" >link1</a>
                                              <a class="se-preparer_link" href="" >link1</a>
                                              <a class="se-preparer_link" href="" >link1</a>
                                              <a class="se-preparer_link" href="" >link1</a>
                                              <a class="se-preparer_link" href="" >link1</a>
                                              <a class="se-preparer_link" href="" >link1</a>
                                            </div>
                                            </div>
                                    </li>
                                   </ul>
                                </div>
                            </div>

                            <div class="submenu-dropdown__group">
                                <div class="submenu-dropdown__group-title">
                                    <div>
                                    <span class="group-icon"></span>
                                    </div>
                                    <span class="group-title"></span>
                                    <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                    
                                </div>
                                <div class="group-container">
                                   <ul class="group-links">
                                    <li class="group-list">
                                     {{-- ici sera --}}
                                     <div class="se-preparer_images">
                                      <img src="{{url('assets/images/sePreparer/itineraire/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                    <span class="se-preparer-img-desc">lien descr </span>
                                     </div>
                                     <div class="se-preparer_images">
                                      <img src="{{url('assets/images/sePreparer/itineraire/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                      <span class="se-preparer-img-desc">lien descr </span>
                                     </div>
                                     <div class="se-preparer_images">
                                      <img src="{{url('assets/images/sePreparer/itineraire/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                      <span class="se-preparer-img-desc">lien descr </span>
                                     </div>
                                     <div class="se-preparer_images">
                                      <img src="{{url('assets/images/sePreparer/itineraire/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                      <span class="se-preparer-img-desc">lien descr </span>
                                     </div>

                                    </li>
                                   </ul>
                                </div>
                            </div>
                        </div>
                      </li>

                      <li class="dropdown-menu__link">
                        <span class="dropdown-menu-link__title">
                          <span class="dropdown-menu-link__titl">
                          Se Déplacer et Dormir <!-- Menu secondaire 1.2 -->
                          </span>
                        </span>
                        <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                        <div class="submenu-dopdown">
                          <div class="submenu-dropdown__group">
                              <div class="submenu-dropdown__group-title">
                                  <div>
                                      <span class="group-icon"></span>
                                  </div>
                                      <span class="group-title"></span>
                                     
                                  <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                              </div>
                              <div class="group-container">
                                 <ul class="group-links">
                                  <li class="group-list">
                                     
                                    {{-- ici sera  --}}

                                    <div class="se-preparer_link-content">
                                    <span class="se-preparer_title">title 1</span>
                                    <div class="se-preparer__links-container">
                                      <a class="se-preparer_link" href="" >link1</a>
                                      <a class="se-preparer_link" href="" >link1</a>
                                      <a class="se-preparer_link" href="" >link1</a>
                                      <a class="se-preparer_link" href="" >link1</a>
                                      <a class="se-preparer_link" href="" >link1</a>
                                      <a class="se-preparer_link" href="" >link1</a>
                                    </div>
                                    </div>
                                    <div class="se-preparer_link-content">
                                      <span class="se-preparer_title">title 1</span>
                                      <div class="se-preparer__links-container">
                                        <a class="se-preparer_link" href="" >link1</a>
                                        <a class="se-preparer_link" href="" >link1</a>
                                        <a class="se-preparer_link" href="" >link1</a>
                                        <a class="se-preparer_link" href="" >link1</a>
                                        <a class="se-preparer_link" href="" >link1</a>
                                        <a class="se-preparer_link" href="" >link1</a>
                                      </div>
                                      </div>
                                      <div class="se-preparer_link-content">
                                        <span class="se-preparer_title">title 1</span>
                                        <div class="se-preparer__links-container">
                                          <a class="se-preparer_link" href="" >link1</a>
                                          <a class="se-preparer_link" href="" >link1</a>
                                          <a class="se-preparer_link" href="" >link1</a>
                                          <a class="se-preparer_link" href="" >link1</a>
                                          <a class="se-preparer_link" href="" >link1</a>
                                          <a class="se-preparer_link" href="" >link1</a>
                                        </div>
                                        </div>
                                        <div class="se-preparer_link-content">
                                          <span class="se-preparer_title">title 1</span>
                                          <div class="se-preparer__links-container">
                                            <a class="se-preparer_link" href="" >link1</a>
                                            <a class="se-preparer_link" href="" >link1</a>
                                            <a class="se-preparer_link" href="" >link1</a>
                                            <a class="se-preparer_link" href="" >link1</a>
                                            <a class="se-preparer_link" href="" >link1</a>
                                            <a class="se-preparer_link" href="" >link1</a>
                                          </div>
                                          </div>
                                          <div class="se-preparer_link-content">
                                            <span class="se-preparer_title">title 1</span>
                                            <div class="se-preparer__links-container">
                                              <a class="se-preparer_link" href="" >link1</a>
                                              <a class="se-preparer_link" href="" >link1</a>
                                              <a class="se-preparer_link" href="" >link1</a>
                                              <a class="se-preparer_link" href="" >link1</a>
                                              <a class="se-preparer_link" href="" >link1</a>
                                              <a class="se-preparer_link" href="" >link1</a>
                                            </div>
                                            </div>
                                  </li>
                                 </ul>
                              </div>
                          </div>

                          <div class="submenu-dropdown__group">
                              <div class="submenu-dropdown__group-title">
                                  <div>
                                  <span class="group-icon"></span>
                                  </div>
                                  <span class="group-title"></span>
                                  <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                  
                              </div>
                              <div class="group-container">
                                 <ul class="group-links">
                                  <li class="group-list">
                                   {{-- ici sera --}}
                                   <div class="se-preparer_images">
                                    <img src="{{url('assets/images/sePreparer/deplacerDormir/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                  <span class="se-preparer-img-desc">lien descr </span>
                                   </div>
                                   <div class="se-preparer_images">
                                    <img src="{{url('assets/images/sePreparer/deplacerDormir/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                    <span class="se-preparer-img-desc">lien descr </span>
                                   </div>
                                   <div class="se-preparer_images">
                                    <img src="{{url('assets/images/sePreparer/deplacerDormir/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                    <span class="se-preparer-img-desc">lien descr </span>
                                   </div>
                                   <div class="se-preparer_images">
                                    <img src="{{url('assets/images/sePreparer/deplacerDormir/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                    <span class="se-preparer-img-desc">lien descr </span>
                                   </div>

                                  </li>
                                 </ul>
                              </div>
                          </div>
                      </div>
                    </li>
                      </ul>
                    </div>
                      
                  </li>

                  <!-- start menu a faire -------------- -->

                  <li class="menu__link menu-principal__2">
                      <div class="menu-link__container">
                       
                          <span >A faire</span>
                      
                        </div> 
                      <div class="dropdown-menu">
                          <div class="dropdown-menu-deco"></div>
                        <ul class="dropdown-menu__links">
                          <li class="dropdown-menu__link show-group">    
                              <span class="dropdown-menu-link__title">
                                <span class="dropdown-menu-link__titl">
                                  Nature et activités de plein air<!-- Menu secondaire 2.1 -->
                                </span>
                                </span>
                              <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                              <div class="submenu-dopdown">
                                  <div class="submenu-dropdown__group">
                                      <div class="submenu-dropdown__group-title">
                                          <span class="group-title"></span>
                                          <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                          <span class="group-icon"></span>
                                      </div>
                                      <div class="group-container">
                                         <ul class="group-links">
                                          <li class="group-list">
                                               <div class="group-list__content">
                                                <span class="group-list__title">link title</span>
                                              <div class="group-list__links">
                                                <a class="group-list__link">link 1</a>
                                                <a class="group-list__link">link 1</a>
                                                <a class="group-list__link">link 1</a>
                                                <a class="group-list__link">link 1</a>
                                                <a class="group-list__link">link 1</a>
                                              </div>

                                               </div>

                                               <div class="group-list__content">
                                                <span class="group-list__title">link title</span>
                                              <div class="group-list__links">
                                                <a class="group-list__link">link 1</a>
                                                <a class="group-list__link">link 1</a>
                                                <a class="group-list__link">link 1</a>
                                                <a class="group-list__link">link 1</a>
                                                <a class="group-list__link">link 1</a>
                                              </div>

                                               </div>
                                          </li>
                                         </ul>
                                      </div>
                                  </div>
  
                                  <div class="submenu-dropdown__group">
                                      <div class="submenu-dropdown__group-title">
                                          <span class="group-title"></span>
                                          <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                          <span class="group-icon"></span>
                                      </div>
                                      <div class="group-container">
                                         <ul class="group-links">
                                          <li class="group-list">
                                            <div class="group-list__images">
                                              <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                              <span class="group-list__img-desc">image lien</span>
                                            </div>
                                            <div class="group-list__images">
                                              <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                              <span class="group-list__img-desc">image lien</span> 
                                            </div>
                                              <div class="group-list__images">
                                                <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                                <span class="group-list__img-desc">image lien</span>  
                                              </div>
                                                <div class="group-list__images">
                                                  <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                                  <span class="group-list__img-desc">image lien</span> 
                                                </div>
                                          </li>
                                         </ul>
                                      </div>
                                  </div>
                              </div>
                          </li>

                          <li class="dropdown-menu__link show-group">    
                            <span class="dropdown-menu-link__title">
                              <span class="dropdown-menu-link__titl">
                                Tradition<!-- Menu secondaire 2.1 -->
                              </span>
                              </span>
                            <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                            <div class="submenu-dopdown">
                                <div class="submenu-dropdown__group">
                                    <div class="submenu-dropdown__group-title">
                                        <span class="group-title"></span>
                                        <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                        <span class="group-icon"></span>
                                    </div>
                                    <div class="group-container">
                                       <ul class="group-links">
                                        <li class="group-list">
                                          
                                            <div class="group-list__content">
                                             <span class="group-list__title">link title</span>
                                           <div class="group-list__links">
                                             <a class="group-list__link">link 1</a>
                                             <a class="group-list__link">link 1</a>
                                             <a class="group-list__link">link 1</a>
                                             <a class="group-list__link">link 1</a>
                                             <a class="group-list__link">link 1</a>
                                           </div>

                                            </div>

                                            <div class="group-list__content">
                                             <span class="group-list__title">link title</span>
                                           <div class="group-list__links">
                                             <a class="group-list__link">link 1</a>
                                             <a class="group-list__link">link 1</a>
                                             <a class="group-list__link">link 1</a>
                                             <a class="group-list__link">link 1</a>
                                             <a class="group-list__link">link 1</a>
                                           </div>

                                            </div>
                                       
                                        </li>
                                       </ul>
                                    </div>
                                </div>

                                <div class="submenu-dropdown__group">
                                    <div class="submenu-dropdown__group-title">
                                        <span class="group-title">en-tête groupe 2.1.2</span>
                                        <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                        <span class="group-icon"></span>
                                    </div>
                                    <div class="group-container">
                                       <ul class="group-links">
                                        <li class="group-list">
                                          <div class="group-list__images">
                                            <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                            <span class="group-list__img-desc">image lien</span>
                                          </div>
                                          <div class="group-list__images">
                                            <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                            <span class="group-list__img-desc">image lien</span> 
                                          </div>
                                            <div class="group-list__images">
                                              <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                              <span class="group-list__img-desc">image lien</span>  
                                            </div>
                                              <div class="group-list__images">
                                                <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                                <span class="group-list__img-desc">image lien</span> 
                                              </div>
                                        </li>
                                       </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="dropdown-menu__link show-group">    
                          <span class="dropdown-menu-link__title">
                            <span class="dropdown-menu-link__titl">
                              Gastronomie<!-- Menu secondaire 2.1 -->
                            </span>
                            </span>
                          <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                          <div class="submenu-dopdown">
                              <div class="submenu-dropdown__group">
                                  <div class="submenu-dropdown__group-title">
                                      <span class="group-title"> </span>
                                      <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                      <span class="group-icon"></span>
                                  </div>
                                  <div class="group-container">
                                     <ul class="group-links">
                                      <li class="group-list">
                                      
                                          <div class="group-list__content">
                                           <span class="group-list__title">link title</span>
                                         <div class="group-list__links">
                                           <a class="group-list__link">link 1</a>
                                           <a class="group-list__link">link 1</a>
                                           <a class="group-list__link">link 1</a>
                                           <a class="group-list__link">link 1</a>
                                           <a class="group-list__link">link 1</a>
                                         </div>

                                          </div>

                                          <div class="group-list__content">
                                           <span class="group-list__title">link title</span>
                                         <div class="group-list__links">
                                           <a class="group-list__link">link 1</a>
                                           <a class="group-list__link">link 1</a>
                                           <a class="group-list__link">link 1</a>
                                           <a class="group-list__link">link 1</a>
                                           <a class="group-list__link">link 1</a>
                                         </div>

                                          </div>
                                     </li>
                                    
                                     </ul>
                                  </div>
                              </div>

                              <div class="submenu-dropdown__group">
                                  <div class="submenu-dropdown__group-title">
                                      <span class="group-title"></span>
                                      <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                      <span class="group-icon"></span>
                                  </div>
                                  <div class="group-container">
                                     <ul class="group-links">
                                      <li class="group-list">
                                        <div class="group-list__images">
                                          <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                          <span class="group-list__img-desc">image lien</span>
                                        </div>
                                        <div class="group-list__images">
                                          <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                          <span class="group-list__img-desc">image lien</span> 
                                        </div>
                                          <div class="group-list__images">
                                            <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                            <span class="group-list__img-desc">image lien</span>  
                                          </div>
                                            <div class="group-list__images">
                                              <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                              <span class="group-list__img-desc">image lien</span> 
                                            </div>
                                      </li>
                                     </ul>
                                  </div>
                              </div>
                          </div>
                      </li>

                      <li class="dropdown-menu__link show-group">    
                        <span class="dropdown-menu-link__title">
                          <span class="dropdown-menu-link__titl">
                            Art et Artisanat<!-- Menu secondaire 2.1 -->
                          </span>
                          </span>
                        <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                        <div class="submenu-dopdown">
                            <div class="submenu-dropdown__group">
                                <div class="submenu-dropdown__group-title">
                                    <span class="group-title"></span>
                                    <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                    <span class="group-icon"></span>
                                </div>
                                <div class="group-container">
                                   <ul class="group-links">
                                    <li class="group-list">
                                      
                                        <div class="group-list__content">
                                         <span class="group-list__title">link title</span>
                                       <div class="group-list__links">
                                         <a class="group-list__link">link 1</a>
                                         <a class="group-list__link">link 1</a>
                                         <a class="group-list__link">link 1</a>
                                         <a class="group-list__link">link 1</a>
                                         <a class="group-list__link">link 1</a>
                                       </div>

                                        </div>

                                        <div class="group-list__content">
                                         <span class="group-list__title">link title</span>
                                       <div class="group-list__links">
                                         <a class="group-list__link">link 1</a>
                                         <a class="group-list__link">link 1</a>
                                         <a class="group-list__link">link 1</a>
                                         <a class="group-list__link">link 1</a>
                                         <a class="group-list__link">link 1</a>
                                       </div>

                                        </div>
                                   </li>
                              
                                   </ul>
                                </div>
                            </div>

                            <div class="submenu-dropdown__group">
                                <div class="submenu-dropdown__group-title">
                                    <span class="group-title">en-tête groupe 2.1.2</span>
                                    <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                    <span class="group-icon"></span>
                                </div>
                                <div class="group-container">
                                   <ul class="group-links">
                                    <li class="group-list">
                                      <div class="group-list__images">
                                        <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                        <span class="group-list__img-desc">image lien</span>
                                      </div>
                                      <div class="group-list__images">
                                        <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                        <span class="group-list__img-desc">image lien</span> 
                                      </div>
                                        <div class="group-list__images">
                                          <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                          <span class="group-list__img-desc">image lien</span>  
                                        </div>
                                          <div class="group-list__images">
                                            <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                            <span class="group-list__img-desc">image lien</span> 
                                          </div>
                                    </li>
                                   </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown-menu__link show-group">    
                      <span class="dropdown-menu-link__title">
                        <span class="dropdown-menu-link__titl">
                          Villes et Pop culture<!-- Menu secondaire 2.1 -->
                        </span>
                        </span>
                      <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                      <div class="submenu-dopdown">
                          <div class="submenu-dropdown__group">
                              <div class="submenu-dropdown__group-title">
                                  <span class="group-title"></span>
                                  <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                  <span class="group-icon"></span>
                              </div>
                              <div class="group-container">
                                 <ul class="group-links">
                                  <li class="group-list">
                                    
                                      <div class="group-list__content">
                                       <span class="group-list__title">link title</span>
                                     <div class="group-list__links">
                                       <a class="group-list__link">link 1</a>
                                       <a class="group-list__link">link 1</a>
                                       <a class="group-list__link">link 1</a>
                                       <a class="group-list__link">link 1</a>
                                       <a class="group-list__link">link 1</a>
                                     </div>

                                      </div>

                                      <div class="group-list__content">
                                       <span class="group-list__title">link title</span>
                                     <div class="group-list__links">
                                       <a class="group-list__link">link 1</a>
                                       <a class="group-list__link">link 1</a>
                                       <a class="group-list__link">link 1</a>
                                       <a class="group-list__link">link 1</a>
                                       <a class="group-list__link">link 1</a>
                                     </div>

                                      </div>
                            
                                  </li>
                                 </ul>
                              </div>
                          </div>

                          <div class="submenu-dropdown__group">
                              <div class="submenu-dropdown__group-title">
                                  <span class="group-title">en-tête groupe 2.1.2</span>
                                  <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                  <span class="group-icon"></span>
                              </div>
                              <div class="group-container">
                                 <ul class="group-links">
                                  <li class="group-list">
                                    <div class="group-list__images">
                                      <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                      <span class="group-list__img-desc">image lien</span>
                                    </div>
                                    <div class="group-list__images">
                                      <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                      <span class="group-list__img-desc">image lien</span> 
                                    </div>
                                      <div class="group-list__images">
                                        <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                        <span class="group-list__img-desc">image lien</span>  
                                      </div>
                                        <div class="group-list__images">
                                          <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                          <span class="group-list__img-desc">image lien</span> 
                                        </div>
                                  </li>
                                 </ul>
                              </div>
                          </div>
                      </div>
                  </li>
                        </ul>
                      </div>
                  </li>

                  <!-- end menu a faire ------------- -->
                  <li class="menu__link menu-principal__4">
                      <div class="menu-link__container">
                          <span >Actu & Infos</span>   
                      </div>

                      <div class="dropdown-menu">
                        <div class="dropdown-menu-deco"></div>
                      <ul class="dropdown-menu__links">
                        <li class="dropdown-menu__link">
                            <span class="dropdown-menu-link__title">
                              <span class="dropdown-menu-link__titl">
                             <!-- Menu secondaire 1.1 -->
                             </span>
                            </span>
                            <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                            <div class="submenu-dopdown">
                                <div class="submenu-dropdown__group">
                                    <div class="submenu-dropdown__group-title">
                                        <div>
                                            <span class="group-icon"><i class="ri-home-gear-line"></i></span>
                                        </div>
                                            <span class="group-title"></span>
                                           
                                        <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                    </div>
                                    <div class="group-container">
                                       <ul class="group-links">
                                        <li class="group-list">
                                            <a href="" class="group-link">Actualités</a>
                                        </li>
                                        <li class="group-list">
                                            <a href="" class="group-link">Newsletters</a>
                                        </li>
                                       </ul>
                                    </div>
                                </div>

                                <div class="submenu-dropdown__group">
                                    <div class="submenu-dropdown__group-title">
                                        <div>
                                        <span class="group-icon"><i class="ri-home-gear-line"></i></span>
                                        </div>
                                        <span class="group-title"></span>
                                        <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                        
                                    </div>
                                    <div class="group-container">
                                       <ul class="group-links">
                                        <li class="group-list">
                                            <a href="" class="group-link">Information des nos partenaires</a>
                                        </li>
                                        <li class="group-list">
                                            <a href="" class="group-link">Articles des voyages</a>
                                        </li>
                                       </ul>
                                    </div>
                                </div>


{{-- 
                                <div class="menu-partenaires__marquee-container" >
                                  <div class="marquee">
                                    <ul class="marquee-elmts">
                                        <li>
                                          <div class="menu-marquee__image">
                                             <img src="{{url('assets/images/menu_marquee/lola-ya-bonobo.webp')}}" alt="" class="menu-marquee__img">
                                          </div>
                                        </li>
                                        <li>
                                          <div class="menu-marquee__image">
                                            <img src="{{url('assets/images/menu_marquee/aqua-splash.jpg')}}" alt="" class="menu-marquee__img">
                                         </div>
                                        </li>
                                        <li>
                                          <div class="menu-marquee__image">
                                          <img src="{{url('assets/images/menu_marquee/virunga.webp')}}" alt="" class="menu-marquee__img">
                                       </div>
                                      </li>
                                        <li>
                                          <div class="menu-marquee__image">
                                            <img src="{{url('assets/images/menu_marquee/lola-ya-bonobo.webp')}}" alt="" class="menu-marquee__img">
                                         </div>
                                        </li>
                                        <li>
                                          <div class="menu-marquee__image">
                                            <img src="{{url('assets/images/menu_marquee/aqua-splash.jpg')}}" alt="" class="menu-marquee__img">
                                         </div>
                                        </li>
                                        <li>
                                          <div class="menu-marquee__image">
                                            <img src="{{url('assets/images/menu_marquee/virunga.webp')}}" alt="" class="menu-marquee__img">
                                         </div>
                                        </li>
                                        <li>
                                          <div class="menu-marquee__image">
                                            <img src="{{url('assets/images/menu_marquee/lola-ya-bonobo.webp')}}" alt="" class="menu-marquee__img">
                                         </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                                </div> --}}
                            </div>
                        </li>
                      </ul>
                    </div>
                  </li>

                  <!-- search bar============================== -->
                  <li class="menu__link">
                    <div class="menu-link__container">
                        <span ><i class="ri-search-line menu__link-icon"></i></span>  <!--======bar the research===== -->
                    </div>                    
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-deco"></div>
                      <ul class="dropdown-menu__links">
                        <li class="dropdown-menu__link">
                            <span class="dropdown-menu-link__title">
                              <form action="" method="get">
                                <div class="nav-type-of__search__container">
                              <select name="type-of-search" id="search-type" class="nav-type-of__search">
                                <option value="article" class="search-option-dropdown">Article</option>
                                <option value="brochure" class="search-option-dropdown">Brochure</option>
                                <option value="attraits" class="search-option-dropdown">Attraits</option>
                              </select>
                              </div>
                             <input type="text" class="search-box__text" id="search-box" name="seach_box" />
                             <div class="search-box-button__container">
                                <button class="search-box-button"><i class="ri-search-line"></i></button>
                            </div>
                            <div class="nav-search__option">
                              <div class="search-option__item search-option__item-1">
                                   <input type="date" name="" id="" class="nav-search-option-date">
                                   <select name="" id="" class="nav-search-option-type">
                                    <option value="">author 1</option>
                                    <option value="">author 1</option>
                                    <option value="">author 1</option>
                                   </select>
                              </div>

                              <div class="search-option__item search-option__item-2">
                                <input type="date" name="" id="" class="nav-search-option-data">
                                <select name="" id="" class="nav-search-option-type">
                                 <option value="">brochure type 1</option>
                                 <option value="">brochure type 2</option>
                                </select>
                           </div>

                           <div class="search-option__item search-option__item-3">
                            <select name="" id="" class="nav-search-option-type">
                             <option value="">city 1</option>
                             <option value="">city 2</option>
                             <option value="">city 3</option>
                            </select>
                           </div>

                            </div>
                            </form>
                            </span>
                            <div class="submenu-dopdown">
                                <div class="submenu-dropdown__group">
                                    <div class="submenu-dropdown__group-title">
                                            <span class="group-title">Search result</span>
                                    </div>
                                    <div class="group-container">
                                       <ul class="group-links">
                                        <li class="group-list">
                                            <a href="" class="group-link">result line</a>
                                        </li>
                                       </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                      </ul>
                    </div>
                </li>
                  <!-- end search bar ========================= -->
              </ul>
  
              <div class="menu-close">
                  <i class="ri-close-line"></i>
              </div>
            </div>

            <!-- <div class="search-nav">
              <div><i class="ri-search-line"></i></div>
            </div> -->
  
          </div>
       </div>

{{-- </x-app-layout> --}}