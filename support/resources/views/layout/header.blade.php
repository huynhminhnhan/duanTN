<div class="container-scroller">
  <!-- partial:partials/_navbar.html -->
  <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
      <a class="navbar-brand brand-logo" href="/">
        <img src="../assets/images/logo.svg" alt="logo" /> 
      </a>
      <a class="navbar-brand brand-logo-mini" href="/">
        <img src="../assets/images/logo-mini.svg" alt="logo" /> 
      </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
      <ul class="navbar-nav">
        <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li>
      </ul>
      <form class="ml-auto search-form d-none d-md-block" action="#">
        <div class="form-group">
          <input type="search" class="form-control" placeholder="Search Here">
        </div>
      </form>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <i class="mdi mdi-bell-outline"></i>
            <span class="count">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
            <a class="dropdown-item py-3">
              <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
              <span class="badge badge-pill badge-primary float-right">View all</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="../assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic"> </div>
              <div class="preview-item-content flex-grow py-2">
                <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                <p class="font-weight-light small-text"> The meeting is cancelled </p>
              </div>
            </a>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="../assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic"> </div>
              <div class="preview-item-content flex-grow py-2">
                <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                <p class="font-weight-light small-text"> The meeting is cancelled </p>
              </div>
            </a>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="../assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic"> </div>
              <div class="preview-item-content flex-grow py-2">
                <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                <p class="font-weight-light small-text"> The meeting is cancelled </p>
              </div>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="mdi mdi-email-outline"></i>
            <span class="count bg-success">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
            <a class="dropdown-item py-3 border-bottom">
              <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
              <span class="badge badge-pill badge-primary float-right">View all</span>
            </a>
            <a class="dropdown-item preview-item py-3">
              <div class="preview-thumbnail">
                <i class="mdi mdi-alert m-auto text-primary"></i>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                <p class="font-weight-light small-text mb-0"> Just now </p>
              </div>
            </a>
            <a class="dropdown-item preview-item py-3">
              <div class="preview-thumbnail">
                <i class="mdi mdi-settings m-auto text-primary"></i>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                <p class="font-weight-light small-text mb-0"> Private message </p>
              </div>
            </a>
            <a class="dropdown-item preview-item py-3">
              <div class="preview-thumbnail">
                <i class="mdi mdi-airballoon m-auto text-primary"></i>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                <p class="font-weight-light small-text mb-0"> 2 days ago </p>
              </div>
            </a>
          </div>
        </li>
        
        <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
          <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <img class="img-xs rounded-circle" src="{{(session()->get('AccountInfor')['avatar'])}}" alt="Profile image"> </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
            <div class="dropdown-header text-center">
              <img class="img-md rounded-circle" src="{{(session()->get('AccountInfor')['avatar'])}}" alt="Profile image">
              <p class="mb-1 mt-3 font-weight-semibold">{{(session()->get('AccountInfor')['name'])}}</p>
            </div>
            <a class="nav-link pl-3" href="profile">My profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
            <a class="nav-link pl-3">Messages
              <i class="dropdown-item-icon ti-comment-alt"></i>
            </a>
            <a class="nav-link pl-3">Activity
              <i class="dropdown-item-icon ti-location-arrow"></i>
            </a>
            <a class="nav-link pl-3">FAQ
              <i class="dropdown-item-icon ti-help-alt"></i>
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>

  
  <div class="container-fluid page-body-wrapper">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-profile">
          <a href="#" class="nav-link">
            <div class="profile-image">
              <img class="img-xs rounded-circle" src="{{(session()->get('AccountInfor')['avatar'])}}" alt="profile image">
              <div class="dot-indicator bg-success"></div>
            </div>
            <div class="text-wrapper">
              <p class="profile-name">{{(session()->get('AccountInfor')['name'])}}</p>
            <p class="designation">{{(session()->get('AccountInfor')['roles'][0])}} user</p> 
            </div>
          </a>
        </li>
        {{-- menu  --}}
        <li class="nav-item nav-category">Main Menu</li>
        <li class="nav-item">
          <a class="nav-link" href="/">
            <i class="menu-icon typcn typcn-document-text"></i>
            <span class="menu-title">Trang Chủ</span>
          </a>
        </li>
        {{-- dem so cau hoi --}}
        @php 
        if((session()->get('AccountInfor')['roles'][0])== 'student'){
          $functionCount = 'coutQuestionUser';
        }else{
          $functionCount = 'coutEmployee';
        }
        $qs_new = $number->$functionCount((session()->get('AccountInfor')['user_id']),0);
        $qs_handling = $number->$functionCount((session()->get('AccountInfor')['user_id']),1);
        $qs_answered = $number->$functionCount((session()->get('AccountInfor')['user_id']),2);
        $qs_done = $number->$functionCount((session()->get('AccountInfor')['user_id']),3);
        @endphp
        {{-- het dem so  --}}
            @if(in_array('student',session()->get('AccountInfor')['roles']))
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="menu-icon typcn typcn-coffee"></i>
            <span class="menu-title">HỖ TRỢ</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse show" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="/new-request">Gửi yêu cầu mới</a>
                </li>
              
                <li class="nav-item">
                  <a class="nav-link" href="/support/request-new">Yêu cầu mới gửi
                    @if($qs_new !== 0)
                    <strong style="color:yellow">&nbsp; ({{$qs_new}})</strong>
                    @endif
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/support/handling">Nhân viên đang xử lý
                    @if($qs_handling !== 0)
                    <strong style="color:yellow">&nbsp; ({{$qs_handling}})</strong>
                    @endif
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/support/answered">Nhân viên đã trả lời
                    @if($qs_answered !== 0)
                    <strong style="color:yellow">&nbsp; ({{$qs_answered}})</strong>
                    @endif
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/support/done-handling">Nhân viên đã xử lý xong
                    @if($qs_done !== 0)
                    <strong style="color:yellow">&nbsp; ({{$qs_done}})</strong>
                    @endif
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/search-question">Tra cứu câu hỏi</a>
                </li>
            </ul>
          </div>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
            <i class="menu-icon typcn typcn-coffee"></i>
            <span class="menu-title">NHIỆM VỤ CỦA TÔI</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic1">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
              <a class="nav-link" href="/mission/handling">Nhiệm vụ đang xử lý 
                @if($qs_handling !== 0)
                  <strong style="color:yellow">&nbsp; ({{$qs_handling}})</strong>
                  @endif</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/mission/answered">Câu hỏi đã trả lời
                    @if($qs_answered !== 0)
                    <strong style="color:yellow">&nbsp; ({{$qs_answered}})</strong>
                    @endif</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/mission/done-handling">Câu hỏi đã xong
                    @if($qs_done !== 0)
                    <strong style="color:yellow">&nbsp; ({{$qs_done}})</strong>
                    @endif</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/mission/research">Đang nghiêm cứu</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
            <i class="menu-icon typcn typcn-coffee"></i>
              <span class="menu-title">NHIỆM VỤ CHUNG</span>
                @php 
                $qs_new = $number->coutAll(0);
                $qs_handling = $number->coutAll(1);
                
              @endphp
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="/mission/new-request">Xem yêu cầu mới
                    @if($qs_new !== 0)
                      <strong style="color:yellow">&nbsp; ({{$qs_new}})</strong>
                    @endif
                    </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/mission/request">Xem yêu cầu chưa tiếp nhận
                    @if($qs_new !== 0)
                  <strong style="color:yellow">&nbsp; ({{$qs_new}})</strong>
                    @endif
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/mission/handling">Đang xử lý
                    @if($qs_handling !== 0)
                      <strong style="color:yellow">&nbsp; ({{$qs_handling}})</strong>
                    @endif
                    </a>
                </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">NỘI BỘ</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/internal/timekeeping">Xem chấm công</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/internal/calendar">Xem lịch trực</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/internal/permission-form
                        ">Tạo đơn xin phép</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/internal/punish">Ghi phạt nội bộ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/internal/payroll">Xem bảng lương</a>
                    </li>
                    @if(in_array('admin',session()->get('AccountInfor')['roles']))
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/sendNotification">Gửi thông báo đến các phòng</a>
                    </li>
                      @endif
                </ul>
            </div>
        </li>
        @endif

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic3">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Nhân sự</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/Employee/importChamCong">Import Chấm công</a>
                    </li>
                   
                </ul>
            </div>
        </li>
      </ul>
    </nav>
