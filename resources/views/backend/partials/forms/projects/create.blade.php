<div class="row">
    <div class="col-sm-12 col-md-8 col-lg-9 col-xl-9">
        <div class="card card-collapsable">
            <a class="card-header" href="#collapseCardExample" data-toggle="collapse" role="button"
               aria-expanded="true" aria-controls="collapseCardExample">
                {{ __('About Project') }}
            </a>
            <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                    @include('partials.alert')
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Project Name</label>
                            <input class="form-control" type="text" id="J_name" placeholder="{{ __('Project Name') }}"
                                   value="@if(!$project){{old('project_name')}}@else{{$project->project_name}}@endif" name="project_name" required autofocus>
                            <span class="small mt-1">Slug:</span> <span id="J_slug" class="border-0"></span>
                        </div>
                        <div class="col-md-6">
                            <label>Project Number / Contract Number</label>
                            <input class="form-control" type="text" placeholder="{{ __('JRA/281/2016') }}"
                                   value="@if(!$project){{old('project_number')}}@else{{$project->project_number}}@endif" name="project_number" required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label>Project Description</label>
                            <textarea class="form-control" id="summernote" name="project_desc" rows="3"
                                      required> @if(!$project){{old('project_desc')}}@else{{$project->project_desc}}@endif</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-4 card-collapsable">
            <a class="card-header" href="#collapseCardDates" data-toggle="collapse" role="button"
               aria-expanded="true" aria-controls="collapseCardDates">
                {{ __('More Details') }}
            </a>
            <div class="collapse show" id="collapseCardDates">

                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-6">
                            @include('backend.partials.forms.clients.create-card')
                        </div>
                        <div class="col-md-6">
                            <label>Project Value (ZAR)</label>
                            <input class="form-control" type="text" placeholder="{{ __('2 000 520') }}"
                                   value="@if(!$project){{old('project_value')}}@else{{$project->project_value}}@endif" name="project_value" required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            <label>Start Date</label>
                            <input class="form-control" type="date" placeholder="{{ __('Start date') }}"
                                   value="{{old('start_date')}}" name="start_date" required autofocus>
                        </div>

                        <div class="col-md-4">
                            <label>Completion Date</label>
                            <input class="form-control" type="date" placeholder="{{ __('Completion date') }}"
                                   value="{{old('end_date')}}" name="end_date" required autofocus>
                        </div>
                        <div class="col-md-4">
                            <label>Project status</label>
                            <select class="form-control" name="project_status" required autofocus>
                                <option value="">select option</option>
                                <option value="in progress">In progress</option>
                                <option value="on hold">On hold</option>
                                <option value="completed">Completed</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        @include('backend.partials.forms.seo.create-meta-desc-card')

    </div>
    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3">
        <div class="card card-collapsable">
            <a class="card-header" href="#collapseCardPublish" data-toggle="collapse" role="button"
               aria-expanded="true" aria-controls="collapseCardPublish">
                {{ __('Publish') }}
            </a>
            <div class="collapse show" id="collapseCardPublish">

                <div class="card-body">
                    <div class="form-group">
                        <label>Ready to publish ?</label>
                        <select class="form-control" name="is_published">
                            <option selected value="0">Draft</option>
                            @canany(['isAdmin', 'isManager'])
                                <option value="1">Publish</option>
                            @endcanany
                            @can('isUser')
                                <option value="2">Send for approval</option>
                            @endcan

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Publish date</label>
                        <input type="date" class="form-control" name="posted_at"/>
                    </div>
                    <button class="btn btn-block btn-success" type="submit">{{ __('Save') }}</button>
                </div>
            </div>
        </div>

        @include('backend.partials.forms.categories.create-card')
    </div>
</div>