<div class="header">
    <div>
          <ul class="navbar-nav">
              <!-- begin::navigation-toggler -->
              
              <li class="nav-item navigation-toggler mobile-toggler">
                  <a href="#" class="nav-link" title="Show navigation">
                      <i data-feather="menu"></i>
                  </a>
              </li>
              <!-- end::navigation-toggler -->
  
          </ul>
      </div>
      <div>
          <ul class="navbar-nav">
                 <li class="nav-item dropdown">
                  <a href="#" class="nav-link nav-link-notify" title="Notifications" data-toggle="dropdown">
                      <i data-feather="bell"></i> <span style="color:red"> {{count($unread_notify)}}</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                      <div class="p-4 text-center d-flex justify-content-between"
                           data-backround-image="assets/media/image/image1.jpg">
                          <h6 class="mb-0">Notifications</h6>
                          <small class="font-size-11 opacity-7">{{count($unread_notify)}} unread notifications</small>
                      </div>
                      <div>
                          <ul class="list-group list-group-flush">
                          @if(count($unread_notify) > 0)
                           @foreach ($unread_notify as $noti )
                              <li>
                                  <a href="" class="list-group-item d-flex hide-show-toggler">
                                      <div>
                                          <figure class="avatar avatar-sm m-r-15">
                                                  <span class="avatar-title bg-success-bright text-success rounded-circle">
                                                      <i class="ti-bell"></i>
                                                  </span>
                                          </figure>
                                      </div>
                                      <div class="flex-grow-1">
                                          <p class="mb-0 line-height-20 d-flex justify-content-between">
                                              {{$noti->message}}
                                              <i title="Mark as read" data-toggle="tooltip"
                                                 class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                          </p>
                                          <span class="text-muted small">{{$noti->created_at->DiffForHumans()}}</span>
                                      </div>
                                   
                                  </a>
                              </li>
                            @endforeach
                            @endif
                              <li class="text-divider small pb-2 pl-3 pt-3">
                                  <span>Old notifications</span>
                              </li>
                              @if(count($read_notify) > 0)
                               @foreach ($read_notify as $notif )
                              <li>
                                  <a href="#" class="list-group-item d-flex hide-show-toggler">
                                      <div>
                                          <figure class="avatar avatar-sm m-r-15">
                                                  <span class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                      <i class="ti-bell"></i>
                                                  </span>
                                          </figure>
                                      </div>
                                      <div class="flex-grow-1">
                                          <p class="mb-0 line-height-20 d-flex justify-content-between">
                                             {{$notif->message}}
                                              <i title="Mark as unread" data-toggle="tooltip"
                                                 class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                          </p>
                                          <span class="text-muted small">{{$notif->created_at->DiffForHumans()}}</span>
                                      </div>
                                  </a>
                              </li>
                              @endforeach
                              @endif
                             @if(count($read_notify) > 0)
                                <a href="#" class="list-group-item d-flex hide-show-toggler">
                                      <div>
                                          <figure class="avatar avatar-sm m-r-15">
                                                  <span class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                      <i class="ti-trash"></i>
                                                  </span>
                                          </figure>
                                      </div>
                                      {{-- {{Form::open(['action' => 'AdminController@AdminNotify_clear', 'method' => 'post'])}} --}}
                                      <div class="flex-grow-1">
                                          <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            <button style="border:none">
                                             Clear Notifications
                                             </button>
                                              <i title="Clear all" data-toggle="tooltip"
                                                 class="fa fa-trash font-size-11"></i>
                                          </p>
                                          <span class="text-muted small"></span>
                                      </div>
                                      {{-- {{Form::close()}} --}}
                                  </a>
                                  @endif
                              </li>
                          </ul>
                      </div>
                   
                  </div>
              </li>
              <!-- end::header notification dropdown -->
              <!-- begin::user menu -->
              <li class="nav-item dropdown">
                  <a href="{{route('admin.settings.index')}}" class="nav-link" title="User menu" >
                      <i data-feather="settings"></i>
                  </a>
              </li>
              <!-- end::user menu -->
          </ul>
          <!-- begin::mobile header toggler -->
          <ul class="navbar-nav d-flex align-items-center">
              <li class="nav-item header-toggler">
                  <a href="#" class="nav-link">
                      <i data-feather="arrow-down"></i>
                  </a>
              </li>
          </ul>
          <!-- end::mobile header toggler -->
      </div>
  </div>