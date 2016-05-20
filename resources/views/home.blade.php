@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="dashboard">
              <div class="dashboard-team">
                <div class="dashboard-team-name">
                  <h3>Think Big</h3>
                </div>
                <div class="dashboard-user col-md-4">
                  <div class="panel panel-default">
                    <div class="dashboard-user-name panel-heading">
                      <h3 class="panel-title">{{ $first }}</h3>
                    </div>
                    <div class="dashboard-user-status panel-body">
                      <div class="dashboard-user-status-limit">
                        Think Big
                      </div>
                      <div class="dashboard-user-status-text">
                        IN
                      </div>
                      <div class="dashboard-user-status-time">
                        1 hr
                      </div>
                    </div>
                  </div>
                </div>
                <div class="dashboard-user col-md-4">
                  <div class="panel panel-default">
                    <div class="dashboard-user-name panel-heading">
                      <h3 class="panel-title">{{ $second }}</h3>
                    </div>
                    <div class="dashboard-user-status panel-body">
                      <div class="dashboard-user-status-limit">
                        Until lunch
                      </div>
                      <div class="dashboard-user-status-text">
                        WFH
                      </div>
                      <div class="dashboard-user-status-time">
                        4 min
                      </div>
                    </div>
                  </div>
                </div>
                <div class="dashboard-user col-md-4">
                  <div class="panel panel-default">
                    <div class="dashboard-user-name panel-heading">
                      <h3 class="panel-title">{{ $third }}</h3>
                    </div>
                    <div class="dashboard-user-status panel-body">
                      <div class="dashboard-user-status-limit">
                        Until 1pm
                      </div>
                      <div class="dashboard-user-status-text">
                        OOO
                      </div>
                      <div class="dashboard-user-status-time">
                        32 min
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="intent">
              <div class="intent-button col-md-4">
                <button class="btn btn-intent" type="submit">Lunch</button>
              </div>
              <div class="intent-button col-md-4">
                <button class="btn btn-intent" type="submit">2pm</button>
              </div>
              <div class="intent-button col-md-4">
                <button class="btn btn-intent" type="submit">All Day</button>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
