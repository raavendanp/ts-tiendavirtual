@extends('layouts.master')
@section("title", "Show Product")
@section('content')
<script>

    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });

    // Acá guarda el index al cual corresponde la tab. Lo podés ver en el dev tool de chrome.
    var activeTab = localStorage.getItem('activeTab');

    // En la consola te va a mostrar la pestaña donde hiciste el último click y lo
    // guarda en "activeTab". Te dejo el console para que lo veas. Y cuando refresques
    // el browser, va a quedar activa la última donde hiciste el click.
    console.log(activeTab);

    if (activeTab) {
    $('a[href="' + activeTab + '"]').tab('show');
    }
</script>
<ul class="nav nav-tabs" id="myTab">
    <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
    <li><a href="#profile" data-toggle="tab">Profile</a></li>
    <li><a href="#messages" data-toggle="tab">Messages</a></li>
    <li><a href="#settings" data-toggle="tab">Settings</a></li>
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="home">Contenido home</div>
    <div class="tab-pane" id="profile">Contenido profile</div>
    <div class="tab-pane" id="messages">Contenido messages</div>
    <div class="tab-pane" id="settings">Contenido settings</div>
</div>
@endsection