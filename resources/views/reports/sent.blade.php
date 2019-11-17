<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->

        <!-- Styles -->
        <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
        <link href="{{ asset('css/report.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link ‎href="https://fonts.googleapis.com/css?family=europa:200600" rel="stylesheet">

  </head>
  <body>
@include('layouts.sidebar')
      <main class="wholeContent">

        <section class="header">
          <div class="rep">Reports</div>
          <button type="button" name="button" class="btn btn-primary">New Report</button>
        </section>
        <form class="searchReport" action="" method="post">
          <input type="text" class="form-control form-group" placeholder="Search reports">
          <button type="button" name="button"><img src={{ asset('css/icons/grsearch.png') }} alt=""></button>
        </form>
        <section class="message">
          <div class="">

          </div>
          <div class="title">

          </div>
          <div class="content">

          </div>
          <div class="table">

            <table class="table table-responsive table stripped">
              <thead>
                <th>we</th>
                <th>ee</th>
                <th>ee</th>
                <th>ee</th>
                <th>ee</th>
                <th>ee</th>
              </thead>
              <tbody>
                <td><input type="checkbox" /></td>
                <td>eeee</td>
                <td>wee</td>
                <td></td>
                <td>q</td>
                <td>eeee</td>
              </tbody>
            </table>

          </div>
        </section>
      </main>
  </body>
</html>