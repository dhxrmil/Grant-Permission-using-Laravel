
<div class="c-sidebar-brand">
            <img class="c-sidebar-brand-full" src="{{ url('/assets/brand/coreui-base-white.svg') }}" width="135" height="46" alt="CoreUI Logo">
            <img class="c-sidebar-brand-minimized" src="{{ url('assets/brand/coreui-signet-white.svg') }}" width="118" height="46" alt="CoreUI Logo">
        </div><br>
        <ul class="c-sidebar-nav">
            @if($data)
            @if($data['0']['create'] != 0 || $data['0']['read'] != 0 || $data['0']['update'] != 0 || $data['0']['delete'] != 0 )
                    
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="/user/sports" style="color:silver;font-size:20px;font-family:cursive";>               
                        <i class="cil-basketball"></i>&nbsp&nbsp&nbsp
                                Sports
                        </a>
                    </li>
              @endif
              @if($data['1']['create'] != 0 || $data['1']['read'] != 0 || $data['1']['update'] != 0 || $data['1']['delete'] != 0 )

                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="/user/electronics" style="color:silver;font-size:20px;font-family:cursive";>
                                <i class="cil-tv"></i>&nbsp&nbsp&nbsp
                                Electronics
                        </a>
                    </li>
              @endif
              @if($data['2']['create'] != 0 || $data['2']['read'] != 0 || $data['2']['update'] != 0 || $data['2']['delete'] != 0 )
                    
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="/user/furniture" style="color:silver;font-size:20px;font-family:cursive";>
                                <i class="cil-couch"></i>&nbsp&nbsp&nbsp
                                Furniture
                        </a>
                    </li>
              @endif
              @endif
        </ul>
        <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>

