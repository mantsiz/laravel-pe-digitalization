@extends('layouts.app')

@section('content')
<div class="full-background">
    <!-- Header -->
    <div class="header d-flex align-items-center">
        <img src="{{ asset('images/sugitylogo.png') }}" alt="Company Logo" class="company-logo">
        <h1 class="kpi-title">Gorika</h1>
    </div>

    <div class="container-fluid d-flex">


<style>
    .full-background {
        background: url('{{ asset("images/sugitybuilding.jpg") }}') no-repeat center center fixed;
        background-size: cover;
        height: 100vh;
        overflow: auto;
        padding: 20px;
    }
    .header {
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }
    .company-logo {
        width: 120px;
        margin-right: 20px;
    }
    .kpi-title {
        font-size: 40px;
        font-weight: bold;
        color: #006D77;
        flex-grow: 1;
        text-align: center;
    }
@endsection