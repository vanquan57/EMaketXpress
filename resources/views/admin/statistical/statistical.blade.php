@extends('admin.layouts.home')
@section('content')
    <div class="p-3 border">
        <form id="statisticalFormData"  action="" method="POST" >
            <input type="date" name="startDay" id="startDay" class="rounded-lg" required>
            <input type="date" name="endDay" id="endDay" class="rounded-lg" required>
            <button type="submit" class=" button blue">Thống Kê</button>
        </form>
    </div>
    <div class="px-3 mt-5">
        <canvas id="myChart"></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/build/assets/js/admin/statistical.js"></script>
@endsection
