@extends('adminHeader')

@section('content')

          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">DashBoard</span>
              <p class="title-bar-description">
              <small>Your system Summary.</small>
            </p>
            </h1>
          </div>

           <div class="row gutter-xs">
            <div class="col-xs-6 col-md-3">
              <div class="card">
                <div class="card-values">
                  <div class="p-x">
                    <small>Products</small>
                    <h3 class="card-title fw-l">111,111</h3>
                  </div>
                </div>
                <div class="card-chart">
                  <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"backgroundColor": "rgba(217, 35, 15, 0.03)", "borderColor": "#d9230f", "data": [25250, 23370, 25568, 28961, 26762, 30072, 25135]}]' data-scales='{"yAxes": [{ "ticks": {"max": 32327}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="35"></canvas>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-3">
              <div class="card">
                <div class="card-values">
                  <div class="p-x">
                    <small>Customers</small>
                    <h3 class="card-title fw-l">222,222</h3>
                  </div>
                </div>
                <div class="card-chart">
                  <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"backgroundColor": "rgba(217, 35, 15, 0.03)", "borderColor": "#d9230f", "data": [8796, 11317, 8678, 9452, 8453, 11853, 9945]}]' data-scales='{"yAxes": [{ "ticks": {"max": 12742}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="35"></canvas>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-3">
              <div class="card">
                <div class="card-values">
                  <div class="p-x">
                    <small>Suppliers</small>
                    <h3 class="card-title fw-l">333,333</h3>
                  </div>
                </div>
                <div class="card-chart">
                  <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"backgroundColor": "rgba(217, 35, 15, 0.03)", "borderColor": "#d9230f", "data": [116196, 145160, 124419, 147004, 134740, 120846, 137225]}]' data-scales='{"yAxes": [{ "ticks": {"max": 158029}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="35"></canvas>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-3">
              <div class="card">
                <div class="card-values">
                  <div class="p-x">
                    <small>Orders</small>
                    <h3 class="card-title fw-l">444,444</h3>
                  </div>
                </div>
                <div class="card-chart">
                  <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"backgroundColor": "rgba(217, 35, 15, 0.03)", "borderColor": "#d9230f", "data": [13590442, 12362934, 13639564, 13055677, 12915203, 11009940, 11542408]}]' data-scales='{"yAxes": [{ "ticks": {"max": 14662531}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="35"></canvas>
                </div>
              </div>
            </div>
          </div>

          @stop