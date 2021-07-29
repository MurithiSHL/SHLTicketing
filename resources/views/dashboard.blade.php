@extends('partials.header')
@section('content')
   <h2>{{$content}}</h2>

   @verbatim
   <div class="page-separator">
                                    <div class="page-separator__text">Projects</div>
                                </div>

                                <div class="card dashboard-area-tabs mb-lg-0">
                                    <div class="card-header p-0 nav">
                                        <div class="row no-gutters"
                                             role="tablist">
                                            <div class="col-auto">
                                                <a href="#"
                                                   data-toggle="tab"
                                                   role="tab"
                                                   aria-selected="true"
                                                   class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                                    <span class="h2 mb-0 mr-3">3</span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong>Active</strong>
                                                        <small class="text-50">Ongoing Projects</small>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="col-auto border-left border-right">
                                                <a href="#"
                                                   data-toggle="tab"
                                                   role="tab"
                                                   aria-selected="false"
                                                   class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                                    <span class="h2 mb-0 mr-3">2</span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong>Archived</strong>
                                                        <small class="text-50">Past Projects</small>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive"
                                         data-toggle="lists"
                                         data-lists-sort-by="js-lists-values-date"
                                         data-lists-sort-desc="true"
                                         data-lists-values='["js-lists-values-lead", "js-lists-values-project", "js-lists-values-status", "js-lists-values-budget", "js-lists-values-date"]'>

                                        <table class="table mb-0 thead-border-top-0 table-nowrap">
                                            <thead>
                                                <tr>

                                                    <th style="width: 18px;"
                                                        class="pr-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-toggle-check-all"
                                                                   data-target="#projects"
                                                                   id="customCheckAll">
                                                            <label class="custom-control-label"
                                                                   for="customCheckAll"><span class="text-hide">Toggle all</span></label>
                                                        </div>
                                                    </th>

                                                    <th style="width: 150px;">
                                                        <a href="javascript:void(0)"
                                                           class="sort"
                                                           data-sort="js-lists-values-project">Project</a>
                                                    </th>

                                                    <th>
                                                        <a href="javascript:void(0)"
                                                           class="sort"
                                                           data-sort="js-lists-values-lead">Lead / Team</a>
                                                    </th>

                                                    <th style="width: 48px;">
                                                        <a href="javascript:void(0)"
                                                           class="sort"
                                                           data-sort="js-lists-values-date">Due</a>
                                                    </th>
                                                    <th style="width: 24px;"></th>
                                                </tr>
                                            </thead>
                                            <tbody class="list"
                                                   id="projects">

                                                <tr>
                                                <td class="pr-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_1">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_1"><span class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>

                                                    <td>

                                                        <div class="media flex-nowrap align-items-center"
                                                             style="white-space: nowrap;">
                                                            <div class="avatar avatar-sm mr-8pt">
                                                                <span class="avatar-title rounded bg-primary text-white">SM</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="d-flex flex-column">
                                                                    <small class="js-lists-values-project"><strong>Social Media API</strong></small>
                                                                    <small class="js-lists-values-location text-50">Twitter</small>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </td>

                                                    <td>

                                                        <div class="media flex-nowrap align-items-center"
                                                             style="white-space: nowrap;">
                                                            <div class="avatar avatar-32pt mr-8pt">

                                                                <span class="avatar-title rounded-circle">BN</span>

                                                            </div>
                                                            <div class="media-body">

                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex d-flex flex-column">
                                                                        <p class="mb-0"><strong class="js-lists-values-lead">Billy Nunez</strong></p>
                                                                        <small class="js-lists-values-email text-50">Quality Assurance</small>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </td>

                                                    <td>
                                                        <div class="d-flex flex-column">
                                                            <small class="js-lists-values-date"><strong>19/02/2019</strong></small>
                                                            <small class="text-50">18 days</small>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href=""
                                                           class="text-50"><i class="material-icons">more_vert</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="pr-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_2">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_2"><span class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>

                                                    <td>

                                                        <div class="media flex-nowrap align-items-center"
                                                             style="white-space: nowrap;">
                                                            <div class="avatar avatar-sm mr-8pt">
                                                                <span class="avatar-title rounded bg-accent text-white">PM</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="d-flex flex-column">
                                                                    <small class="js-lists-values-project"><strong>Project Management App</strong></small>
                                                                    <small class="js-lists-values-location text-50">Github</small>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </td>

                                                    <td>

                                                        <div class="media flex-nowrap align-items-center"
                                                             style="white-space: nowrap;">
                                                            <div class="avatar avatar-32pt mr-8pt">

                                                                <span class="avatar-title rounded-circle">TP</span>

                                                            </div>
                                                            <div class="media-body">

                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex d-flex flex-column">
                                                                        <p class="mb-0"><strong class="js-lists-values-lead">Tony Parks</strong></p>
                                                                        <small class="js-lists-values-email text-50">iOS Development</small>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </td>

                                                    <td>
                                                        <div class="d-flex flex-column">
                                                            <small class="js-lists-values-date"><strong>18/02/2019</strong></small>
                                                            <small class="text-danger">Overdue</small>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href=""
                                                           class="text-50"><i class="material-icons">more_vert</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="pr-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_3">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_3"><span class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>

                                                    <td>

                                                        <div class="media flex-nowrap align-items-center"
                                                             style="white-space: nowrap;">
                                                            <div class="avatar avatar-sm mr-8pt">
                                                                <span class="avatar-title rounded bg-warning text-white">AD</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="d-flex flex-column">
                                                                    <small class="js-lists-values-project"><strong>Advertising Platform</strong></small>
                                                                    <small class="js-lists-values-location text-50">Facebook</small>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </td>

                                                    <td>

                                                        <div class="media flex-nowrap align-items-center"
                                                             style="white-space: nowrap;">
                                                            <div class="avatar avatar-32pt mr-8pt">

                                                                <img src="assets/images/people/110/guy-1.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle">

                                                            </div>
                                                            <div class="media-body">

                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex d-flex flex-column">
                                                                        <p class="mb-0"><strong class="js-lists-values-lead">Gilbert Barrett</strong></p>
                                                                        <small class="js-lists-values-email text-50">Marketing</small>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </td>

                                                    <td>
                                                        <div class="d-flex flex-column">
                                                            <small class="js-lists-values-date"><strong>17/02/2019</strong></small>
                                                            <small class="text-50">15 days</small>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href=""
                                                           class="text-50"><i class="material-icons">more_vert</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="pr-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_4">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_4"><span class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>

                                                    <td>

                                                        <div class="media flex-nowrap align-items-center"
                                                             style="white-space: nowrap;">
                                                            <div class="avatar avatar-sm mr-8pt">
                                                                <span class="avatar-title rounded bg-light text-black-100">FD</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="d-flex flex-column">
                                                                    <small class="js-lists-values-project"><strong>Frontend Development</strong></small>
                                                                    <small class="js-lists-values-location text-50">Trello</small>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </td>

                                                    <td>

                                                        <div class="media flex-nowrap align-items-center"
                                                             style="white-space: nowrap;">
                                                            <div class="avatar avatar-32pt mr-8pt">

                                                                <img src="assets/images/people/110/guy-2.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle">

                                                            </div>
                                                            <div class="media-body">

                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex d-flex flex-column">
                                                                        <p class="mb-0"><strong class="js-lists-values-lead">Ollie Wallace</strong></p>
                                                                        <small class="js-lists-values-email text-50">Design</small>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </td>

                                                    <td>
                                                        <div class="d-flex flex-column">
                                                            <small class="js-lists-values-date"><strong>16/02/2019</strong></small>
                                                            <small class="text-50">15 days</small>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href=""
                                                           class="text-50"><i class="material-icons">more_vert</i></a>
                                                    </td>
                                                </tr>

                                                <tr class="selected">

                                                    <td class="pr-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   checked=""
                                                                   id="customCheck1_5">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_5"><span class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>

                                                    <td>

                                                        <div class="media flex-nowrap align-items-center"
                                                             style="white-space: nowrap;">
                                                            <div class="avatar avatar-sm mr-8pt">
                                                                <span class="avatar-title rounded bg-light text-black-100">DU</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="d-flex flex-column">
                                                                    <small class="js-lists-values-project"><strong>Database Upgrade</strong></small>
                                                                    <small class="js-lists-values-location text-50">MySQL</small>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </td>

                                                    <td>

                                                        <div class="media flex-nowrap align-items-center"
                                                             style="white-space: nowrap;">
                                                            <div class="avatar avatar-32pt mr-8pt">

                                                                <img src="assets/images/people/110/guy-3.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle">

                                                            </div>
                                                            <div class="media-body">

                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex d-flex flex-column">
                                                                        <p class="mb-0"><strong class="js-lists-values-lead">Ricardo Bell</strong></p>
                                                                        <small class="js-lists-values-email text-50">Web Development</small>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </td>

                                                    <td>
                                                        <div class="d-flex flex-column">
                                                            <small class="js-lists-values-date"><strong>01/12/2018</strong></small>
                                                            <small class="text-50">1 day</small>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href=""
                                                           class="text-50"><i class="material-icons">more_vert</i></a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="card-footer p-8pt">

                                        <ul class="pagination justify-content-start pagination-xsm m-0">
                                            <li class="page-item disabled">
                                                <a class="page-link"
                                                   href="#"
                                                   aria-label="Previous">
                                                    <span aria-hidden="true"
                                                          class="material-icons">chevron_left</span>
                                                    <span>Prev</span>
                                                </a>
                                            </li>
                                            <li class="page-item dropdown">
                                                <a class="page-link dropdown-toggle"
                                                   data-toggle="dropdown"
                                                   href="#"
                                                   aria-label="Page">
                                                    <span>1</span>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href=""
                                                       class="dropdown-item active">1</a>
                                                    <a href=""
                                                       class="dropdown-item">2</a>
                                                    <a href=""
                                                       class="dropdown-item">3</a>
                                                    <a href=""
                                                       class="dropdown-item">4</a>
                                                    <a href=""
                                                       class="dropdown-item">5</a>
                                                </div>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link"
                                                   href="#"
                                                   aria-label="Next">
                                                    <span>Next</span>
                                                    <span aria-hidden="true"
                                                          class="material-icons">chevron_right</span>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                    <!-- <div class="card-body bordet-top text-right">
  15 <span class="text-50">of 1,430</span> <a href="#" class="text-50"><i class="material-icons ml-1">arrow_forward</i></a>
</div> -->

                                </div>

                            </div>
                            <div class="col-lg-4">

                                
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-group flex mr-8pt">

                                                        <div class="avatar avatar-xs"
                                                             data-toggle="tooltip"
                                                             data-placement="top"
                                                             title="Janell D.">
                                                            <a href=""><img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle"></a>
                                                        </div>

                                                        <div class="avatar avatar-xs"
                                                             data-toggle="tooltip"
                                                             data-placement="top"
                                                             title="Janell D.">
                                                            <a href=""><img src="assets/images/256_michael-dam-258165-unsplash.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle"></a>
                                                        </div>

                                                        <div class="avatar avatar-xs"
                                                             data-toggle="tooltip"
                                                             data-placement="top"
                                                             title="Janell D.">
                                                            <a href=""><img src="assets/images/256_luke-porter-261779-unsplash.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle"></a>
                                                        </div>

                                                    </div>
                                                    <a style="text-decoration: none;"
                                                       class="rounded-circle d-flex align-items-center border align-items-center text-50"
                                                       href=""><i class="material-icons icon-16pt m-1">add</i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                                                  
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
                                                   @endverbatim
@endsection
