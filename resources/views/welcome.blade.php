@extends('layouts.master')

@section('title')
Home
@endsection

@section('head')
<!-- Styles-->
<link href="/css/welcome.css" type="text/css" rel="stylesheet">
<!-- javascript-->
<script src="/js/tools.js" type="text/javascript"></script>

@endsection

@section('content')
<body>
  <div class='flex'>
    <img src="/images/home.jpg" />
    <h3>Welcome to Puma Lai Veterinary Clinic</h3>
      <p>
        Puma Lai Veterinary Hospital provides quality veterinary care for dogs, cats, pocket pets and exotics in Schuylkill Haven, Pennsylvania and the surrounding communities. Our modern and inviting hospital boasts superb veterinarians and caring support staff that are dedicated to our patients, clients, and community.
      </p>
      <table id='verifyTable'>
        <tr>
          <th>Verification Code:</th><td id='code'>{{$code}}</td><td><input id='codeInput' type='text' placeholder="Enter code here"/>&nbsp;&nbsp;<input type="submit" onClick='verify()' value='submit'/></td>
        </tr>
      </table>
    <a id='formLink' href='./register'>Please Fill out the Form for Appointment</a>
  </div>
</body>
@endsection
