@extends('layout.without')
@section('content')
    <div class="container-fluid" style="padding-top: 48px; padding-left:16px; padding-right:16px;">
        <div class="container">
            <div class="row d-flex ">
                <div class="col-lg-4">
                     <div class="card card1 px-4 shadow-sm mb-3" >
                         <div class="form-container">
                            <div class="row filter-ui">
                                <h5><i class="fa fa-filter"></i>Filters</h5>
                            </div>
                            <div class="form" id="form-id">
                                <div class="mypreference row checkbox-div">
                                    <input class="checkbox"type="checkbox">
                                    <label for="">As per my preferences</label>
                                </div>
                            </div>
                            <div class="row" id="row-id">
                                <label for="" class="starting-from">Category</label>
                                <select class="custom-select">
                                    <option selected>Select category</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </div>
                            <div class="row" id="row-id">
                                <label for="" class="starting-from">Location</label>
                                <select class="custom-select">
                                    <option selected>Select category</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </div>
                            <div class="form" id="form-id">
                                <div class="mypreference row checkbox-div">
                                    <input class="checkbox"type="checkbox">
                                    <label for="">Work from home</label>
                                </div>
                            </div>
                            <div class="form" id="form-id">
                                <div class="mypreference row checkbox-div">
                                    <input class="checkbox"type="checkbox">
                                    <label for="">Part-time </label>
                                </div>
                            </div>
                            <div class="row" id="row-id">
                                <label for="" class="starting-from">Starting from(or after)</label>
                                <input type="date" id="start" name="trip-start"
                                                                           value="2022-04-29"
                                    min="2000-01-01" max="2018-12-31">
                            </div>
                            <div class="row" style="margin-bottom: 16px;>
                                <label for="" class="starting-from">Max. duration(months)</label>
                                <input type="date" id="start" name="trip-start"
                                                                           value="2022-04-29"
                                    min="2000-01-01" max="2018-12-31">
                            </div>
                            <div class="form" id="form-id">
                                <div class="mypreference row checkbox-div">
                                    <input class="checkbox"type="checkbox">
                                    <label for="">Internship for women</label>
                                </div>
                            </div>
                            <div class="form" id="form-id">
                                <div class="mypreference row checkbox-div" >
                                    <input class="checkbox"type="checkbox">
                                    <label for="">Internship with job offer</label>
                                </div>
                                <div >
                                    <a class="float-right clear-all" href="">Clear all</a>
                                </div>
                            </div>
                     </div>
                     </div>
                </div>
                <div class="col-lg-8">
                    <div class="card card2">
                       <div class="content-container">
                           <div class="content-header">
                              <div class="company">
                                  <div class="company-heading">
                                      <a id="content-heading-id"href="">Fundraising & Event Sponsorships</a>
                                  </div>
                                  <div class="company-sub-heading">
                                      <a href="">Omysha Foundation</a>
                                  </div>
                              </div>
                              <div class="content-logo">
                                  <img src="{{ asset('cover_photo/company_logo.png') }}"  alt="">
                              </div>
                           </div>
                           <div class="internship_details">
                               <div id="location_names">
                                <i class="fas fa-home"></i>
                                <span><a class="location_link" href="">Work From Home</a></span>
                               </div>
                               <div class="internship_other_details">
                                   <div class="other_detail_items_row">
                                      <div class="other_detail_items">
                                          <div class="item_heading">
                                            <i class="fas fa-play-circle"></i>
                                            <span>Start Date</span>
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
@endsection()
