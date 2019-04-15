@extends('layouts.master')

@section('title')
Appointment Form
@endsection

@section('head')
<!-- Styles-->
<link href='/css/form.css' type='text/css' rel='stylesheet'>

@endsection

@section('content')
<body>
  <div class='flex-center'>
    <div id='formBody'>
      <form method="POST" action="/submit_form">
        {{ csrf_field() }}
        <table>
          <tr>
            <th>Species</th>
            <td>
              <input type="text" name="species" value="{{ old('species') }}"/>
              @if($errors->get('species'))
                <label class="error">
                    SPECIES IS REQUIRED!
                </label>
              @endif
            </td>
            <th>Age</th>
            <td>
              <input type="number" name="age" value="{{ old('age') }}"/>
              @if($errors->get('age'))
                <label class="error">
                    AGE IS REQUIRED AND MUST BE TWO DIGITS NUMBER!
                </label>
              @endif
            </td>
          </tr>
          <tr>
            <th>Female/Male</th>
            <td>
              <select name="gender">
                <option value="">Please Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
              @if($errors->get('gender'))
                <label class="error">
                    SELECT GENDER!
                </label>
              @endif
            </td>
            <th>Visited before? (Check if yes)</th>
            <td>
              <input type="checkbox" name="visited"/>
            </td>
          </tr>
        </table>

        @if($errors->get('symptom'))
          <textarea name="symptom" value="{{ old('symptom') }}" placeholder="Describe the symptom..."></textarea>
          <br/>
          <label class="error">
              SYMPTOM IS REQUIRED!
          </label>
        @else
          <textarea name="symptom">{{ old('symptom') }}</textarea>
        @endif
        <div align='right'>
          <input type='submit' value='submit'/>
        </div>

      </form>
    </div>
  </div>
</body>
@endsection
