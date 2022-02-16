@extends('backend.questions.master')

@section('title', 'All Topics')

@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset('css/base/pages/app-question-bank.css') }}">
@endsection

{{-- Include Sidebar Content --}}
@include('backend/questions/sidebar')

@section('content')

  <div class="todo-app-list-wrapper">
    <div class="todo-app-list">
      <div class="app-fixed-search">
        <div class="input-group m-0">
          <div class="input-group-append">
            <button class="btn" type="button">
              <i data-feather="search"></i>
            </button>
          </div>
          <input type="text" class="form-control" id="todo-search" placeholder="Search this blog">
        </div>
      </div>
      <div class="todo-task-list list-group">
        <ul class="todo-task-list-wrapper media-list">
          <li class="todo-item" data-toggle="modal" data-target="#editTaskModal">
            <div class="todo-title-wrapper d-flex justify-content-between mb-50">
              <div class="todo-title-area d-flex align-items-center">
                <div class="title-wrapper d-flex">
                  <div class="vs-checkbox-con">
                    <input type="checkbox">
                    <span class="vs-checkbox vs-checkbox-sm">
                      <span class="vs-checkbox--check">
                          <i class="vs-icon feather icon-check"></i>
                      </span>
                    </span>
                  </div>
                  <p class="todo-desc truncate mb-0">Jelly topping toffee bear claw. Sesame snaps lollipop macaroon croissant
                    cheesecake pastry cupcake.</p>
                </div>
              </div>
            </div>
          </li>
{{--          <li class="todo-item" data-toggle="modal" data-target="#editTaskModal">--}}
{{--            <div class="todo-title-wrapper d-flex justify-content-between mb-50">--}}
{{--              <div class="todo-title-area d-flex align-items-center">--}}
{{--                <div class="title-wrapper d-flex">--}}
{{--                  <div class="vs-checkbox-con">--}}
{{--                    <input type="checkbox">--}}
{{--                    <span class="vs-checkbox vs-checkbox-sm">--}}
{{--                              <span class="vs-checkbox--check">--}}
{{--                                <i class="vs-icon feather icon-check"></i>--}}
{{--                              </span>--}}
{{--                            </span>--}}
{{--                  </div>--}}
{{--                  <h6 class="todo-title mt-50 mx-50">Meet Jane ❤️</h6>--}}
{{--                </div>--}}
{{--                <div class="chip-wrapper">--}}
{{--                  <div class="chip mb-0">--}}
{{--                    <div class="chip-body">--}}
{{--                      <span class="chip-text" data-value="Frontend"><span--}}
{{--                                class="bullet bullet-primary bullet-xs"></span> Frontend</span>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="chip mb-0">--}}
{{--                    <div class="chip-body">--}}
{{--                      <span class="chip-text" data-value="Backend"><span class="bullet bullet-warning bullet-xs"></span> Backend</span>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="chip mb-0">--}}
{{--                    <div class="chip-body">--}}
{{--                      <span class="chip-text" data-value="Doc"><span class="bullet bullet-success bullet-xs"></span> Doc</span>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="float-right todo-item-action d-flex">--}}
{{--                <a class='todo-item-info success'><i class="feather icon-info"></i></a>--}}
{{--                <a class='todo-item-favorite warning'><i class="feather icon-star"></i></a>--}}
{{--                <a class='todo-item-delete'><i class="feather icon-trash"></i></a>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <p class="todo-desc truncate mb-0">Toffee sugar plum oat cake tiramisu tart bonbon gingerbread cheesecake--}}
{{--              cake.</p>--}}
{{--          </li>--}}
{{--          <li class="todo-item" data-toggle="modal" data-target="#editTaskModal">--}}
{{--            <div class="todo-title-wrapper d-flex justify-content-between mb-50">--}}
{{--              <div class="todo-title-area d-flex align-items-center">--}}
{{--                <div class="title-wrapper d-flex">--}}
{{--                  <div class="vs-checkbox-con">--}}
{{--                    <input type="checkbox">--}}
{{--                    <span class="vs-checkbox vs-checkbox-sm">--}}
{{--                              <span class="vs-checkbox--check">--}}
{{--                                <i class="vs-icon feather icon-check"></i>--}}
{{--                              </span>--}}
{{--                            </span>--}}
{{--                  </div>--}}
{{--                  <h6 class="todo-title mt-50 mx-50">Pick up Natasha 😁</h6>--}}
{{--                </div>--}}
{{--                <div class="chip-wrapper">--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="float-right todo-item-action d-flex">--}}
{{--                <a class='todo-item-info success'><i class="feather icon-info"></i></a>--}}
{{--                <a class='todo-item-favorite warning'><i class="feather icon-star"></i></a>--}}
{{--                <a class='todo-item-delete'><i class="feather icon-trash"></i></a>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <p class="todo-desc truncate mb-0">Sweet roll toffee dragée cotton candy jelly beans halvah gingerbread--}}
{{--              jelly-o. Ice cream bear claw sugar plum powder.</p>--}}
{{--          </li>--}}
{{--          <li class="todo-item completed" data-toggle="modal" data-target="#editTaskModal">--}}
{{--            <div class="todo-title-wrapper d-flex justify-content-between mb-50">--}}
{{--              <div class="todo-title-area d-flex align-items-center">--}}
{{--                <div class="title-wrapper d-flex">--}}
{{--                  <div class="vs-checkbox-con">--}}
{{--                    <input type="checkbox" checked>--}}
{{--                    <span class="vs-checkbox vs-checkbox-sm">--}}
{{--                              <span class="vs-checkbox--check">--}}
{{--                                <i class="vs-icon feather icon-check"></i>--}}
{{--                              </span>--}}
{{--                            </span>--}}
{{--                  </div>--}}
{{--                  <h6 class="todo-title mt-50 mx-50">Skype Tommy</h6>--}}
{{--                </div>--}}
{{--                <div class="chip-wrapper">--}}
{{--                  <div class="chip mb-0">--}}
{{--                    <div class="chip-body">--}}
{{--                      <span class="chip-text" data-value="Bug"><span class="bullet bullet-danger bullet-xs"></span> Bug</span>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="float-right todo-item-action d-flex">--}}
{{--                <a class='todo-item-info'><i class="feather icon-info"></i></a>--}}
{{--                <a class='todo-item-favorite'><i class="feather icon-star"></i></a>--}}
{{--                <a class='todo-item-delete'><i class="feather icon-trash"></i></a>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <p class="todo-desc truncate mb-0">Tart oat cake sesame snaps lollipop croissant cake biscuit.</p>--}}
{{--          </li>--}}
{{--          <li class="todo-item" data-toggle="modal" data-target="#editTaskModal">--}}
{{--            <div class="todo-title-wrapper d-flex justify-content-between mb-50">--}}
{{--              <div class="todo-title-area d-flex align-items-center">--}}
{{--                <div class="title-wrapper d-flex">--}}
{{--                  <div class="vs-checkbox-con">--}}
{{--                    <input type="checkbox">--}}
{{--                    <span class="vs-checkbox vs-checkbox-sm">--}}
{{--                              <span class="vs-checkbox--check">--}}
{{--                                <i class="vs-icon feather icon-check"></i>--}}
{{--                              </span>--}}
{{--                            </span>--}}
{{--                  </div>--}}
{{--                  <h6 class="todo-title mt-50 mx-50">Send PPT 🎁</h6>--}}
{{--                </div>--}}
{{--                <div class="chip-wrapper">--}}
{{--                  <div class="chip mb-0">--}}
{{--                    <div class="chip-body">--}}
{{--                      <span class="chip-text" data-value="Backend"><span class="bullet bullet-warning bullet-xs"></span> Backend</span>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="chip mb-0">--}}
{{--                    <div class="chip-body">--}}
{{--                      <span class="chip-text" data-value="Doc"><span class="bullet bullet-success bullet-xs"></span> Doc</span>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="float-right todo-item-action d-flex">--}}
{{--                <a class='todo-item-info success'><i class="feather icon-info"></i></a>--}}
{{--                <a class='todo-item-favorite warning'><i class="feather icon-star"></i></a>--}}
{{--                <a class='todo-item-delete'><i class="feather icon-trash"></i></a>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <p class="todo-desc truncate mb-0">Dragée gummi bears tiramisu brownie cookie. Jelly beans pudding marzipan--}}
{{--              fruitcake muffin. Wafer gummi bears lollipop pudding lollipop biscuit.</p>--}}
{{--          </li>--}}
{{--          <li class="todo-item" data-toggle="modal" data-target="#editTaskModal">--}}
{{--            <div class="todo-title-wrapper d-flex justify-content-between mb-50">--}}
{{--              <div class="todo-title-area d-flex align-items-center">--}}
{{--                <div class="title-wrapper d-flex">--}}
{{--                  <div class="vs-checkbox-con">--}}
{{--                    <input type="checkbox">--}}
{{--                    <span class="vs-checkbox vs-checkbox-sm">--}}
{{--                              <span class="vs-checkbox--check">--}}
{{--                                <i class="vs-icon feather icon-check"></i>--}}
{{--                              </span>--}}
{{--                            </span>--}}
{{--                  </div>--}}
{{--                  <h6 class="todo-title mt-50 mx-50">Submit Report</h6>--}}
{{--                </div>--}}
{{--                <div class="chip-wrapper">--}}
{{--                  <div class="chip mb-0">--}}
{{--                    <div class="chip-body">--}}
{{--                      <span class="chip-text" data-value="Frontend"><span--}}
{{--                                class="bullet bullet-primary bullet-xs"></span> Frontend</span>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="chip mb-0">--}}
{{--                    <div class="chip-body">--}}
{{--                      <span class="chip-text" data-value="Doc"><span class="bullet bullet-success bullet-xs"></span> Doc</span>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="float-right todo-item-action d-flex">--}}
{{--                <a class='todo-item-info'><i class="feather icon-info"></i></a>--}}
{{--                <a class='todo-item-favorite warning'><i class="feather icon-star"></i></a>--}}
{{--                <a class='todo-item-delete'><i class="feather icon-trash"></i></a>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <p class="todo-desc truncate mb-0">Donut tart toffee cake cookie gingerbread. Sesame snaps brownie sugar--}}
{{--              plum candy canes muffin cotton candy.</p>--}}
{{--          </li>--}}
{{--          <li class="todo-item" data-toggle="modal" data-target="#editTaskModal">--}}
{{--            <div class="todo-title-wrapper d-flex justify-content-between mb-50">--}}
{{--              <div class="todo-title-area d-flex align-items-center">--}}
{{--                <div class="title-wrapper d-flex">--}}
{{--                  <div class="vs-checkbox-con">--}}
{{--                    <input type="checkbox">--}}
{{--                    <span class="vs-checkbox vs-checkbox-sm">--}}
{{--                              <span class="vs-checkbox--check">--}}
{{--                                <i class="vs-icon feather icon-check"></i>--}}
{{--                              </span>--}}
{{--                            </span>--}}
{{--                  </div>--}}
{{--                  <h6 class="todo-title mt-50 mx-50">Refactor Code</h6>--}}
{{--                </div>--}}
{{--                <div class="chip-wrapper">--}}
{{--                  <div class="chip mb-0">--}}
{{--                    <div class="chip-body">--}}
{{--                      <span class="chip-text" data-value="Doc"><span class="bullet bullet-success bullet-xs"></span> Doc</span>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="chip mb-0">--}}
{{--                    <div class="chip-body">--}}
{{--                      <span class="chip-text" data-value="Backend"><span class="bullet bullet-warning bullet-xs"></span> Backend</span>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="float-right todo-item-action d-flex">--}}
{{--                <a class='todo-item-info success'><i class="feather icon-info"></i></a>--}}
{{--                <a class='todo-item-favorite warning'><i class="feather icon-star"></i></a>--}}
{{--                <a class='todo-item-delete'><i class="feather icon-trash"></i></a>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <p class="todo-desc truncate mb-0">Pie liquorice wafer cotton candy danish. Icing topping jelly-o halvah--}}
{{--              pastry lollipop.</p>--}}
{{--          </li>--}}
        </ul>
        <div class="no-results">
            <div class="d-flex flex-column justify-content-center">
                <div class="empty-search-item" style="text-align: center">
                    {{--        <span class="glyphicon glyphicon-inbox"></span>--}}
                    <i data-feather="inbox"></i>
                </div>
                <div class="empty-search-item" style="text-align: center"> <h6 class="text-muted">This is empty</h6></div>
                <div class="empty-search-item" style="text-align: center"><p>Please select a Category first then select Topic</p></div>
                <div class="empty-search-item" style="text-align: center"><p>You can see all questions here</p></div>
                <div class="empty-search-item" style="text-align: center"> <a class="btn btn-primary">Create Question</a></div>
            </div>
{{--          <a href="" class="btn btn-success d-inline-flex align-items-center"><i class="fab fa-whatsapp h1 my-0 pr-2"></i>Whatsapp</a>--}}
        </div>
      </div>
    </div>
  </div>
@endsection


@section('page-script')
  <script src="{{ asset('js/scripts/pages/app-todo.js') }}"></script>
@endsection

