@extends('layout.without')
@section('content')
    <div class="container-fluid" style="padding-top: 48px; padding-left:16px; padding-right:16px;">
        <div class="container">
            <div class="row d-flex ">
                <div class="col-lg-4">
                     <div class="card card1 shadow-sm">
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
                            </div>
                     </div>
                     </div>
                </div>
                <div class="col-lg-8">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure cupiditate quam amet, nemo voluptatem neque perspiciatis tempore nisi, quod ipsam aliquam quisquam sed eaque obcaecati laboriosam, placeat dicta voluptatum! Non.
                </div>

            </div>

        </div>
    </div>
@endsection()
