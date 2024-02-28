@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
@endsection

@section('content')
<div id="current__date">
  <script>
    date = new Date();
    year = date.getFullYear();
    month = date.getMonth() + 1;
    day = date.getDate();
    document.getElementById("current__date").innerHTML = year + "-" + month + "-" + day;
  </script>
</div>
<div class="attendance__table">
  <table class="attendance__table--content">
    <tr>
      <th>名前</th>
      <th>勤務開始</th>
      <th>勤務終了</th>
      <th>休憩時間</th>
      <th>勤務時間</th>
    </tr>
    <tr>
      <td>テスト太郎</td>
      <td>10:00:00</td>
      <td>20:00:00</td>
      <td>10:00:00</td>
      <td>10:00:00</td>
    </tr>
    <tr>
      <td>テスト太郎</td>
      <td>10:00:00</td>
      <td>20:00:00</td>
      <td>10:00:00</td>
      <td>10:00:00</td>
    </tr>
    <tr>
      <td>テスト太郎</td>
      <td>10:00:00</td>
      <td>20:00:00</td>
      <td>10:00:00</td>
      <td>10:00:00</td>
    </tr>
    <tr>
      <td>テスト太郎</td>
      <td>10:00:00</td>
      <td>20:00:00</td>
      <td>10:00:00</td>
      <td>10:00:00</td>
    </tr>
    <tr>
      <td>テスト太郎</td>
      <td>10:00:00</td>
      <td>20:00:00</td>
      <td>10:00:00</td>
      <td>10:00:00</td>
    </tr>
  </table>
</div>
<nav class="page__navigation">
  <ul class="pagination">
    <li class="page-item">
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a  href="#">1</a></li>
    <li class="page-item"><a  href="#">2</a></li>
    <li class="page-item"><a href="#">3</a></li>
    <li class="page-item">
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
@endsection